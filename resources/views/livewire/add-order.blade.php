<div>
    <form wire:submit.prevent="createNewOrder">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <label for="customer_id" class="form-label">Customer ID:</label>
                    <select class="form-select"  wire:model="customer_id" id="customer_id">
                        <option value="">Select a customer</option>
                        @foreach ($customers as  $customer)
                            <option value="{{ $customer['id'] }}">
                                {{ $customer['customer_name'] }}
                            </option>
                        @endforeach
                    </select>
                    <!-- Add validation messages as needed -->
                </div>
                <div>
                    <label class="form-label" for="product_id">Product:</label>
                    <select class="form-select"  wire:change="getProductInfo" wire:model="product_id" id="product_id" name="product_id">
                        <option value="">Select a product</option>
                        @foreach ($products as  $product)
                            <option value="{{ $product['id'] }}">
                                {{ $product['product_name'] }}
                            </option>
                        @endforeach
                    </select>
                    <!-- Add validation messages as needed -->
                </div>
                <div>
                    <label class="form-label" for="product_price">Price:</label>
                    <input class="form-control" type="text" id="product_price" wire:model="product_price" readonly>
                    <!-- Add validation messages as needed -->
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <label class="form-label" for="product_discount">Discount:</label>
                    <input class="form-control" type="text"  id="product_discount" wire:model="Product_discount"  readonly>
                    <!-- Add validation messages as needed -->
                </div>

                <div>
                    <label class="form-label" for="amount">Amount:</label>
                    <input class="form-control" type="text" wire:keyup="getProductAmount" wire:model="amount" id="amount">
                    <!-- Add validation messages as needed -->
                </div>

                <div>
                    <label class="form-label" for="final_price">Final Price:</label>
                    <input class="form-control" type="text" wire:model="final_price" id="final_price">
                    <!-- Add validation messages as needed -->
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mt-3">Add Order</button>
        </div>
    </form>

</div>
