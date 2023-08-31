@extends('Backend.layouts.master')



@section('main')

<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="index.html">Teacher</a>
        <span class="breadcrumb-item active">Details</span>
        <a href="teacher/create" class="breadcrumb-item active">
            <button class="btn btn-outline-success "> Create Teacher</button></a>
    </nav>
</div><!-- br-pageheader -->

<div class="card">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Picture</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($teachers as $teacher)
    <tr>
      <th scope="row">{{ $loop->index+1 }}</th>
      <td>{{ $teacher->name }}</td>
      <td>{{ $teacher->department }}</td>
      <td><img src="{{ asset('Backend/university/images/'.$teacher->image) }}" alt="" width="70" height="70" class="rounded-circle">
      <td>
        <a href=""><button type="submit">Edit</button></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
