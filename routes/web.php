<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['SuperBan:10,20,2'])->group(function () {
    Route::any('/thisroute', function () {
        return response()->json(['success' => true],200);
    });

    Route::any('/anotherroute', function () {
        return response()->json(['success' => true],200);

    });
});
