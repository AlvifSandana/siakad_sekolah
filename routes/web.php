<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', 'DashboardController@index');


Route::get('/jadwalpelajaran', function () {
    return view('jadwal');
});

Route::get('/guru', function () {
    return view('guru');
});

Route::get('/guru/tambah', function () {
    return view('pages.addguru');
});

Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/siswa/tambah', function () {
    return view('pages.addsiswa');
});

Route::get('/kelas', function () {
    return view('kelas');
});

Route::get('/login', function () {
    return view('login');
});
