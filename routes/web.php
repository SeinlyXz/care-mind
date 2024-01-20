<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{User, ArtikelsController, RedaktursController, DokterController, PusherController};
use App\Models\{Artikels, ChatPawsy, Redakturs, Dokter};

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/chatpawsy', function () {
    return view('chatpawsy');
});

Route::post('/chatpawsy', [App\Http\Controllers\ChatPawsyController::class, 'store'])->name('chatpawsy.store');

Route::get('/dokter', [DokterController::class, 'index'])->name('dokter.index');
Route::get('/artikel', [ArtikelsController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{artikels}', [ArtikelsController::class, 'show'])->name('artikel.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        // Get data from hit_count table ChatPawsy
        $pengunjung = Chatpawsy::select('hit_count')->first();

        return view('dashboard', [
            'pengunjung' => $pengunjung->hit_count,
        ]);
    })->name('dashboard');
  
    Route::get('/users', [User::class, 'index']);

    Route::get('/artikel/create', [ArtikelsController::class, 'create'])->name('artikel.create');
    Route::get('/artikel/{artikels}/edit', [ArtikelsController::class, 'edit'])->name('artikel.edit');
    Route::post('/artikel', [ArtikelsController::class, 'store'])->name('artikel.store');

    Route::get('/redaktur', [RedaktursController::class, 'index'])->name('redaktur.index');
    Route::get('/redaktur/{redakturs}/edit', [RedaktursController::class, 'edit'])->name('redaktur.edit');
    Route::delete('/redaktur/{redakturs}', [RedaktursController::class, 'destroy'])->name('redaktur.destroy');

    Route::get('/dokter/{dokter}', [DokterController::class, 'show'])->name('dokter.show');
    Route::post('/dokter', [DokterController::class, 'store'])->name('dokter.store');
});
