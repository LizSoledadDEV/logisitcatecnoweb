@extends('layouts.layout')

{{-- @section('icon_title')
    <i class="fas fa-school"></i>
@endsection --}}

@section('title', 'Reportes')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Informe de pago del conductor</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('reportes.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Choferes</label>
                                    <select class="form-control" name="chofer" required>
                                        @foreach ($choferes as $registro)
                                        <option value="{{$registro->id}}">{{$registro->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>A Partir de la Fecha:</label>
                                    <input type="date" name="inicio" class="form-control" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Hasta la Fecha:</label>
                                    <input type="date" name="fin" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                {{-- <button type="submit" class="btn btn-success" target="_blank">Guardar</button> --}}
                                <button type="submit" class="btn btn-primary" target="_blank">
                                    <i class="fas fa-download"></i> Generate PDF
                                  </button>
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
