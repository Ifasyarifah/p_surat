<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\DisposisisuratController;
use App\Http\Controllers\NomorsuratController;
use App\Http\Controllers\LaporandisposisiController;
use App\Http\Controllers\LaporansuratkeluarController;





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
Route::get('/', function(){
    return view('layouts.landingpage');
});

Auth::routes();
Route::get('dashboard', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'admin'])->group(function() {
    Route::get( '/member', [MemberController::class,'index']);
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


    Route::resource('surat_masuk', SuratmasukController::class);
    Route::get('surat_masuk/print/{id?}',       [LaporansuratmasukController::class, 'print'])->name('surat_masuk.print');
    Route::get('surat_masuk/print_view/{id?}',  [LaporansuratmasukController::class, 'printView']);

    Route::resource('surat_keluar', SuratkeluarController::class);
    Route::get('surat_keluar/print/{id?}',       [LaporansuratkeluarController::class, 'print'])->name('surat_keluar.print');
    Route::get('surat_keluar/print_view/{id?}',  [LaporansuratkeluarController::class, 'printView']);


    Route::resource('disposisi_surat', DisposisisuratController::class);
    Route::get('disposisi_surat/print/{id?}',       [LaporandisposisiController::class, 'print'])->name('disposisi_surat.print');
    Route::get('disposisi_surat/print_view/{id?}',  [LaporandisposisiController::class, 'printView']);

    Route::resource('nomor_surat', NomorsuratController::class);



});


