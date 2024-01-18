@extends('admin.layouts.app')
@section('content')
    <div class="card border-top border-0 border-4 border-primary">
        <div class="card-body p-5">
            <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                </div>
                <h5 class="mb-0 text-primary">User Details</h5>
            </div>
            <hr>
            <form class="row g-3" method="post" action="{{ url('admin/update_admin_details') }}">@csrf
                <div class="col-6">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
                        <input type="text" class="form-control border-start-0" id="inputEmailAddress"
                               value="{{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->email }} " readonly/>
                    </div>
                </div>
                <div class="col-6">
                    <label for="admin_address" class="form-label">Address</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock' ></i></span>
                        <input type="text" class="form-control border-start-0" id="admin_address" name="admin_address" placeholder="Address" />
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="admin_name" class="form-label">Name</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                        <input type="text" class="form-control border-start-0" id="admin_name" name="admin_name" placeholder="Name" />
                    </div>
                </div>
                <div class="col-6">
                    <label for="admin_phone" class="form-label">Phone No</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
                        <input type="text" class="form-control border-start-0" id="admin_phone" name="admin_phone" placeholder="Phone No" />
                    </div>
                </div>


                <div class="col-6">
                    <label for="admin_type" class="form-label">Type</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                        <input type="text" class="form-control border-start-0" id="admin_type" name="admin_type" placeholder="Type" />
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
