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

        return view('reports.report', compact('company'));
    
    }

    public function search(Request $request)
    {
        // $search = $request->get('search');
        // // dd($search);
        // $report = report::orderBy('id', 'desc')
        // ->where('title', 'like', '%'. $search .'%')
        // ->paginate(6)->appends('search', request('search'));
        
        // {{ ->orWhereHas for search at another table }} ..
        // ->orWhereHas('table name', function($q) use ($search) {
        //     return $q->where('attrebte name', 'LIKE', '%' . $search . '%');
        // })

        return view('', compact(''));

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



    }

    /**
     * Display the specified resource.
     *
     *   @param  int  $id
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
