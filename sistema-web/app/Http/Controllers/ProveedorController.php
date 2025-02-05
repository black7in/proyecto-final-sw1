<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Mostrar lista de proveedores.
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Mostrar formulario para crear un nuevo proveedor.
     */
    public function create()
    {
        return view('proveedores.create'); // Corregido: ahora retorna la vista
    }

    /**
     * Guardar un nuevo proveedor.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Proveedor::create($request->all()); // Corregido: Ahora guarda en la BD

        return redirect()->route('proveedores.index')->with('success', 'Proveedor creado.');
    }

    /**
     * Mostrar formulario para editar un proveedor.
     */
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id); // Corregido: Obtiene el proveedor
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Actualizar un proveedor.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $proveedor = Proveedor::findOrFail($id); // Corregido: Obtiene el proveedor
        $proveedor->update($request->all());

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado.');
    }

    /**
     * Eliminar un proveedor.
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::findOrFail($id); // Corregido: Obtiene el proveedor
        $proveedor->delete();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado.');
    }
}
