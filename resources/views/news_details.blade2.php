@include('layouts.header')
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <img src="{{ asset($images[0])}}" width="100%">
                
                            </div>
                            <div class="col-8">
                                <div id="error_message">
                                </div>
                                <h1>{{$news->name}}</h1>

                                <div>
                                    <h2><h1>{{$news->title}}</h1></h2>
                                </div>

                                <div>
                                  <h2><h1>{{$news->category->category_name}}</h1></h2>
                              </div>

                                <h3>Newst Details <i class="fa fa-indent"></i></h3>
                                <br>
                                
                                <div>
                                    <p>{{$news->news_details}}</p>
                                </div>
                                
                            </div>
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