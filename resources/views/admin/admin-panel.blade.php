@extends('layouts.app')
    @section('content')
        
          {{-- <p>https://3alam.pro/3mmarg97/articles/laravel-massassignmentexception</p> --}}
        
        <div class="card border-light mb-3 shadow-sm p-3 mb-5 bg-white rounded">
          
        <table class="table table-hover mt-5">
          {{-- <caption class="">قائمة الموظفين</caption> --}}
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">E-Mail</th>
              <th scope="col">Unit</th>
              <th scope="col">Role</th>
              <th scope="col" class="text-center"></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($user as $key => $users)
            <tr>
                  
              <th scope="row">{{$key+1}}</th>
              <td>{{strtoupper($users->name)}}</td>
              <td>{{$users->email}}</td>
              <td>{{strtoupper($users->unit_id)}}</td>
              <td>{{strtoupper($users->role)}}</td>

              <td>

                <div class="row">
                  <div class="col-6">
                    <form action="{{ action('AdminController@show' , $users->id) }}" method="GET">
                    <a   href="admin-panel/{{$users->id}}" type="button" class="btn btn-secondary btn-sm font-weight-bold ">Report <i class="far fa-folder-open"></i></a>
                    </form>
                  </div>
                  <div class="col-3 clearfix">
                    <button type="button" class="btn btn-primary btn-sm center-block font-weight-bold float-right"><i class="fas fa-user-edit"></i></button>
                  </div>
                  <div class="col-3">
                    <form action="{{action('AdminController@destroy' , $users->id)}}" method="post"> 
                        @csrf
                        @method('DELETE')
                      <button class="btn btn-danger btn-sm font-weight-bold float-right" type="submit"><i class="fas fa-user-times"></i></button>
                    </form>
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
      {{-- <form action="{{ action('AdminController@usersreports' , $users->id) }}" method="GET">
        @foreach ($get_report_user as $user_report) 
          <a href="admin-panel/{{$user_report->id}}">{{$user_report->name}}</a>
        @endforeach
      </form> --}}
@endsection


  