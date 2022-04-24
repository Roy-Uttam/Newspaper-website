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
                        <div class="col-6 col-md-3" style="padding: 10px;">
                            <a href="{{ url('/admin/news/'. $news->id) }}"><img class="img-fluid" src="{{ asset('images/' . $news->image) }}" height="300" width="300"></a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- End custom js for this page-->

</body>
</html>