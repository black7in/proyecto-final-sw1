@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Insumos del Restaurante') }}</h2>
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
                    <h6 class="mb-10">Tabla de todos los insumos del restaurante.</h6>
                    <a href="{{ route('insumos.create') }}" class="main-btn dark-btn btn-hover">
                        <i class="lni lni-circle-plus"></i>
                        Crear nuevo
                    </a>
                    <div class="table-wrapper table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="lead-info">
                                        <h6>Nombre</h6>
                                    </th>
                                    <th class="lead-email">
                                        <h6>Descripción</h6>
                                    </th>
                                    <th>
                                        <h6>Stock Minimo</h6>
                                    </th>
                                    <th>
                                        <h6>Categoria</h6>
                                    </th>
                                    <th>
                                        <h6>Stock Disponible</h6>
                                    </th>
                                    <th>
                                        <h6>Acciones</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @forelse ($insumos as $insumo)
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">
                                                    <img src="{{ $insumo->imagen ? asset('storage/' . $insumo->imagen) : asset('images/cereales.jpg') }}" alt="">
                                                </div>
                                                <div class="lead-text">
                                                    <p>{{$insumo->nombre}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $insumo->descripcion }}</p>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $insumo->stock_minimo }}</p>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $insumo->categoria->nombre }}</p>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $insumo->getCantidadTotal() }} {{$insumo->unidad_medida->abreviatura}}</p>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <form action="{{ route('insumos.destroy', $insumo->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-danger">
                                                        <i class="lni lni-trash-can"></i>
                                                    </button>
                                                </form>
                                                <a href="{{ route('insumos.edit', $insumo->id) }}"
                                                    class="text-primary">
                                                    <i class="lni lni-pencil"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No existen categorias</td>
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
