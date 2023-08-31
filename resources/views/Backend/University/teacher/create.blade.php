@extends('Backend.layouts.master')

@section('main')

<div class="card">

<form style="padding: 30px;" action="/teacher" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="name" class="form-control"  name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Department</label>
    <input type="name" class="form-control" name="department" >
  </div>
  <div class="mb-3">
    <label class="form-label">picture</label>
    <input type="file" class="form-control" name="image" >
  </div>
<br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

@endsection
