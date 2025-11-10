<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categoria_AGVController;

Route::get('/', [Categoria_AGVController::class, 'index'])->name('categorias.index');
Route::get('/categoria/{id}', [Categoria_AGVController::class, 'show'])->name('categorias.show');
Route::post('/categoria', [Categoria_AGVController::class, 'store'])->name('categorias.store');
