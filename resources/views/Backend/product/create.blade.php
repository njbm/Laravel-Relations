@extends('Backend.master')

@section('nav-header')

    <div class="col-sm-6">
        <h1 class="m-0">Create Product </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <a href="product/create"><button class="btn btn-outline-success ">Create New Product</button></a>
        </ol>
    </div><!-- /.col -->

@endsection

@section('main')

<div class="card" style="padding: 30px;">

<form action="/product/store" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name">
      @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Product Price</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="price">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Product Image</label>
    <div class="col-sm-10">
      <input class="form-control-file" type="file" name="image">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Product Description</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="description">
    </div>
  </div>
  <br>

  <button type="submit" class="btn btn-success">   Save   </button>
</form>

</div>

@endsection
