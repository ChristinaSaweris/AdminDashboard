<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts(){
        $products = Product::with('category')->get()->toArray();
//        dd($products);
        return view('admin.products.view_products')->with(compact('products'));
    }

    public function deleteProduct($id){
        Order::where('product_id', $id)->delete();
        Product::where('id',$id)->delete();
        return redirect()->back()->with('success message','Category deleted Successfully');
    }

    public function addProductView(){
        $categories = Category::getCategories();
        return view('admin.products.add_product',compact('categories'));
    }

    public function addProduct(Request $request){
        $data= $request->all();
        $product = new Product();

        $rules =[
            'product_name'=>'required',
            'category_id'=>'required',
            'product_price'=>'required',
            'status'=>'required',
        ];

        $customMessages = [
            'product_name.required' => "Name is Required!",
            'category_id.required' => "Product Type is Required!",
            'product_price.required' => "Product Price is Required!",
            'status.required' => "Product status is Required!",
        ];
        $this->validate($request,$rules, $customMessages);

        $product->product_name =$data['product_name'];
        $product->category_id =$data['category_id'];
        $product->product_description =$data['product_description'];
        $product->product_image ='';
        $product->product_price =$data['product_price'];
        $product->product_discount = $data['product_discount'];
        $product->product_final_price= $product->product_price - ($product->product_price * $product->product_discount/100);
        $product->status = $data['status'];
        $product->save();
        return redirect()->back()->with('success_message', "Product hsa been Added Successfully!");
    }

    public function updateProductStatus(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        // Update the status: If current status is 1, set to 0; if 0, set to 1
        $product->status = $product->status == 1 ? 0 : 1;
        $product->save();
        return response()->json(['id' => $request->id, 'status'=>$product->status]);


    }
}
