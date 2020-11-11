<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PorukeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/antonio', function () {
    return view('antonio-formular');
});

Route::get('/vedran', function () {
    return view('vedran-formular');
});

Route::get('/sara', function () {
    return view('sara-formular');
});

Route::get('/lucija', function () {
    return view('lucija-formular');
});

Route::get('/ivana', function () {
    return view('ivana-formular');
});

Route::get('/dara', function () {
    return view('dara-formular');
});

Route::get('/dora', function () {
    return view('dora-formular');
});

Route::get('poruke/', [PorukeController::class, 'index']);
Route::post('poruke/spremi', [PorukeController::class, 'store']);