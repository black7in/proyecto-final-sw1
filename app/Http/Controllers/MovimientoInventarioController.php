<?php

namespace App\Http\Controllers;

use App\Models\MovimientoInventario;
use Illuminate\Http\Request;

class MovimientoInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //obtener los moviemientos de inventario del restaurante
        $movimientos = auth()->user()->restaurante->movimientos;
        return view('movimientos.index', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //obtener los insumos del restaurante
        $insumos = auth()->user()->restaurante->insumos;
        return view('movimientos.create', compact('insumos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cantidad' => 'required|numeric',
            'tipo' => 'required|in:entrada,salida',
            'motivo' => 'required|string|max:100',
            'insumo' => 'required',
        ]);

        MovimientoInventario::create([
            'cantidad' => $request->cantidad,
            'tipo' => $request->tipo,
            'motivo' => $request->motivo,
            'insumo_id' => $request->insumo,
            'restaurante_id' => auth()->user()->restaurante->id
        ]);

        // Cada que se hace un movimiento de inventario se calcula la cantidad diponible del insumo si esta debajo del stock minimo se envia un correo
        /*$insumo = Insumo::find($request->insumo);
        if ($insumo->getCantidadTotal() < $insumo->stock_minimo) {
            // Enviar correo
            Mail::to(auth()->user()->email)->send(new StockMinimo($insumo));
        }*/
        return redirect()->route('movimientos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MovimientoInventario $movimientoInventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovimientoInventario $movimientoInventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MovimientoInventario $movimientoInventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MovimientoInventario $movimientoInventario)
    {
        //
    }
}
