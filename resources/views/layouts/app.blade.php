<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('assets/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/sb-admin-2.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <div id="wrapper">
        @include('layouts.menu')
          <div id="content-wrapper" class="d-flex flex-column">
              <div id="content">
                  @include('layouts.nav')
                   <div class="container mb-4">
                       @yield('contenido')
                  </div>
             </div>
         </div>  

    </div>  
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/dist/js/bootstrap.bundle.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script type="text/javascript" src="{{url('assets/js/sb-admin-2.min.js')}}"></script>
    @yield('js')
</body>
</html>