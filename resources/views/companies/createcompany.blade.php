@extends('layouts.app')

@section('content')


<div class="card border-light mb-3 shadow-sm p-3  bg-white rounded">
    <h5><a href="/company" class="float-left icon button text-muted">
    <i class="chevron left icon"></i>
    Companies List
    <i class="building icon"></i>
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
                <label for="" class="text-capitalize">since (1800 To 2020)</label>
                <input name="since" type="number" class="form-control" required>
            </div>
            
            <div class="form-group pt-2">
                <label for="exampleInputEmail1" class="text-capitalize">number of employees of the company </label>
                <select name="number_of_employee">
                    <option value="" disabled selected>Select</option>
                    <option value="0-50">0-50</option>
                    <option value="50-100">50-100</option>
                    <option value="100-500">100-500</option>
                    <option value="500-1000">500-1000</option>                  
                </select>
            </div>

            <hr>
            <button href="" type="submit" class="btn btn-success btn-lg font-weight-bold float-left mt-2"><i class="paper plane outline icon"></i>Submit</button>
        
    </form>
</div>

@endsection

