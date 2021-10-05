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