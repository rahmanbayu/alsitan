<?php

use App\Http\Controllers\AlsitanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PersetujuanController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\PersyyaratanController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpkController;
use App\Http\Controllers\SuratPernyataanController;
use App\Http\Controllers\UserController;
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
Route::redirect('/', 'login');
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware(['role:admin|kadis'])->group(function (){
        Route::get('persyaratan/{persyaratan}/assets', [PersyaratanController::class, 'asset'])->name('persyaratan.asset');
        Route::get('spk/{persyaratan}', [SpkController::class, 'index'])->name('skp.index');
        Route::get('pernyataan/{persyaratan}', SuratPernyataanController::class)->name('pernyataan.index');

        Route::get('persetujuan', [PersetujuanController::class, 'index'])->name('persetujuan.index');
        Route::post('persetujuan/{persyaratan}/approve', [PersetujuanController::class, 'approve'])->name('persetujuan.approve');
        Route::post('persetujuan/{persyaratan}/decline', [PersetujuanController::class, 'decline'])->name('persetujuan.decline');
        Route::get('persetujuan/{persyaratan}', [PersetujuanController::class, 'show'])->name('persetujuan.show');
        Route::delete('persetujuan/{persyaratan}', [PersetujuanController::class, 'delete'])->name('persetujuan.delete'); 
    });

    Route::middleware(['role:admin|staf'])->group(function (){
        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::post('/laporan', [LaporanController::class, 'download'])->name('laporan.download');

        Route::get('petani', [PetaniController::class, 'index'])->name('petani.index');
        Route::get('petani/create', [PetaniController::class, 'create'])->name('petani.create');
        Route::get('petani/{petani}/show', [PetaniController::class, 'show'])->name('petani.show');
        Route::post('petani/create', [PetaniController::class, 'store'])->name('petani.store');
        Route::get('petani/{petani}', [PetaniController::class, 'edit'])->name('petani.edit');
        Route::put('petani/{petani}', [PetaniController::class, 'update'])->name('petani.update');
        Route::delete('petani/{petani}', [PetaniController::class, 'delete'])->name('petani.delete');
        Route::get('petani-blacklist/{petani}', [PetaniController::class, 'blacklist'])->name('petani.blacklist');
        Route::post('petani-blacklist/{petani}', [PetaniController::class, 'blacklist_action'])->name('petani.blacklist_action');
        Route::get('petani-un_blacklist/{petani}', [PetaniController::class, 'un_blacklist'])->name('petani.un_blacklist');
        Route::post('petani-un_blacklist/{petani}', [PetaniController::class, 'un_blacklist_action'])->name('petani.un_blacklist_action');

        Route::get('alsitan', [AlsitanController::class, 'index'])->name('alsitan.index');
        Route::get('alsitan/create', [AlsitanController::class, 'create'])->name('alsitan.create');
        Route::post('alsitan/create', [AlsitanController::class, 'store'])->name('alsitan.store');
        Route::get('alsitan/{alsitan}', [AlsitanController::class, 'edit'])->name('alsitan.edit');
        Route::put('alsitan/{alsitan}', [AlsitanController::class, 'update'])->name('alsitan.update');
        Route::delete('alsitan/{alsitan}', [AlsitanController::class, 'delete'])->name('alsitan.delete');
        
        Route::get('persyaratan', [PersyaratanController::class, 'index'])->name('persyaratan.index');
        Route::post('persyaratan', [PersyaratanController::class, 'store'])->name('persyaratan.store');
        Route::post('check_nik', [PersyaratanController::class, 'check_nik'])->name('check_nik');

    });

    Route::middleware(['role:admin'])->group(function (){
        Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('users/create', [UserController::class, 'store'])->name('users.store');
        Route::get('users/{user:email}', [UserController::class, 'edit'])->name('users.edit');
        Route::put('users/{user:email}', [UserController::class, 'update'])->name('users.update');
        Route::delete('users/{user:email}', [UserController::class, 'delete'])->name('users.delete');
    });
});

require __DIR__.'/auth.php';
