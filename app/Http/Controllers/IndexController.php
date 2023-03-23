<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $noticias = Noticias::select('noticias.*', 'categorias.categoria', DB::RAW('date_format(noticias.data, "%d/%m/%Y") as dt'))
            ->join('categorias', 'categorias.id', '=', 'noticias.categorias_id')
            ->orderby('data', 'desc')
            ->paginate(3);
        return view("home", ["noticias" => $noticias]);
    }

    public function quemSomos()
    {
        return view("quemsomos");
    }
}
