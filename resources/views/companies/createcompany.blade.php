@extends('layouts.app')

@section('content')


<div class="card border-light mb-3 shadow-sm p-3  bg-white rounded">
    <h5><a href="/company" class="float-left icon button text-muted">
    <i class="building icon"></i>
    Companies List
    </a></h5>
    <hr>

    {{-- create company form --}}
    <form method="post" action="{{action('CompanyController@store')}}">
        {{-- /*this's function use it for security*/ --}}
        @csrf   
            <div class="form-group">
                <label for="exampleInputEmail1" class="text-capitalize">company name</label>
                <input name="company_name" type="text" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="" class="text-capitalize">since</label>
                <input name="since" class="form-control" required>
            </div>
            
            <div class="form-group pt-2">
                <label for="exampleInputEmail1" class="text-capitalize">number of employees of the company </label>
                <select name="number_of_employee">
                    <option value="">Select</option>
                    <option value="0-50">0-50</option>
                    <option value="50-100">50-100</option>
                    <option value="100-500">100-500</option>
                    <option value="500-1000">500-1000</option>                  
                </select>
            </div>


            <button href="" type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>

@endsection

