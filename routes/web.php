<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Main Domain
// Route::domain('jhs.test')->group(function () {
//     Route::get('/{any}', function () {
//         return view('app');
//     })->where('any', '.*');
// });

// Sub Domain
// Route::domain('test.japan-cg.com')->group(function () {
//     Route::get('/{any}', function () {
//         return view('app');
//     })->where('any', '.*');
// });

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
