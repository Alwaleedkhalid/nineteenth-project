@extends('layouts.app')

@section('content')

{{-- report form --}}
<form method="post" action="{{action('MainTController@store' , ['user_id' => Auth::user()->id])}}" enctype="multipart/form-data">
    {{-- /*this's function use it for security*/ --}}
       @csrf   
           <div class="form-group">
             <label for="exampleInputEmail1">title</label>
             <input name="title" type="text" class="form-control" required>
           </div>

           <div class="form-group">
             <label for="exampleInputPassword1">description</label>
             <input name="description" type="text" class="form-control" required>
           </div>
          <hr>
           <h3>authentication unit</h3>
           {{-- {{$get_authentication_user}} --}}
           
           <div>
            <select class="form-control" name="authentication_user[]" multiple="multiple" id="selectUser">
              {{-- <option value="" disabled>Please select user</option>         --}}
              @foreach($get_authentication_user as $users)
                {{-- @if($users->role == 'authentication') --}}
                <option value='{{$users->id}}'>{{ $users->name }}</option>
                {{-- @endif --}}
              @endforeach
            </select>
            {{-- @foreach ($report as $reports) --}}
                
            {{-- @endforeach --}}
           </div>

            <div class="form-group">
                <label for="exampleInputEmail1">text authentication</label>
                <textarea name="authentication_text" type="text" class="form-control" id="authentication_text"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleFormControlFile1">authentication image</label>
              @csrf
              <input type="file" name="authentication_image" class="form-control-file">
            </div>
          

          <hr>
          <h3>devaloper unit</h3>
          {{-- {{$get_devaloper_user}} --}}
          
          <div>
            <select class="form-control" name="devaloper_user[]" multiple="multiple" id="selectUser">
              {{-- <option value="" disabled>Please select user</option>         --}}
              @foreach($get_devaloper_user as $users)
                {{-- @if($users->role == 'authentication') --}}
                <option value='{{$users->id}}'>{{ $users->name }}</option>
                {{-- @endif --}}
              @endforeach
            </select>
            {{-- @foreach ($report as $reports) --}}
                
            {{-- @endforeach --}}
           </div>

           <div class="form-group">
            <label for="exampleInputEmail1">text devalopers</label>
            <input name="devalopers_text" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">devalopers image</label>
            @csrf
            <input type="file" name="devaloper_image" class="form-control-file">
          </div>

          <hr>
          <h3>biometric unit</h3>
          {{-- {{$get_biometric_user}} --}}
          
          <div>
            <select class="form-control" name="biometric_user[]" multiple="multiple" id="selectUser">
              {{-- <option value="" disabled>Please select user</option>         --}}
              @foreach($get_biometric_user as $users)
                {{-- @if($users->role == 'authentication') --}}
                <option value='{{$users->id}}'>{{ $users->name }}</option>
                {{-- @endif --}}
              @endforeach
            </select>
            {{-- @foreach ($report as $reports) --}}
                
            {{-- @endforeach --}}
           </div>

           <div class="form-group">
            <label for="exampleInputEmail1">text biometric</label>
            <input name="biometric_text" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">biometric image</label>
            @csrf
            <input type="file" name="biometric_image" class="form-control-file">
          </div>

          <hr>
          <h3>descriptive unit</h3>
          {{-- {{$get_descriptive_user}} --}}
          
          <div>
            <select class="form-control" name="descriptive_user[]" multiple="multiple" id="selectUser">
              {{-- <option value="" disabled>Please select user</option>         --}}
              @foreach($get_descriptive_user as $users)
                {{-- @if($users->role == 'authentication') --}}
                <option value='{{$users->id}}'>{{ $users->name }}</option>
                {{-- @endif --}}
              @endforeach
            </select>
            {{-- @foreach ($report as $reports) --}}
                
            {{-- @endforeach --}}
           </div>

           <div class="form-group">
            <label for="exampleInputEmail1">text descriptive</label>
            <input name="descriptive_text" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="exampleFormControlFile1">descriptive image</label>
            @csrf
            <input type="file" name="descriptive_image" class="form-control-file">
          </div>
          <hr>


         <button href="" type="submit" class="btn btn-primary">Submit</button>
    


    </form>

<script>
  $(document).ready(function() {
      $('.js-example-basic-multiple').select2();
  });
</script>


<script>
  ClassicEditor
          .create( document.querySelector('#authentication_text'))
          .then( authentication_text => {
                  console.log( authentication_text );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
@endsection

