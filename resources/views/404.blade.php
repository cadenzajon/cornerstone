<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>404 Error| Welcome to Chandra_Frontend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- end of global css-->
    <!-- page level styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/frontend/404.css') }}" type="text/css">
    <!-- end of page level styles-->
</head>

<body>
    <div class="container">
        <div class="cloud-black">
            <span class="bottom-black"></span>
            <div class="cloud-inner">
                <span class="bottom-inner"></span>
                <span class="break"></span>
            </div>
            <div class="thunder-bolt"></div>
        </div>
        <h2>404 ERROR</h2>
        <a href="{{ route('home') }}">
            <button type="button" class="btn btn-responsive button-alignment btn-lg">Go Home</button>
        </a>
    </div>
    <!-- global js -->
    <script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- end of global js -->
</body>

</html>
