<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPage;
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

Route::get('/', [MainPage::class, 'index'] )->name('home');
Route::get('/create', [MainPage::class, 'create'] );
Route::post('/ludia/create', [MainPage::class, 'store'] );
Route::get('/ludia/{ludia}/edit', [MainPage::class, 'edit'] );
Route::get('/ludia/{ludia}', [MainPage::class, 'update'] );
Route::get('/ludia/{ludia}', [MainPage::class, 'destroy'] );


