<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;
use App\Models\UnidadMedida;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los insumos del restaurante
        $insumos = auth()->user()->restaurante->insumos;
        
        return view('insumos.index', compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = auth()->user()->restaurante->categorias;
        $unidades = UnidadMedida::all();

        return view('insumos.create', compact('categorias', 'unidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string|max:100',
            'stock_minimo' => 'required|numeric',
            'imagen' => 'required|mimes:jpg,bmp,png,jpeg|max:2048',
            'categoria_id' => 'required',
            'unidad_medida_id' => 'required',
        ]);

        $insumo = Insumo::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'stock_minimo' => $request->stock_minimo,
            'categoria_id' => $request->categoria_id,
            'unidad_medida_id' => $request->unidad_medida_id,
            'restaurante_id' => auth()->user()->restaurante->id
        ]);

        if ($request->hasFile('imagen')) {
            $insumo->imagen = $request->file('imagen')->store('insumos', 'public');
            $insumo->save();
        }

        return redirect()->route('insumos.index')->with('success', 'Insumo creado.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Insumo $insumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Insumo $insumo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insumo $insumo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Insumo $insumo)
    {
        //
    }
}
