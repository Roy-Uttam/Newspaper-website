<footer>
  <div class="container">
    
    <div class="row">
      <div class="col-sm-12">
        <div
          class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
        >
        <ul class="footer-horizontal-menu">
                    
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
          
        </ul>
        <div>
          <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ asset('images/logo-news.png') }}" height="100" width="300" alt="" />
          </a>
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