<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

Route::get('/phone', [App\Http\Controllers\User\ProductController::class, 'phone'])->name('phone');
Route::get('/phone/apple', [App\Http\Controllers\User\ProductController::class, 'phone_apple'])->name('phone_apple');
Route::get('/phone/samsung', [App\Http\Controllers\User\ProductController::class, 'phone_samsung'])->name('phone_samsung');
Route::get('/phone/google', [App\Http\Controllers\User\ProductController::class, 'phone_google'])->name('phone_google');
Route::get('/phone/xiaomi', [App\Http\Controllers\User\ProductController::class, 'phone_xiaomi'])->name('phone_xiaomi');
Route::get('/phone/asus', [App\Http\Controllers\User\ProductController::class, 'phone_asus'])->name('phone_asus');

Route::get('/tablet', [App\Http\Controllers\User\ProductController::class, 'tablet'])->name('tablet');
Route::get('/tablet/apple', [App\Http\Controllers\User\ProductController::class, 'tablet_apple'])->name('tablet_apple');
Route::get('/tablet/xiaomi', [App\Http\Controllers\User\ProductController::class, 'tablet_xiaomi'])->name('tablet_xiaomi');


Route::get('/phone/{id}', [App\Http\Controllers\User\ProductDetailController::class, 'product_detail'])->name('product_detail');
Route::post('/phone/store', [App\Http\Controllers\User\ProductDetailController::class, 'store'])->name('product_detail_store');

Route::get('/AddCart/{id}', [App\Http\Controllers\User\CartController::class, 'AddCart'])->name('AddCart');
Route::get('/DeleteItemCart/{id}', [App\Http\Controllers\User\CartController::class, 'DeleteItemCart'])->name('DeleteItemCart');

Route::get('phone/AddCart/{id}', [App\Http\Controllers\User\CartController::class, 'AddCart']);
Route::get('phone/DeleteItemCart/{id}', [App\Http\Controllers\User\CartController::class, 'DeleteItemCart']);

Route::get('/AddItemCart/{id}', [App\Http\Controllers\User\CartController::class, 'AddItemCart'])->name('AddItemCart');
Route::get('/MinusItemCart/{id}', [App\Http\Controllers\User\CartController::class, 'MinusItemCart'])->name('MinusItemCart');

Route::get('/DeleteItemListCart/{id}', [App\Http\Controllers\User\CartController::class, 'DeleteItemListCart'])->name('DeleteItemListCart');

Route::get('/showCart', [App\Http\Controllers\User\CartController::class, 'showCart'])->name('showCart');


Route::post('/AddOder', [App\Http\Controllers\User\OderController::class, 'AddOder'])->name('AddOder');


Route::get('/blog', [App\Http\Controllers\User\BlogController::class, 'showblog'])->name('blog');
Route::get('/blog/{id}', [App\Http\Controllers\User\BlogController::class, 'blog_detail'])->name('blog_detail');

Route::get('/searchAjax/{search_name}', [App\Http\Controllers\User\SearchController::class, 'searchAjax'])->name('searchAjax');
Route::post('/products_search', [App\Http\Controllers\User\SearchController::class, 'products_search'])->name('products_search');

Route::middleware(['auth'])->group(function () {
    Route::get('/account', [App\Http\Controllers\User\AccountController::class, 'acc'])->name('acc');
    Route::patch('/account/update/{id}', [App\Http\Controllers\User\AccountController::class, 'update'])->name('acc_update');
    Route::get('/order_management', [App\Http\Controllers\User\AccountController::class, 'order_management'])->name('order_management');
    Route::get('/change_password', [App\Http\Controllers\User\AccountController::class, 'change_password'])->name('change_password');
    Route::patch('/change_password/updatePassword', [App\Http\Controllers\User\AccountController::class, 'updatePassword'])->name('updatePassword');
});


Route::get('/order_check', function () {
    return view('user.page.order_check.order_check');
})->name('order_check');

Route::post('/order_check_detail', [App\Http\Controllers\User\OderCheckController::class, 'OrderCheckDetail'])->name('order_check_detail');
Route::get('/order_check_detail/{code}', [App\Http\Controllers\User\OderCheckController::class, 'OrderCheckDetailUser'])->name('order_check_detail_user');


Route::middleware(['auth', 'checkrole'])->group(function () {
    Route::get('/admin_home', function () {
        return view('admin.page.home.home');
    })->name('admin_home');

    Route::resource('admin_category', App\Http\Controllers\Admin\CategoryController::class);

    Route::resource('admin_manufacturer', App\Http\Controllers\Admin\ManufacturerController::class);

    Route::resource('admin_product', App\Http\Controllers\Admin\ProductController::class);

    Route::post('/admin_product/search', [App\Http\Controllers\Admin\ProductController::class, 'admin_product_search'])->name('admin_product_search');

    Route::resource('admin_blog', App\Http\Controllers\Admin\BlogController::class);

    Route::resource('admin_order', App\Http\Controllers\Admin\OrderController::class);
    Route::post('/admin_order/search', [App\Http\Controllers\Admin\OrderController::class, 'admin_order_search'])->name('admin_order_search');


    Route::resource('admin_order_detail', App\Http\Controllers\Admin\OrderDetailController::class);
    Route::post('/admin_order_detail/search', [App\Http\Controllers\Admin\OrderDetailController::class, 'admin_order_detail_search'])->name('admin_order_detail_search');


    Route::resource('admin_order_user', App\Http\Controllers\Admin\OrderUserController::class);
    Route::post('/admin_order_user/search', [App\Http\Controllers\Admin\OrderUserController::class, 'admin_order_user_search'])->name('admin_order_user_search');


    Route::resource('admin_feed_back', App\Http\Controllers\Admin\FeedBackController::class);

    Route::resource('admin_banner', App\Http\Controllers\Admin\BannerController::class);

    Route::resource('admin_thumbnail', App\Http\Controllers\Admin\ThumbnailController::class);

    Route::resource('admin_user', App\Http\Controllers\Admin\UserController::class);

    Route::get('/admin_profile', function () {
        return view('admin.page.user_manager.profile');
    })->name('admin_profile');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/home');
})->name('logout');
