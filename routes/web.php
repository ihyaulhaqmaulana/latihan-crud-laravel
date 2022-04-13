<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::controller(PostController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/create', 'create');
  Route::post('/store', 'store');
  Route::get('/edit/{id}', 'edit');
  Route::post('/update/{id}', 'update');
  Route::delete('/delete/{id}', 'destroy');
});
