@extends('layout.site')
    @section('title', 'Login')

    @section('conteudo')
    <div class="container">
        <div class="row">

            <div class="col s12 m4" style="margin:7%;">
                <h2 class="header">Logar</h2>
                <div class="card horizontal" style="padding:7%;">
                <div class="card-stacked">
                <form action="{{ route('site.login.entrar') }}" method="post" style="text-align:center">
                    {{ csrf_field() }}
                    <div class="input-field" style="padding:7%;">
                        <input type="text" name="email">
                        <label>E-mail</label>
                    </div>
                    <div class="input-field" style="padding:7%;">
                        <input type="password" name="senha">
                        <label>Senha</label>
                    </div>
                    <button class="btn deep-orange" >Entrar</button>
                </form>
                </div>
                </div>
            </div>
        </div>
                
    </div>
    @endsection