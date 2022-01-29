<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{

    public function index()
    {
        return Noticia::all();
    }
    

}

