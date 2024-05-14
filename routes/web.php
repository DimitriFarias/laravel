<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;


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

