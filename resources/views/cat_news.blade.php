@include('layouts.header')


                    <div class="small-container">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        <div class="row row-2">
                            <h2>All News</h2>
                            
                        </div>
                        <div class="row">
                            @foreach($catnews as $cat)
                                <div class="col-4" style="padding: 10px;">
                                    {{-- <a href="{{ url('/admin/news/'. $news->id) }}"><img src="{{asset(explode('|', $news->image)[0])}}" height="300" width="300"></a> --}}
                                    {{-- <h4> {{$cat}}</h4> --}}

                                    <p>{{$cat->category_name}}</p>
                                    {{-- <p>{{$cat->news}}</p> --}}
<div>
                                    @foreach ($cat->news as $news)
                                    <a href="{{ url('/admin/news/'. $news->id) }}"><img src="{{asset(explode('|', $news->image)[0])}}" height="300" width="300"></a>
                                    <p>{{$news->name}}</p>
                                    <p>{{$news->category_id}}</p>
                                    @endforeach
                                  </div>
                                    {{-- <p>{{$cat->news->name}}</p> --}}
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

                @include('layouts.footer')


            </div>
        </div>
    <!-- inject:js -->        
    <!-- Custom js for this page-->                    
    <script type="text/javascript" src="/js/app.js"></script>    
    <!-- End custom js for this page-->

</body>
</html>