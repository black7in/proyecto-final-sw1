<?php

namespace App\Http\Controllers;

use App\Models\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //obtener todas las recetas del restaurante
        $recetas = auth()->user()->restaurante->recetas;
        return view('recetas.index', compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //obtener los isumos del restaurante
        $insumos = auth()->user()->restaurante->insumos;
        return view('recetas.create', compact('insumos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:255',
            'indicaciones' => 'required|string',
            'tiempo_preparacion' => 'required|integer|min:1',
            'insumos' => 'required|array|min:1',
            'insumos.*.id' => 'required|exists:insumos,id',
            'insumos.*.cantidad' => 'required|numeric|min:0',
        ]);

        // crear la receta
        $receta = Receta::create([
            'nombre' => $request->nombre,
            'indicaciones' => $request->indicaciones,
            'tiempo_preparacion' => $request->tiempo_preparacion,
            'restaurante_id' => auth()->user()->restaurante->id,
        ]);

        // guardar los insumos de la receta
        foreach ($request->insumos as $insumo) {
            $receta->insumos()->attach($insumo['id'], ['cantidad' => $insumo['cantidad']]);
        }

        return redirect()->route('recetas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Receta $receta)
    {
        //

        return view('recetas.show', compact('receta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Receta $receta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Receta $receta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Receta $receta)
    {
        //
    }
}
