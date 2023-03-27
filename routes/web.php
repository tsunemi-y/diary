<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiaryController;

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

Route::get('/diaries/create', [DiaryController::class, 'create'])->name('diaries.create');
Route::post('/diaries', [DiaryController::class, 'store'])->name('diaries.store');
Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit'])->name('diaries.edit');
Route::put('/diaries/{diary}', [DiaryController::class, 'update'])->name('diaries.update');
Route::get('/diaries/{diary}', [DiaryController::class, 'show'])->name('diaries.show');
Route::get('/', [DiaryController::class, 'index'])->name('diaries.index');


