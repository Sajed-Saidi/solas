<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);

Route::get('/contents/view', [FrontendController::class, 'show']);
Route::get('/contents/all', [FrontendController::class, 'showAll']);
