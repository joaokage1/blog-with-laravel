    @extends('layout.site')
    @section('title', 'Contatos')

    @section('conteudo')
    <h3>Essa é a view index</h3>
    <h2>Contatos:</h2>
    @foreach($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->tel }}</p>
    @endforeach

    @endsection