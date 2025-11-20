<?php
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::prefix('v1')->group(function(){
    Route::apiResource("post",PostApiController::class);
});



