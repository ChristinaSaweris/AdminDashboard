@extends('admin.layouts.app')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Ecommerce</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <form action="{{ url('admin/view_add_order') }}">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary">Add New Order</button>
                    </div>
                </form>

            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">Orders Data</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <livewire:orders-table />
            </div>
        </div>
    </div>
@endsection
