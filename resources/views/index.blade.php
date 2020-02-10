@extends('layouts.indexlayout')
    @section('content')
        <div class="row container-index top-buffer-index">

          {{-- @foreach ($report as $reports) --}}
          
          <div class="col card-index">
            {{-- <a href="report/{{$reports->id}}"> --}}
            {{-- <h3 class="title-index text-uppercase">{{$reports->title}}</h3> --}}
            <div class="more">
              {{-- <div class="emptybar">
                {{$reports->description}}
              </div> --}}
              {{-- <div class="filledbar"></div> --}}
              {{-- <a class="text-muted spinner-grow" href="report/{{$reports->id}}"></a> --}}
              {{-- <i class="fas fa-chevron-right"></i> --}}
              {{-- <button type="button" class="btn btn-secondary">Light</button> --}}

            </div>
            {{-- <div class="circle">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle class="stroke" cx="60" cy="60" r="50"/>
            </svg>
            </div> --}}
          </a>
          </div> 
          {{-- @endforeach --}}
                  
          
        </div>
        <div class="pagination-index">
          {{$company->links()}}
         </div>
        @endsection