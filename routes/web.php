<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello'); 
});

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return '<h1>Profil Toko</h1>
    <p>Barokah Mart adalah sistem kasir digital yang dirancang untuk mempercepat 
    dan mempermudah transaksi harian toko Anda.</p>
    <p>Kami melayani dengan jujur dan barokah.</p>';
});

Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');
 
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');
 
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');
    Route::resource('users', UserController::class);
});
 
Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});