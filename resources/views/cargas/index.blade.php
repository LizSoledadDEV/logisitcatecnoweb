@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Cargas')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if (session('info'))
                        <div class="alert alert-{{ session('info.afirmacion') }}">
                            {{ session('info.mensaje') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table</h3>
                            <a class="btn btn-success btn-sm float-right" href="{{ route('cargas.create') }}">Crear
                                Carga</a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>TIPO GLP</th>
                                        <th>ORIGEN</th>
                                        <th>DESTINO</th>
                                        <th>FECHA SALIDA</th>
                                        <th>FECHA RECOGIDA</th>
                                        <th>CLIENTE</th>
                                        <th>CISTERNA</th>
                                        <th>CHOFER</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $reg)
                                        <tr>
                                            <td>{{ $reg->id }}</td>
                                            <td>{{ $reg->tipo_glp }}</td>
                                            <td>{{ $reg->origen }}</td>
                                            <td>{{ $reg->destino }}</td>
                                            <td>{{ $reg->fecha_salida }}</td>
                                            <td>{{ $reg->fecha_recogida }}</td>
                                            <td>{{ $reg->cliente->nombre }}</td>
                                            <td>{{ $reg->cisterna->marca }}</td>
                                            <td>{{ $reg->user->name }}</td>
                                            <td class="project-actions text-left">
                                                {{-- <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-eye"></i>
                                                </a> --}}
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('cargas.edit', $reg->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('cargas.destroy', $reg->id) }}" method="post"
                                                    style="display: inline">
                                                    @csrf @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- {{ $users->links() }} --}}
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
