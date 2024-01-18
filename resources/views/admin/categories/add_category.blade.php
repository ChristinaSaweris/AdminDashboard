@extends('admin.layouts.app')
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Category</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body p-4">


            <h5 class="card-title">Add New Category</h5>
            <hr/>
           <form method="post" action="{{ url('admin/add_category') }}"> @csrf
              <div class="row">
                  <div class="col-lg-6">
                      <div class="mb-3">
                          <label for="category_name" class="form-label">Category Name</label>
                          <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter product title">
                      </div>
                      <div class=" mb-3">
                          <label for="category_id" class="form-label">Product Type</label>
                          <select class="form-select" id="category_id" name="category_id">
                              <option>Select Category</option>
                              @foreach($categories as $cat)
                                  <option value="{{ $cat['id'] }}">-{{ $cat['category_name'] }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="mb-3">
                          <label for="category_discount" class="form-label">Category Discount</label>
                          <input type="text" class="form-control" id="category_discount" name="category_discount" placeholder="Enter product title">
                      </div>
                      <div class="mb-3">
                          <label for="category_url" class="form-label">Category Url</label>
                          <input type="text" class="form-control" id="category_url" name="category_url" placeholder="Enter product title">
                      </div>
                      <div class="mb-3">
                          <label for="meta_title" class="form-label">Meta Title</label>
                          <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter product title">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="mb-3">
                          <label for="meta_description" class="form-label">meta description</label>
                          <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Enter product title">
                      </div>
                      <div class="mb-3">
                          <label for="meta_keywords" class="form-label">meta keywords</label>
                          <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Enter product title">
                      </div>
                      <div class="mb-3">
                          <label for="category_status" class="form-label">Category status</label>
                          <input type="text" class="form-control" id="category_status" name="category_status" placeholder="Enter product title">
                      </div>
                      <div class="mb-3">
                          <label for="category_description" class="form-label">Description</label>
                          <textarea class="form-control" id="category_description" name="category_description" rows="3"></textarea>
                      </div>
                  </div>
              </div>
               <div class="d-flex justify-content-end">
                       <button type="submit" class="btn btn-primary px-5">Save Category</button>
               </div>
               <!--end row-->
           </form>
        </div>
    </div>
@endsection
