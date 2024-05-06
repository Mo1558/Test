<?php
use App\Http\Controllers\Admin\PostController;

Route::group(['prefix' => 'admin'] ,function(){
    Route::resource('posts', PostController::class);
});
