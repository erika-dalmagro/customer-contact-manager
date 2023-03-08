<?php

use Illuminate\Support\Facades\Route;

//Cliente
Route::get('/', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
Route::get('/cliente/adicionar', [App\Http\Controllers\ClienteController::class, 'adicionar'])->name('cliente.adicionar');
Route::post('/cliente', [App\Http\Controllers\ClienteController::class, 'salvar'])->name('cliente.salvar');
Route::get('/cliente/{id}', [App\Http\Controllers\ClienteController::class, 'excluir'])->name('cliente.excluir');
Route::get('/cliente/editar/{id}', [App\Http\Controllers\ClienteController::class, 'editar'])->name('cliente.editar');
Route::put('/cliente/{id}', [App\Http\Controllers\ClienteController::class, 'atualizar'])->name('cliente.atualizar');
Route::get('/cliente/detalhes/{id}', [App\Http\Controllers\ClienteController::class, 'detalhar'])->name('cliente.detalhar');

// Contatos
Route::get('/contato/adicionarContato/{id}', [App\Http\Controllers\ContatoController::class, 'adicionar'])->name('contato.adicionar');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'salvar'])->name('contato.salvar');
Route::get('/contato/{id}', [App\Http\Controllers\ContatoController::class, 'excluir'])->name('contato.excluir');
Route::get('/contato/editar/{id}', [App\Http\Controllers\ContatoController::class, 'editar'])->name('contato.editar');
Route::put('/contato/{id}', [App\Http\Controllers\ContatoController::class, 'atualizar'])->name('contato.atualizar');