<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\karyawanController;

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

// Route::get('/laravel', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login', [
        "title" => "login"
    ]);
});

// Route::get('/home', function () {
//     return view('page/home', [
//         "title" => "Home"
//     ]);
// });





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/karyawan', function () {
//     return view('dashboard/karyawan', [
//         "title" => "Dashboard"
//     ]);
// });

// Route::resource('karyawan', KaryawanController::class);
// Route::get('/karyawan', [App\Http\Controllers\KaryawanController::class, 'index'])->name('karyawan');


Route::get('/tambahkaryawan', [App\Http\Controllers\KaryawanController::class, 'create'])->name('tambahkaryawan');

Route::resource('karyawan', KaryawanController::class);

Route::get('/user/edit/{id}',[UserController::class, 'edit']);

Route::get('/absensi', function () {
    return view('dashboard/absensi', [
        "title" => "Dashboard"
    ]);
});

// code route baru
Route::get('/karyawan',[KaryawanController::class, 'index']);
Route::get('/tambah',[KaryawanController::class, 'create']);
Route::get('/edit.{id}',[karyawanController::class, 'edit'])->name('edit');
Route::post('karyawan-update/{id}',[karyawanController::class, 'update']);
// Route::get('edit-pelanggan/{id}', [PelangganController::class, 'edit']);
Route::get('/karyawan/hapus/{id}',[karyawanController::class, 'destroy']);