@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Recetas del Restaurante') }}</h2>
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
                    <h6 class="mb-10">Tabla de recetas</h6>
                    <p>Estas recetas son platillos que prepara el restaurante, cada receta esta calculada para 1 porción.</p>
                    <a href="{{ route('recetas.create') }}" class="main-btn dark-btn btn-hover mt-3">
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
                                        <h6>Tiempo de preparación</h6>
                                    </th>
                                    <th>
                                        <h6>Acciones</h6>
                                    </th>
                                </tr>
                                <!-- end table row-->
                            </thead>
                            <tbody>
                                @forelse ($recetas as $receta)
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">
                                                    <img src="{{ $receta->imagen ? asset('storage/' . $receta->imagen) : asset('images/recetas.jpg') }}" alt="">
                                                </div>
                                                <div class="lead-text">
                                                    <p>{{$receta->nombre}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>{{ $receta->tiempo_preparacion }} minutos</p>
                                        </td>
                                        <td>
                                            <div class="action">
                                                <a href="{{ route('recetas.show', $receta->id) }}" class="text-success">
                                                    <i class="lni lni-eye"></i>
                                                </a>
                                                <form action="{{ route('recetas.destroy', $receta->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-danger">
                                                        <i class="lni lni-trash-can"></i>
                                                    </button>
                                                </form>
                                                <a href="{{ route('recetas.edit', $receta->id) }}"
                                                    class="text-primary">
                                                    <i class="lni lni-pencil"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">No existen recetas disponibles</td>
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
