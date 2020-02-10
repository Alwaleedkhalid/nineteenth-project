<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\report;
use DB;

class AdminController extends Controller
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

        $user =  user::orderby('id','desc')->get();
        $get_report_user = User::whereIn('role', array('MANAGER', 'EMPLOYEE'))->get();
        
        return view('admin.admin-panel', compact('user','get_report_user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function usersreports($id)
    {
        $user = report::findorfail($id);
        
        return view ('admin.showuserreport', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data_from_user = $request->all();
        
        user::create($data_from_user);

        return redirect('/register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = user::findorfail($id);
        $report =  report::orderby('id','desc')->paginate();

        $collect = collect($report);

        $pagination = user::orderBy('id', 'DESC')
                    ->whereIn('id', $collect) 
                    ->paginate(9);


        return view ('admin.showuserreport', compact('user','pagination','report'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user =  user::find($id);
        return view ('edit', compact('user','id'));
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
        $user = User::find($id);
        $user->delete();
        return redirect('admin-panel');
    }
}
