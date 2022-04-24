
            @extends('layouts.admin.master')
            @section('title', 'Setting')
            @section('pageCss')
       
            @endsection
            @section('content')
            <div class="preloader">
            
            </div>
            
            <div class="page-content-wrapper">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-12">
                          <div class="card m-b-30">
                              <div class="card-body">
                    <form id="addNewsForm" method="GET" action="/admin/setSetting" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                      {{-- <div class="card">
                        <div class="card-body"> --}}
                          <h5 class="card-title">First Section</h5>
                            <select class="form-control" name="category_id1" aria-label="Default select example">
                              <option selected>{{$setting->category_id1}}</option>
                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        {{-- </div>
                      </div> --}}
                    </div>
    
                    <div class="form-group">
                      {{-- <div class="card">
                        <div class="card-body"> --}}
                          <h5 class="card-title">Second Section</h5>
                            <select class="form-control" name="category_id2" aria-label="Default select example">
                              <option value="{{$category->id}}" selected>{{$setting->category_id2}}</option>
                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        {{-- </div>
                      </div> --}}
                 
                    </div>
    
                    <div class="form-group">
                      {{-- <div class="card"> --}}
                        {{-- <div class="card-body"> --}}
                          <h5 class="card-title">Third Section</h5>
                            <select class="form-control" name="category_id3" aria-label="Default select example">
                              <option selected>{{$setting->category_id3}}</option>
                                @foreach ($categories as $category)
                                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        {{-- </div> --}}
                      {{-- </div> --}}
                    </div>
                    <div>
                      <button class="btn btn-primary" type="submit">submit</button>
                    </div>
                    </form>
                  </div>
                </div>
            </div>
                  </div>
                </div>
            </div>
                  
           
            @endsection
            @section('pageScripts')
            
            <script type='text/javascript'>
                var toastMixin = Swal.mixin({
                        toast: true,
                        title: 'General Title',
                        animation: false,
                        position: 'top-right',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });
                    var config = {
                        routes: {
                            add: "{!! route('category.store') !!}",
                            edit: "{!! route('category.edit') !!}",
                            update: "{!! route('category.update') !!}",
                            delete: "{!! route('category.delete') !!}",
                        }
                    };
            
                    $('#addButton').on('click', function() {
                        $('.dropify-preview').hide();
                        $('.CategoryAddForm').trigger('reset');
                    });
            
                    var path = "{{ url('/') }}" + '/images';
                    $(document).ready(function() {
            
                        $('.dropify').dropify();
                    });
            
                    $(document).ready(function() {
                        $('#categoryTable').DataTable({
                            "ordering": false,
                        });
            
                        $('#categoryTable tfoot tr').prependTo('#categoryTable thead');
                        $('.loader').hide();
            
                    });
            
                    // add form validation
                    $(document).ready(function() {
                        $(".CategoryAddForm").validate({
                            rules: {
                                add_name: {
                                    required: true,
                                },
                                add_description: {
                                    required: true,
                                    maxlength: 2000,
                                },
                            },
                            messages: {
                                add_name: {
                                    required: 'Please insert name',
                                },
            
                                add_description: {
                                    required: 'Please insert description',
                                },
                            },
                            errorPlacement: function(label, element) {
                                label.addClass('mt-2 text-danger');
                                label.insertAfter(element);
                            },
                        });
                    });
                    //end
            
                    // add  request
            
                    $(document).on('submit', '.CategoryAddForm', function(event) {
                        event.preventDefault();
                        $.ajax({
                            url: config.routes.add,
                            method: "POST",
                            data: new FormData(this),
                            contentType: false,
                            cache: false,
                            processData: false,
                            dataType: "json",
                            success: function(response) {
            
                                if (response.success == true) {
                                    var categoryTable = $('#categoryTable').DataTable();
                                    var row = $('<tr>')
                                        .append(`<td>` + response.data.category_name + `</td>`)
                                        .append(`<td>` + response.data.cat_code + `</td>`)
                                        .append(`<td><button type='button' class='btn btn-outline-purple' onclick='viewCategory(${response.data.id})'>
                                            <i class='fa fa-eye'></i>
                                        </button>
                                        <button type='button' class='btn btn-outline-purple' onclick='editCategory(${response.data.id})'>
                                            <i class='mdi mdi-pencil'></i>
                                        </button>
            
                                        <button type='button'  name='delete' class="btn btn-outline-danger"onclick="deleteCategory(${response.data.id})">
                                            <i class="mdi mdi-delete "></i>
                                        </button></td>`)
            
                                    var link_row = categoryTable.row.add(row).draw().node();
                                    $('#categoryTable tbody').prepend(row);
                                    $(link_row).addClass('categoryClass' + response.data.id + '');
            
                                    $('.CategoryAddForm').trigger('reset');
                                    if (response.data.message) {
                                        $('#addCategoryModal').modal('hide');
                                        toastMixin.fire({
                                            icon: 'success',
                                            animation: true,
                                            title: "" + response.data.message + ""
                                        });
                                    }
                                } else {
                                    toastMixin.fire({
                                        icon: 'error',
                                        animation: true,
                                        title: "" + response.data.error + ""
                                    });
                                }
                            }, //success end
                        });
                    });
            
                    //request end
            
                    var path = "{{ url('/') }}" + '/images/';
                    // view single
                    function viewCategory(id) {
                        $.ajax({
                            url: config.routes.edit,
                            method: "POST",
                            data: {
                                id: id,
                                _token: "{{ csrf_token() }}"
                            },
                            dataType: "json",
                            success: function(response) {
                                //alert("success");
                                if (response.success == true) {
            
                                    $('#view_name').text(response.category_name);
                                    $('#view_description').text(response.cat_code);
                                    $('#viewModal').modal('show');
            
                                } //success end
            
                            }
                        }); //ajax end
                    }
            
            
            
            
                    // Update product
                    //validation
                    $(document).ready(function() {
                        $(".updateCategoryForm").validate({
                            rules: {
                                edit_name: {
                                    required: true,
                                },
                                edit_description: {
                                    required: true,
                                    maxlength: 2000,
                                },
                            },
                            messages: {
                                edit_name: {
                                    required: 'Please insert name',
                                },
            
                                edit_description: {
                                    required: 'Please insert description',
                                },
                            },
                            errorPlacement: function(label, element) {
                                label.addClass('mt-2 text-danger');
                                label.insertAfter(element);
                            },
                        });
                    });
            
            
                    function editCategory(id) {
                        //alert(id);
                        $.ajax({
                            url: config.routes.edit,
                            method: "POST",
                            data: {
                                id: id,
                                _token: "{{ csrf_token() }}"
                            },
                            dataType: "json",
                            success: function(response) {
                                if (response.success == true) {
                                    $('#edit_name').val(response.data.category_name)
                                    $('#edit_description').val(response.data.cat_code)
                                    $('#hidden_id').val(response.data.id)
                                    $('#edit_modal').modal('show');
            
                                } //success end
            
                            }
                        });
                        $(document).off('submit', '.updateCategoryForm');
                        $(document).on('submit', '.updateCategoryForm', function(event) {
                            event.preventDefault();
                            $.ajax({
                                url: config.routes.update,
                                method: "POST",
                                data: new FormData(this),
                                contentType: false,
                                cache: false,
                                processData: false,
                                dataType: "json",
                                success: function(response) {
            
                                    if (response.success == true) {
                                        $('.categoryClass' + response.data.id).html(
                                            `
                                            <td>${response.data.category_name}</td>
                                            <td>${response.data.cat_code}</td>
                                            <td><button type='button' class='btn btn-outline-purple' onclick='viewCategory(${response.data.id})'>
                                            <i class='fa fa-eye'></i>
                                        </button>
                                        <button type='button' class='btn btn-outline-purple' onclick='editCategory(${response.data.id})'>
                                            <i class='mdi mdi-pencil'></i>
                                        </button>
            
                                        <button type='button'  name='delete' class="btn btn-outline-danger"onclick="deleteCategory(${response.data.id})">
                                            <i class="mdi mdi-delete "></i>
                                        </button></td>
                                            `
                                        );
            
                                        if (response.data.message) {
                                            $('#edit_modal').modal('hide');
                                            toastMixin.fire({
                                                icon: 'success',
                                                animation: true,
                                                title: "" + response.data.message + ""
                                            });
                                            $('.updateCategoryForm')[0].reset();
                                        }
                                    } else {
            
                                        toastMixin.fire({
                                            icon: 'error',
                                            animation: true,
                                            title: "" + response.data.error + ""
                                        });
            
                                    }
            
                                }, //success end
                            });
                        });
            
                    }
            
            
            
                    // delete slider
                    function deleteCategory(id) {
                        // alert(id)
                        Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: "POST",
                                    url: config.routes.delete,
                                    data: {
                                        id: id,
                                        _token: "{{ csrf_token() }}"
                                    },
                                    dataType: 'JSON',
                                    success: function(response) {
                                        if (response.success === true) {
                                            Swal.fire(
                                                'Deleted!',
                                                "" + response.data.message + "",
                                                'success'
                                            )
                                            // swal("Done!", response.data.message, "success");
                                            $('#categoryTable').DataTable().row('.categoryClass' + response.data.id)
                                                .remove()
                                                .draw();
                                        } else {
                                            Swal.fire("Error!", "" + response.message + "", "error");
                                        }
                                    }
                                });
            
                            }
                        })
            
            
                    }
                    //end
            </script>
            @endsection