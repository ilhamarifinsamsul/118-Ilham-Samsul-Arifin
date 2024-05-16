<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});

Route::get('/laporanview', function () {
    return view('pages.laporanview.index');
});
