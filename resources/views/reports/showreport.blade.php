@extends('layouts.app')

@section('content')

{{-- report section --}}
<div class="card border-light mb-3 shadow-sm p-3  bg-white rounded">
<div class="card border-light shadow-sm  bg-white rounded">
    <div class="card-body">
      <h3 class="text-center font-weight-bold text-uppercase">
          {{$report->title}}
      </h3>
      {{-- {{$report->user->name}} --}}
      </div>
      
    </div>
    <hr>
<div class="row mt-2">
    <div class="col-sm-10">
      <div class="card border-light shadow-sm  bg-white rounded">
        <div class="card-body">
          <h5 class="card-title text-center font-weight-bold text-uppercase">description</h5>
          <hr>
          <p class="card-text scrollspy-example" data-spy="scroll">{{$report->description}}</p>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
      <div class="card border-light shadow-sm  bg-white rounded">
        <div class="card-body">
          <h5 class="card-title text-center font-weight-bold text-uppercase">UNITS</h5>
          <hr>
          <p class="text-center card-text text-uppercase font-weight-bolder text-left">authentication</p>
          <p class="text-center card-text text-uppercase font-weight-bolder text-left">biometric</p>
          <p class="text-center card-text text-uppercase font-weight-bolder text-left">descriptive</p>
          <p class="text-center card-text text-uppercase font-weight-bolder text-left">devaloper</p>
         </div>
      </div>
    </div>
  </div>
  </div>

  {{-- units section --}}
  <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
    <div class="card border-light shadow-sm  bg-white rounded">
        <div class="card-body">
          <h3 class="text-center font-weight-bold text-uppercase">UNITS</h3>
        </div> 
        </div>
    <div class="row mt-4">
      <div class="col-sm-6">
        @canany(['isAuthenticatio' , 'isManager'])
            {{-- authentication units --}}
          <div class="card border-light shadow-sm  bg-white rounded">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold text-uppercase">authentication</h5>
              <hr>
              <p class="card-text scrollspy-example" data-spy="scroll">{{$report->authentication->authentication_text}}</p>
            </div>
          </div>
          <hr>
          @endcanany
    
          {{-- descriptive units --}}
          <div class="card border-light shadow-sm  bg-white rounded mt-4">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold text-uppercase">descriptive</h5>
              <hr>
              <p class="card-text scrollspy-example" data-spy="scroll">{{$report->descriptive->descriptive_text}}</p>
            </div>
          </div>
        </div>
        

        <div class="col-sm-6">
          <div class="card border-light shadow-sm  bg-white rounded">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold text-uppercase">biometric</h5>
              <hr>
            {{-- biometric units --}}
              <p class="card-text scrollspy-example" data-spy="scroll">{{$report->biometric->biometric_text}}</p>
             </div>
          </div>
          <hr>
          <div class="card border-light shadow-sm  bg-white rounded mt-4">
            <div class="card-body">
              <h5 class="card-title text-center font-weight-bold text-uppercase">devaloper</h5>
              <hr>
            {{-- devaloper units --}}
              <p class="card-text scrollspy-example" data-spy="scroll">{{$report->devaloper->devalopers_text}}</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    
  <hr>
  {{-- <div class="card border-light shadow-sm  bg-white rounded">
        <div class="card-body">
          <h3 class="text-center font-weight-bold text-uppercase">
              {{$report->title}}
          </h3>
          <hr>
            <div class="col-10 card shadow ui raised px-2">
                <h4 class="text-center font-weight-bold text-uppercase m-1">description</h4> 
                <hr>
            </div>

            <div class="col-2 card shadow ui raised px-2">
                <h4 class="text-center font-weight-bold text-uppercase m-1">units</h4>
                <hr>
                <p class="text-center">auth</p>
                <p class="text-center">desc</p>
                <p class="text-center">bio</p>
                <p class="text-center">dev</p>
            </div>
            
          </div>
          
        </div>
        
      </div>    --}}
 {{-- <p>report title :{{$report->title}}</p>
<hr>
<p>authentication relation [authentication_text] : {{$report->authentication->authentication_text}}</p>
<p>devaloper relation [devaloper_text] : {{$report->devaloper->devalopers_text}}</p>
<p>biometric relation [biometric_text] : {{$report->biometric->biometric_text}}</p>
<p>descriptive relation [descriptive_text] : {{$report->descriptive->descriptive_text}}</p>
<hr>
<p>get name of authentication users with current report id</p>
{{$authentication->user_authentication}}
<hr>
<p>get name of devaloper users with current report id</p>
{{$devaloper->user_devaloper}}
<hr>
<p>get name of biometric users with current report id</p>
{{$biometric->user_biometric}}
<hr>
<p>get name of descriptive users with current report id</p> 
{{$descriptive->user_descriptive}} --}}

{{-- <hr>
<p>test</p>

    @foreach($authentication_show as $authentication)
        <a href="/report/{{$authentication->report_id}}">
        sss
        </a> 
        {{$authentication->pivot->user_id}}   
    @endforeach

    <hr>
    <p>authentication user</p>
    {{$authentication_show}}
    <hr>
    <p>devaloper user</p>
    {{$devaloper_show}}
    <hr>
    <p>biometric user</p>
    {{$biometric_show}}
    <hr>
    <p>descriptive user</p>
    {{$descriptive_show}} 
    <hr>  --}}

@endsection
