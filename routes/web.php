<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberControlle;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\DisposisiController;



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

    Route::resource('surat_masuk', SuratmasukController::class);
    Route::get('surat_masuk/trash',	   [SuratmasukController::class, 'getDeleteSuratmasuk'])->name('surat_masuk.trash');
    Route::get('surat_masuk/restore/{id}',[SuratmasukController::class, 'restore'])->name('surat_masuk.restore');
    Route::get('surat_masuk/restore-all', [SuratmasukController::class, 'restoreAll'])->name('surat_masuk.restoreAll');
    Route::get('surat_masuk/delete-all',  [SuratmasukController::class, 'deleteAll'])->name('surat_masuk.deleteAll');

    Route::resource('surat_keluar', SuratkeluarController::class);
    
});


