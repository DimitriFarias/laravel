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

Route::get('/index.aluno',[AlunoController::class, 'index'])->name('aluno.index');
Route::get('/create.aluno',[AlunoController::class, 'create'])->name('aluno.create');
Route::post('/store.aluno',[AlunoController::class, 'store'])->name('aluno.store');
Route::get('/show.aluno',[AlunoController::class, 'show'])->name('aluno.show');
Route::get('/edit.aluno',[AlunoController::class, 'edit'])->name('aluno.edit');
Route::put('/update.aluno',[AlunoController::class, 'update'])->name('aluno.update');
Route::delete('/destroy.aluno',[AlunoController::class, 'destroy'])->name('aluno.destroy');

