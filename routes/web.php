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

// admin route
Route::resource('dashboard', 'DashboardController',
    ['only' => ['dashboard.index']
]);
Route::resources([
    'dashboard' => 'DashboardController',
    'guru' => 'GuruController',
    'siswa'=> 'SiswaController',
    'kelas' => 'KelasController',
    'mapel' => 'MapelController',
    'walikelas' => 'WaliKelasController',
    'jadwalpelajaran' => 'JadwalPelajaranController'
]);

// data sekolah route
Route::get('datasekolah', 'DataSekolahController@index')->name('datasekolah.index');
Route::get('datasekolah/{id}/edit', 'DataSekolahController@edit')->name('datasekolah.edit');
Route::put('datasekolah/{id}/update', 'DataSekolahController@update')->name('datasekolah.update');

// auth route
Route::get('/', 'LoginController@index')->name('login.index');
Route::post('/', 'LoginController@login')->name('login.auth');
Route::get('/logout', 'LoginController@logout')->name('logout');

// upload profile_img route
Route::put('siakad/upload/guru', 'UploadfotoController@guru')->name('guru.upload_foto');
Route::put('siakad/upload/siswa', 'UploadfotoController@siswa')->name('siswa.upload_foto');

// guru route
Route::get('siakad/guru/dashboard', 'guru\GuruController@dashboard')->name('dashboard_guru');
Route::get('siakad/guru/account', 'guru\GuruController@accountdetail')->name('account_guru');
Route::get('siakad/guru/account/edit', 'guru\GuruController@accountedit')->name('account_guru.edit');
Route::put('siakad/guru/account/update', 'guru\GuruController@accountupdate')->name('account_guru.update');
// wali kelas route
