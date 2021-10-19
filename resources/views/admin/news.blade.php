@include('layouts.adminheader')


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
                            @foreach($news as $news)
                                <div class="col-4" style="padding: 10px;">
                                    <a href="{{ url('/admin/news/'. $news->id) }}"><img src="{{asset(explode('|', $news->image)[0])}}" height="300" width="300"></a>
                                    <h4> {{$news->name}}</h4>
                                   
                                    <p>{{$news->title}}</p>
                                    <p>{{$news->category->category_name}}</p>
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