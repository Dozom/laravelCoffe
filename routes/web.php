<?php

use App\Http\Controllers\QRController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/generateQR', [QRController::class, 'generateQR']);
Route::get('/viewQr/{qr}', [QRController::class, 'viewQR']);