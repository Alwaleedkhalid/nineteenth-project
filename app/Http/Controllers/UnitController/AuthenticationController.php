<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
//MainTable
use App\report;
//Units-->Authentication unit
use App\authentication;

use DB;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (!\Gate::allows('isWriter') && !\Gate::allows('isAdmin')) {
        //     abort(403, "sorry don't have permission");
        // }
        // $user =  user::orderby('id','desc')->get();
        // $report =  report::orderby('id','desc')->get();


        // return view('reports.report', compact('user','report'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $data_from_report = $request->all();

        // $create_report = authentication::create($data_from_report);
        
        // $create_report->user()->save();

        // return redirect('report');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
