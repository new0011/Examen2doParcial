<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CyberController;
use App\Http\Controllers\controlBD;
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

Route::get('/form', [controlBD::class, 'create'])->name('form.create');
Route::get('/cons', [controlBD::class, 'index'])->name('cons.index');
Route::post('/saveR', [controlBD::class, 'store'])->name('saveR.store');
Route::get('/form/{id}/upF', [controlBD::class, 'edit'])->name('upF.edit');
Route::put('/form/{id}', [controlBD::class, 'update'])->name('cons.update');
Route::delete('/cons/{id}', [controlBD::class, 'destroy'])->name('cons.destroy');