<?php

use cronv\LaravelTaskExample\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::rpc('/rpc/orders', [OrderController::class])
    ->name('rpc.orders');
