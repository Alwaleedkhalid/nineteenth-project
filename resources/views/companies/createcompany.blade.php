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

            <button href="" type="submit" class="btn btn-primary">Submit</button>
        
    </form>
</div>

@endsection

