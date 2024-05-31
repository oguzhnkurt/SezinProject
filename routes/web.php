<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LimitlessController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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

// Ana sayfa için rota
Route::get('/', function () {
    return view('welcome');
})->name('homepage');

// Login işlemleri için rotalar
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Giriş yaptıktan sonra yönlendirilecek sayfa
Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

// Auth rotaları
Auth::routes();

// Yetkili kullanıcılar için rotalar
Route::group(['middleware' => 'auth'], function () {
    Route::get('{any}', [LimitlessController::class, 'index'])->name('index');
    Route::get('/admin', [LimitlessController::class, 'index'])->middleware('role:admin'); // Sadece admin rolüne sahip kullanıcılar bu sayfaya erişebilir
    Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin/egitim-takvimi', [AdminController::class, 'showSchedule'])->name('admin.schedule');
        Route::post('/admin/egitim-takvimi', [AdminController::class, 'updateSchedule'])->name('admin.schedule.update');
    });

    Route::post('/admin/save-schedule', [AdminController::class, 'saveSchedule'])->name('admin.saveSchedule');
});
