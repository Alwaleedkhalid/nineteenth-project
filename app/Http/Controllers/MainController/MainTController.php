<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\report;
use App\authentication;
use App\devaloper;
use App\biometric;
use App\descriptive;
use App\User;
use App\Auth;
use Image;
use DB;

class MainTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // if (!\Gate::allows('isWriter') && !\Gate::allows('isAdmin')) {
        //     abort(403, "sorry don't have permission");
        // }

        // $user =  user::orderby('id','desc')->get(); //get all user by descrese id {{ACS order for frist id}}..
        $report =  report::orderby('id','desc')->paginate(6); //get all report by descrese id with pagination ..

        return view('reports.report', compact('report'));
    
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        // dd($search);
        $report = report::orderBy('id', 'desc')
        ->where('title', 'like', '%'. $search .'%')
        ->paginate(6)->appends('search', request('search'));
        
        // {{ ->orWhereHas for search at another table }} ..
        // ->orWhereHas('table name', function($q) use ($search) {
        //     return $q->where('attrebte name', 'LIKE', '%' . $search . '%');
        // })

        return view('reports.report', compact('report'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user =  user::all(); //get all user ..

        // if($user->role == 'authentication'){
        //     foreach(){

        //     }
        // }
        // $user =  user::find(5); //get all user ..
        // $user->user_report_for_authentication_unit()->attach(1);
        // dd($user);

        $report =  report::all(); // get all report ..

        // $authentication = authentication::all();
        // $user->user_report_for_authentication_unit()->attach();
        // dd($user->role);

        
        $get_authentication_user = user::orderBy('id', 'asc')
        ->where('role', 'like', 'authentication')
        ->get(); // get authentication user only ..
        
        $get_biometric_user = user::orderBy('id', 'asc')
        ->where('role', 'like', 'biometric')
        ->get(); // get biometric user only ..
        
        $get_devaloper_user = user::orderBy('id', 'asc')
        ->where('role', 'like', 'devaloper')
        ->get(); // get devaloper user only ..
        
        $get_descriptive_user = user::orderBy('id', 'asc')
        ->where('role', 'like', 'descriptive')
        ->get(); // get descriptive user only ..
        
        // dd($get_authentication_user);

        return view ('reports.createreport' , compact('user','report',
        'get_authentication_user','get_biometric_user',
        'get_devaloper_user','get_descriptive_user'
        ));
        // how to save data from a multiple select in laravel

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // {{type of requests => there is more type for request}} ..
        // $request->all(); // Returns array with all elements.
        // $request->only(['key1', 'key2']); // Returns array with selected items
        // $request->except(['key1']); // Returns array with everything except key1.
        
        $data_from_report = $request->all(); // get all request from view 

        $get_authentication_user = $request->input('authentication_user'); //get authentication user from view
        $get_devaloper_user = $request->input('devaloper_user'); // get devaloper user from view
        $get_biometric_user = $request->input('biometric_user'); // get biometric user from view
        $get_descriptive_user = $request->input('descriptive_user'); //get descriptive user from view
        dd($data_from_report);

        
        $create_report = report::create($data_from_report); // create new report 
        
        $authentication = new authentication($data_from_report); // insert to authentication table            
        $devaloper = new devaloper($data_from_report); // insert to devaloper table
        $biometric = new biometric($data_from_report); // insert to biometrics table
        $descriptive = new descriptive($data_from_report); // insert to descriptive table

        if($request->hasFile('authentication_image')){ // insert image for authentication table ..
            $authentication_image = $request->file('authentication_image');
            // dd($authentication_image);
            $input_1 = time() . '.' . $authentication_image->getClientOriginalName(); 
            // getClientOriginalExtension();
            $destinationPath_1 = public_path('/uploads/authentication/'); 
            $authentication_image->move($destinationPath_1 , $input_1); // $authentication_image->move('uploads/authentication/', $filename_authentication);
        }
        
        if($request->hasFile('devaloper_image')){ // insert image for devaloper table ..
            $devaloper_image = $request->file('devaloper_image');
            $input_2 = time() . '.' . $devaloper_image->getClientOriginalName();
            // dd($input_2);
            $destinationPath_2 = public_path('/uploads/devaloper/'); 
            $devaloper_image->move($destinationPath_2 , $input_2); // $authentication_image->move('uploads/authentication/', $filename_authentication);
        }
        
        if($request->hasFile('biometric_image')){ // insert image for biometric table ..
            $biometric_image = $request->file('biometric_image');
            $input_3 = time() . '.' . $biometric_image->getClientOriginalName();
            $destinationPath_3 = public_path('/uploads/biometric/'); 
            $biometric_image->move($destinationPath_3 , $input_3); // $authentication_image->move('uploads/authentication/', $filename_authentication);
        }
        
        if($request->hasFile('descriptive_image')){ // insert image for descriptive table ..
            $descriptive_image = $request->file('descriptive_image');
            $input_4 = time() . '.' . $descriptive_image->getClientOriginalName();
            $destinationPath_4 = public_path('/uploads/descriptive/'); 
            $descriptive_image->move($destinationPath_4 , $input_4); // $authentication_image->move('uploads/authentication/', $filename_authentication);
        }

        $create_report->authentication()->save($authentication); // save & relation 
        $create_report->devaloper()->save($devaloper); // save & relation 
        $create_report->biometric()->save($biometric); // save & relation 
        $create_report->descriptive()->save($descriptive); // save & relation 
    
        //  {{attach users into units to pivot tables}}

        // should be last [id] of authentication table ..
        $users_authentication = authentication::findorfail($authentication->id);
        $users_authentication->user_authentication()->attach($get_authentication_user); // relation into authentication table

        // should be last [id] of devaloper table ..
        $users_devaloper = devaloper::findorfail($devaloper->id);
        $users_devaloper->user_devaloper()->attach($get_devaloper_user); // relation into devaloper table

        // should be last [id] of biometric table ..
        $users_biometric = biometric::findorfail($biometric->id);
        $users_biometric->user_biometric()->attach($get_biometric_user); // relation into biometric table

        // should be last [id] of descriptive table ..
        $users_descriptive = descriptive::findorfail($descriptive->id);
        $users_descriptive->user_descriptive()->attach($get_descriptive_user); // relation into descriptive table

        return redirect('report');


    }

    /**
     * Display the specified resource.
     *
     *   @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = report::findorfail($id); // find report by id ..

        $authentication =  authentication::findorfail($id); // find authentication table by id .. 
        // dd($authentication);
        $devaloper =  devaloper::findorfail($id); // find devaloper table by id ..
        $biometric =  biometric::findorfail($id); // find biometric table by id ..
        $descriptive =  descriptive::findorfail($id); // find descriptive table by id ..

        // $authentication->user_report_for_authentication_unit()->get();
        // use it at admin controller .. to show user report by id .. 
        $authentication_show = user::findorfail(3)->user_report_for_authentication_unit()->get();
        $devaloper_show = user::findorfail(10)->user_report_for_devaloper_unit()->get();
        $biometric_show = user::findorfail(6)->user_report_for_biometric_unit()->get();
        $descriptive_show = user::findorfail(8)->user_report_for_descriptive_unit()->get();

        return view ('reports.showreport', compact('report','authentication','devaloper',
        'biometric','descriptive',
        'authentication_show','devaloper_show',
        'biometric_show','descriptive_show'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $user = User::find($id);
        // $user->delete();
        // return redirect('admin-panel');
        
    }
}
