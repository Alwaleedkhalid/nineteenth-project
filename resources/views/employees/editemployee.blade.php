@extends('layouts.app')
    @section('content')

    <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
        <h5><a href="/employee/create" class="float-left icon button text-muted">
          <i class="add icon"></i>
         Add New Employee
        </a></h5>
        <hr>
        <form role="" method="post" action="{{action('EmployeeController@update', $id)}}">  
            @method('PUT')
            {{-- /*this's function use it for security*/ --}}
            @csrf
            <div>
                <label for="exampleInputEmail1">Update Employee Name</label>
                <input name="employee_name" type="text" value="{{$employee->employee_name}}"  class="form-control">
            </div>

            <div class="pt-4">
                <label for="exampleInputEmail1" class="text-capitalize">Update Employee E-Mail</label>
                <input name="email" type="email" class="form-control" value="{{$employee->email}}">
            </div>


            <div class="pt-4">
                <label for="exampleInputEmail1">Update Employee Age</label>
                <input name="age" type="number" value="{{$employee->age}}"  class="form-control">
            </div>
                <hr>
                <button href="" type="submit" class="btn btn-success btn-lg font-weight-bold float-left mt-2"><i class="paper plane outline icon"></i>Edit</button>
            </div>
         </form>  

      </div>
      
        {{-- {{$employee}} --}}
       
       
    @endsection