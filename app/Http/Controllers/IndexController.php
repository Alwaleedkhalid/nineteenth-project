<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\report;
use DB;


class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

    $report = report::orderby('id','desc')->simplepaginate(3);
    return view('index' , compact('report'));

    }
}
