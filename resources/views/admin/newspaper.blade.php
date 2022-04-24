@extends('layouts.admin.master')
@section('title', 'News')
@section('pageCss')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                        <div class="d-flex justify-content-between mb-4">
                            <div class="ms-header-text">
                                <h4 class="mt-0 header-title">All Categories</h4>
                            </div>

                            <button type="button" class="btn btn-outline-purple float-right waves-effect waves-light"
                                name="button" id="addButton" data-toggle="modal" data-target="#addCategoryModal"> Add
                                New
                            </button>
                        </div>
                        <span class="showError"></span>
                        <div class="table-responsive">
                            <table id="categoryTable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>image</th>
                                        <th>Name</th>
                                        <th>title</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($news))
                                    @foreach ($news as $category)
                                    <tr class="categoryClass{{ $category->id }}">
                                        <td>
                                            <img class='img-fluid' src="{{ asset('images/' . $category->image) }}"
                                                alt="{{ $category->name }}" style='width: 60px; height: 55px;'>
                                        </td>
                                        <td>{{ $category->name}}</td>
                                        <td>{{ $category->title}}</td>
                                        {{-- <td>{{ $category->image}}</td> --}}


                                        <td class="actionBtn text-center">
                                            <button type='button' class='btn btn-outline-purple'
                                                onclick='viewCategory({{ $category->id }})'><i
                                                    class='fa fa-eye'></i></button>
                                            <button type='button' class='btn btn-outline-purple '
                                                onclick='editCategory({{ $category->id}})'><i
                                                    class='mdi mdi-pencil'></i></button>
                                            <button type='button' name='delete' class="btn btn-outline-danger "
                                                onclick="deleteCategory({{ $category->id}})"><i
                                                    class="mdi mdi-delete "></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div><!-- container -->
</div> <!-- Page content Wrapper -->


<!-- Add  Modal -->
<div class="modal fade bs-example-modal-center" id="addCategoryModal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block">
                <h5 class="modal-title mt-0 text-center">Add Category</h5>
                <button type="button" class="close modal_close_icon" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="CategoryAddForm" method="POST"> @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Type name" />
                    </div>
                    <div class="form-group">
                        <label>title</label>
                        <input type="text" class="form-control" name="title" placeholder="Type title" />
                    </div>
                    <div class="form-group">
                        <label>detail</label>
                        <textarea type="text" class="form-control" id="details" name="detail" placeholder="Type detail"></textarea>
                    </div>
                        <div class="form-group">
                            <label>Select Category</label>
                            <select name="category" class="form-control">
                                <option value="">Select
                                </option>
                                @foreach ($categories as $sub_category)
                                <option value="{{ $sub_category->id }}">{{ $sub_category->category_name }}
                                </option>
                                @endforeach
                            </select>
                            <label id="category-error" class="error mt-2 text-danger" for="category"></label>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for=""> Cover Photo</label>
                                <div class="custom-file">
                                    <input type="file" name="cover_photo" class="custom-file-input dropify"
                                        data-errors-position="outside" data-allowed-file-extensions='["jpg", "png","jpeg"]'
                                        data-max-file-size="5M" data-height="120">
                                </div>
                                <label id="cover_photo-error" class="error mt-2 text-danger" for="cover_photo"></label>
                            </div>
                        </div>
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-block btn-success waves-effect waves-light">
                                Submit
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Add  Modal End -->

