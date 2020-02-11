@extends('layouts.app')
<style>
  
</style>
@section('content')

<div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
  <h5><a href="/employee/create" class="float-left icon button text-muted">
    <i class="add icon"></i>
   Add New Employee
  </a></h5>
  @if(count ($employee) > 0)
  <table class="table table-hover mt-3">
    {{-- <caption class="">قائمة الموظفين</caption> --}}
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-Mail</th>
        <th scope="col">Age</th>
        {{-- <th scope="col">Company</th> --}}
        <th scope="col" class="text-center"></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($employee as $key => $employees)
      <tr>
            
        <th scope="row">{{$key+1}}</th>
        <td>{{strtoupper($employees->employee_name)}}</td>
        <td>{{$employees->email}}</td>
        <td>{{strtoupper($employees->age)}}</td>
        {{-- <td>{{strtoupper($employees->employee_name)}}</td> --}}

        <td>

          <div class="row">
            
            <div class="col-3 clearfix">
            <a href="employee/{{$employees->id}}/edit" type="button" class="btn btn-primary btn-sm center-block font-weight-bold float-right"><i class="fas fa-user-edit"></i></a>
            </div>
            <div class="col-3">
              <form action="{{action('EmployeeController@destroy' , $employees->id)}}" method="post"> 
                  @csrf
                  @method('DELETE')
                <button class="btn btn-danger btn-sm font-weight-bold float-right" type="submit"><i class="fas fa-user-times"></i></button>
              </form>
            </div>
          </div>  

        </td>

      </tr>
      @endforeach
      
    </tbody>
  </table>
    
    @else
      <hr>
      <h1 class="text-muted text-center font-weight-bold text-capitalize">No Employee Add !</h1>
    @endif
  <hr>
  
  <b class="">{{$employee->links("pagination::bootstrap-4")}}</b>

</div>

@endsection
