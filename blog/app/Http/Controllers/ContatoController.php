<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
            (object)["nome"=>"Toddy","tel"=>"991919111"],
            (object)["nome"=>"JaqueToddy","tel"=>"9819191123"]
        ];

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
        return "Esse é o criar do contatoController com: $req[nome]" ;
    }

    public function editar(Request $req){
        dd($req->all());
        return "Esse é o editar do contatoController";
    }
}
