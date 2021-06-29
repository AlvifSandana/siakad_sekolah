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

Route::get('datasekolah', 'DataSekolahController@index')->name('datasekolah.index');
Route::get('datasekolah/{id}/edit', 'DataSekolahController@edit')->name('datasekolah.edit');
Route::put('datasekolah/{id}/update', 'DataSekolahController@update')->name('datasekolah.update');

Route::get('/', function () {
    return view('login');
});
