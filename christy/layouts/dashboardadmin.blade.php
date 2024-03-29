<x-app-layout>
    <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard</title>
      <!-- plugins:css -->
      <link rel="stylesheet" href="../../admin/assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="../../admin/assets/vendors/css/vendor.bundle.base.css">
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <link rel="stylesheet" href="../../admin/assets/vendors/jvectormap/jquery-jvectormap.css">
      <link rel="stylesheet" href="../../admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="../../admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
      <link rel="stylesheet" href="../../admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="../../admin/assets/css/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="../../admin/assets/images/favicon.png" />
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="{{ url('/redirects') }}"><img src="../../admin/assets/images/logo.svg" alt="logo" /></a>
            <a class="sidebar-brand brand-logo-mini" href="{{ url('/redirects') }}"><img src="../../admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <ul class="nav">
           
            <li class="nav-item nav-category">
              <span class="nav-link">Navigation</span>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('/users') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Pengguna</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('/menu') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Menu</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('/chef') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Chef</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="{{ url('/booking') }}">
                <span class="menu-icon">
                  <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Reservasi</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.html -->
         
          <!-- partial -->
            <div class="content-wrapper">
              @yield('content')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="../../admin/assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="../../admin/assets/vendors/chart.js/Chart.min.js"></script>
      <script src="../../admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="../../admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="../../admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="../../admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="../../admin/assets/js/off-canvas.js"></script>
      <script src="../../admin/assets/js/hoverable-collapse.js"></script>
      <script src="../../admin/assets/js/misc.js"></script>
      <script src="../../admin/assets/js/settings.js"></script>
      <script src="../../admin/assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="../../admin/assets/js/dashboard.js"></script>
      <!-- End custom js for this page -->
    </body>
  </html>
  </x-app-layout>
  