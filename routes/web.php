<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrysController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('entrys', EntrysController::class);

// Route::get('/entrys/show/{id}', [App\Http\Controllers\EntrysController::class, 'show'])->name('show');;

// Route::delete('/entrys/{id}', [App\Http\Controllers\EntrysController::class, 'destroy'])->name('destroy');;

Route::get('/received', [App\Http\Controllers\EntrysController::class, 'received'])->name('received');

Route::post('/receive', [App\Http\Controllers\EntrysController::class, 'receive'])->name('receive');

Route::post('/receive_entry', [App\Http\Controllers\EntrysController::class, 'store'])->name('receive_entry');
