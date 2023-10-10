<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', function () {
    return view('welcome');
});

// this route is for 5.8 version
// Route::get('todos', 'TodoController@index');


// this route is for 8.5 version we can now use this route in this
Route::get('todos', [TodoController::class, 'index']);
