@extends('layouts.app')
@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/report" class="card shadow ui raised link card btn btn-outline-dark btn-lg">Report</a>
                    <a href="/report/create" class="card shadow ui raised link card btn btn-outline-dark btn-lg">Create New Report</a>
                    <a href="/admin-panel" class="card shadow ui raised link card btn btn-outline-dark btn-lg">Employee List</a>
                    <a href="/user-reports" class="card shadow ui raised link card btn btn-outline-dark btn-lg">Employee reports</a>
                </div>
                
            </div>
           
        </div>
    </div>
</div>
  
@endsection
