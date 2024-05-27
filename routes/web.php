<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LimitlessController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('{any}', [LimitlessController::class, 'index'])->name('index');
Route::get('/admin', [LimitlessController::class, 'index'])->middleware('role:admin');
//Sadece admin rolüne sahip kullanıcılar bu sayfaya erişebilir

//routes/web.php dosyanızda
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/admin/egitim-takvimi', [AdminController::class, 'showSchedule'])->name('admin.schedule');
Route::post('/admin/egitim-takvimi', [AdminController::class, 'updateSchedule'])->name('admin.schedule.update');
});

Route::post('/admin/save-schedule', [AdminController::class, 'saveSchedule'])->name('admin.saveSchedule');

 });
