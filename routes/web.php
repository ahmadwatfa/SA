<?php

use App\Models\admin\AboutUs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', function () {
        return view('index')->with('about' , AboutUs::get()[0]);
    });
});

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

Auth::routes();

route::resource('admin/video', App\Http\Controllers\admin\VideoController::class);
route::resource('admin/aboutus', App\Http\Controllers\admin\AboutUsController::class);
route::resource('admin/our-works', App\Http\Controllers\admin\OurWorkController::class);
route::resource('admin/services', App\Http\Controllers\admin\OurServicesController::class);
route::resource('admin/clients', App\Http\Controllers\admin\OurClientController::class);
route::resource('admin/review', App\Http\Controllers\admin\ReviewController::class);
route::resource('admin/blog' , App\Http\Controllers\admin\BlogController::class);
route::resource('admin/social' , App\Http\Controllers\admin\MediaController::class);
Route::resource('/admin/user', App\Http\Controllers\admin\UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
