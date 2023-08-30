@extends('Backend.master')

@section('nav-header')

    <div class="col-sm-6">
        <h1 class="m-0">Create Slider </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <a href="product/create"><button class="btn btn-outline-success ">Create New Slider</button></a>
        </ol>
    </div><!-- /.col -->

@endsection

@section('main')

<div class="card" style="padding: 30px;">

<form action="/slider" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Slider Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name">
      @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Slider Image</label>
    <div class="col-sm-10">
      <input class="form-control-file" type="file" name="image">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Slider Details</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="details">
    </div>
  </div>
  <br>

  <button type="submit" class="btn btn-success">   Save   </button>
</form>

</div>

@endsection
