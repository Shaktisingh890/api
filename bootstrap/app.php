<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\Http\Helpers\ApiResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php', // 🔥 ADD THIS LINE

        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // You can add your middleware here
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Validation error
        $exceptions->renderable(function (ValidationException $e, $request) {
            if ($request->expectsJson()) {
                return ApiResponse::error(422, 'Validation failed', $e->errors());
            }
        });

        // Unauthenticated
        $exceptions->renderable(function (AuthenticationException $e, $request) {
            if ($request->expectsJson()) {
                return ApiResponse::error(401, 'Unauthenticated');
            }
        });

        // Unauthorized
        $exceptions->renderable(function (AuthorizationException $e, $request) {
            if ($request->expectsJson()) {
                return ApiResponse::error(403, 'Unauthorized');
            }
        });

        // Model not found
        $exceptions->renderable(function (ModelNotFoundException $e, $request) {
            if ($request->expectsJson()) {
                return ApiResponse::error(404, 'Resource not found');
            }
        });

        // Query error
        $exceptions->renderable(function (QueryException $e, $request) {
            if ($request->expectsJson()) {
                return ApiResponse::error(500, 'Database error', [
                    'error' => $e->getMessage()
                ]);
            }
        });

        // HTTP Exception (like 404, 405, etc.)
        $exceptions->renderable(function (HttpExceptionInterface $e, $request) {
            if ($request->expectsJson()) {
                return ApiResponse::error(
                    $e->getStatusCode(),
                    $e->getMessage() ?: 'HTTP Error'
                );
            }
        });

        // Catch-all fallback
        $exceptions->renderable(function (Throwable $e, $request) {
            if ($request->expectsJson()) {
                return ApiResponse::error(500, $e->getMessage());
            }
        });
    })
    ->create();
