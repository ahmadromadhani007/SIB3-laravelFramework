<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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