<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PagesController::class,'home']);
Route::get('sewa', [App\Http\Controllers\SewaController::class,'sewa']);
Route::get('form_sewa', [App\Http\Controllers\SewaController::class,'form_sewa']);
Route::get('penginapan', [App\Http\Controllers\PenginapanController::class,'penginapan']);
Route::get('form_inap', [App\Http\Controllers\PenginapanController::class,'create']);
Route::post('form_inap', [App\Http\Controllers\PenginapanController::class,'store'])->name('form_inap');



