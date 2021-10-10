<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Menu;
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

Route::get('/', function () {
    return view('home',[
        'menu' =>  Menu::all(),
        'categories' => Category::all(),
    ]);
})->name('home');
Route::get('/about_us', function () {
    return view('about',[
        'menu' =>  Menu::all()
    ]);
})->name('about');

Route::get('/contacts', function () {
    return view('contact',[
        'menu' =>  Menu::all()
    ]);
})->name('contact');

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::view('/', 'admin.index')->name('admin');
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('products', ProductController::class);
});

Route::get('/catalog',  [ProductController::class, 'shop'])->name('shop');
Route::get('/product={id}', [ProductController::class, 'show'])->name('product.id');
