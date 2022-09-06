<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HmxController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
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
})->middleware('auth');
Route::match(['get', 'post'],'/', [ HmxController::class, 'index'])->middleware('auth')->name('home');

Route::match(['get', 'post'],'/produtos', [ ProdutoController::class, 'index'])->middleware('auth')->name('Produtos');
Route::match(['get', 'post'],'/{idcategoria}/categoria', [ ProdutoController::class, 'categoria'])->middleware('auth')->name('categoria_por_id');


Route::match(['get', 'post'],'/cadastrar', [ ClienteController::class, 'index'])->middleware('auth')->name('Cadastrar');
Route::match(['get', 'post'],'/cliente/cadastrar', [ ClienteController::class, 'cadastrarCliente'])->middleware('auth')->name('cadastrar_cliente');
Route::match(['get', 'post'],'/logar', [ UsuarioController::class, 'Logar'])->middleware('auth')->name('login');
Route::match(['get', 'post'],'/sair', [ UsuarioController::class, 'sair'])->middleware('auth')->name('sair');
Route::match(['get', 'post'],'/{idproduto}/carrinho/adicionar', [ ProdutoController::class, 'adicionarCarrinho'])->middleware('auth')->name('adicionar_carrinho');
Route::match(['get', 'post'],'/carrinho', [ ProdutoController::class, 'verCarrinho'])->middleware('auth')->name('ver_carrinho');
Route::match(['get', 'post'],'/{indice}/excluircarrinho', [ ProdutoController::class, 'excluirCarrinho'])->middleware('auth')->name('carrinho_excluir');
