<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;
class EmployeeController extends Controller
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

        $employee =  employee::orderby('id','desc')->paginate(10); //get all employee by descrese id with pagination 10 ..

        return view('employees.employee', compact('employee'));
    
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
        $employee =  employee::all(); //get all employee ..

        return view ('employees.createemployee' , compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data_from_employee = $request->all();
        
        employee::create($data_from_employee);

        return redirect('employee');

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
        $employee =  employee::find($id);

        return view ('employees.editemployee', compact('employee' ,'id'));
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
        $this->validate($request, [
            'employee_name' => 'required|regex:/^[a-zA-Z]+$/u|max:255',
            'age' => 'required|numeric|min:15|max:70',
        ]);

        $employee =  employee::findOrFail($id);
        
        $employee->employee_name = $request->get('employee_name');
        $employee->age = $request->get('age');

        $employee->save();

        return redirect('employee');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::find($id);
        $employee->delete();
        return redirect('employee');
    }

}
