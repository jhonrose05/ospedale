@extends('layouts.app')

@section('template_title')
    {{ $tbRole->name ?? 'Show Tb Role' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tb Role</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tb-roles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tbRole->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
