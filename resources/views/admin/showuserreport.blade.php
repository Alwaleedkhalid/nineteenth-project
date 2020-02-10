@extends('layouts.app')

@section('content')

    <div class="mt-5">
       <p class="text-center"> {{$user->name}} - <b>{{$report->total()}}</b> </p>
    </div>
<hr>
<div class="row">
    @foreach ($user->report as $i => $user_reports)
    <div class="col">
        <div class="card shadow ui raised link card p-1 mt-3" onclick="location.href='/report/{{$user_reports->id}}'" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title">{{strtoupper($user_reports->title)}}</h5>
                @if($user_reports->created_at == $user_reports->updated_at)
                
                <small class="text-muted float-right">{{($user_reports->created_at->format('d M y : h'))}}</small>
                
                @else
    
                <small class="text-muted float-right" style="background:#ff075714;">{{($user_reports->created_at->format('d M y : h'))}}</small>
                    
                @endif
            {{-- <h6 class="card-subtitle mb-2 text-muted">{{ucfirst($user_reports->name)}}</h6> --}}
            <p class="card-text max_length_description">{{ucfirst($user_reports->description)}}</p>
            <hr>
            <a href="/report/{{$user_reports->id}}" class="card-link">More    </a><i class="fas fa-chevron-right"></i>
            @if ($user_reports->status == 'in process')
                <div class="spinner-border spinner-border-sm text-warning float-right" role="status">
                <span class="sr-only">Loading...</span>
                </div>
            @elseif($user_reports->status == 'rejected')
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
    
    {{$pagination->links()}}
    @endsection
    
<script>

    $("div").click(function(){
    window.location=$(this).find("a").attr("href"); return false;
    });

</script>