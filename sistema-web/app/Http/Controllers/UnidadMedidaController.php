<?php

namespace App\Http\Controllers;

use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class UnidadMedidaController extends Controller
{
    //
    public function index()
    {
        $unidades = UnidadMedida::all();
        return view('unidades', compact('unidades'));
    }

    public function store(Request $request)
    {
        // Validación
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'abreviatura' => 'required|string|max:10',
            'descripcion' => 'nullable|string|max:100'
        ]);

        try {
            // Crear nueva unidad
            UnidadMedida::create([
                'nombre' => $validated['nombre'],
                'abreviatura' => $validated['abreviatura'],
                'descripcion' => $validated['descripcion']
            ]);

            return redirect()->route('unidades.index')
                ->with('success', 'Unidad de medida creada correctamente');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error al crear la unidad de medida')
                ->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        // Validación
        $validated = $request->validate([
            'nombre' => 'required|string|max:50',
            'abreviatura' => 'required|string|max:10',
            'descripcion' => 'nullable|string|max:100'
        ]);

        try {
            // Buscar la unidad
            $unidad = UnidadMedida::findOrFail($id);

            // Actualizar
            $unidad->update([
                'nombre' => $validated['nombre'],
                'abreviatura' => $validated['abreviatura'],
                'descripcion' => $validated['descripcion']
            ]);

            return redirect()->route('unidades.index')
                ->with('success', 'Unidad de medida actualizada correctamente');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Error al actualizar la unidad de medida')
                ->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            // Buscar y eliminar
            $unidad = UnidadMedida::findOrFail($id);
            $unidad->delete();

            return redirect()->route('unidades.index')
                ->with('success', 'Unidad de medida eliminada correctamente');
        } catch (\Exception $e) {
            return redirect()->route('unidades.index')
                ->with('error', 'Error al eliminar la unidad de medida');
        }
    }
}
