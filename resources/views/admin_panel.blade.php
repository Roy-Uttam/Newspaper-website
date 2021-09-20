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
                <div class="container">

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
                                <a class="nav-link" href="{{ url('/account')}}">Admin</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/news') }}">All</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin/category') }}">Category</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </nav>

                    <div class="account-page">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="container">
                    
                            <div class="row">
                              
                                <div class="col-xs-4">
                                  <div class="form-container">
                                      <div class="form-btn">
                                          <span>Add News</span>
                                          <hr style="border: none; background: #ff523b; height: 3px;">
                                      </div>
                  
                                      <form id="LoginForm" method="POST" action="/admin/news" enctype="multipart/form-data">
                                          @csrf
                                          <input type="text" name="name" placeholder="News Name">
                                          <input type="text" name="title" placeholder="title">
                                          <input type="text" name="news_details" placeholder="news_details">
                                          <input type="file" name="images[]" multiple>
                                          <button type="submit" class="btn">Add News</button>
                                      </form>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>

                    <div class="row">
                     
                      @foreach ($returnNews as $news)

                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              
                              <img src="{{asset($news['image'])}}" height="200" width="200" alt="">
                              <h5 class="card-title">{{$news['name']}}</h5>
                              <p class="card-text">{{$news['title']}}</p>
                              
                              <tr>
                                <td><a href="#" class="btn btn-primary">edit</a></td>
                                <td><form method="POST" action=" {{ route('news.destroy', ['news' => $news['id']]) }} ">
                                  @csrf
                                  @method('DELETE')
                                  <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"> 
                                      delete
                                  </button>	
                                </form></td>
                              </tr>

                            </div>
                          </div>
                        </div>

                      @endforeach
                      
                    </div>

                </div>

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