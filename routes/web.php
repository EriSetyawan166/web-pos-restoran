<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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
    return (redirect()->intended('login'));
});

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'cekleveladmin'], 'prefix' => 'admin'], function(){
    // Route::get('dashboard', 'App\Http\Controllers\DashboardAdminController@index')->name('dashboard');
    Route::get('dashboard', 'App\Http\Controllers\AdminController@index')->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

Route::resource('menu', MenuController::class);
