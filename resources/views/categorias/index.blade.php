@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Categorias de Insumos') }}</h2>
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
                    <h6 class="mb-10">Tabla de datos de categorias de insumos</h6>
                    <a href="{{ route('categorias.create') }}" class="main-btn dark-btn btn-hover">
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
                                        <h6>Acciones</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @forelse ($categorias as $categoria)
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-text">
                                                    <p>{{ $categoria->nombre }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $categoria->descripcion }}</p>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-danger">
                                                        <i class="lni lni-trash-can"></i>
                                                    </button>
                                                </form>
                                                <a href="{{ route('categorias.edit', $categoria->id) }}"
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
