@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="FirstName" id="firstname" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="LastName" id="lastname" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="Email" id="email" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="Address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
