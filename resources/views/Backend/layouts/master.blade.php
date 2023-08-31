<!DOCTYPE html>
<html lang="en">
@include('Backend.layouts.partials.head')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
@include('Backend.layouts.partials.sidebar')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
@include('Backend.layouts.partials.navbar')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
@include('Backend.layouts.partials.right')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
@yield('main')
</div>
    <!-- ########## END: MAIN PANEL ########## -->

@include('Backend.layouts.partials.js')
  </body>
</html>
