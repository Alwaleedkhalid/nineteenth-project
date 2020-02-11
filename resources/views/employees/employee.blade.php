@extends('layouts.app')
<style>
  
</style>
@section('content')

<div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
  <a href="/employee/create" class="float-left  ui teal labeled icon button">
    <i class="add icon"></i>
   New Employee
  </a> 
  <table class="table table-hover mt-5">
    {{-- <caption class="">قائمة الموظفين</caption> --}}
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Age</th>
        <th scope="col">Company</th>
        <th scope="col" class="text-center"></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($employee as $key => $employees)
      <tr>
            
        <th scope="row">{{$key+1}}</th>
        <td>{{strtoupper($employees->employee_name)}}</td>
        <td>{{$employees->employee_name}}</td>
        <td>{{strtoupper($employees->employee_name)}}</td>
        <td>{{strtoupper($employees->employee_name)}}</td>

        <td>

          <div class="row">
            
            <div class="col-3 clearfix">
              <button type="button" class="btn btn-primary btn-sm center-block font-weight-bold float-right"><i class="fas fa-user-edit"></i></button>
            </div>
            <div class="col-3">
              {{-- <form action="{{action('AdminController@destroy' , $users->id)}}" method="post">  --}}
                  {{-- @csrf --}}
                  {{-- @method('DELETE') --}}
                <button class="btn btn-danger btn-sm font-weight-bold float-right" type="submit"><i class="fas fa-user-times"></i></button>
              {{-- </form> --}}
            </div>
          </div>  

        </td>

      </tr>
      @endforeach

     
      
      {{-- <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>@twitter</td>
      </tr> --}}
    </tbody>
  </table>
</div>

@endsection
