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
                        <li>30°C,London</li>
                      </ul>
                      <div>
                        <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('images/logo.svg') }}" alt="" />
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
                            <a class="nav-link" href="{{ url('/admin/setting') }}">Setting</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#"><i class="mdi mdi-magnify"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                </nav>
                </div>
            </div>
        </div>

        <div class="container">
          <div class="account-page">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            {{-- <div class="container"> --}}

                  <div class="form-btn mb-3">
                      <span >Add News</span>
                      <hr style="border: none; background: #ff523b; height: 5px;">
                  </div>

                  <form id="addNewsForm" method="POST" action=" {{ route('admin.update.store', $newsId->id) }}" enctype="multipart/form-data">
                      @csrf

                      <div class="row">
                      <div class="col-md-8">
                      <div class="mb-3">
                        <input class="form-control" type="text" name="name" value="{{$newsId->name}}" placeholder="News Name">
                      </div>

                      <div class="mb-3">
                        <input class="form-control" type="text" name="title" value="{{$newsId->title}}" placeholder="News Title">
                      </div>
                      
                      <div class="mb-3">
                        <textarea class="form-control" id="news_details" name="news_details">{{$newsId->news_details}}</textarea>
                      </div>

                      <div class="mb-3">
                        <input class="form-control" type="file" name="images[]" multiple>
                      </div>

                      <div class="mb-3">
                        <button type="submit" class="btn">Add News</button>
                      </div>

                      </div>

                      <div class="col-md-3">
                      <div id="viewport">
                        <!-- Sidebar -->
                        <div id="sidebar">
                            <header>
                              <a href="#">category</a>
                            </header>
                            <div>
                              @foreach ($categories as $category)
                              <div class="form-check">
                                {{-- <input class="form-check-input" type="checkbox" value="{{$category->id}}" id="flexCheckDefault" name="category_id[]" multiple> --}}
                               <label for="{{$category->id}}"><input class="form-check-input" type="checkbox" name="category_id[]" value="{{ $category->id }}"
                                  @if(in_array($category->id,$postcat)) checked @endif>{{$category->category_name}}</label>
                              </div>
                              @endforeach
                            </div>
                            </div>
                      </div>
                    </div>
                  </div>
                  </form>
            
          </div>
        </div>

        

        <div class="container-scroller">
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

    <!-- inject:js -->        
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    {{-- ckeditor easy image --}}
    <script>
      CKEDITOR.addCss('figure[class*=easyimage-gradient]::before { content: ""; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
        'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
        '.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
        '.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }');
  
      CKEDITOR.replace('news_details', {
        extraPlugins: 'easyimage',
        removePlugins: 'image',
        removeDialogTabs: 'link:advanced',
        toolbar: [{
            name: 'document',
            items: ['Undo', 'Redo']
          },
          {
            name: 'styles',
            items: ['Format']
          },
          {
            name: 'basicstyles',
            items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
          },
          {
            name: 'paragraph',
            items: ['NumberedList', 'BulletedList']
          },
          {
            name: 'links',
            items: ['Link', 'Unlink']
          },
          {
            name: 'insert',
            items: ['EasyImageUpload']
          }
        ],
        height: 630,
        cloudServices_uploadUrl: 'public/images/',
        
        cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
        easyimage_styles: {
          gradient1: {
            group: 'easyimage-gradients',
            attributes: {
              'class': 'easyimage-gradient-1'
            },
            label: 'Blue Gradient',
            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/gradient1.png',
            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/gradient1.png'
          },
          gradient2: {
            group: 'easyimage-gradients',
            attributes: {
              'class': 'easyimage-gradient-2'
            },
            label: 'Pink Gradient',
            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/gradient2.png',
            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/gradient2.png'
          },
          noGradient: {
            group: 'easyimage-gradients',
            attributes: {
              'class': 'easyimage-no-gradient'
            },
            label: 'No Gradient',
            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/nogradient.png',
            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/nogradient.png'
          }
        },
        easyimage_toolbar: [
          'EasyImageFull',
          'EasyImageSide',
          'EasyImageGradient1',
          'EasyImageGradient2',
          'EasyImageNoGradient',
          'EasyImageAlt'
        ],
        removeButtons: 'PasteFromWord'
      });
    </script>
    <!-- Custom js for this page-->       

    <script type="text/javascript" src="/js/app.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->

</body>
</html>