<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriasController extends Controller
{
    public function categorias($id)
    {
        $noticias = Noticias::select('noticias.*', DB::RAW('date_format(noticias.data, "%d/%m/%Y") as dt'))
            ->join('categorias', 'categorias.id', '=', 'noticias.categorias_id')
            ->orderby('data', 'desc')
            ->where('noticias.categorias_id', '=', $id)
            ->first();
        return view('categorias', ['noticias' => $noticias]);
    }
}
