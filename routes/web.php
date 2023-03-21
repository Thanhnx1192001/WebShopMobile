<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('user.page.home.home');
})->name('home');
Route::get('/product', function () {
    return view('user.page.product.product');
})->name('iphone');
Route::get('/productdetail', function () {
    return view('user.page.product_detail.product_detail');
})->name('iphone14');
Route::get('/cart', function () {
    return view('user.page.cart.cart');
})->name('cart');

Route::get('/blog', function () {
    return view('user.page.blog.blog');
})->name('blog');

Route::get('/login', function () {
    return view('user.page.login.login');
})->name('login');

Route::get('/order_check', function () {
    return view('user.page.order_check.order_check');
})->name('order_check');




Route::get('/admin_dashboard', function () {
    return view('admin.page.dashboard');
})->name('admin_dashboard');

Route::get('/admin_category', function () {
    return view('admin.page.category_manager.category');
})->name('admin_category');

Route::get('/admin_product', function () {
    return view('admin.page.category_manager.product');
})->name('admin_product');

Route::get('/admin_blog', function () {
    return view('admin.page.category_manager.blog');
})->name('admin_blog');

Route::get('/test', function () {
    return view('test');
});


