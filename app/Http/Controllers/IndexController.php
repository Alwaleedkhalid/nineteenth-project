<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
// use App\User;
use App\company;
use DB;


class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

    // $company = company::orderby('id','desc')->simplepaginate(10);
    return view('index');

    }
}
