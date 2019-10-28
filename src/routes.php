<?php

use BrainySoft\Pult\Http\Controllers\PultController;


Route::middleware(['web', 'admin'])->group(function () {
    Route::get('/admin/pult',  PultController::class . '@index');
    Route::get('/admin/pult/{customer_key}',  PultController::class . '@show');
    Route::get('/admin/pult/{customer_key}/{prefix}', PultController::class . '@edit');
    Route::post('/admin/pult/{customer_key}/{prefix}', PultController::class . '@update');
    Route::get('/admin/pult-error-log/{customer_key}', PultController::class . '@getTodayErrorLog');
    Route::get('/admin/pult-download-file/{filename}', PultController::class . '@downloadFile');
});





