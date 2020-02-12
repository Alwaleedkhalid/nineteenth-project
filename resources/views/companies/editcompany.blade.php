@extends('layouts.app')
    @section('content')

    <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
        <h5><a href="/company/create" class="float-left icon button text-muted">
          <i class="add icon"></i>
         Add New Company
        </a></h5>
        <hr>

        <form role="" method="post" action="{{action('CompanyController@update', $id)}}">  
            @method('PUT')

            @csrf
            <div>
                <label for="exampleInputEmail1">Update Company Name</label>
                <input name="company_name" type="text" value="{{$company->company_name}}"  class="form-control">
            </div>

            <div class="pt-4">
                <label for="exampleInputEmail1" class="text-capitalize">Update Since</label>
                <input name="since" type="number" class="form-control" value="{{$company->since}}">
            </div>


            <div class="pt-4">
                <label for="exampleInputEmail1">Update number of employee</label>
                <label for="exampleInputEmail1" class="text-capitalize">number of employees of the company </label>
                <select name="number_of_employee">

                    <option value="">Select</option>
                    <option value="0-50" {{ $company->number_of_employee == "0-50" ? 'selected' : '' }}>0-50</option>
                    <option value="50-100" {{ $company->number_of_employee == "50-100" ? 'selected' : '' }}>50-100</option>
                    <option value="100-500" {{ $company->number_of_employee == "100-500" ? 'selected' : '' }}>100-500</option>
                    <option value="500-1000" {{ $company->number_of_employee == "500-1000" ? 'selected' : '' }}>500-1000</option>
                 
                </select>
            </div>
                <hr>
                <button href="" type="submit" class="btn btn-success btn-lg font-weight-bold float-left mt-2"><i class="paper plane outline icon"></i>Eidt</button>
            </div>
         </form>  

      </div>
      
        {{-- {{$employee}} --}}
       
       
    @endsection