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
Route::get('datasekolah/add', 'DataSekolahController@add')->name('datasekolah.add');
Route::post('datasekolah/add', 'DataSekolahController@create')->name('datasekolah.create');
Route::get('datasekolah/{id}/edit', 'DataSekolahController@edit')->name('datasekolah.edit');
Route::put('datasekolah/{id}/update', 'DataSekolahController@update')->name('datasekolah.update');

// pengaturan route
// semester
Route::get('pengaturan/semester', 'PengaturanController@semester')->name('pengaturan.semester');
Route::get('pengaturan/semester/{id}', 'PengaturanController@editSemester')->name('pengaturan.semester.edit');
Route::post('pengaturan/semester', 'PengaturanController@addSemester')->name('pengaturan.semester.add');
Route::put('pengaturan/semester/{id}', 'PengaturanController@updateSemester')->name('pengaturan.semester.update');
Route::delete('pengaturan/semester/{id}', 'PengaturanController@deleteSemester')->name('pengaturan.semester.delete');
// tahun ajaran
Route::get('pengaturan/tahunajaran', 'PengaturanController@tahunajaran')->name('pengaturan.tahunajaran');
Route::get('pengaturan/tahunajaran/{id}', 'PengaturanController@editTahunAjaran')->name('pengaturan.tahunajaran.edit');
Route::post('pengaturan/tahunajaran', 'PengaturanController@addTahunAjaran')->name('pengaturan.tahunajaran.add');
Route::put('pengaturan/tahunajaran/{id}', 'PengaturanController@updateTahunAjaran')->name('pengaturan.tahunajaran.update');
Route::delete('pengaturan/tahunajaran/{id}', 'PengaturanController@deleteTahunAjaran')->name('pengaturan.tahunajaran.delete');
// Account
Route::get('pengaturan/account', 'PengaturanController@accountinfo')->name('pengaturan.accountinfo');
Route::put('pengaturan/account', 'PengaturanController@accountUpdate')->name('pengaturan.accountupdate');
// Jam Pelajaran
Route::get('pengaturan/jampelajaran', 'PengaturanController@jampelajaran')->name('pengaturan.jampelajaran');
Route::post('pengaturan/jampelajaran/create', 'PengaturanController@createJamPelajaran')->name('pengaturan.jampelajaran.create');
Route::get('pengaturan/jampelajaran/edit/{id}', 'PengaturanController@editJamPelajaran')->name('pengaturan.jampelajaran.edit');
Route::put('pengaturan/jampelajaran/{id}', 'PengaturanController@updateJamPelajaran')->name('pengaturan.jampelajaran.update');
Route::delete('pengaturan/jampelajaran/{id}', 'PengaturanController@deleteJamPelajaran')->name('pengaturan.jampelajaran.delete');

// auth route
Route::get('/', 'LoginController@index')->name('login.index');
Route::post('/', 'LoginController@login')->name('login.auth');
Route::get('/logout', 'LoginController@logout')->name('logout');

// upload profile_img route
Route::put('siakad/upload/guru/{id}', 'UploadfotoController@guru')->name('guru.upload_foto');
Route::put('siakad/upload/siswa/{id}', 'UploadfotoController@siswa')->name('siswa.upload_foto');

// password change route
Route::put('siakad/guru/pwd/change/{id}', 'PasswordController@updatePasswordGuru')->name('changepwd_guru');

// guru route
Route::get('siakad/guru/dashboard', 'guru\GuruController@dashboard')->name('dashboard_guru');
Route::get('siakad/guru/account', 'guru\GuruController@accountdetail')->name('account_guru');
Route::get('siakad/guru/account/edit', 'guru\GuruController@accountedit')->name('account_guru.edit');
Route::put('siakad/guru/account/update', 'guru\GuruController@accountupdate')->name('account_guru.update');
// wali kelas route
Route::get('siakad/walikelas/dashboard', 'walikelas\WaliKelasController@dashboard')->name('dashboard_walikelas');
Route::get('siakad/walikelas/account', 'walikelas\WaliKelasController@accountdetail')->name('account_walikelas');
Route::get('siakad/walikelas/account/edit', 'walikelas\WaliKelasController@accountedit')->name('account_walikelas.edit');
Route::put('siakad/walikelas/account/update', 'walikelas\WaliKelasController@accountupdate')->name('account_walikelas.update');
Route::get('siakad/walikelas/datakelas/siswa', 'walikelas\WaliKelasController@siswaPage')->name('walikelas.datakelas.siswa');

// SPP route
Route::get('spp', 'SPPController@index')->name('spp.index');
Route::get('spp/show', 'SPPController@show')->name('spp.show');
Route::post('spp/add', 'SPPController@addSPP')->name('spp.create');
Route::put('spp/update', 'SPPController@updateSPP')->name('spp.update');
Route::get('spp/delete/{id}', 'SPPController@deleteSPP')->name('spp.delete');
// Pembayaran SPP route
Route::get('spp/pembayaran', 'PembayaranController@index')->name('spp.pembayaran.index');
Route::get('spp/pembayaran/show', 'PembayaranController@show')->name('spp.pembayaran.show');
Route::post('spp/pembayaran/add', 'PembayaranController@addPembayaran')->name('spp.pembayaran.add');
Route::put('spp/pembayaran/update', 'PembayaranController@updatePembayaran')->name('spp.pembayaran.update');
Route::get('spp/pembayaran/delete/{id}', 'PembayaranController@deletePembayaran')->name('spp.pembayaran.delete');
