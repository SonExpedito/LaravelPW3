<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(Request $req){
        $cliente = Cliente::all();
        return view ('form')->with("cliente",$cliente);

    }

    public function adicionar (Request $req){
        $cliente = new Cliente;
        $cliente ->Nome = $req->Nome;
        $cliente->Endereco = $req->Endereco;
        $cliente ->Bairro = $req->Bairro;
        $cliente->CEP = $req->CEP;
        $cliente ->Cidade = $req->Cidade;
        $cliente->Estado = $req->Estado;
        $cliente->save();
        return view('listar');
    }

}
