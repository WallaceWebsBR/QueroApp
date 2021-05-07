<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\GerenciamentosController;
use App\Http\Controllers\FinanceiroController;
use App\Http\Controllers\MarketingController;

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
    return view('auth/login');
});

Auth::routes();

////
// HOME CONTROLLER
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

////
// CADASTRO CONTROLLERS
Route::get('/cadastro_cidades', [CadastrosController::class, 'cidades'])->middleware('auth');
Route::get('/cadastro_lojas', [CadastrosController::class, 'lojas'])->middleware('auth');
Route::get('/cadastro_categorias', [CadastrosController::class, 'categorias'])->middleware('auth');
Route::get('/cadastro_produtos', [CadastrosController::class, 'produtos'])->middleware('auth');

////
// GERENCIAMENTO CONTROLLERS
Route::get('/gerenciamento_cidades', [GerenciamentosController::class, 'cidades'])->middleware('auth');
Route::get('/gerenciamento_lojas', [GerenciamentosController::class, 'lojas'])->middleware('auth');
Route::get('/gerenciamento_categorias', [GerenciamentosController::class, 'categorias'])->middleware('auth');
Route::get('/gerenciamento_produtos', [GerenciamentosController::class, 'produtos'])->middleware('auth');
Route::get('/gerenciamento_usuarios', [GerenciamentosController::class, 'usuarios'])->middleware('auth');

////
// Financeiro CONTROLLERS
Route::get('/financeiro_cidades', [FinanceiroController::class, 'cidades'])->middleware('auth');
Route::get('/financeiro_lojas', [FinanceiroController::class, 'lojas'])->middleware('auth');

////
// Maketing CONTROLLERS
Route::get('/marketing_push', [MarketingController::class, 'pushs'])->middleware('auth');