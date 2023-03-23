@extends('layout.template')
@section('titulo', 'Notícias')
@section('conteudo', )
    <h1>{{$noticia->titulo}}</h1>
    <img src="imagens/{{$noticia->imagem}}" alt="{{$noticia->titulo}}" class="w-100">
    {{$noticia->noticia}}
@endsection