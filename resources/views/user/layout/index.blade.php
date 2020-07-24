<!DOCTYPE html>
<html lang="zxx">
@yield('php')
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Librona">
    <meta name="keywords" content="Librona, quan ly thu vien">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Librona</title>
    <base href="{{asset('')}}">
    <!-- Google Font -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"> --}}

    <!-- Css Styles -->
    <link rel="stylesheet" href="user/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="user/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="user/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="user/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
	
    @include('user.layout.header')
    
    @yield('content')

    @include('user.layout.footer')

    <!-- Js Plugins -->
    <script src="user/js/jquery-3.3.1.min.js"></script>
    <script src="user/js/bootstrap.min.js"></script>
    <script src="user/js/jquery.nice-select.min.js"></script>
    <script src="user/js/jquery-ui.min.js"></script>
    <script src="user/js/jquery.slicknav.js"></script>
    <script src="user/js/mixitup.min.js"></script>
    <script src="user/js/owl.carousel.min.js"></script>
    <script src="user/js/main.js"></script>
</body>

</html>