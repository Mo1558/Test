<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'posts'] ,function(){
    //Get all posts
    Route::get('/',[PostController::class,'index'])->name('posts');
    //Create new post
    Route::post('/',[PostController::class,'store'])->name('post.store');
    // Show a specific post by ID.
    Route::get('/{id}',[PostController::class,'show'])->name('post.show');
    // Update a specific post by ID
    Route::post('/update/{id}',[PostController::class,'update'])->name('post.update');
    // Delete a specific post by ID.
    Route::delete('/delete/{id}',[PostController::class,'delete'])->name('post.delete');
});