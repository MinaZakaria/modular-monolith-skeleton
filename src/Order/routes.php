<?php

use Illuminate\Support\Facades\Route;

use Laracon\Order\Application\Http\Controllers\OrderController;

Route::prefix('order-module')
    ->middleware(['api', 'auth:sanctum'])
    ->group(function () {
        Route::apiResource('orders', OrderController::class);
    });
