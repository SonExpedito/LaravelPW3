<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


//Get geralmente passado pela URL
//POST passado pelo form

Route::get("/", function () {
    return view('welcome');
});
Route::get("/cadastrar",[ClienteController::class, "cadastro"]); 
Route::get("/listar",[ClienteController::class, "listar"]);
Route::post("/adicionarCliente", [ClienteController::class, "adicionar"]);
Route::get("/editar/{id}",[ClienteController::class,"editar"]);
Route::post("/atualizar/{id}",[ClienteController::class,"atualizar"]);
Route::get("/excluir/{id}",[ClienteController::class,"excluir"]);