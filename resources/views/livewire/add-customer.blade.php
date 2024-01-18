<div>
    <form wire:submit.prevent="createNewCustomer" >
        @csrf
        <div class="form-body mt-4">
            <div class="row">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                            <div class="row">
                                <div class="col_lg_6">
                                    <div class="mb-3">
                                        <label for="customer_name" class="form-label">Name</label>
                                        <input wire:model="name" type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter customer name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_phone" class="form-label">Phone</label>
                                        <input wire:model="phone" class="form-control" id="customer_phone" name="category_id" placeholder="Enter customer phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="customer_address" class="form-label">Address</label>
                                        <input wire:model="address" type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter customer address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex justify-content-center">
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary px-5">Save Customer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </form>
</div>
