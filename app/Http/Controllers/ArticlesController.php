<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        //return 'Cargando Metodo Index en ArticlesController';
        return view('articles.list', ['user' => 'Jorge']);
    }
}
