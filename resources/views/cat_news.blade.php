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
                    @foreach ($cat_value as $news)
                        <div class="col-4" style="padding: 10px;">
                            <a href="{{ url('/admin/news/'. $news->id) }}"><img src="{{asset(explode('|', $news->image)[0])}}" height="300" width="300"></a>
                            <p>{{$news->name}}</p>
                            <p>{{$news->updated_at}}</p>
                        </div>
                    @endforeach
                                
                </div>
     </div>



@include('layouts.footer')

<!-- inject:js -->        
<!-- Custom js for this page-->                    
<script type="text/javascript" src="/js/app.js"></script>    
<!-- End custom js for this page-->

</body>
</html>