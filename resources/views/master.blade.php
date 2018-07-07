<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>UpstatePHP</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


@yield('content')


<!--====== Footer Section Start ======-->
<footer class="footer-section">
    <div class="container">
        <div class="copyright">
            <p>All right reserved &copy;UpstatePHP 2014 - {{ date('Y') }}</p>
        </div>
    </div>
</footer>
<!--====== Footer Section End ======-->


<!--====== Javascripts & Jquery ======-->
<script src="theme-js/jquery-2.1.4.min.js"></script>
<script src="theme-js/isotope.pkgd.min.js"></script>
<script src="theme-js/jquery.nav.js"></script>
<script src="theme-js/magnific-popup.min.js"></script>
<script src="theme-js/owl.carousel.min.js"></script>
<script src="theme-js/wow.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
