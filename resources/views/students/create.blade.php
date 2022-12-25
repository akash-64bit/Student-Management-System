@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header"><b> Student Information Page </b></div>
  <div class="card-body">
      
      <form action="{{ url('/add-students-post') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Department Name</label></br>
        <input type="text" name="dept" id="dept" class="form-control"></br>
        <label>Year</label></br>
        <input type="text" name="year" id="year" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="feee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop