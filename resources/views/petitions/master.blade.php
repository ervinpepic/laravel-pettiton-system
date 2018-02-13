<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="Petition app">
    <meta name="Petition system" content="App for petition">
    <title>Petition System</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this site -->
    <link href="{{asset('font/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Plugin CSS -->
    <link href="{{asset('css/magnific-popup.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/hassped.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
</head>

<body>
<header class="masthead bg-primary text-white text-center">
    <div class="container">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger">Welcome to our petition Application</a>
    </div>
</nav>
@yield('content')
    </div>
</header>
<!-- Footer -->
<footer class="footer text-center" id="contact">
    <div class="container">
        <div class="row">
            <p class="lead">This is void application created in laravel.</p>
        </div>
    </div>
</footer>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Petition &copy; 2018</small>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- Plugin JavaScript -->
<script src="{{asset('js/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- Contact Form JavaScript -->
<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>
<!-- Custom scripts for this template -->
<script src="{{asset('js/hassped.min.js')}}"></script>
</body>
</html>