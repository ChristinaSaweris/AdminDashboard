<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{url('Syndron/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link rel="stylesheet" href="{{ url('Syndron/plugins/notifications/css/lobibox.min.css') }}" />
    <link href="{{url('Syndron/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{url('Syndron/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{url('Syndron/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{url('Syndron/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{url('Syndron/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{url('Syndron/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('Syndron/css/app.css')}}" rel="stylesheet">
    <link href="{{url('Syndron/css/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Log In</title>
</head>

<body class="bg-login">
<!--wrapper-->
<div class="wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                <div class="text-center">
                                    <h3 class="">Sign in</h3>
                                    <p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
                                    </p>
                                </div>
                                <div class="login-separater text-center mb-4"> <span>SIGN IN WITH EMAIL</span>
                                    <hr/>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" action="{{ url('admin/login') }}" method="post">@csrf
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input name="email" type="text" class="form-control" id="inputEmailAddress" placeholder="Email Address">
                                        </div>
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input name="password" type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                        </div>
{{--                                        <div class="col-md-6">--}}
{{--                                            <div class="form-check form-switch">--}}
{{--                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>--}}
{{--                                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>--}}
{{--                                        </div>--}}
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row-->
        </div>
    </div>
</div>
<!--end wrapper-->
<!--Bootstrap JS -->
<script src="{{url('Syndron/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{url('Syndron/js/jquery.min.js')}}"></script>
<script src="{{url('Syndron/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{url('Syndron/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{url('Syndron/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>

<!--notification js -->
<script src="{{ url('Syndron/plugins/notifications/js/lobibox.min.js') }}"></script>
<script src="{{ url('Syndron/plugins/notifications/js/notifications.min.js') }}"></script>
<script src="{{ url('Syndron/plugins/notifications/js/notification-custom-script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>

<!--app JS-->
<script src="{{url('Syndron/js/app.js')}}"></script>
{{--validation error messages--}}
@if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
        error('{{$error}}')
        @endforeach
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

</body>

</html>
