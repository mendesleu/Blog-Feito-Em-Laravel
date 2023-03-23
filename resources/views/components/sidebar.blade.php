<ul>
    @foreach($categorias as $categoria)
    <li>
        <a href="{{route('categorias', $categoria->id)}}" title="{{$categoria->categoria}}">{{$categoria->categoria}}</a>
    </li>
    @endforeach
</ul>