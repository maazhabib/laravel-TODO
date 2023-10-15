<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/todos' , [TodoController::class , 'index'])->name('todos.index');

Route::get('/todo/{todo}' , [TodoController::class , 'show'])->name('todo.show');

Route::get('/new-todos' , [TodoController::class , 'create'])->name('create.new.data');

Route::post('/store_todos' , [TodoController::class , 'store'])->name('add.todo.data');

Route::get('/todos/{todo}/edit' , [TodoController::class , 'edit'])->name('todo.edit');

Route::post('todos/{todo}/update-todos' , [TodoController::class , 'update'])->name('todo.update');

Route::get('todos/{todo}/delete' , [TodoController::class , 'delete'])->name('todo.delete');
