<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function cadastro(Request $req)
    {
        $cliente = Cliente::all();
        return view('form')->with("cliente", $cliente);
    }

    public function adicionar(Request $req)
    {
        $cliente = new Cliente;
        $cliente->Nome = $req->Nome;
        $cliente->Endereco = $req->Endereco;
        $cliente->Bairro = $req->Bairro;
        $cliente->CEP = $req->CEP;
        $cliente->Cidade = $req->Cidade;
        $cliente->Estado = $req->Estado;
        $cliente->save();
        return $this->listar();
    }

    public function listar(){
        $cliente = Cliente::all();
        return view('listar')->with("cliente", $cliente);
    }

    public function editar(Request $req)
    {
        $cliente = Cliente::find($req->id);
        return view('editar')->with("cliente", $cliente);
    }

    public function atualizar(Request $req)
    {
        $cliente = Cliente::find($req->id);
        $cliente->update(
            [
                'Nome' => $req->Nome,
                'Endereco' => $req->Endereco,
                'Bairro' => $req->Bairro,
                'CEP' => $req->CEP,
                'Cidade' => $req->Cidade,
                'Estado' => $req->Estado
            ]
        );
        return $this->listar();
    }

    public function excluir(Request $req)
    {
        $cliente = Cliente::find($req->id);
        $cliente->delete();
        return $this->listar();
    }
}
