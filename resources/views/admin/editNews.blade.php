@include('layouts.adminheader')

 </div>
 </div>
 </div>

        <div class="container">
          <div class="account-page">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            {{-- <div class="container"> --}}

                  <div class="form-btn mb-3">
                      <span >Add News</span>
                      <hr style="border: none; background: #ff523b; height: 5px;">
                  </div>

                  <form id="addNewsForm" method="POST" action=" {{ route('admin.update.store', $newsId->id) }}" enctype="multipart/form-data">
                      @csrf

                      <div class="row">
                      <div class="col-md-8">
                      <div class="mb-3">
                        <input class="form-control" type="text" name="name" value="{{$newsId->name}}" placeholder="News Name">
                      </div>

                      <div class="mb-3">
                        <input class="form-control" type="text" name="title" value="{{$newsId->title}}" placeholder="News Title">
                      </div>
                      
                      <div class="mb-3">
                      <textarea class="form-control summernote" name="detail">{{$newsId->news_details}}</textarea>
                      </div>

                      <div class="mb-3">
                        <input class="form-control" type="file" name="images[]" multiple>
                      </div>

                      <div class="mb-3">
                        <button type="submit" class="btn">Add News</button>
                      </div>

                      </div>

                      <div class="col-md-3">
                      <div id="viewport">
                        <!-- Sidebar -->
                        <div id="sidebar">
                            <header>
                              <a href="#">category</a>
                            </header>
                            <div>
                              @foreach ($categories as $category)
                              <div class="form-check">
                                {{-- <input class="form-check-input" type="checkbox" value="{{$category->id}}" id="flexCheckDefault" name="category_id[]" multiple> --}}
                               <label for="{{$category->id}}"><input class="form-check-input" type="radio" name="category_id[]" value="{{ $category->id }}"
                                  @if(in_array($category->id,$postcat)) checked @endif>{{$category->category_name}}</label>
                              </div>
                              @endforeach
                            </div>
                            </div>
                      </div>
                    </div>
                  </div>
                  </form>
            
          </div>
        </div>

        

        <div class="container-scroller">
          @include('layouts.footer')

        </div>

    <!-- inject:js -->        
    <script type="text/javascript">



         $(document).ready(function() {
      
      
      
          $('.summernote').summernote({
      
      
      
                height: 500,
      
      
      
           });
      
      
      
        });
      
      
      
      </script>
    <!-- Custom js for this page-->       

    <script type="text/javascript" src="/js/app.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->

</body>
</html>