<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/todos' , [TodoController::class , 'index'])->name('todo.index');

Route::get('/todo/{todo}' , [TodoController::class , 'show'])->name('todo.show');

Route::get('/new-todos' , [TodoController::class , 'create'])->name('create.new.data');

Route::post('/store_todos' , [TodoController::class , 'store'])->name('add.todo.data');

Route::get('/todos/{todo}/edit' , [TodoController::class , 'edit'])->name('todo.edit');

Route::post('todos/{todo}/update-todos' , [TodoController::class , 'update'])->name('update.edit');

