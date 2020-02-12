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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!\Gate::allows('isAdmin')) {
            abort(403, "sorry don't have permission");
        }

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
        

        $this->validate($request,[
            'employee_name' => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/u|max:255', // can put speces for name ..
            'email' => 'required|unique:employees,email', // email is unique = no dublicated !
            'age' => 'required|numeric|min:15|max:70'
        ]);

        $data_from_employee = $request->all(); // get all employee request ..

        employee::create($data_from_employee); // update emmployee request ..

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
        if (!\Gate::allows('isAdmin')) {
            abort(403, "sorry don't have permission");
        }

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
            'employee_name' => 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/u|max:255',
            // 'email' => 'required',
            'age' => 'numeric|min:15|max:70'
        ]);

        $employee =  employee::findOrFail($id);
        
        $data_from_employee = $request->all(); // get all employee request ..
        // dd($data_from_employee);
        $employee->update($data_from_employee); // update emmployee request ..

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
        $employee->delete();  //delete employee by id
        return redirect('employee');
    }

}
