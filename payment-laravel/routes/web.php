<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('payment',[PaymentController::class,'payment'])->name('payment');

Route::post('paysubmit',[PaymentController::class,'paysubmit'])->name('paysubmit');
