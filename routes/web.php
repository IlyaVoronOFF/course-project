<?php

use App\Http\Controllers\GoodsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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
        'menu' =>  Menu::all()
    ]);
})->name('home');


// Route::get('/admin', function () {
//     return view('admin.index');
// })->name('admin');

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::view('/', 'admin.index')->name('admin');
    Route::resource('users', UserController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('goods', GoodsController::class);
});

Route::get('/catalog',  [GoodsController::class, 'shop'])->name('shop');
