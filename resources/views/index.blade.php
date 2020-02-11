@extends('layouts.indexlayout')
    @section('content')
        <div class="row container-index top-buffer-index">

          
          <div class="col card-index">
            {{-- <h3 class="title-index text-uppercase">Company</h3> --}}
            <div class="more">
              <a href="company"><i class="building icon icon-position massive"></i></a>
            </div>
          </div> 
                  
          <div class="col card-index">
            {{-- <h3 class="title-index text-uppercase">Empolyee</h3> --}}
            <div class="more">
              <a href="/employee"><i class="users icon icon-position massive"></i></a>
            </div>
          </div> 
                  
          
        </div>
       
       
       
        @endsection