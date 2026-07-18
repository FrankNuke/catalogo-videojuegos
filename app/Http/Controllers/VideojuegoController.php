<?php

namespace App\Http\Controllers;

use App\Models\Videojuego;
use Illuminate\Http\Request;

class VideojuegoController extends Controller
{
    public function index()
    {
        
        $videojuegos = Videojuego::all();

        
        return view('videojuegos.index', compact('videojuegos'));
    }
}
