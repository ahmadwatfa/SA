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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/index', function () {
    return view('admin.index');
});

Auth::routes();

route::resource('admin/video' , App\Http\Controllers\admin\VideoController::class);
route::resource('admin/aboutus' , App\Http\Controllers\admin\AboutUsController::class);
route::resource('admin/our-works' , App\Http\Controllers\admin\OurWorkController::class);
route::resource('admin/services' , App\Http\Controllers\admin\OurServicesController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
