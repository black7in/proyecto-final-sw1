<?php

use Livewire\Volt\Component;
use App\Model\Insumo;
use App\Model\Receta;
use App\Model\Venta;

new class extends Component {
    //

    public $tipoReporte = null;

    public $opciones = [];

    public $datosReporte = [];

    public $fechaInicio = null;

    public $fechaFin = null;

    public $opcionSeleccionada = null;

    public $titulo = "Reporte personalizado";

    public $tablaHeader = [];

    public $tablaBody = [];

    public function obtenerOpcionesReporte()
    {
        switch ($this->tipoReporte) {
            case 'ventas':
                // Lógica para el reporte de ventas
                break;
            case 'insumos':
                // Lógica para el reporte de inventario
                $this->opciones = [['clave' => 'insumos_mas_usados', 'texto' => 'Insumos más usados'], ['clave' => 'stock_disponible', 'texto' => 'Stock Disponible'], ['clave' => 'insumos_con_stock_bajo', 'texto' => 'Insumos con stock bajo']];
                break;
            case 'movimientos':
                // Lógica para el reporte de clientes
                break;
            default:
                // Lógica para el caso por defecto
                break;
        }
    }

    public function generarReporte()
    {
        switch ($this->tipoReporte) {
            case 'ventas':
                // Lógica para el reporte de ventas
                break;
            case 'insumos':
                // Lógica para el reporte de inventario
                switch ($this->opcionSeleccionada) {
                    case 'insumos_mas_usados':
                        $tablaHeader = ['Insumo', 'Cantidad', 'Stock Actual'];

                        $insumos = auth()->user()->restaurante->insumos;
                        $insumosMasUsados = $insumos->map(function ($insumo) {
                            return [
                                'nombre' => $insumo->nombre,
                                'cantidad_usada' => $insumo->getCantidadUsada(),
                                'stock_actual' => $insumo->getCantidadTotal(),
                            ];
                        })->sortByDesc('cantidad_usada')->take(20);

                        $this->tablaHeader = $tablaHeader;
                        $this->tablaBody = $insumosMasUsados->toArray();

                        //dd($this->tablaHeader, $this->tablaBody);

                        break;
                    case 'stock_disponible':
                        // Lógica para el reporte de stock disponible
                        $insumos = auth()->user()->restaurante->insumos;
                        $tablaHeader = ['Insumo', 'Stock Actual', 'Stock Mínimo'];
                        $tableBody = $insumos->map(function ($insumo) {
                            return [
                                'nombre' => $insumo->nombre,
                                'stock_actual' => $insumo->getCantidadTotal(),
                                'stock_minimo' => $insumo->stock_minimo,
                            ];
                        });

                        $this->tablaHeader = $tablaHeader;
                        $this->tablaBody = $tableBody->toArray();
                        break;
                    case 'insumos_con_stock_bajo':
                        // Lógica para el reporte de insumos con stock bajo
                        $insumos = auth()->user()->restaurante->insumos;
                        $tablaHeader = ['Insumo', 'Stock Actual', 'Stock Mínimo'];
                        $tableBody = $insumos->filter(function ($insumo) {
                            return $insumo->getCantidadTotal() < $insumo->stock_minimo;
                        })->map(function ($insumo) {
                            return [
                                'nombre' => $insumo->nombre,
                                'stock_actual' => $insumo->getCantidadTotal(),
                                'stock_minimo' => $insumo->stock_minimo,
                            ];
                        });

                        $this->tablaHeader = $tablaHeader;
                        $this->tablaBody = $tableBody->toArray();
                        
                        break;
                    default:
                        // Lógica para el caso por defecto
                        break;
                }
                break;
            case 'movimientos':
                // Lógica para el reporte de clientes
                break;
            default:
                // Lógica para el caso por defecto
                break;
        }
    }
}; ?>

<div>
    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <div class="alert-box primary-alert">
                    <div class="alert">
                        <p class="text-medium">
                            Personaliza tus reportes con nuestro sistema de reportes personalizados.
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="select-style-1">
                            <label>¿Sobre que quieres tus reportes?</label>
                            <div class="select-position">
                                <select wire:model="tipoReporte" wire:change="obtenerOpcionesReporte">
                                    <option value="">Seleccione una opcion</option>
                                    <option value="insumos">Insumos</option>
                                    <option value="movimientos">Movimientos</option>
                                    <option value="ventas">Ventas</option>
                                </select>
                            </div>
                        </div>

                        <div class="select-style-1 mt-3">
                            <label>Opciones disponibles</label>
                            <div class="select-position">
                                <select wire:model="opcionSeleccionada">
                                    <option value="">Seleccione una opcion</option>
                                    @foreach ($opciones as $opcion)
                                        <option value="{{ $opcion['clave'] }}">{{ $opcion['texto'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                    </div>
                    <div class="col-6">
                        <div class="input-style-1">
                            <label>¿Desde que fecha quieres tus reportes?</label>
                            <div class="select-position">
                                <input type="date" wire:model="fechaInicio">
                            </div>
                        </div>

                        <div class="input-style-1 mt-3">
                            <label>¿Hasta que fecha quieres tus reportes?</label>
                            <div class="select-position">
                                <input type="date" wire:model="fechaFin">
                            </div>
                        </div>

                        <button class="main-btn primary-btn btn-hover" wire:click="generarReporte">
                            Generar reporte
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="invoice-card card-style mb-30">
                <div class="invoice-header">
                    <div class="invoice-for text-center">
                        <h2 class="mb-10">{{$titulo}}</h2>
                        <p class="text-sm">
                            Sistema Inteligente para el control de insumos.
                        </p>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="invoice-table table">
                        <thead>
                            <tr>
                                @foreach ($tablaHeader as $header)
                                    <th>{{ $header }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tablaBody as $row)
                                <tr>
                                    @foreach ($row as $cell)
                                        <td>{{ $cell }}</td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="invoice-action">
                    <ul class="d-flex flex-wrap align-items-center justify-content-center">
                        <li class="m-2">
                            <a href="#0" wire:click.prevent="generarReporte" class="main-btn primary-btn-outline btn-hover">
                                Download Reporte
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Card -->
        </div>
        <!-- ENd Col -->
    </div>
</div>
