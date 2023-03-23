@extends('layout.template')
@section('titulo', 'Categorias')
@section('conteudo')
    <h1 class="text-center">
        Últimas Notícias
    </h1>
    @foreach ($noticias as $noticia)
        <div class="card">
            <a href="{{route('noticias', $noticias->id)}}" title="{{$noticias->titulo}}">
                <img src="imagens/{{$noticias->imagem}}" alt="{{$noticias->titulo}}" class="w-100">
            </a>
        </div>
        <div class="card-body">
            <h2>{{$noticias->titulo}}</h2>
            <p>Postado em {{$noticias->categoria}} em {{$noticias->dt}}</p>
        </div>
        <br>
    @endforeach
    {{-- {{$noticias->links()}} --}}
@endsection