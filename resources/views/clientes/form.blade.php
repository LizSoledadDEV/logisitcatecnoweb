@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Clientes')

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
                            <h3 class="card-title">{{ $reg->id ? 'Editar' : 'Nuevo' }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form
                            @if ($reg->id) action="{{ route('clientes.update', $reg->id) }}"
                        @else action="{{ route('clientes.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" value="{{ old('nombre', $reg->nombre) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Direccion</label>
                                    <input type="text" name="direccion" value="{{ old('direccion', $reg->direccion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" name="ciudad" value="{{ old('ciudad', $reg->ciudad) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Pais</label>
                                    <input type="text" name="pais" value="{{ old('pais', $reg->pais) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="number" name="telefono" value="{{ old('telefono', $reg->telefono) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="email" name="correo" value="{{ old('correo', $reg->correo) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Empresa</label>
                                    <input type="text" name="empresa" value="{{ old('empresa', $reg->empresa) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('clientes.index') }}">Cancelar</a>
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
