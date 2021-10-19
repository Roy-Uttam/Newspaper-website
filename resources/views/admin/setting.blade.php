@include('layouts.adminheader')

        
          <div>
              

            <div class="container">
              <div class="row">
                <form id="addNewsForm" method="GET" action="/admin/settings" enctype="multipart/form-data">
                  @csrf
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Popular News section</h5>
                        <select class="form-select" name="category_id1" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Popular News section</h5>
                        <select class="form-select" name="category_id2" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Popular News section</h5>
                        <select class="form-select" name="category_id3" aria-label="Default select example">
                          <option selected>Open this select menu</option>
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                </div>
                <div>
                  <button class="btn btn-primary" type="submit">submit</button>
                </div>
                </form>
              </div>
            </div>

               
        
           
          </div>

        <div class="container-scroller">
          @include('layouts.footer')

        </div>

    <!-- inject:js -->        
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'news_details' );
    </script>
    <!-- Custom js for this page-->       

    <script type="text/javascript" src="/js/app.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->

</body>
</html>