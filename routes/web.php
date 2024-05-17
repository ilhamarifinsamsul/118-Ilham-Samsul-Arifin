<?php

use App\Http\Controllers\KategoriBencana;
use App\Http\Controllers\Laporan;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});

Route::get('/laporanview', function () {
    return view('pages.laporanview.index');
});

Route::resource('laporan', Laporan::class);

Route::resource('kategoribencana', KategoriBencana::class);
