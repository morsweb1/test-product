<?php

use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Middleware\ApiToken;
use Illuminate\Support\Facades\Route;

Route::post('/v1/products/create', [ProductController::class, 'createOrUpdate'])
    ->middleware(ApiToken::class);
