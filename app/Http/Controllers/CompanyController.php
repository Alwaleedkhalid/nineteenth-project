<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;


class CompanyController extends Controller
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
        if (!\Gate::allows('isAdmin')) {
            abort(403, "sorry don't have permission");
        }

        $company =  company::orderby('id','desc')->paginate(10); //get all company by descrese id with pagination 10 ..

        return view('companies.company', compact('company'));
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $company =  company::all(); //get all company ..

        return view ('companies.createcompany' , compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'company_name' => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/u|max:255',
            'since' => 'required|numeric|min:1800|max:2020',
            'number_of_employee' => 'required'
        ]);

        $data_from_company = $request->all();
        //dd(data_from_company);
        company::create($data_from_company);

        return redirect('company');


    }

    /**
     * Display the specified resource.
     *
     *   @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company =  company::find($id);
        // dd($company);
        return view ('companies.showcompany', compact('company'));
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
        //
    }
}
