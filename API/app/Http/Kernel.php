<?php

namespace cmpn\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
    \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    \cmpn\Http\Middleware\EncryptCookies::class,
    \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
    \Illuminate\Session\Middleware\StartSession::class,
    \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    
    /*  \cmpn\Http\Middleware\VerifyCsrfToken::class,*/
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
    'auth' => \cmpn\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'guest' => \cmpn\Http\Middleware\RedirectIfAuthenticated::class,
    'jwt.auth'=>\Tymon\JWTAuth\Middleware\GetUserFromToken::class,
    'jwt.refresh'=>\Tymon\JWTAuth\Middleware\RefreshToken::class,

    ];
}
