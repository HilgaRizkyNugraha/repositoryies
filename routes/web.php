<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index');
// Route::get('/user', [UserController::class, 'index'])->name('user'); 
// Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); 

//127.0.0.1:8000
Route::resource('user', UserController::class);
Route::get('/user/read', [UserController::class, 'read'])->name('user.read'); 
Route::get('/user/create/', [UserController::class, 'create'])->name('user.create'); 
Route::get('/user/delete/', [UserController::class, 'delete'])->name('user.delete'); 
Route::get('/user/update/', [UserController::class, 'update'])->name('user.update'); 
