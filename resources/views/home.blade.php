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
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-linkedin"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
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
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">World</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">Magazine</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">Business</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">Sports</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">Art</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">Politics</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/pages')}}">Travel</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/account')}}">Admin</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/news') }}">All</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>

            <!-- partial -->
          </div>
        </header>
        <div class="container">
          <div class="banner-top-thumb-wrap">
            <div class="d-lg-flex justify-content-between align-items-center">
              <div class="d-flex justify-content-between  mb-3 mb-lg-0">
                <div>
                  <img
                    src="{{ asset('images/dashboard/star-magazine-1.jpg') }}"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  The morning after: What people
                </h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="{{ asset('images/dashboard/star-magazine-2.jpg') }}"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">How Hungary produced the</h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="{{ asset('images/dashboard/star-magazine-3.jpg') }}"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  A sleepy island paradise's most
                </h5>
              </div>
              <div class="d-flex justify-content-between mb-3 mb-lg-0">
                <div>
                  <img
                    src="{{ asset('images/dashboard/star-magazine-4.jpg') }}"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  America's most popular national
                </h5>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div id="carouselNewsSlides" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">      
                    <img class="d-block w-100" src="{{ asset('images/dashboard/banner.jpg') }}" alt="" />
                    <div class="carousel-caption d-none d-md-block">
                      <h5>News Title</h5>
                      <p>news description</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('images/dashboard/banner.jpg') }}" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                      <h5>News Title</h5>
                      <p>news description</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                  <img class="d-block w-100" src="{{ asset('images/dashboard/banner.jpg') }}" alt="" />
                  <div class="carousel-caption d-none d-md-block">
                      <h5>News Title</h5>
                      <p>news description</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-sm-6">
                  <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="{{ asset('images/dashboard/Profile_1.jpg') }}"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Henry Itondo</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      The Most And Least Visited Countries In The World
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="py-3 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="{{ asset('images/dashboard/Profile_2.jpg') }}"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Oka Tomoaki</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      The Best Places to Travel in month August
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="pt-4 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="{{ asset('images/dashboard/Profile_2.jpg') }}"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Joana Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Focus On Fun And Challenging Lifetime Activities
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pt-3 pb-4 border-bottom">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="{{ asset('images/dashboard/Profile_4.jpg') }}"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Rita Leite</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Bread Is The Most Widely Consumed Food In The World
                    </p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="pt-4 pb-4">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="{{ asset('images/dashboard/Profile_5.jpg') }}"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Jurrien Oldhof</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      What Is Music, And What Does It Mean To Us
                    </p>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="pt-3 pb-4">
                    <div class="d-flex align-items-center pb-2">
                      <img
                        src="{{ asset('images/dashboard/Profile_6.jpg') }}"
                        class="img-xs img-rounded mr-2"
                        alt="thumb"
                      />
                      <span class="fs-12 text-muted">Yamaha Toshinobu</span>
                    </div>
                    <p class="fs-14 m-0 font-weight-medium line-height-sm">
                      Is Breakfast The Most Important Meal Of The Day
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- World News Area --}}

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <h3 class="section-title">World News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($worldNews as $news)

                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/news/'. $news->id) }}"><img
                      src="{{ asset(explode('|', $news->image)[0]) }}" height="300px"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">TRAVEL</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    {{$news->name}}
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    {{$news->title}}
                  </p>
                  <a href="#" class="font-weight-bold text-dark pt-2"
                    >Read Article</a
                  >
                </div>
              @endforeach
        
            </div>
          </div>
          {{-- World News Area closed --}}

          <div class="editors-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Popular News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img                    
                    src="{{ asset('images/dashboard/glob.jpg') }}"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">NEWS</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                  Melania Trump speaks about courage at State Department
                </h1>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of type
                  and
                </p>
              </div>
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-5.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">POLITICS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      A look at California's eerie plane graveyards
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-6.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">TRAVEL</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The world's most beautiful racecourses
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-7.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">POLITICS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Japan cancels cherry blossom festivals over virus fears
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-8.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">TRAVEL</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Classic cars reborn as electric vehicles
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popular-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Editor choice</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-sm-4  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-9.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">LIFESTYLE</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The island country that gave Mayor Pete his name
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-10.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">SPORTS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Disney parks expand (good) vegan food options
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-11.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">INTERNET</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      A hot springs where clothing is optional after dark
                    </h5>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-12.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Japanese chef carves food into incredible pieces of art
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-13.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The Misanthrope Society: A Taipei bar for people who
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img                        
                        src="{{ asset('images/dashboard/star-magazine-14.jpg') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">TOURISM</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      From Pakistan to the Caribbean: Curry's journey
                    </h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="position-relative mb-3">
                  <img                    
                    src="{{ asset('images/dashboard/star-magazine-15.jpg') }}"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <div class="video-thumb text-muted">
                    <span><i class="mdi mdi-menu-right"></i></span>LIVE
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Latest News</h3>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="pt-4">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        South Korea’s Moon Jae-in sworn in vowing address
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1">2 hours ago</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <span class="fs-10 mr-1">126</span>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="border-top"></div>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="{{ url('/pages')}}">News</a></li>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="{{ url('/pages')}}">World</a></li>
                  <li><a href="{{ url('/pages')}}">Magazine</a></li>
                  <li><a href="{{ url('/pages')}}">Business</a></li>
                  <li><a href="{{ url('/pages')}}">Politics</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="{{ url('/pages')}}">World</a></li>
                  <li><a href="{{ url('/pages')}}">Sports</a></li>
                  <li><a href="{{ url('/pages')}}">Art</a></li>
                  <li><a href="#">Magazine</a></li>
                  <li><a href="{{ url('/pages')}}">Real estate</a></li>
                  <li><a href="{{ url('/pages')}}">Travel</a></li>
                  <li><a href="{{ url('/pages')}}">Author</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="#">Features</a></li>
                  <li><a href="#">Photography</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="{{ url('/pages')}}">Newsletters</a></li>
                  <li><a href="#">Live Events</a></li>
                  <li><a href="#">Stores</a></li>
                  <li><a href="#">Jobs</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-lg-3">
                <ul class="footer-vertical-nav">
                  <li class="menu-title"><a href="#">More</a></li>
                  <li><a href="#">RSS</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">User Agreement</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="{{ url('/pages')}}">About us</a></li>
                  <li><a href="{{ url('/pages')}}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <img src="{{ asset('images/logo.svg') }}" class="footer-logo" alt="" />

                  <div class="d-flex justify-content-end footer-social">
                    <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
                    <ul class="social-media">
                      <li>
                        <a href="#">
                          <i class="mdi mdi-instagram"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-facebook"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-youtube"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-linkedin"></i>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-twitter"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div
                  class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                  <ul class="footer-horizontal-menu">
                    <li><a href="#">Terms of Use.</a></li>
                    <li><a href="#">Privacy Policy.</a></li>
                    <li><a href="#">Accessibility & CC.</a></li>
                    <li><a href="#">AdChoices.</a></li>
                    <li><a href="#">Advertise with us Transcripts.</a></li>
                    <li><a href="#">License.</a></li>
                    <li><a href="#">Sitemap</a></li>
                  </ul>
                  <p class="font-weight-medium">
                    © {{ date('Y') }} <a href="https://www.github.com/mazharulsabbir" target="_blank" class="text-dark">@ EngineerState</a>, Inc. All Rights Reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </footer>                      
      </div>
    </div>
    <!-- inject:js -->        
    <!-- Custom js for this page-->                    
    <script type="text/javascript" src="/js/app.js"></script>    
    <!-- End custom js for this page-->

</body>
</html>