<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\CalonMahasiswaController;
use App\Http\Controllers\Controller;

Route::get('/generate-pdf', [CalonMahasiswaController::class, 'generatePDF']);


Route::resource('calon-mahasiswa', CalonMahasiswaController::class);

Route::get('dashboard', function () {
    return view('dashboard');
});
