@extends('layouts.app')
    @section('content')
    <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
        <h5><a href="/company" class="float-left icon button text-muted">
        <i class="chevron left icon"></i>
        Companies List
        <i class="building icon"></i>
        </a></h5>
        <hr>

        <div class="row mt-3">

            <div class="col-6 ">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-capitalize" id="inputGroup-sizing-default">Company name</span>
                    </div>
                    <p  class="form-control" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-default">{{$company->company_name}}</p>
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-capitalize" id="inputGroup-sizing-default text-capitalize">since</span>
                    </div>
                    <p  class="form-control" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-default">{{$company->since}}</p>
                  </div>
                                    
            </div>
            <div class="col-6">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-capitalize" id="inputGroup-sizing-default text-capitalize">number of emplyee</span>
                    </div>
                    <p  class="form-control" aria-label="Sizing example input"  aria-describedby="inputGroup-sizing-default">{{$company->number_of_employee}}</p>
                  </div>
                
  
            </div>
            <div class="col">
                <hr>
                
                <form action="{{action('CompanyController@destroy' , $company->id)}}" method="post"> 
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-lg font-weight-bold float-right" type="submit">Delete <i class="times icon"></i></button>
                </form>
                <a href="/company/{{$company->id}}/edit" class="btn btn-primary btn-lg font-weight-bold float-left"><i class="edit outline icon"></i>Eidt</a>
            </div>
        </div>
        
</div>

        {{-- {{$company}} --}}
       
       
    @endsection