<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('input-nim');
// });

Route::get('/', [StudentController::class,'index']);



// Route::get('/detail', function () {
//     return view('detail-mahasiswa');
// });

Route::post('/detail/{id}', [StudentController::class,'detail']);


Route::get('/detail', function () {
    return view('warning');
});

Route::get('/verifikasi', function () {
    return view('warning');
});

Route::post('/verifikasi/{id}', [StudentController::class, 'verifikasi']);


// Route::get('/verifikasi', function () {
//     return view('verifikasi');
// });


Route::post('/result/{id}', [StudentController::class, 'result']);

// Route::get('/result', function () {
//     return view('result');
// });