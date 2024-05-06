<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

include("admin.php");

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//website web auth guard is the defualt
Route::get('website', [AuthController::class, 'website'])->middleware('auth:web')->name('website');
//dashboard with admin guard only admins visit this route
Route::get('dashboard', [AuthController::class, 'dashboard'])->middleware('auth:admin')->name('dashboard');
//posts routes
Route::resource('posts',App\Http\Controllers\website\PostController::class);
//update post
Route::post('post/update', [App\Http\Controllers\website\PostController::class, 'update_post'])->name('update.post');
