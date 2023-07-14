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

Route::get('/', function () { return view('index');});
Route::get('login', function () { return view('login');});
Route::get('layanan', function () { return view('home/layanan');});
Route::get('kegiatan', function () { return view('home/kegiatan');});
Route::get('about', function () { return view('home/about');});
Route::get('contact', function () { return view('home/contact');});
Route::get('input', function () { return view('home/input');});
Route::get('pengajuan', function () { return view('home/pengajuan');});
Route::get('struktur', function () { return view('home/subabout/struktur');});
Route::get('staff', function () { return view('home/subabout/staff');});
Route::get('detail', function () { return view('home/subabout/detail');});




