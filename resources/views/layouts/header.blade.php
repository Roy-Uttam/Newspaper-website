<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Lal Matir Sakhipur</title>
    <!-- End plugin css for this page -->    
    <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li>{{ date('Y-m-d H:i:s') }}</li>
                  <li>30°C,London</li>
                </ul>
                <div>
                  <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.svg') }}" alt="" />
                  </a>
                </div>
                <div class="d-flex">
                  <ul class="navbar-right">
                    <li>
                      <a href="#">ENGLISH</a>
                    </li>
                    <li>
                      <a href="#">ESPAÑOL</a>
                    </li>
                  </ul>
                  <ul class="social-media">
                    <li>
                      <a href="#">
    
                        <span class="iconify" data-icon="mdi:instagram"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
    
                        <span class="iconify" data-icon="mdi:facebook"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
    
                        <span class="iconify" data-icon="mdi:youtube"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
    
                        <span class="iconify" data-icon="mdi:linkedin"></span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
    
                        <span class="iconify" data-icon="mdi:twitter"></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom-menu">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div
                  class="navbar-collapse justify-content-center collapse"
                  id="navbarSupportedContent"
                >
                  <ul
                    class="navbar-nav d-lg-flex justify-content-between align-items-center"
                  >
                    <li>
                      <button class="navbar-close">
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link active" href="{{ url('/')}}">Home</a>
                    </li>
                    @foreach ($categories as $category)
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/'. $category->cat_code. '/news') }}">{{$category->category_name}}</a>
                      </li>
                    @endforeach
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/account')}}">Admin</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>