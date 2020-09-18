<?php

use Illuminate\Support\Facades\Route;
use Ahilmurugesan\SkeletonDemo\Http\Controllers\SampleController;

Route::get('user-list', [SampleController::class, 'index'])->name('user-list');
