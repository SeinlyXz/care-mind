<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{User, ArtikelsController, RedaktursController, DokterController, PusherController};
use App\Models\Artikels;

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

Route::get('/home', function () {
    return view('home');
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

Route::post('/chatpawsy', [App\Http\Controllers\ChatPawsy::class, 'store'])->name('chatpawsy.store');

Route::get('/chatpsikolog', function () {
    return view('chatpsikolog');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        $artikels = Artikels::all();
        return view('dashboard', [
            'artikels' => $artikels
        ]);
    })->name('dashboard');

    Route::post('/artikel', [ArtikelsController::class, 'store'])->name('artikel.store');

    Route::get('/artikel/create', [ArtikelsController::class, 'create'])->name('artikel.create');
  
    Route::get('/users', [User::class, 'index']);

    Route::get('/artikel', [ArtikelsController::class, 'index'])->name('artikel.index');

    Route::get('/artikel/{artikels}', [ArtikelsController::class, 'show'])->name('artikel.show');

    Route::get('/artikel/{artikels}/edit', [ArtikelsController::class, 'edit'])->name('artikel.edit');

    Route::get('/redaktur', [RedaktursController::class, 'index'])->name('redaktur.index');

    Route::get('/redaktur/{redakturs}/edit', [RedaktursController::class, 'edit'])->name('redaktur.edit');

    Route::delete('/redaktur/{redakturs}', [RedaktursController::class, 'destroy'])->name('redaktur.destroy');

    Route::get('/dokter', [DokterController::class, 'index']);
});
