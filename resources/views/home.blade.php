@include('layouts.header')

            <!-- partial -->
          </div>
        </header>
        <div class="container">
          <div class="banner-top-thumb-wrap">
            <div class="d-lg-flex justify-content-between align-items-center">
              @foreach( $popular as $news )
              <a href="{{ url('/admin/news/'. $news->id) }}"><div class="d-flex justify-content-between  mb-3 mb-lg-0">
                <div>
                  <img
                    src="{{ asset(explode('|', $news->image)[0]) }}"
                    alt="thumb"
                    class="banner-top-thumb"
                  />
                </div>
                <h5 class="m-0 font-weight-bold">
                  {{$news->name}}
                </h5>
              </div></a>
              @endforeach
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div id="carouselControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                 @foreach( $latestNews as $news )
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                 @endforeach
                </ol>
                <div class="carousel-inner" role="listbox">
                  @foreach( $latestNews as $news )
                     <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                         <a href="{{ url('/admin/news/'. $news->id) }}"><img class="d-block w-100" src="{{ asset(explode('|', $news->image)[0]) }}"></a>
                            <div class="carousel-caption d-none d-md-block">
                               <h3>{{$news->name}}</h3>
                               <p>{{$news->title}}</p>
                            </div>
                     </div>
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>

          {{-- World News Area --}}

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <a class="nav-link" href="{{ url('/category/'. $catId1. '/news') }}"><h3 class="section-title">LAL MATIR SAKHIPUR NEWS</h3></a>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($news_section1->take(4) as $news)

                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset(explode('|', $news->image)[0]) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    {{$news->name}}
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    {{$news->title}}
                  </p>
                  <a href="{{ url('/admin/news/'. $news->id) }}" class="font-weight-bold text-dark pt-2"
                    >Read Article</a>
                </div>
              @endforeach
              
            </div>

          </div>

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <a href="{{ url('/category/'. $catId2. '/news') }}"><h3 class="section-title" >World News</h3></a>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($news_section2->take(4) as $news)

                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset(explode('|', $news->image)[0]) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    {{$news->name}}
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    {{$news->title}}
                  </p>
                  <a href="{{ url('/admin/news/'. $news->id) }}" class="font-weight-bold text-dark pt-2"
                    >Read Article</a
                  >
                 
                </div>
              @endforeach
        
            </div>

          </div>

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <a href="{{ url('/category/'. $catId3. '/news') }}"><h3 class="section-title" >International News</h3></a>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($news_section3->take(4) as $news)

                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset(explode('|', $news->image)[0]) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    {{$news->name}}
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    {{$news->title}}
                  </p>
                  <a href="{{ url('/admin/news/'. $news->id) }}" class="font-weight-bold text-dark pt-2"
                    >Read Article</a
                  >
                 
                </div>
              @endforeach
        
            </div>

          </div>

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative float-left">
                  <a href=""><h3 class="section-title" >Latest News</h3></a>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($latestNews->take(4) as $news)

                <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset(explode('|', $news->image)[0]) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    {{$news->name}}
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    {{$news->title}}
                  </p>
                  <a href="{{ url('/admin/news/'. $news->id) }}" class="font-weight-bold text-dark pt-2"
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
                  <a href=""><h3 class="section-title" >Popular News</h3></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <a href="{{ url('/admin/news/'. $news->id) }}"><img                    
                    src="{{ asset(explode('|', $news->image)[0]) }}"
                    class="img-fluid"
                    alt="world-news"
                  /></a>
                  <span class="thumb-title">{{$news->category->category_name}}</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                  {{$news->name}}
                </h1>
                <p class="fs-15 font-weight-normal">
                  {{$news->title}}
                </p>
              </div>
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                  @foreach ($news_section2->take(2) as $news)
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><img                        
                        src="{{ asset(explode('|', $news->image)[0]) }}"
                        class="img-fluid"
                        alt="world-news"
                      /></a>>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      {{$news->name}}
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      {{$news->title}}
                    </p>
                  </div>
                  @endforeach
                </div>
                <div class="row mt-3">
                  @foreach ($news_section3->take(2) as $news)
                  <div class="col-sm-6  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><img                        
                        src="{{ asset(explode('|', $news->image)[0]) }}"
                        class="img-fluid"
                        alt="world-news"
                      /></a>>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      {{$news->name}}
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      {{$news->title}}
                    </p>
                  </div>
                  @endforeach

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
                  @foreach ($latestNews->take(3) as $news)
                  <div class="col-sm-4  mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><img                        
                        src="{{ asset(explode('|', $news->image)[0]) }}"
                        class="img-fluid"
                        alt="world-news"
                      /></a>>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      {{$news->name}}
                    </h5>
                  </div>
                  @endforeach
                </div>
                <div class="row mt-3">
                  @foreach ($news_section2->take(3) as $news)

                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><img                        
                        src="{{ asset(explode('|', $news->image)[0]) }}"
                        class="img-fluid"
                        alt="world-news"
                      /></a>>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      {{$news->name}}
                     </h5>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col-lg-3">
                
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Latest News</h3>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    @foreach ($latestNews->take(5) as $news)
                    <div class="border-bottom pb-3">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><h5 class="font-weight-600 mt-0 mb-0">
                        {{$news->name}}
                      </h5></a>
                      <p class="text-color m-0 d-flex align-items-center">
                        <span class="fs-10 mr-1"> {{$news->created_at}}</span>
                        <i class="mdi mdi-bookmark-outline mr-3"></i>
                        <i class="mdi mdi-comment-outline"></i>
                      </p>
                    </div>
                    @endforeach
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        @include('layouts.footer')
                              
      </div>
    </div>
    <!-- inject:js -->        
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- Custom js for this page-->  
    
    <script type="text/javascript" src="/js/app.js"></script>    
    <!-- End custom js for this page-->

</body>
</html>
