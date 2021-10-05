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
      <div class="container">
        <!-- top header -->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="d-flex justify-content-between align-items-center navbar-top">
            <ul class="navbar-left">
              <li>{{ date('Y-m-d H:i:s') }}</li>
            </ul>
            <div>
              <h1>LAL MATIR SAKHIPUR</h1>
            </div>
            <div class="d-flex">
              <ul class="navbar-right">
                <li>
                  <a href="#">ENGLISH</a>
                </li>
                <li>
                  <a href="#">BANGLA</a>
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
        </nav>

        <!-- news details container starts -->
        <div class="container pt-5 pb-5">
          <div class="label category bottomborder text-primary">
            {{$news->category->category_name}}
          </div>
          <div class="label newstitle mt-2 mb-4">
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
              <h1>LAL MATIR SAKHIPUR</h1>

              <div class="d-flex justify-content-end footer-social">
                <h5 class="m-0 font-weight-600 mr-3 d-none d-lg-flex">Follow on</h5>
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
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom">
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