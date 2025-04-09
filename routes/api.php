<?php

use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogIncomingRequest;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::middleware(LogIncomingRequest::class)->group(function(){

    Route::prefix('v1')->group(function () {

        Route::prefix('products')->group(function () {
            Route::get('getProducts/{id}', [ProductController::class, 'show']);
            Route::get('getAllProducts',[ProductController::class,'getAllProducts']);
            Route::delete('deleteProduct/{id}',[ProductController::class, 'deleteProduct']);
            Route::delete('deleteAllProducts',[ProductController::class, 'deleteAllProducts']);
            Route::post('newProduct',[ProductController::class, 'newProduct']);
            Route::put('updateProduct/{id}',[ProductController::class, 'updateProduct']);
        });

    
    
    });

});







