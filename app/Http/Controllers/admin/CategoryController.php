<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Category::with('parentCategory')->get()->toArray();
//      dd($categories);
        return view('admin.categories.categories')->with(compact('categories'));
    }

    public function updateCategoryStatus(Request $request)
    {
        $category = Category::where('id', $request->category_id)->first();
        // Update the status: If current status is 1, set to 0; if 0, set to 1
        $category->status = $category->status == 1 ? 0 : 1;
        $category->save();
        return response()->json(['category_id' => $request->category_id, 'status'=>$category->status]);


    }

    public function deleteCategory($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back()->with('success message', 'Category deleted Successfully');
    }

    public function addCategoryView()
    {
        $categories = Category::getCategories();
        return view('admin.categories.add_category',compact('categories'));
    }

    public function addCategory(Request $request)
    {
        $data = $request->all();
        $category = new Category();

        $rules = [
            'category_name' => 'required',
            'category_url' => 'required',
        ];

        $customMessages = [
            'category_name.required' => "Name is Required!",
            'category_url.required' => "url is Required!",
        ];
        $this->validate($request, $rules, $customMessages);

        $category->category_name = $data['category_name'];
        $category->category_discount = $data['category_discount'];
        $category->url = $data['category_url'];
        $category->description = $data['category_description'];
        $category->parent_id = $data['category_id'];
        $category->category_image = "";
        $category->meta_title = $data['meta_title'];;
        $category->meta_description = $data['meta_description'];;
        $category->meta_keywords = $data['meta_keywords'];;
        $category->status = $data['category_status'];;
        $category->save();
        return redirect()->back()->with('success_message',"Category has been added Successfully!");
    }
}
