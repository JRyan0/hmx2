<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HmxController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
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
    return view('hmx.index');
});
Route::get('/login', function () {
    return view('hmx.login');
});


Route::match(['get', 'post'],'/produtos', [ ProdutoController::class, 'index'])->name('Produtos');
Route::match(['get', 'post'],'/categoria', [ ProdutoController::class, 'index'])->name('Categoria');
Route::match(['get', 'post'],'/cadastrar', [ ClienteController::class, 'index'])->name('Cadastrar');