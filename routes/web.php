<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\UserProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class, 'index']);



Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');
    Route::get('/dashboard/profile',[UserController::class,'profile'])->name('profile');
    Route::get('/dashboard/prdouct/forms', [ProductController::class, 'index'])->name('add.product');
    Route::post('/dashboard/product/add', [ProductController::class, 'create'])->name('create.product');
    Route::get('/dashboard/product/list' , [ProductController::class, 'list'])->name('product_list');
    Route::GET('/dashboard/product/delete/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
    Route::get('/dashboard/product/detail/{id}',  [ProductController::class, 'detail'])->name('edit.product');
    Route::put('dashboard/product',  [ProductController::class, 'update'])->name('update.product');
    Route::get('/dashboard/categorie/liste', [ProductController::class, 'cate_liste'])->name('liste.cate');




    Route::post('/dashboard/profile/seller/',[SellerController::class,'create'])->name('seller.store');
    Route::get('/dashboard/profile/seller/form',[SellerController::class,'register'])->name('seller.register.form');
    Route::get('/dashboard/profile/seller/updateprofileform',[SellerController::class,'updateprofile'])->name('seller.update.form');
    Route::get('/dashboard/profile/seller/updatepasswordprofileform',[SellerController::class,'updatepasswordprofile'])->name('seller.update.password.form');
    Route::get('/dasboard/profile/seller/edit/{id}' , [SellerController::class , 'edit_update_seller_information'])->name('seller.edit');
    Route::get('/dasboard/profile/seller/update/{id}' , [ProductController::class , 'detail'])->name('product.detail');

    Route::post('/dashboard/profile/seller/update',[SellerController::class,'update'])->name('seller.update');

   


});

Route::post('/pages/product/detail/comment/add',[CommentController::class,'add'])->name('comment.add');

Route::get('/pages/product/detail/comment/delete/{id}',[CommentController::class,'delete'])->name('comment.delete');

Route::post('/pages/product/detail/comment/edit',[CommentController::class,'edit'])->name('comment.edit');

Route::get('/product', [UserProductController::class, 'index']);


Route::get('/category/list', [CategoryController::class, 'list'])->name('cate.liste');
Route::get('/product/details/{id}', [UserProductController::class, 'show'])->name('products.detail');

Route::get('/category/forms', [CategoryController::class, 'index']);
Route::post('/category/add', [CategoryController::class, 'store'])->name('cate.create');
Route::get('/seller' , function(){
    return view('service.seller');
});

Route::get('/pages/categories',[UserController::class,'showcate']);
Route::get('/pages/categories/products/{id}',[UserController::class,'showcateProduct'])->name('cate.productlink');