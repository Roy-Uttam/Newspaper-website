@include('layouts.adminheader')

                    <div class="container-fluid">
                      <div class="col-sm-12">
                          <h1>Categories</h1>
                        </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h3>Add New Category</h3>
                                        <form action="{{route('category.index')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Category Name</label>
                                                <input type="text" name="category_name" id="category_name" placeholder="Category Name" class="form-control">
                                            </div>

                                            <div class="form-group">
                                              <label>Category Code</label>
                                              <input type="text" name="cat_code" id="cat_code" placeholder="Category Code" class="form-control">
                                              
                                            </div>
                                            
                                            <div class="form-group">
                                                <button class="btn btn-primary">Add New Category</button>
                                            </div>
                                        </form>
                                    </div>
                            
                                    <div class="col-sm-8">
                                        <div class="content">
                                            <table class="table table-striped">
                                                  <thead>
                                                    <tr>
                                                      <th scope="col">Category ID</th>
                                                      <th scope="col">Category Name</th>
                                                      <th scope="col">Category Code</th>
                                                      <th scope="col">Actions</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($categories as $category)
                                                    <tr>
                                                      <th scope="row">{{$category->id}}</th>
                                                      <td>{{$category->category_name}}</td>
                                                      <td>{{$category->cat_code}}</td>

                                                      <td class="text-right">
                      
                                                        <form method="POST" action=" {{ route('category.destroy', ['category' => $category->id]) }} ">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"> 
                                                              <span class="iconify" data-icon="oi:delete"></span>
                                                            </button>	
                                                        </form>
                                                    </td>
                                                    <td>
                                                      <a href="{{ url('/category/'. $category->cat_code. '/news') }}"><button type="submit" class="btn-primary btn-sm">View all</button></a>
                                                    </td>
                                                    
                                                    </tr>
                                                 
                                                    @endforeach
                                                  </tbody>
                                            </table>
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