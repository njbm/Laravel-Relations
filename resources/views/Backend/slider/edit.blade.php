@section('nav-header')

    <div class="col-sm-6">
        <h1 class="m-0">Edit Slider </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <a href="product/create"><button class="btn btn-outline-success ">Create New Slider</button></a>
        </ol>
    </div><!-- /.col -->
@endsection


@section('main')

<form action="/product/{{ $product->id }}/update" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="name" value="{{ $product->name }}">
      {{-- @if ($errors->has('name'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif --}}
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Product Price</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="price" value="{{ $product->price }}">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Product Image</label>
    <div class="col-sm-10">
        <img src="{{ asset('Backend/product/images/'.$product->image) }}" height="100" width="100"><br><br>
      <input class="form-control-file" type="file" name="image">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Product Description</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" name="description" value="{{ $product->description }}">
    </div>
  </div>

  <button type="submit" class="btn btn-success">Save</button>
</form>

@endsection
