<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('/');
Route::post('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');

Route::get('/contents/show/{content}', [FrontendController::class, 'show'])->name('contents.show');
Route::get('/contents/all', [FrontendController::class, 'showAll'])->name('contents.showAll');


Route::get('lang/{lang}', [FrontendController::class, 'changeLang'])->name('lang');
