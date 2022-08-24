<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HmxController;

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

Route::get('/cadastro', function () {
    return view('hmx.cadastro');
});