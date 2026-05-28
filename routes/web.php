<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; //'bibliotecas' para rotas!!!!!!!!!!!! sempre primeira letra MAIÚSCULA, por ser considerada classe

use App\Http\Controllers\UserController;
use App\Http\Controllers\MaterialController;

Route::get('/', function (Request $req) { //envio por get
    $nome = $req->nome ?? "Guilherme"; //quando não ouver valor na variavel $nome, exibira 'Guilherme'
    return view('inicial',["nome" => $nome]);
});

Route::post('/', function (Request $req){ //recepção por post
    $nome = $req->nome; //envia a informação do form para a variavel $nome por meio POST
    return view('inicial',["nome" => $nome]);
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/sign-up', function () {
    return view('Authentication/SignUp');
});

Route:: post ('/sign-up', [UserController::class, 'store']);

Route:: get ('/materials/new', [MaterialController::class, 'create']);
Route:: post ('/materials/new', [MaterialController::class, 'store']);
Route:: get ('/materials', [MaterialController::class, 'index']);
