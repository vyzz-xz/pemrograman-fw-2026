<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello'); 
});

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return '<h1>Profil Toko</h1>
    <p>Barokah Mart adalah sistem kasir digital yang dirancang untuk mempercepat 
    dan mempermudah transaksi harian toko Anda.</p>
    <p>Kami melayani dengan jujur dan barokah.</p>';
});