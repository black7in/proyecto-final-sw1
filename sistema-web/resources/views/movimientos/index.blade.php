@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Movimientos de Insumos') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="tables-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <h6 class="mb-10">Tabla de los movimientos del inventario</h6>
                    <p>Para crear un nuevo movimiento debe especificar si es movimiento de entrada o salida.</p>
                    <a href="{{ route('movimientos.create') }}" class="main-btn dark-btn btn-hover mt-2">
                        <i class="lni lni-circle-plus"></i>
                        Crear nuevo
                    </a>
                    <div class="table-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                        <h6>Identificador</h6>
                                    </th>
                                    <th>
                                        <h6>Tipo</h6>
                                    </th>
                                    <th>
                                        <h6>Insumo</h6>
                                    </th>
                                    <th>
                                        <h6>Cantidad</h6>
                                    </th>
                                    <th>
                                        <h6>Motivo</h6>
                                    </th>
                                    <th>
                                        <h6>Fecha</h6>
                                    </th>
                                    <th>
                                        <h6>Acciones</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @forelse ($movimientos as $movimiento)
                                    <tr>
                                        <td class="min-width">
                                            <div>
                                                <p>{{ $movimiento->id }}</p>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>
                                                @if ($movimiento->tipo == 'entrada')
                                                    <span class="badge bg-success">Entrada</span>
                                                @else
                                                    <span class="badge bg-danger">Salida</span>
                                                @endif
                                            </p>
                                        </td>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">
                                                    <img src="{{ $movimiento->insumo->imagen ? asset('storage/' . $movimiento->insumo->imagen) : asset('images/cereales.jpg') }}"
                                                        alt="">
                                                </div>
                                                <div class="lead-text">
                                                    <p>{{ $movimiento->insumo->nombre }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $movimiento->cantidad }}
                                                {{ $movimiento->insumo->unidad_medida->abreviatura }}</p>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $movimiento->motivo }}</p>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $movimiento->created_at->format('d/m/Y') }}</p>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <form action="{{ route('movimientos.destroy', $movimiento->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-danger">
                                                        <i class="lni lni-trash-can"></i>
                                                    </button>
                                                </form>
                                                <a href="{{ route('movimientos.edit', $movimiento->id) }}"
                                                    class="text-primary">
                                                    <i class="lni lni-pencil"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No existen movimientos en el invetario</td>
                                    </tr>
                                @endforelse
                                <!-- end table row -->
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
@endsection
