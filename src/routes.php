<?php

use Illuminate\Support\Facades\Route;
use sedaaydin360drc\greetings\Controllers\PackageController;

Route::get('/greetings', [PackageController::class, 'index']);
