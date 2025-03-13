<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::get('/', function () {
    return redirect('/calculator');
});



Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator/calculate', [CalculatorController::class, 'calculate']);