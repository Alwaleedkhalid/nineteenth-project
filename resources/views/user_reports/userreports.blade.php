@extends('layouts.app')

@section('content')

@foreach ($get_report_user as $user_report) 
<a href="/user-reports/{{$user_report->id}}">{{$user_report->name}}</a>
@endforeach


@endsection
