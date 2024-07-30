@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Usuarios')

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
                            @if ($reg->id) action="{{ route('usuarios.update', $reg->id) }}"
                        @else action="{{ route('usuarios.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" name="name" value="{{ old('name', $reg->name) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Telefono</label>
                                    <input type="number" name="telefono" value="{{ old('telefono', $reg->telefono) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="email" name="email" value="{{ old('email', $reg->email) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" value="{{ old('password', $reg->password) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <select class="form-control" name="tipo" required>
                                        <option value=""></option>
                                        <option value="administrador">Administrador</option>
                                        <option value="chofer">Chofer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Licencia</label>
                                    <input type="number" name="licencia" value="{{ old('licencia', $reg->licencia) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Vencimiento Licencia</label>
                                    <input type="date" name="licencia_exp" value="{{ old('licencia_exp', $reg->licencia_exp) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('usuarios.index') }}">Cancelar</a>
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
