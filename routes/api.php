<?php

use App\Http\Controllers\CadastroAnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// rotas dos animais
Route::post('animal/cadastrar', [CadastroAnimalController::class, 'criarAnimal']);
Route::get('animal/todos', [CadastroAnimalController::class, 'retornarTodos']);
Route::post('animal/pesquisar/nome', [CadastroAnimalController::class, 'pesquisarPorNome']);
Route::post('animal/pesquisar/especie', [CadastroAnimalController::class, 'pesquisarPorEspecie']);
Route::post('animal/pesquisar/ra', [CadastroAnimalController::class, 'pesquisarPorRa']);
Route::delete('animal/excluir/{id}', [CadastroAnimalController::class, 'excluirAnimal']);
Route::put('animal/atualizar', [CadastroAnimalController::class, 'atualizarAnimal']);
Route::get('animal/encontrar/{id}', [CadastroAnimalController::class, 'pesquisarPorId']);