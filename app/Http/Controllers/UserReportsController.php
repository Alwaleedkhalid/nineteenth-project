<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\report;
use DB;

class UserReportsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $user =  user::orderby('id','desc')->get();
        $get_report_user = User::whereIn('role', array('MANAGER', 'EMPLOYEE'))->get();
        
        return view('user_reports.userreports', compact('user','get_report_user'));
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

        $report =  report::orderby('id','desc')->get();


        return view ('user_reports.showuserreport', compact('user','report'));

    }

}