<!-- Edit  Modal -->
<div class="modal fade bs-example-modal-center" id="edit_modal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block">
                <h5 class="modal-title mt-0 text-center">Update Category</h5>
                <button type="button" class="close modal_close_icon" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form class="updateCategoryForm" method="POST"> @csrf
                    <input type="hidden" name="hidden_id" id="hidden_id">

                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Type name" />
                    </div>
                    <div class="form-group">
                        <label>title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Type title" />
                    </div>
                    <div class="form-group">
                        <label>detail</label>
                        <textarea type="text" class="form-control" id="details" name="detail" placeholder="Type detail"></textarea>
                    </div>
                        <div class="form-group">
                            <label>Select Category</label>
                            <select id="category" name="category" class="form-control">
                                <option value="">Select
                                </option>
                                @foreach ($categories as $sub_category)
                                <option value="{{ $sub_category->id }}">{{ $sub_category->category_name }}
                                </option>
                                @endforeach
                            </select>
                            <label id="category-error" class="error mt-2 text-danger" for="category"></label>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for=""> Cover Photo</label>
                                <div class="custom-file">
                                    <input type="file" id="image" name="cover_photo" class="custom-file-input dropify"
                                        data-errors-position="outside" data-allowed-file-extensions='["jpg", "png","jpeg"]'
                                        data-max-file-size="0.6M" data-height="120">
                                </div>
                                <label id="cover_photo-error" class="error mt-2 text-danger" for="cover_photo"></label>
                            </div>
                        </div>
                    
                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-block btn-success waves-effect waves-light">
                                Submit
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Edit  Modal End -->
<!-- view  Modal -->
<div class="modal fade bs-example-modal-center" id="viewModal" tabindex="-1" role="dialog"
    aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header d-block">
                <h5 class="modal-title mt-0 text-center">Category Details</h5>
                <button type="button" class="close modal_close_icon" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-form-group">
                        <label for="view_name"><strong>Name</strong></label>
                        <p id="view_name"></p>
                    </div>
                </div>

                <div class="col-xl-12 col-md-12">
                    <div class="ms-form-group">
                        <label for="link"><strong>Category Code</strong></label>
                        <p><span> <a id="view_description"></a> </span> </p>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-block btn-success waves-effect waves-light"
                        data-dismiss="modal" aria-hidden="true">
                        Done
                    </button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- view  Modal End -->
@endsection
@section('pageScripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
    $('#details').summernote();
  });
</script>
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
                add: "{!! route('item.store') !!}",
                edit: "{!! route('item.edit') !!}",
                update: "{!! route('item.update') !!}",
                delete: "{!! route('item.delete') !!}",
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
            // $(".CategoryAddForm").validate({
            //     rules: {
            //         add_name: {
            //             required: true,
            //         },
            //         add_description: {
            //             required: true,
            //             maxlength: 2000,
            //         },
            //     },
            //     messages: {
            //         add_name: {
            //             required: 'Please insert name',
            //         },

            //         add_description: {
            //             required: 'Please insert description',
            //         },
            //     },
            //     errorPlacement: function(label, element) {
            //         label.addClass('mt-2 text-danger');
            //         label.insertAfter(element);
            //     },
            // });
        });
        //end

        // add  request
        var path = "{{ url('/') }}" + '/images/';
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
                            .append(`<td><img class="img-fluid" src="${path}` +
                                `${response.data.image}" style='width: 60px; height: 55px;'></td>`
                            )
                            .append(`<td>` + response.data.name + `</td>`)
                            .append(`<td>` + response.data.title + `</td>`)
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
            // $(".updateCategoryForm").validate({
            //     rules: {
            //         edit_name: {
            //             required: true,
            //         },
            //         edit_description: {
            //             required: true,
            //             maxlength: 2000,
            //         },
            //     },
            //     messages: {
            //         edit_name: {
            //             required: 'Please insert name',
            //         },

            //         edit_description: {
            //             required: 'Please insert description',
            //         },
            //     },
            //     errorPlacement: function(label, element) {
            //         label.addClass('mt-2 text-danger');
            //         label.insertAfter(element);
            //     },
            // });
        });


        function editCategory(id) {
            // alert(id);
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
                        $('#name').val(response.data.name)
                        $('#title').val(response.data.title)
                        $('#details').val(response.data.details)
                        $('#category').val(response.data.category)
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
                                <td>${response.data.name}</td>
                                <td>${response.data.title}</td>
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