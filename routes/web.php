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

    Route::get('/admin_category', function () {
        return view('admin.page.category_manager.category');
    })->name('admin_category');

    Route::get('/admin_manufacturer', function () {
        return view('admin.page.category_manager.manufacturer');
    })->name('admin_manufacturer');

    Route::get('/admin_product', function () {
        return view('admin.page.category_manager.product');
    })->name('admin_product');

    Route::get('/admin_blog', function () {
        return view('admin.page.category_manager.blog');
    })->name('admin_blog');

    Route::get('/admin_order', function () {
        return view('admin.page.information_manager.order');
    })->name('admin_order');

    Route::get('/admin_feed_back', function () {
        return view('admin.page.information_manager.feed_back');
    })->name('admin_feed_back');

    Route::get('/admin_banner', function () {
        return view('admin.page.interface_manager.banner');
    })->name('admin_banner');

    Route::get('/admin_img', function () {
        return view('admin.page.interface_manager.img');
    })->name('admin_img');

    Route::get('/admin_user', function () {
        return view('admin.page.user_manager.user');
    })->name('admin_user');

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


