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
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link href="/css/style.css" rel="stylesheet"> --}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- endinject -->
  </head>

  <body>
    <div class="container">
      <div class="main-panel">
        <header id="header">
          <div class="container">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="d-flex justify-content-between align-items-center navbar-top">
                <ul class="navbar-left">
                  <li>{{ date('Y-m-d H:i:s') }}</li>
                </ul>
                <div>
                  <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('images/logo-news.png') }}" height="100" width="300" alt="" />
                  </a>
                </div>
                <div class="d-flex">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse justify-content-center navbar-collapse" id="navbarNav">

                  <ul
                  class="navbar-nav mb-2 mb-lg-0"
                  >
                    <li class="nav-item">
                      <button class="navbar-close">close
                        <i class="mdi mdi-close"></i>
                      </button>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="{{ url('/')}}">Home</a>
                    </li>
                    @foreach ($categories as $category)
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/'. $category->cat_code. '/news') }}">{{$category->category_name}}</a>
                      </li>
                    @endforeach
                    
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                    </li>
                   
                  </ul>
                  
                </div>
              </div>
            </nav>
          