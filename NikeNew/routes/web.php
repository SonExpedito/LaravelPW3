<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get("/", [ClienteController::class, "index"]);
Route::post("/adicionarCliente", [ClienteController::class, "adicionar"]);