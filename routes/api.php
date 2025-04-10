<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogIncomingRequest;

// General user endpoint (requires sanctum)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * @group API v1
 *
 * All version 1 APIs go here
 */
Route::middleware(LogIncomingRequest::class)->group(function () {

    Route::prefix('v1')->group(function () {

        /**
         * @unauthenticated
         * @group Auth
         *
         * Login fallback route for unauthenticated access.
         */
        Route::get('/login', function () {
            return response()->json(['message' => 'Unauthenticated.'], 401);
        })->name('login');

        Route::middleware('auth:sanctum')->group(function () {

            /**
             * @group Products
             *
             * APIs for managing products (auth required).
             */
            Route::prefix('products')->group(function () {
                Route::get('getProducts/{id}', [ProductController::class, 'show']);
                Route::get('getAllProducts', [ProductController::class, 'getAllProducts']);
                Route::delete('deleteProduct/{id}', [ProductController::class, 'deleteProduct']);
                Route::delete('deleteAllProducts', [ProductController::class, 'deleteAllProducts']);
                Route::post('newProduct', [ProductController::class, 'newProduct']);
                Route::put('updateProduct/{id}', [ProductController::class, 'updateProduct']);
            });
        });

        /**
         * @group Users
         *
         * Authentication endpoints
         */
        Route::prefix('users')->group(function () {
            Route::post('sign-up', [AuthController::class, 'sign_up']);
            Route::post('sign-in', [AuthController::class, 'sign_in']);
        });
    });
});
