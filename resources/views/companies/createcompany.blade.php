@extends('layouts.app')

@section('content')

{{-- report form --}}
<form method="post" action="{{action('CompanyController@store')}}">
    {{-- /*this's function use it for security*/ --}}
       @csrf   
           <div class="form-group">
             <label for="exampleInputEmail1">company name</label>
             <input name="company_name" type="text" class="form-control" required>
           </div>

        <button href="" type="submit" class="btn btn-primary">Submit</button>
    
</form>

@endsection

