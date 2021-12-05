@include('layouts.header')

        <!-- news details container starts -->
       
        <div class="container pt-5 pb-5">
          <div class="label category bottomborder text-primary">
            {{$news->category->category_name}}
          </div>
          <div class="label newstitle mt-2 mb-4">
            <span class="float-right">Views:{{$news->views}}</span>
            <h1>{{$news->title}}</h1>
          </div>

          <div class="label newstitle mt-2 mb-4">
            <img src="{{ asset($images[0])}}" width="100%">
          </div>

          <div class="label newsdesk topborder pt-2 mt-5">
            লাল মাটির সখিপুর
          </div>

          <div class="postdate small mt-3">
            প্রকাশ: {{ $news->created_at }}
          </div>

          <div class="socialmedia">
            <a href="#">
              <span class="iconify" data-icon="mdi:instagram"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="mdi:facebook"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="mdi:youtube"></span>
            </a>
            <a href="#">
              <span class="iconify" data-icon="mdi:linkedin"></span>
            </a>

            <a href="#">
              <span class="iconify" data-icon="mdi:twitter"></span>
            </a>
          </div>
          <hr>

          <div class="newscontent">

            <h1>{{$news->name}}</h1>
            
            <p>{!! html_entity_decode($news->news_details) !!}</p>
          </div>
        </div>


      </div>
      <!-- news details container ends -->
    </div>

    <!-- partial:partials/_footer.html -->
    @include('layouts.footer')

  </div>
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