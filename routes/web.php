<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriBencana;
use App\Http\Controllers\Laporan;
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

// Route::controller(UserController::class)->middleware(["authenticate:admin"])->prefix("userview")->name("users.")->group(function () {
//     Route::get('/', 'index')->name('index')->middleware(Authenticate::class);
//     Route::get('/create', 'UserController@create')->name('create');
//     Route::get('/{id}', 'UserController@show')->name('show');
//     Route::get('/{id}/edit', 'UserController@edit')->name('edit');
//     Route::get('/', 'UserController@store')->name('store');
//     Route::put('/{id}', 'UserController@update')->name('update');
//     Route::delete('/{id}', 'UserController@destroy')->name('destroy');
// });

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->middleware(Authenticate::class)->name('dashboard.index');;

Route::get('/userview', function () {
    return view('pages.userview.index');
});

Route::get('/kategoriview', function () {
    return view('pages.kategoriview.index');
});

Route::get('/laporanview', function () {
    return view('pages.laporanview.index');
});



Route::resource('laporan', Laporan::class);

Route::resource('kategoribencana', KategoriBencana::class);
