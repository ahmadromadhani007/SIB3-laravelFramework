<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DashboardController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/welcome', function () {
    return '<h1>Ahlan Wa Sahlan Semangat belajar Laravel9</h1>';
});

Route::get('/salam', function () {
    return view('halaman_salam');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'dataMahasiswa']);

Route::get('/nilai_mhs', [MahasiswaController::class, 'nilaiMahasiswa']);

//--- Routing Landing pages---//
Route::get('/', function () {
    return view('landingpage.home');
});

Route::get('/home', function () {
    return view('landingpage.home');
});

Route::get('/about', function () {
    return view('landingpage.about');
});

Route::get('/contact', function () {
    return view('landingpage.kontak');
});

Route::get('/login', function () {
    return view('landingpage.login_form');
});

//---------------routing admin page--------------
Route::get('/administrator', function () {
    return view('admin.home');
});

//---------------routing admin page--------------

Route::resource('divisi', DivisiController::class);
Route::resource('jabatan', JabatanController::class);
Route::resource('pegawai', PegawaiController::class);
// Route::delete('pegawai/{id}', [PegawaiController::class, 'delete']);
Route::get('generate-pdf', [PegawaiController::class, 'generatePDF']);
Route::get('pegawai-pdf', [PegawaiController::class, 'pegawaiPDF']);
Route::get('pegawai-excel', [PegawaiController::class, 'pegawaiExcel']);
Route::get('dashboard', [DashboardController::class, 'index']);
