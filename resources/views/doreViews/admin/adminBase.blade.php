<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dore jQuery - Admin Customization with Laravel 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- font-->
    <link rel="stylesheet" href="{{ asset('/font/iconsmind-s/css/iconsminds.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/font/simple-line-icons/css/simple-line-icons.css') }}"/>
    <script src="https://use.fontawesome.com/6ecd46a791.js"></script>


    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.rtl.only.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/fullcalendar.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/dataTables.bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/datatables.responsive.bootstrap4.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/perfect-scrollbar.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/glide.core.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap-stars.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/nouislider.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap-datepicker3.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/vendor/component-custom-switch.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body id="app-container" class="menu-default show-spinner">

@include('doreViews.admin.body.header')
@include('doreViews.admin.body.mainMenu')

<main>

    @yield('admin')

</main>


@include('doreViews.admin.body.footer')



<!-- Scripts-->
<script src="{{ asset('/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('/js/vendor/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
<script src="{{ asset('/js/vendor/moment.min.js')}}"></script>
<script src="{{ asset('/js/vendor/fullcalendar.min.js')}}"></script>
<script src="{{ asset('/js/vendor/datatables.min.js')}}"></script>
<script src="{{ asset('/js/vendor/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('/js/vendor/progressbar.min.js')}}"></script>
<script src="{{ asset('/js/vendor/jquery.barrating.min.js')}}"></script>
<script src="{{ asset('/js/vendor/select2.full.js')}}"></script>
<script src="{{ asset('/js/vendor/nouislider.min.js')}}"></script>
<script src="{{ asset('/js/vendor/bootstrap-datepicker.js')}}"></script>
<script src="{{ asset('/js/vendor/Sortable.js')}}"></script>
<script src="{{ asset('/js/vendor/mousetrap.min.js')}}"></script>
<script src="{{ asset('/js/vendor/glide.min.js')}}"></script>
<script src="{{ asset('/js/dore.script.js')}}"></script>
<script src="{{ asset('/js/scripts.js')}}"></script>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
    $(function(){
        $(document).on('click','#delete',function(e){
            e.preventDefault();
            var link = $(this).attr("href");


            Swal.fire({
                title: '{{ __('Are you sure?') }}',
                text: "{{ __('Delete This Data?') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ __('Yes, delete it!') }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link
                    Swal.fire(
                        '{{__('Deleted!')}}',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })


        });

    });


</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type','info') }}"
    toastr.options =
        {
            'positionClass': 'toast-top-left'
        }
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;

        case 'success':
            toastr.success(" {{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;

        case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break;
    }
    @endif
</script>


</body>

</html>
