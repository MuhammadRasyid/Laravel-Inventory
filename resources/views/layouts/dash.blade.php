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
    @yield('content')

    @yield('login')  
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
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