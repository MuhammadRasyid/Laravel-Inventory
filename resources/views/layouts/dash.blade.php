<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('/styles/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('/styles/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ asset('/styles/css/fontastic.css') }}">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('/styles/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('/styles/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('/styles/img/favicon.ico') }}">
    
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/ID.png" alt="Indonesia"><span class="d-none d-sm-inline-block">Muhammad Rasyid</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/ID.png" alt="Indonesia" class="mr-2">Edit User</a></li>
                   
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="{{ asset('img/avatar-11.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Muhammad Rasyid</h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
            <li><a href="{{ url('/') }}"> <i class="icon-home"></i>Home </a></li>
            <li><a href="{{ url('/crew/') }}"> <i class="icon-grid"></i>Data Crew </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Inventory </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Barang Masuk</a></li>
                <li><a href="#">Barang Keluar</a></li>                
              </ul>
            </li>            
            <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>                        
          </ul>          
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section -->                              
          @yield('content')
          <!-- Dashboard Counts Section -->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
  </div>    
    <!-- JavaScript files-->
    <script src="{{ asset('/styles/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/styles/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('/styles/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/styles/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('/styles/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('/styles/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Main File-->
    <script src="{{ asset('/js/front.js')  }}"></script>
  </body>
</html>