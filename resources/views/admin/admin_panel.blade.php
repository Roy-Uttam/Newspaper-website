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

                  <form id="addNewsForm" method="POST" action="/admin/news" enctype="multipart/form-data">
                      @csrf

                      <div class="row">
                      <div class="col-md-8">
                      <div class="mb-3">
                        <input class="form-control" type="text" name="name" placeholder="News Name">
                      </div>

                      <div class="mb-3">
                        <input class="form-control" type="text" name="title" placeholder="News Title">
                      </div>
                      
                      <div class="mb-3">
                        <textarea class="form-control" id="news_details" name="news_details"></textarea>
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
                                <input class="form-check-input" type="checkbox" value="{{$category->id}}" id="flexCheckDefault" name="category_id[]" multiple>
                                <label class="form-check-label" for="flexCheckDefault">
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

              <div class="col-sm-3">
                <div class="card">
                  <div class="card-body">
                    
                    <img src="{{asset($news['image'])}}" height="200" width="200" alt="">
                    <h5 class="card-title">{{$news['name']}}</h5>
                    <p class="card-text">{{$news['title']}}</p>
                    
                    <tr>
                      <td><a href="{{ route('admin.post.edit', $news['id']) }}" class="btn btn-primary">edit</a></td>
                      <td><form method="POST" action=" {{ route('news.destroy', ['news' => $news['id']]) }} ">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"> 
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

    {{-- ckeditor easy image --}}
    <script type="text/javascript">
      CKEDITOR.replace('news_details', {
          filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
  </script>
    {{-- <script>
      CKEDITOR.addCss('figure[class*=easyimage-gradient]::before { content: ""; position: absolute; top: 0; bottom: 0; left: 0; right: 0; }' +
        'figure[class*=easyimage-gradient] figcaption { position: relative; z-index: 2; }' +
        '.easyimage-gradient-1::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 66, 174, 234, .72 ) 100% ); }' +
        '.easyimage-gradient-2::before { background-image: linear-gradient( 135deg, rgba( 115, 110, 254, 0 ) 0%, rgba( 228, 66, 234, .72 ) 100% ); }');
  
      CKEDITOR.replace('news_details', {
        extraPlugins: 'easyimage',
        removePlugins: 'image',
        removeDialogTabs: 'link:advanced',
        toolbar: [{
            name: 'document',
            items: ['Undo', 'Redo']
          },
          {
            name: 'styles',
            items: ['Format']
          },
          {
            name: 'basicstyles',
            items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat']
          },
          {
            name: 'paragraph',
            items: ['NumberedList', 'BulletedList']
          },
          {
            name: 'links',
            items: ['Link', 'Unlink']
          },
          {
            name: 'insert',
            items: ['EasyImageUpload']
          }
        ],
        height: 630,
        cloudServices_uploadUrl: 'public/images/',
        
        cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
        easyimage_styles: {
          gradient1: {
            group: 'easyimage-gradients',
            attributes: {
              'class': 'easyimage-gradient-1'
            },
            label: 'Blue Gradient',
            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/gradient1.png',
            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/gradient1.png'
          },
          gradient2: {
            group: 'easyimage-gradients',
            attributes: {
              'class': 'easyimage-gradient-2'
            },
            label: 'Pink Gradient',
            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/gradient2.png',
            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/gradient2.png'
          },
          noGradient: {
            group: 'easyimage-gradients',
            attributes: {
              'class': 'easyimage-no-gradient'
            },
            label: 'No Gradient',
            icon: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/nogradient.png',
            iconHiDpi: 'https://ckeditor.com/docs/ckeditor4/4.16.2/examples/assets/easyimage/icons/hidpi/nogradient.png'
          }
        },
        easyimage_toolbar: [
          'EasyImageFull',
          'EasyImageSide',
          'EasyImageGradient1',
          'EasyImageGradient2',
          'EasyImageNoGradient',
          'EasyImageAlt'
        ],
        removeButtons: 'PasteFromWord'
      });
    </script> --}}
    <!-- Custom js for this page-->       

    <script type="text/javascript" src="/js/app.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->

</body>
</html>