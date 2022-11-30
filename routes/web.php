<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LogoutController;


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
Route::middleware('isGuest')->group(function (){
    Route::post('/',[LoginController::class, 'login'])->name('login.auth');
    Route::get('/', [MainController::class, 'index'])->middleware('isGuest');
    Route::get('/register',[MainController::class,'registerPage'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
 });
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todos/create', [TodoController::class, 'create']);
Route::post('/todos', [TodoController::class, 'store']);
Route::get('todos/{todo}/edit', [TodoController::class, 'edit']);
Route::put('todos/{todo}', [TodoController::class, 'update']);
Route::get('/todos/{todo}/delete', [TodoController::class, 'delete']);