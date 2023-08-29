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
          @yield('nav-header')
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        {{-- <div class="row"> --}}

            @yield('main')

        {{-- </div> --}}
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

@include('Backend.partials.jslink')

</body>
</html>
