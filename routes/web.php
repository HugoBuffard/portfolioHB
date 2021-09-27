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
use App\Http\Controllers\BackController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\MessageController;

// Route::get('/', function () {
//     return view('maintenance');
// });

//FRONT
Route::get('/', [FrontController::class, 'index'])->name('front');

Route::get('/mention-legales', [FrontController::class, 'ml'])->name('ml');

//BACK
Route::middleware([auth::class])->group(function () {

    Route::get('/backYbgur', [BackController::class, 'index'])
    ->name('back');

    Route::resource('/backYbgur/projets', ProjetController::class);

    Route::resource('/backYbgur/messages', MessageController::class);

});




