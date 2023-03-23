@extends('layout.template')
@section('titulo', 'Página Inicial')
@section('conteudo')
    <h1 class="text-center">
        Últimas Notícias
    </h1>
    @foreach ($noticias as $noticia)
        <div class="card">
            <a href="{{route('noticias', $noticia->id)}}" title="{{$noticia->titulo}}">
                <img src="imagens/{{$noticia->imagem}}" alt="{{$noticia->titulo}}" class="w-100">
            </a>
        </div>
        <div class="card-body">
            <h2>{{$noticia->titulo}}</h2>
            <p>Postado em {{$noticia->categoria}} em {{$noticia->dt}}</p>
        </div>
        <br>
    @endforeach
    {{$noticias->links()}}
@endsection
