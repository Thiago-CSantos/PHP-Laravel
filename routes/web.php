<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdutoController::class, 'index'] )->name('produto.index');

Route::get('/produto/{id?}', [ProdutoController::class, 'show'] )->name('produto.show');
