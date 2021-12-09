<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealizarImportacaoController;
use App\Http\Controllers\PessoasController;

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

Route::get('/', [PessoasController::class, 'index']);

Route::get('/importarxml', function () {
    return view('importarxml');
});

Route::post('/realizarimportacao', [RealizarImportacaoController::class, 'realizarImportacao']);

Route::get('/cadastroPessoa', function () {
    return view('cadastroPessoa');
});

Route::get('/editarPessoa/{id}', [PessoasController::class, 'editarPessoa']);

Route::post('/salvarPessoa', [PessoasController::class, 'salvarPessoa']);

Route::get('/excluirPessoa/{id}', [PessoasController::class, 'excluirPessoa']);

Route::get('/emailemmassa', function () {
    return view('emailemmassa');
});

Route::post('/enviaemail/', [PessoasController::class, 'enviaEmailEmMassa']);



