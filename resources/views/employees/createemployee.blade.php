@extends('layouts.app')

@section('content')

{{-- employee form --}}
<form method="post" action="{{action('EmployeeController@store')}}">
    {{-- /*this's function use it for security*/ --}}
       @csrf   
           <div class="form-group">
             <label for="exampleInputEmail1">employee name</label>
             <input name="employee_name" type="text" class="form-control" required>
           </div>

           <div class="form-group">
             <label for="exampleInputEmail1">employee Age</label>
             <input name="age" type="number" class="form-control" required>
           </div>

        <button href="" type="submit" class="btn btn-primary">Submit</button>
    
</form>

@endsection

