@include('layouts.header')

            <!-- partial -->
          </div>
        </header>
        
        <div class="container">
          <div class="banner-top-thumb-wrap">
            <div class="d-lg-flex justify-content-between align-items-center">
              @foreach( $popular as $news )
              <a style="padding: 10px;" href="{{ url('/admin/news/'. $news->id) }}">
              <div class="d-flex justify-content-between align-items-center">
                <img
                    src="{{ asset('images/' . $news->image) }}"
                    alt="thumb"
                    class="banner-top-thumb"
                  />{{Str::limit($news->name, 10)}}
              </div>
              </a>
              @endforeach
            </div>
            </div>
              
            </div>
          <div class="row">
            <div class="col-lg-12">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                 @foreach( $latestNews as $news )
                 <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
                 @endforeach
                  </div>
                <div class="carousel-inner" role="listbox">
                  @foreach( $latestNews as $news )
                     <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                         <a href="{{ url('/admin/news/'. $news->id) }}"><img class="d-block w-100" src="{{ asset('images/' . $news->image) }}"></a>
                            <div class="carousel-caption d-none d-md-block">
                               <h3>{{$news->name}}</h3>
                               <p>{{$news->title}}</p>
                            </div>
                     </div>
                  @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                
              </div>
            </div>
          </div>

          {{-- World News Area --}}

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative  float-left">
                  <a class="nav-link" href="{{ url('/category/'. $catId1. '/news') }}"><h3 class="section-title">LAL MATIR SAKHIPUR</h3></a>
                </div>
              </div>
            </div>
            <div class="row">
              @foreach ($news_section1->take(4) as $news)

                <div class="col-6 col-md-3">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset('images/' . $news->image) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    <a href="{{ url('/admin/news/'. $news->id) }}">
                      {{Str::limit($news->name, 10)}}</a>
                      
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    <a href="{{ url('/admin/news/'. $news->id) }}">{{Str::limit($news->title, 30)}}</a>
                  </p>
                </div></a>
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

                <div class="col-6 col-md-3">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset('images/' . $news->image) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    <a href="{{ url('/admin/news/'. $news->id) }}">
                      {{Str::limit($news->name, 10)}}</a>
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    <a href="{{ url('/admin/news/'. $news->id) }}">{{Str::limit($news->title, 30)}}</a>
                   </p>
                  
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

                <div class="col-6 col-md-3">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset('images/' . $news->image) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    <a href="{{ url('/admin/news/'. $news->id) }}">
                      {{Str::limit($news->name, 10)}}</a>
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    <a href="{{ url('/admin/news/'. $news->id) }}"> {{Str::limit($news->title, 30)}} </a>
                  </p>
                  
                 
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

                <div class="col-6 col-md-3">
                  <div class="position-relative image-hover">
                    <a href="{{ url('/admin/news/'. $news->id) }}"><img
                      src="{{ asset('images/' . $news->image) }}"
                      class="img-fluid"
                      alt="world-news"
                    /></a>
                    <span class="thumb-title">{{$news->category->category_name}}</span>
                  </div>
                  <h5 class="font-weight-bold mt-3">
                    <a href="{{ url('/admin/news/'. $news->id) }}">
                      {{Str::limit($news->name, 10)}}</a>
                  </h5>
                  <p class="fs-15 font-weight-normal">
                    <a href="{{ url('/admin/news/'. $news->id) }}"> {{Str::limit($news->title, 30)}} </a>
                  </p>
                  
                </div>
              @endforeach
        
            </div>

          </div>

          {{-- World News Area closed --}}

          {{-- <div class="editors-news">
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
                    src="{{ asset('images/' . $news->image) }}"
                    class="img-fluid1"
                    alt="world-news"
                  /></a>
                  <span class="thumb-title">{{$news->category->category_name}}</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                  <a href="{{ url('/admin/news/'. $news->id) }}">
                    {{Str::limit($news->name, 10)}}</a>
                </h1>
                <p class="fs-15 font-weight-normal">
                  <a href="{{ url('/admin/news/'. $news->id) }}"> {{Str::limit($news->title, 30)}} </a>
                </p>
              </div>
              <div class="col-lg-6  mb-5 mb-sm-2">
                <div class="row">
                  @foreach ($news_section2->take(2) as $news)
                  <div class="col-6 col-sm-6">
                    <div class="position-relative image-hover">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><img                        
                        src="{{ asset('images/' . $news->image) }}"
                        class="img-fluid"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ url('/admin/news/'. $news->id) }}">
                        {{Str::limit($news->name, 10)}}</a>
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      <a href="{{ url('/admin/news/'. $news->id) }}"> {{Str::limit($news->title, 30)}} </a>
                    </p>
                  </div>
                  @endforeach

                </div>
                <div class="row">
                  @foreach ($news_section3->take(2) as $news)
                  <div class="col-6 col-sm-6">
                    <div class="position-relative image-hover">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><img                        
                        src="{{ asset('images/' . $news->image) }}"
                        class="img-fluid"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ url('/admin/news/'. $news->id) }}">
                        {{Str::limit($news->name, 10)}}</a>
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      <a href="{{ url('/admin/news/'. $news->id) }}"> {{Str::limit($news->title, 30)}} </a>
                    </p>
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div> --}}

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
                        src="{{ asset('images/' . $news->image) }}"
                        class="img-fluid2"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ url('/admin/news/'. $news->id) }}">
                        {{Str::limit($news->name, 40)}}</a>
                    </h5>
                  </div>
                  @endforeach
                </div>
                <div class="row mt-3">
                  @foreach ($news_section2->take(3) as $news)

                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <a href="{{ url('/admin/news/'. $news->id) }}"><img                        
                        src="{{ asset('images/' . $news->image) }}"
                        class="img-fluid2"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$news->category->category_name}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ url('/admin/news/'. $news->id) }}">
                        {{Str::limit($news->name, 40)}}</a>
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
                        <a href="{{ url('/admin/news/'. $news->id) }}">
                          <a href="{{ url('/admin/news/'. $news->id) }}">
                            {{Str::limit($news->name, 40)}}</a>
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
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     --}}
    <!-- Custom js for this page-->  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/app.js"></script>    
    <!-- End custom js for this page-->

</body>
</html>
