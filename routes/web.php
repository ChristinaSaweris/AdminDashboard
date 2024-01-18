<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Admin Routes group
Route::prefix('/admin')->namespace('App\Http\Controllers\admin')->group(function (){
    Route::match(['get', 'post'],'login', [AdminController::class, 'login']);
    Route::group(['middleware'=>['admin']],function (){
        Route::get('dashboard',[AdminController::class, 'viewDashboard']);
        Route::match(['get','post'],'update_password', [AdminController::class,'updatePassword']);
        Route::match(['get','post'],'update_admin_details', [AdminController::class,'updateAdminDetails']);
        Route::post('check_current_password', [AdminController::class,'checkCurrentPassword']);
        Route::get('logout', [AdminController::class,'logout']);

        //Categories Routes
        Route::get('categories',[CategoryController::class,'categories']);
        Route::get('view_add_category',[CategoryController::class,'addCategoryView']);
        Route::post('add_category',[CategoryController::class,'addCategory']);
        Route::post('update_category_status',[CategoryController::class,'updateCategoryStatus']);
        Route::get('delete_category/{id}',[CategoryController::class,'deleteCategory']);

        //Products Routes
        Route::get('products', [ProductController::class,'getProducts']);
        Route::get('view_add_product',[ProductController::class,'addProductView']);
        Route::post('add_product',[ProductController::class,'addProduct']);
        Route::post('update_product_status',[ProductController::class,'updateProductStatus']);
        Route::get('delete_product/{id}',[ProductController::class,'deleteProduct']);

        //Customers Routes
        Route::get('customers', [\App\Livewire\CustomersTable::class,'showCustomers']);
        Route::get('view_add_customer',[\App\Livewire\CustomersTable::class,'addCustomerView']);

        //Orders Routes
        Route::get('orders', [\App\Livewire\OrdersTable::class,'showOrders']);
        Route::get('view_add_order',[\App\Livewire\OrdersTable::class,'addOrderView']);

        //Safe Routes
        Route::get('safe', [\App\Livewire\SafeTable::class,'showSafe']);


    });
});



