@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Gastos')

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
                            @if ($reg->id) action="{{ route('gastos.update', $reg->id) }}"
                        @else action="{{ route('gastos.store') }}" @endif
                            method="POST" enctype="multipart/form-data">
                            @csrf @if ($reg->id)
                                @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" name="fecha" value="{{ old('fecha', $reg->fecha) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Vendedor</label>
                                    <input type="text" name="vendedor" value="{{ old('vendedor', $reg->vendedor) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    <input type="text" name="descripcion" value="{{ old('descripcion', $reg->descripcion) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Choferes</label>
                                    <select class="form-control" name="user_id" required>
                                        @foreach ($choferes as $registro)
                                        <option value="{{$registro->id}}">{{$registro->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Monto</label>
                                    <input type="number" name="monto" value="{{ old('monto', $reg->monto) }}"
                                        class="form-control" placeholder="" required>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit"
                                    class="btn {{ $reg->id ? 'btn-primary' : 'btn-success' }}">Guardar</button>
                                <a class="btn btn-secondary" href="{{ route('gastos.index') }}">Cancelar</a>
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
