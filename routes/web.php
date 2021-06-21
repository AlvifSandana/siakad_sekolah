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
    'walikelas' => 'WaliKelasController'
]);

Route::get('/login', function () {
    return view('login');
});
