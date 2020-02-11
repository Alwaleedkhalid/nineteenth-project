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
                <input name="employee_name" type="text" placeholder="{{$employee->employee_name}}"  class="form-control" required>
            </div>

            <div class="pt-4">
                <label for="exampleInputEmail1">Update Employee Age</label>
                <input name="age" type="number" placeholder="{{$employee->age}}"  class="form-control" required>
            </div>
                
                <button href="" type="submit" class="btn btn-primary mt-4">edit</button>
            </div>
         </form>  

      </div>
      
        {{-- {{$employee}} --}}
       
       
    @endsection