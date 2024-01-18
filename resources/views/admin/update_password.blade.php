@extends('admin.layouts.app')
@section('content')
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-5 border-end">
                            <div class="card-body">
                                <div class="p-5">
                                    <h4 class=" font-weight-bold">Update Admin Password</h4>
                                    <form method="post" action="{{ url('admin/update_password') }}">@csrf

                                        <div class="mb-3 mt-3">
                                            <label for="admin_email">Email Address</label>
                                            <input id="admin_email" class="form-control"
                                                   value="{{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->email }} " readonly />
                                        </div>
                                        <div class="mb-3 ">
                                            <label for="current_password">Current Password</label>
                                            <input type="text" class="form-control" id="current_password" name="current_password" placeholder="Enter Your Current password" />
                                            <span id="verifyCurrentPassword"></span>
                                        </div>
                                        <div class="mb-3 mt-2">
                                            <label for="new_password">New Password</label>
                                            <input type="text" class="form-control" id="new_password" name="new_password" placeholder="Enter Your New password" />
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirm_password">Confirm Password</label>
                                            <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Your New password" />
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <img src="{{ url('Syndron/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <script src="{{ url('Syndron/js/custom.js') }}"></script>

@endsection
