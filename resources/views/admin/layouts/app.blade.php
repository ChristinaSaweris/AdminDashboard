<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--favicon-->
    <link rel="icon" href="{{ url('Syndron/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link rel="stylesheet" href="{{ url('Syndron/plugins/notifications/css/lobibox.min.css') }}" />
    <link href="{{ url('Syndron/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{url('Syndron/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{url('Syndron/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{url('Syndron/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
{{--    <link href="{{url('Syndron/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />--}}
    <!-- loader-->
    <link href="{{ url('Syndron/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{url('Syndron/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{url('Syndron/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('Syndron/css/app.css')}}" rel="stylesheet">
    <link href="{{url('Syndron/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{url('Syndron/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{url('Syndron/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{url('Syndron/css/header-colors.css')}}" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Syndron - Bootstrap5 Admin Template</title>
</head>


<body>
<!-- Bootstrap JS -->
<script src="{{url('Syndron/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{url('Syndron/js/jquery.min.js')}}"></script>

<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    @include('admin.layouts.sidebar')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('admin.layouts.header')
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

        @yield('content')

        </div>
    </div>
    <!--end page wrapper -->
    @include('admin.layouts.footer')

</div>
<!--end wrapper-->

<!-- Bootstrap JS -->
<script src="{{url('Syndron/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{url('Syndron/js/jquery.min.js')}}"></script>
<script src="{{url('Syndron/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{ url('Syndron/plugins/input-tags/js/tagsinput.js') }}"></script>
<script src="{{url('Syndron/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{url('Syndron/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
{{--<script src="{{url('Syndron/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>--}}
{{--<script src="{{url('Syndron/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>--}}
{{--<script src="{{url('Syndron/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>--}}
{{--<script src="{{ url('Syndron/js/table-datatable.js') }}"></script>--}}
<script src="{{url('Syndron/js/index.js')}}"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace()
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="{{ url('Syndron/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<script src="{{ url('Syndron/js/add-new-product-image-upload.js') }}"></script>
<!--app JS-->
<script src="{{url('Syndron/js/app.js')}}"></script>
<!--notification js -->
<script src="{{ url('Syndron/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ url('Syndron/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ url('Syndron/plugins/notifications/js/notification-custom-script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
                error('{{$error}}')
        @endforeach
    </script>
@endif
{{--success messages--}}
@if(Session::has('success_message'))
    <script>
        toastr.options = {
            "progressBar":true,
            "closeButton":true
        }
        toastr.success("{{ Session::get('success_message') }}","Success!",{timeOut:12000});
    </script>
@endif

{{--error messages--}}
@if(Session::has('error_message'))
    <script>
        toastr.options = {
            "progressBar":true,
            "closeButton":true
        }
        toastr.error("{{ Session::get('error_message') }}","Error!",{timeOut:12000});
    </script>
@endif
@stack('script_1')
</body>

</html>
