@include('layouts.header')

            <!-- partial -->
          </div>
        </header>
        <div class="container">
          <div class="banner-top-thumb-wrap">
            <div class="d-lg-flex justify-content-between align-items-center">
              @foreach( $latestNews as $news )
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
            
            <div class="col-lg-8">
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
              @foreach ($news1->take(4) as $news)

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
                  <h3 class="section-title">World News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($news2->take(4) as $news)

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
                  <h3 class="section-title">World News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($news3->take(4) as $news)

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
                  <h3 class="section-title">Latest News</h3>
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
                  <h3 class="section-title">Popular News</h3>
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
                  @foreach ($news2->take(2) as $news)
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
                  @foreach ($news3->take(2) as $news)
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
                  @foreach ($news2->take(4) as $news)

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
