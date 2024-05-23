<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\funcionarioController;
use App\Http\Controllers\produtoController;

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


// ALUNO
Route::get('/alunos',[AlunoController::class, 'index'])->name('aluno.index');
Route::get('/alunos/create',[AlunoController::class, 'create'])->name('aluno.create');
Route::post('/alunos',[AlunoController::class, 'store'])->name('aluno.store');
Route::get('/alunos/{aluno}',[AlunoController::class, 'show'])->name('aluno.show');
Route::get('/aluno/{aluno}/edit',[AlunoController::class, 'edit'])->name('aluno.edit');
Route::put('/aluno/{aluno}',[AlunoController::class, 'update'])->name('aluno.update');
Route::delete('/aluno/{aluno}',[AlunoController::class, 'destroy'])->name('aluno.destroy');


// FUNCIONARIO
Route::get('/funcionario',[funcionarioController::class, 'index'])->name('funcionario.index');
Route::get('/funcionario/create',[funcionarioController::class, 'create'])->name('funcionario.create');
Route::post('/funcionario',[funcionarioController::class, 'store'])->name('funcionario.store');
Route::get('/funcionario/{funcionario}',[funcionarioController::class, 'show'])->name('funcionario.show');
Route::get('/funcionario/{funcionario}/edit',[funcionarioController::class, 'edit'])->name('funcionario.edit');
Route::put('/funcionario/{funcionario}',[funcionarioController::class, 'update'])->name('funcionario.update');
Route::delete('/funcionario/{funcionario}',[funcionarioController::class, 'destroy'])->name('funcionario.destroy');


// produto
Route::get('/produto',[produtoController::class, 'index'])->name('produto.index');
Route::get('/produto/create',[produtoController::class, 'create'])->name('produto.create');
Route::post('/produto',[produtoController::class, 'store'])->name('produto.store');
Route::get('/produto/{produto}',[produtoController::class, 'show'])->name('produto.show');
Route::get('/produto/{produto}/edit',[produtoController::class, 'edit'])->name('produto.edit');
Route::put('/produto/{produto}',[produtoController::class, 'update'])->name('produto.update');
Route::delete('/produto/{produto}',[produtoController::class, 'destroy'])->name('produto.destroy');