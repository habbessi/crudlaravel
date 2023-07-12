@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $students->FirstName }}</h5>
        <h5 class="card-title">Last Name : {{ $students->LastName }}</h5>
        <p class="card-text">Email : {{ $students->Email }}</p>
        <p class="card-text">Address : {{ $students->Address }}</p>
  </div>
    </hr>
  </div>
</div>
