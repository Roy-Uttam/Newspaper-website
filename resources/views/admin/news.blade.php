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
                                <div class="col-3" style="padding: 10px;">
                                    <a href="{{ url('/admin/news/'. $news->id) }}"><img class="img_res" src="{{asset(explode('|', $news->image)[0])}}"></a>
                                    <h4> {{Str::limit($news->name, 20)}}</h4>
                                   
                                    <p>{{Str::limit($news->title, 20)}}</p>
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