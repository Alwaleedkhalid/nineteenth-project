@extends('layouts.app')

<style>
.max_length_company_name {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 200px;
}
</style>

@section('content')

<div class="row">

 <div class="col-5">

    <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">

      <a href="/company/create" class="float-right  float-right icon button ui grey button">
        <i class="add icon"></i>
        Add New Company
      </a>
  
    </div>

 </div>

 <div class="col-7">
    <div class="card border-light mb-3 shadow-sm p-4  bg-white rounded">
      @if(count ($company) > 0)
      <h1 class="text-muted text-center font-weight-bold text-capitalize">company List</h1>
      <hr>
      <div class="row">
        @foreach ($company as $companies)
        <div class="col">
          <div class="card shadow ui raised link card p-1 mt-3" onclick="location.href='company/{{$companies->id}}'" style="width: 20rem;">
              <div class="card-body">
                  <h5 class="card-title max_length_company_name">{{strtoupper($companies->company_name)}}</h5>
                  
                {{-- <h6 class="card-subtitle mb-2 text-muted">{{ucfirst($companies->user->name)}}</h6>
                <p class="card-text max_length_description">{{ucfirst($companies->description)}}</p> --}}
              <hr>
              @if($companies->created_at == $companies->updated_at)
                  
                    <small class="text-muted float-right">{{($companies->created_at->format('d M y : h'))}}</small>
                  
                  @else
        
                    <small class="text-success float-right">{{($companies->updated_at->format('d M y : h'))}}</small>
                     
                  @endif
              <a href="company/{{$companies->id}}" class="card-link">More    </a><i class="fas fa-chevron-right"></i>
                
              </div>
            </div>
          </div>
          
        @endforeach
    </div>
    <hr>
      @else
          <h1 class="text-center text-muted font-weight-bold text-capitalize"> No Company Add !</h1>
      @endif

      <p class="text-center">{{$company->links()}}</p>
  </div>
</div>
@endsection

<script>

  $("div").click(function(){
   window.location=$(this).find("a").attr("href"); return false;
  });

</script>

  