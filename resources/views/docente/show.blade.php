@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cursos Id:</strong>
                            {{ $docente->cursos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $docente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $docente->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $docente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $docente->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
