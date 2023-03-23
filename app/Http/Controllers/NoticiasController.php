<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiasController extends Controller
{
    public function noticias($id)
    {
        /*$noticia = Noticias::select('noticias.*', 'categorias.categoria', DB::RAW('date_format(noticias.data, "%d/%m/%Y") as dt'))
        ->join('categorias', 'categorias.id', '=', 'noticias.categorias_id')
        ->orderby('data', 'desc')
        ->where('noticias.id', '=', $id)
        ->first();*/
        $noticia = Noticias::find($id);
        return view('noticias', ['noticia' => $noticia]);
    }
}
