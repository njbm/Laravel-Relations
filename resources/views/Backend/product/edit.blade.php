<!DOCTYPE html>
<html lang="en">
@Include('Backend.partials.head') <!-- Include the head partial -->


<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @Include('Backend.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @Include('Backend.partials.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">



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

  {{-- <div class="row mb-3">
    <div class="col-sm-10 offset-sm-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Confirm
        </label>
      </div>
    </div>
  </div> --}}

  <button type="submit" class="btn btn-success">Save</button>
</form>


      </div>
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('Backend.partials.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('Backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('Backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('Backend/dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('Backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('Backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('Backend/dist/js/pages/dashboard3.js') }}"></script>
</body>
</html>



