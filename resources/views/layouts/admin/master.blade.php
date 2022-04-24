<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Admin | @yield('title')</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('partial.admin.css')
    @yield('pageCss')

</head>

<body class="fixed-left">
    <div class="preloader"></div>
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <div id="wrapper">
        @include('partial.admin.left_sidebar')
        <div class="content-page">
            <div class="content">
                @yield('content')
            </div> 
        </div>

    </div>

    @include('partial.admin.scripts')
    @yield('pageScripts')
</body>

</html>