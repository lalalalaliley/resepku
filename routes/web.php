<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResepMakananController;
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
    return view('welcome');
});

Route::get('/dashboard', [ResepMakananController::class, 'index'])
    ->name('resepmakanan.index')
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::controller(ResepMakananController::class)->group(function () {
        Route::get('tambah', 'tambah')->name('resepmakanan.tambah');
        Route::post('tambah', 'simpan')->name('resepmakanan.tambah.simpan');
        Route::get('/resep/{id}', [ResepMakananController::class, 'show'])->name('resepmakanan.show');
        Route::post('/resep/{id}/suka', [ResepMakananController::class, 'sukaResep'])->name('resepmakanan.suka');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
