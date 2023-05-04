<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Berita;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Berita as BeritaAdmin;

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

Route::get('/', [Home::class, 'index']);
Route::get('/berita', [Berita::class, 'index']);
Route::get('/berita/{id}', [Berita::class, 'detail']);

Route::get('/admin', [Dashboard::class, 'index']);
Route::get('/admin/berita', [BeritaAdmin::class, 'index']);
