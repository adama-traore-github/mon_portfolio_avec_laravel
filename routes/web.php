<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('lang/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');