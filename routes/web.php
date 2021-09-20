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

require __DIR__.'/auth.php';
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'index'])->name('front');

Route::get('/mention-legales', [FrontController::class, 'ml'])->name('ml');

Route::get('/backYbgur', function () {
    return view('back');
})->middleware(['auth'])->name('backYbgur');


