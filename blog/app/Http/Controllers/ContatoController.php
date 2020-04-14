<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        return "Esse é o index do contatoController";
    }

    public function criar(Request $req){
        return "Esse é o criar do contatoController com: $req[nome]" ;
    }

    public function editar(Request $req){
        dd($req->all());
        return "Esse é o editar do contatoController";
    }
}
