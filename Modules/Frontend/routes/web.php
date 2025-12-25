<?php

use Illuminate\Support\Facades\Route;
use Modules\Frontend\Http\Controllers\FrontendController;


Route::get('/', [FrontendController::class,'index'])->name('Home');
