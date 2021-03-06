<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{PrincipalController,
    SobreNosController,
     ContatoController,
    TesteController,
    FornecedorController};

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
Route::get('/', [PrincipalController::class, 'Principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'Contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'Salvar'])->name('site.contato');
Route::get('/sobre-nos', [SobreNosController::class, 'SobreNos'])->name('site.sobrenos');
Route::get('/login', function(){return 'Login';})->name('site.login');
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'Index'])->name('app.fornecedores');;
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');;
});


Route::get('teste/{p1}/{p2}',[TesteController::class, 'Teste'])->name('teste');


Route::fallback(function(){
    echo 'Rota não encontrada <a href="'.route('site.index').'">clique aqui</a> para voltar a pagina inicial';
});

// Route::redirect('rota2', 'rota1');
