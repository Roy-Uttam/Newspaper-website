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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                </ul>
                <div>
                  <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('images/logo.svg') }}" alt="" />
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

        <!-- news details container starts -->
        <div class="container pt-5 pb-5">
          <div class="label category bottomborder text-primary">
            {{$news->category->category_name}}
          </div>
          <div class="label newstitle mt-2 mb-4">
            <span class="float-right">Views:{{$news->views}}</span>
            <h1>{{$news->title}}</h1>
          </div>

          <div class="label newstitle mt-2 mb-4">
            <img src="{{ asset($images[0])}}" width="100%">
          </div>

          <div class="label newsdesk topborder pt-2 mt-5">
            লাল মাটির সখিপুর
          </div>

          <div class="postdate small mt-3">
            প্রকাশ: {{ $news->created_at }}
          </div>

          <div class="socialmedia">
            <a href="#">
              <span class="iconify" data-icon="mdi:instagram"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="mdi:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="mdi:youtube"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="mdi:linkedin"></span>
            </a>

            <a href="#">
              <span class="iconify" data-icon="mdi:twitter"></span>
            </a>
          </div>
          <hr>

          <div class="newscontent">

            <h1>{{$news->name}}</h1>
            
            <p>{!! html_entity_decode($news->news_details) !!}</p>
          </div>
        </div>


      </div>
      <!-- news details container ends -->
    </div>

    <!-- partial:partials/_footer.html -->
    @include('layouts.footer')

  </div>
  </div>
  <!-- inject:js -->
  <script type="text/javascript">



       $(document).ready(function() {
    
    
    
        $('.summernote').summernote({
    
    
    
              height: 500,
    
    
    
         });
    
    
    
      });
    
    
    
    </script>
  <!-- Custom js for this page-->
  <script type="text/javascript" src="/js/app.js"></script>
  <!-- End custom js for this page-->
</body>

</html>