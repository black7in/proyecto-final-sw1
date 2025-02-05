<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;
use App\Models\Receta;
use App\Models\MovimientoInventario;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //obtener todas las ventas del restaurante
        $ventas = auth()->user()->restaurante->ventas;
        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //obtener todas las recetas del restaurante
        $recetas = auth()->user()->restaurante->recetas;
        return view('ventas.create', compact('recetas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',
            'total' => 'required|numeric',
            'receta_id' => 'required',
        ]);

        $venta = new Venta();
        $venta->cantidad = $request->cantidad;
        $venta->precio = $request->precio;
        $venta->total = $request->total;
        $venta->receta_id = $request->receta_id;
        
        $venta->save();

        // Se debe calcular los movimientos de salida del inventario segundo a las recetas que tiene y las cantidades de recetas que se vendio
        //obtener la receta
        $receta = Receta::find($request->receta_id);

        $insumosGastados = $receta->insumosGastados($request->cantidad);

        //crear los movimientos de inventario
        foreach ($insumosGastados as $insumo_id => $cantidad) {
            $movimiento = new MovimientoInventario();
            $movimiento->tipo = 'salida';
            $movimiento->cantidad = $cantidad;
            $movimiento->insumo_id = $insumo_id;
            $movimiento->motivo = 'Venta de ' . $receta->nombre;
            $movimiento->restaurante_id = auth()->user()->restaurante->id;
            $movimiento->save();
        }

        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
