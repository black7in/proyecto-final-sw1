<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    //Show
    public function show()
    {
        $restaurante = auth()->user()->restaurante;
        return view('restaurante', compact('restaurante'));
    }
}
