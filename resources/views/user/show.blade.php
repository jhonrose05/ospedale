@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Documento:</strong>
                            {{ $user->documento }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $user->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $user->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $user->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Eps Id:</strong>
                            {{ $user->eps_id }}
                        </div>
                        <div class="form-group">
                            <strong>Rol Id:</strong>
                            {{ $user->rol_id }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $user->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
