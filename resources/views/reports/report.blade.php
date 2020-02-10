@extends('layouts.app')

<style>
.max_length_description {
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
       <hr> 
       <h4 class="text-center">CHARTS</h4>
    </div>

    <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
      <hr>
      <h4 class="text-center">CHARTS</h4>

    </div>

    <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">

      <a href="/report/create" class="float-right ui teal labeled icon button">
        Create New Report
        <i class="add icon"></i>
      </a>
  
    </div>

 </div>
 <div class="col-7">
    <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
      <form method="get" action="/search" role="search">
        <div class="ui icon input d-flex justify-content-around">
              <input name="search" placeholder="Search..." type="search">
              <i class="circular search link icon"></i>
          </div>
      </form>
      <hr>
      <div class="row">
      {{-- @foreach ($report as $reports)
      <div class="col">
      <div class="card shadow ui raised link card pl-1 mt-2 ml-1" onclick="location.href='report/{{$reports->id}}'" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title">{{strtoupper($reports->title)}}</h5>
            @if($reports->created_at == $reports->updated_at)
            
              <small class="text-muted float-right">{{($reports->created_at->format('d M y : h'))}}</small>
            
            @else
  
              <small class="text-muted float-right" style="background:#ff075714;">{{($reports->created_at->format('d M y : h'))}}</small>
               
            @endif
          <h6 class="card-subtitle mb-2 text-muted">{{ucfirst($reports->user->name)}}</h6>
        <p class="card-text max_length_description">{{ucfirst($reports->description)}}</p>
        <hr>
        <a href="report/{{$reports->id}}" class="card-link">More    </a><i class="fas fa-chevron-right"></i>
          @if ($reports->status == 'in process')
            <div class="spinner-border spinner-border-sm text-warning float-right" role="status">
              <span class="sr-only">Loading...</span>
            </div>
          @elseif($reports->status == 'rejected')
            <div class="float-right">
              <i class="fas fa-times-circle text-danger"></i>
            </div>
          @else
            <div class="float-right">
              <i class="fas fa-check-circle text-success"></i>
            </div>
          @endif
          
        </div>
      </div>
    </div>
      @endforeach
    </div>
    <hr>
    <div class="m-1 align-self-center">
    <b>{{$report->links("pagination::bootstrap-4")}}</b>
    </div>
    </div>
</div>
</div> --}}

{{-- <hr>

<div class="row">
  <div class="col-8">
    <form method="get" action="/search" role="search">
      <div class="ui icon input">
          <input name="search" placeholder="Search..." type="search">
          <i class="circular search link icon"></i>
      </div>
    </form>
  </div>
  <div class="col-4">
    <a href="/report/create" class="float-right ui teal labeled icon button">
      Create New Report
      <i class="add icon"></i>
    </a>
  </div>
</div>
<div class="card border-light pb-4 shadow-sm pl-5 bg-white rounded" style="width: 50rem;">
<div class="row">

  @foreach ($report as $reports)
<div class="col">
  <div class="card shadow ui raised link card p-1 mt-3" onclick="location.href='report/{{$reports->id}}'" style="width: 20rem;">
      <div class="card-body">
          <h5 class="card-title">{{strtoupper($reports->title)}}</h5>
          @if($reports->created_at == $reports->updated_at)
          
            <small class="text-muted float-right">{{($reports->created_at->format('d M y : h'))}}</small>
          
          @else

            <small class="text-muted float-right" style="background:#ff075714;">{{($reports->created_at->format('d M y : h'))}}</small>
             
          @endif
        <h6 class="card-subtitle mb-2 text-muted">{{ucfirst($reports->user->name)}}</h6>
      <p class="card-text max_length_description">{{ucfirst($reports->description)}}</p>
      <hr>
      <a href="report/{{$reports->id}}" class="card-link">More    </a><i class="fas fa-chevron-right"></i>
        @if ($reports->status == 'in process')
          <div class="spinner-border spinner-border-sm text-warning float-right" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        @elseif($reports->status == 'rejected')
          <div class="float-right">
            <i class="fas fa-times-circle text-danger"></i>
          </div>
        @else
          <div class="float-right">
            <i class="fas fa-check-circle text-success"></i>
          </div>
        @endif
        
      </div>
    </div>
  </div>
  
@endforeach
</div>
</div>
<div class="mt-5">
 <b>{{$report->links("pagination::bootstrap-4")}}</b>
</div> --}}
@endsection

<script>

  $("div").click(function(){
   window.location=$(this).find("a").attr("href"); return false;
  });

</script>

  