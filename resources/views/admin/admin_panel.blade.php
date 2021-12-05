@include('layouts.adminheader')

                </div>
            </div>
        </div>

        <div class="container">
          <div class="account-page">
            @if(session()->has('error'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
            {{-- <div class="container"> --}}

                  <div class="form-btn mb-3">
                      <span >Add News</span>
                      <hr style="border: none; background: #ff523b; height: 5px;">
                  </div>

                  <form id="addNewsForm" method="POST" action="/admin/news" enctype="multipart/form-data">
                      @csrf
                      {{ csrf_field() }}
                      <div class="row">
                      <div class="col-md-8">
                      <div class="mb-3">
                        <input class="form-control" type="text" name="name" placeholder="News Name">
                      </div>

                      <div class="mb-3">
                        <input class="form-control" type="text" name="title" placeholder="News Title">
                      </div>

                      <div class="mb-3">
                      <textarea class="form-control summernote" name="detail"></textarea>
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
                                <input class="form-check-input" type="radio" value="{{$category->id}}" id="flexRadioDefault" name="category_id[]" multiple>
                                <label class="form-check-label" for="flexRadioDefault">
                                  {{$category->category_name}}
                                </label>
                              </div>
                              @endforeach
                            </div>
                            </div>
                      </div>
                    </div>
                  </div>
                  </form>
                
            {{-- </div> --}}
          </div>
        </div>

        <div class="container">
          <div class="row">
                      
            @foreach ($returnNews as $news)

              <div class="col-6 col-md-3">
                <div class="card">
                  <div class="card-body">
                    
                    <img class="img-fluid" src="{{asset($news['image'])}}" alt="">
                    <h5 class="card-title">{{Str::limit($news['name'], 10)}}</h5>
                    <p class="card-text">{{Str::limit($news['title'], 30)}}</p>
                    
                    
                    <tr>
                      <td><a href="{{ route('admin.post.edit', $news['id']) }}" class="btn btn-primary btn-block">edit</a></td>
                      <td><form method="POST" action=" {{ route('news.destroy', ['news' => $news['id']]) }} ">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-block"> 
                            delete
                        </button>	
                      </form></td>
                    </tr>

                  </div>
                </div>
              </div>

            @endforeach
            
          </div>
        </div>

        <div class="container-scroller">
          @include('layouts.footer')

        </div>

    <!-- inject:js -->        
    {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
    
    
    <script type="text/javascript">



         $(document).ready(function() {
      
      
      
          $('.summernote').summernote({
      
      
      
                height: 500,
      
      
      
           });
      
      
      
        });
      
      
      
      </script>
  

    <script type="text/javascript" src="/js/app.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->

</body>
</html>