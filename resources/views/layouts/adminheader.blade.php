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

    <!-- include libraries(jQuery, bootstrap) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">



    <!-- endinject -->
  </head>

  <body>
        <div class="container-scroller">
            <div class="main-panel">
                <div class="container">
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
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/account')}}">Admin</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/registration')}}">Registration</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/news') }}">All</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/category') }}">Category</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/setting') }}">Setting</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                </nav>