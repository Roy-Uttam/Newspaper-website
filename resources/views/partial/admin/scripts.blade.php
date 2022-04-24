<!-- jQuery  -->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/modernizr.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backend/assets/js/waves.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.scrollTo.min.js') }}"></script>

<!-- Required datatable js -->
<script src="{{ asset('backend/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Buttons examples -->
<script src="{{ asset('backend/assets/plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>


<!-- Datatable init js -->
<script src="{{ asset('backend/assets/pages/datatables.init.js') }}"></script>

<!--Morris Chart-->


<script src="{{ asset('backend/assets/pages/dashboard.js') }}"></script>

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>

<script src="{{asset('backend/assets/js/autoNumeric.js')}}"></script>
<script src="{{asset('backend/assets/js/bd_currency_format.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.5/sweetalert2.min.js"
integrity="sha512-+uGHdpCaEymD6EqvUR4H/PBuwqm3JTZmRh3gT0Lq52VGDAlywdXPBEiLiZUg6D1ViLonuNSUFdbL2tH9djAP8g=="
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

$(document).ajaxStart(function() {
        $('.preloader').empty();
        $('.preloader').addClass('ajax_loader').append(
            `<div class='preloader'>
                <div id="status">
                    <div class="spinner"></div>
                </div>
            </div>`
        );
    });


    $(document).ajaxComplete(function() {
        $('.preloader').removeClass('ajax_loader').empty();
    });
    
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-center",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
    @if(Session::has('error'))
    var message = "{{ Session::get('error') }}";
        toastr["error"](message)
     @endif

      // for alert message
    var toastMixin = Swal.mixin({
        toast: true,
        title: 'General Title',
        animation: false,
        position: 'bottom-right',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

// dropify initialize
    $('.dropify').dropify();

    var imagesUrl = '{!! URL::asset('/images/') !!}/';
</script>
