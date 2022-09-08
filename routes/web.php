<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanPendanaanController;
use App\Http\Controllers\DataIklanController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('admin', function () {
    return view('admin.index');
})->name('admin.index')->middleware('is_admin');

Route::resource('admin/pendanaan', LaporanPendanaanController::class);
Route::resource('admin/iklan', DataIklanController::class);

Route::get('guest', function () {
    return view('guest.index');
})->name('home');
Route::resource('guest/pendanaan', LaporanPendanaanController::class);
Route::resource('guest/iklan', DataIklanController::class);
Auth::routes();

//Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//Route::get('home', [HomeController::class, 'index'])->name('home');
/** Guest User Route List  */
//Route::middleware(['auth', 'user-access:guest'])->group(function(){
//    Route::get('/guest/home', [HomeController::class, 'index'])->name('guest.home');
//});



/** Admib User Route List  */
//Route::middleware(['auth', 'user-access:admin'])->group(function(){
//    Route::get('/admin/home', [HomeController::class,'adminHome'])->name('admin.home');
//});

//**Route::get('admin', function () {
//    return view('admin.index');
//})->name('admin.index')->middleware('auth');

//Route::get('guest', function() {
//    return view('guest.index');
//})->name('guest.index')->middleware('auth');

//Route::resource('/', HomeController::class);
//Route::resource('admin/laporanpendanaan', PedanaanController::class);
//Route::resource('admin/dataiklan', DataIklanCotroller::class);
//Auth::routes();

//Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')