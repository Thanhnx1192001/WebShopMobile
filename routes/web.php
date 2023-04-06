<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeedBackController;
use App\Http\Controllers\Admin\ManufacturerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\OrderDetailController;
use App\Http\Controllers\Admin\OrderUserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ThumbnailController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/home', function () {
//     return view('user.page.home.home');
// })->name('home');
Route::get('/product', function () {
    return view('user.page.product.product');
})->name('iphone');
Route::get('/productdetail', function () {
    return view('user.page.product_detail.product_detail');
})->name('iphone14');
Route::get('/cart', function () {
    return view('user.page.cart.cart');
})->name('cart');
Route::get('/cart_complete', function () {
    return view('user.page.cart.cart_complete');
})->name('cart_complete');
Route::get('/cart_detail', function () {
    return view('user.page.cart.cart_detail');
})->name('cart_detail');

Route::get('/blog', function () {
    return view('user.page.blog.blog');
})->name('blog');

Route::get('/order_check', function () {
    return view('user.page.order_check.order_check');
})->name('order_check');




Route::middleware(['auth', 'checkrole'])->group(function () {
    Route::get('/admin_home', function () {
        return view('admin.page.home.home');
    })->name('admin_home');
    
    Route::resource('admin_category', CategoryController::class);

    Route::resource('admin_manufacturer', ManufacturerController::class);

    Route::resource('admin_product', ProductController::class);

    Route::resource('admin_blog', BlogController::class);

    Route::resource('admin_order', OrderController::class);

    Route::resource('admin_order_detail', OrderDetailController::class);

    Route::resource('admin_order_user', OrderUserController::class);

    Route::resource('admin_feed_back', FeedBackController::class);

    Route::resource('admin_banner', BannerController::class);

    Route::resource('admin_thumbnail', ThumbnailController::class);

    Route::resource('admin_user', UserController::class);

    
    Route::get('/admin_profile', function () {
        return view('admin.page.user_manager.profile');
    })->name('admin_profile');
    });

    Route::get('/test', function () {
        return view('test');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/home');
})->name('logout');



