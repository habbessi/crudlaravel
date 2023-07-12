@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">

      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="FirstName" id="firstname" value="{{$students->FirstName}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="LastName" id="lastname" value="{{$students->LastName}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="email" value="{{$students->Email}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Address" id="address" value="{{$students->Address}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
