<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contato;

class ContatoController extends Controller
{
    public function index(){

        $contato = new Contato();
        //dd($contato -> lista());

        $contatos = [
            $contato -> lista()
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
