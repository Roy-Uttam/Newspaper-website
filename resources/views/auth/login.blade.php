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

                  <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="d-flex justify-content-between align-items-center navbar-top">
                      <ul class="navbar-left">
                        <li>{{ date('Y-m-d H:i:s') }}</li>
                        <li>30°C,London</li>
                      </ul>
                      <div>
                        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo-news.png') }}" height="100" width="300" alt="" />
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
                         
                          <li class="nav-item">
                            <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                </nav>

                    <div class="account-page">
                        <div class="container">
                            <div class="row">
                                    <div class="form-container">

                                      @if(session()->has('success'))
                                      <div class="alert alert-success">
                                          {{ session()->get('success') }}
                                      </div>
                                    @endif


                                        <div class="form-btn">
                                            {{-- <span onclick="register()">Register</span> --}}
                                            <span onclick="login()">Login</span>
                                            <hr id="Indicator">
                                        </div>
                                        <form id="LoginForm" method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                                            <input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password">
                                            <button type="submit" class="btn">Login</button>

                                            
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

               

            </div>
        </div>

        <footer>
          <div class="container">
            
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
    <!-- inject:js -->        
    <!-- Custom js for this page-->                    
    <script type="text/javascript" src="/js/app.js"></script>    
   
</body>
</html>