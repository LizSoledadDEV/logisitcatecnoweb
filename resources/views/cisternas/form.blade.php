@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Cisternas')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card {{ $reg->id ? 'card-primary' : 'card-success' }}">
                        <div class="card-header">
                            <h3 class="card-title">Nuevo</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form
                            @if ($reg->id) action="{{ route('cisternas.update', $reg->id) }}"
                        @else action="{{ route('cisternas.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Marca</label>
                                    <input type="text" name="marca" value="{{ old('marca', $reg->marca) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Modelo</label>
                                    <input type="text" name="modelo" value="{{ old('modelo', $reg->modelo) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Longitud</label>
                                    <input type="number" name="longitud" value="{{ old('longitud', $reg->longitud) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Pais Origen</label>
                                    <input type="text" name="pais_origen" value="{{ old('pais_origen', $reg->pais_origen) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Placa</label>
                                    <input type="text" name="placa" value="{{ old('placa', $reg->placa) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Material</label>
                                    <input type="text" name="material" value="{{ old('material', $reg->material) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Nro. Chasis</label>
                                    <input type="text" name="nro_chasis" value="{{ old('nro_chasis', $reg->nro_chasis) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Capacidad</label>
                                    <input type="number" name="capacidad" value="{{ old('capacidad', $reg->capacidad) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo de Carga</label>
                                    <input type="text" name="tipo_carga" value="{{ old('tipo_carga', $reg->tipo_carga) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Fabricación</label>
                                    <input type="date" name="fecha_fabricacion" value="{{ old('fecha_fabricacion', $reg->fecha_fabricacion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Altura</label>
                                    <input type="number" name="altura" value="{{ old('altura', $reg->altura) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Anchura</label>
                                    <input type="number" name="anchura" value="{{ old('anchura', $reg->anchura) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Peso Vacio</label>
                                    <input type="number" name="peso_vacio" value="{{ old('peso_vacio', $reg->peso_vacio) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Peso Maximo</label>
                                    <input type="number" name="peso_maximo" value="{{ old('peso_maximo', $reg->peso_maximo) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo Combustible</label>
                                    <input type="text" name="tipo_combustible" value="{{ old('tipo_combustible', $reg->tipo_combustible) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Adquisición</label>
                                    <input type="date" name="fecha_adquisicion" value="{{ old('fecha_adquisicion', $reg->fecha_adquisicion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Fecha Desactivación</label>
                                    <input type="date" name="fecha_desactivacion" value="{{ old('fecha_desactivacion', $reg->fecha_desactivacion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Nro. Ejes</label>
                                    <input type="number" name="nro_ejes" value="{{ old('nro_ejes', $reg->nro_ejes) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="color" name="color" value="{{ old('color', $reg->color) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('cisternas.index') }}">Cancelar</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
