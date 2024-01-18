@extends('admin.layouts.app')
@section('content')
    <!--breadcrumb-->
{{--    @dd($categories)--}}
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Add New Product</h5>
            <hr/>
            <form method="post" action="{{ url('admin/add_product') }}" >
                @csrf
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product title">
                            </div>
                            <div class="col-12">
                                <label for="category_id" class="form-label">Product Type</label>
                                <select class="form-select" id="category_id" name="category_id">
                                    <option>Select Category</option>
                                @foreach($categories as $cat)
                                     <option value="{{ $cat['id'] }}">-{{ $cat['category_name'] }}</option>
                                     @if(!empty($cat['sub_categories']))
                                         @foreach($cat['sub_categories'] as $subcat)
                                                <option value="{{ $subcat['id'] }}">&nbsp;&nbsp;&nbsp;--{{ $subcat['category_name'] }}</option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="product_description" class="form-label">Description</label>
                                <textarea class="form-control" id="product_description" name="product_description" rows="3"></textarea>
                            </div>
{{--                            <div class="mb-3">--}}
{{--                                <label for="inputProductDescription" class="form-label">Product Images</label>--}}
{{--                                <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="border border-3 p-4 rounded">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="product_price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="product_price" name="product_price" placeholder="00.00">
                                </div>
                                <div class="col-md-6">
                                    <label for="product_discount" class="form-label">Product Discount</label>
                                    <input type="text" class="form-control" id="product_discount" name="product_discount" placeholder="00.00">
                                </div>
                                <div class="col-md-6">
                                    <label for="status" class="form-label">status</label>
                                    <input type="text" class="form-control" id="status" name="status" placeholder="00.00">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Save Product</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end row-->
            </div>
            </form>
        </div>
    </div>

@endsection
