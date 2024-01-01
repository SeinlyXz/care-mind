<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{User, ArtikelsController, RedaktursController, DokterController};

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
    return view('welcome');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/chatpawsy', function () {
    return view('chatpawsy');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/artikel', [ArtikelsController::class, 'store']);
    Route::get('/users', [User::class, 'index']);

    Route::get('/artikel', [ArtikelsController::class, 'index']);

    Route::get('/redaktur', [RedaktursController::class, 'index']);

    Route::get('/dokter', [DokterController::class, 'index']);
});