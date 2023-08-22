<?php

use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/menu', function () {
    return view('menu');
})->name("menu");

Route::get('menu/{table}', [OrderController::class,'create']);
Route::post('order/{id}', [OrderController::class,'order'])->name('order');
