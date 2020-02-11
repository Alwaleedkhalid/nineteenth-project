@extends('layouts.app')

@section('content')

<div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
        <h5><a href="/employee" class="float-left icon button text-muted">
        <i class="users icon"></i>
        Employees List
        </a></h5>
        <hr>
        {{-- create employee form --}}
        <form method="post" action="{{action('EmployeeController@store')}}">
            {{-- /*this's function use it for security*/ --}}
            @csrf   
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-capitalize">employee name</label>
                    <input name="employee_name" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-capitalize">E-Mail</label>
                    <input name="email" type="email" class="form-control" placeholder="example@example.com" required>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-capitalize">employee Age (15 To 70)</label>
                    <input name="age" type="number" class="form-control" required>
                </div>

                <button href="" type="submit" class="btn btn-primary">Submit</button>
            
        </form>
</div>
@endsection

