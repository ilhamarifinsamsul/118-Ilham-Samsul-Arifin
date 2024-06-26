<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriBencana;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Laporan;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('pages.auth.login');
});



Route::controller(AuthController::class)->prefix("auth")->name('auth.')->group(function () {
    Route::get("/login", "index")->name("login");
    Route::post("/login", "login")->name("process");
    Route::get("/logout", "logout")->name("logout");
});

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('auth.login');

Route::get('/getSession', function () {
    return session()->all();
});

Route::controller(UserController::class)->middleware(["authenticate:1|2"])->prefix("userview")->name("users.")->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::post('/', 'store')->name('store');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->middleware(Authenticate::class)->name('dashboard.index');;

// Route::get('/userview', function () {
//     return view('pages.userview.index');
// });

Route::resource('kategoriview', KategoriController::class)->middleware(['authenticate:1|2']);

Route::resource('laporanview', LaporanController::class)->middleware(['authenticate:1|2']);


// Route::get('/kategoriview', function () {
//     return view('pages.kategoriview.index');
// });

// Route::get('/laporanview', function () {
//     return view('pages.laporanview.index');
// });
