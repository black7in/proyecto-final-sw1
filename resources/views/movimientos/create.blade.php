@extends('layouts.app')

@section('content')
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>{{ __('Movimientos') }}</h2>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- ========== title-wrapper end ========== -->

    <div class="card-styles">
        <div class="card-style-3 mb-30">
            <div class="card-content">
                <div class="alert-box primary-alert">
                    <div class="alert">
                        <p class="text-medium">
                            Ingresa los datos del movimiento que vas a relizar
                        </p>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert-box danger-alert">
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-medium">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <form action="{{ route('movimientos.store') }}" method="POST">
                    @csrf
                    <div class="select-style-1">
                        <label>Tipo</label>
                        <div class="select-position">
                            <select name="tipo">
                                <option value="">Selecciona el tipo de movimiento</option>
                                <option value="entrada">entrada</option>
                                <option value="salida">salida</option>
                            </select>
                        </div>
                    </div>
                    <div class="select-style-1">
                        <label>Insumo</label>
                        <div class="select-position">
                            <select name="insumo">
                                <option value="">Selecciona el insumo</option>
                                @foreach ($insumos as $insumo)
                                    <option value="{{ $insumo->id }}">{{ $insumo->nombre }} en {{$insumo->unidad_medida->abreviatura}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="input-style-1">
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" placeholder="Ingresa la cantidad" min="1">
                    </div>

                    <div class="input-style-1">
                        <label>Motivo</label>
                        <textarea placeholder="Ingresa el motivo del movimiento.." name="motivo" rows="3"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Guardar Movimiento</button>
                        <a href="{{ route('movimientos.index') }}" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
