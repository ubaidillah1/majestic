<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('majestic/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('majestic/vendors/base/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('majestic/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('majestic/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('majestic/css/style.min.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('majestic/images/logo.png')}}" />
  </head>
  <body>    
    <div class="container-scroller">
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">        
        @include('layouts.navbar')
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          @include('layouts.sidebar')
        </nav>
        <div class="main-panel">
          @yield('content')
            <footer class="footer">
              @include('layouts.footer')
            </footer>
        </div>
      </div>
    </div>
    <script src="{{asset('majestic/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('majestic/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('majestic/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('majestic/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('majestic/js/off-canvas.js')}}"></script>
    <script src="{{asset('majestic/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('majestic/js/template.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('majestic/js/dashboard.js')}}"></script>
    <script src="{{asset('majestic/js/data-table.js')}}"></script>
    <script src="{{asset('majestic/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('majestic/js/dataTables.bootstrap4.js')}}"></script>
    <!-- End custom js for this page-->
    {{-- <script src="{{asset('majestic/js/jquery.cookie.js')}}" type="text/javascript"></script> --}}
    <!-- container-scroller -->

  </body>
</html>
    