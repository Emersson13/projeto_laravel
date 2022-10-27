<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FuncionarioController;
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

// Route::get('/', function () {
    //return view('welcome');
//});

Route::get("usuario/{id}",function($id){

    return "voce está na página usuário o valor passado é {$id}";

});
Route::get("cliente",function(){
    $resultado = [ 
    "nome" => "irineu",
    "endereco"=>"vitinha ",
    "cpf"=>"000000000"
    ];

    dd($resultado);
});

Route::get("teste",function(Request $requisicao){

    $resposta = $requisicao->url();
    dd($resposta);
});
//Route::get("funcionario",[App\Http\Controllers\FuncionarioController]);

Route::get("funcionarioView",[FuncionarioController::class, "show"]);