<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row col-3">
            <div class="form-group">
                {{ Form::label('documento') }}
                {{ Form::text('documento', $user->documento, ['class' => 'form-control' . ($errors->has('documento') ? ' is-invalid' : ''), 'placeholder' => 'Documento']) }}
                {!! $errors->first('documento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('genero') }}
                    {{-- {{ form::select('genero', array('1' => 'M','2' => 'F' ), ['class' => 'form-control']) }} --}}
                    {!! Form::select('genero', array('1' => 'M','2' => 'F' ), $user->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opcion']) !!}
                    {{-- {{ Form::text('genero', '', ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }} --}}
                    {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('fecha_nacimiento') }}
                    {{ Form::date('fecha_nacimiento', $user->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
                    {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('telefono') }}
                    {{ Form::text('telefono', $user->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
                    {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('eps') }}
                    {!! Form::select('eps_id', $eps, $user->eps_id, ['class' => 'form-control' . ($errors->has('eps_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opcion']) !!}    
                    {{-- {{ Form::text('eps_id', '', ['class' => 'form-control' . ($errors->has('eps_id') ? ' is-invalid' : ''), 'placeholder' => 'Eps Id']) }} --}}
                    {!! $errors->first('eps_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('rol') }}
                    {!! Form::select('rol_id', $rol, $user->rol_id, ['class' => 'form-control' . ($errors->has('rol_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opcion']) !!}    
                    {{-- {{ Form::text('rol_id', '', ['class' => 'form-control' . ($errors->has('rol_id') ? ' is-invalid' : ''), 'placeholder' => 'Rol Id']) }} --}}
                    {!! $errors->first('rol_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>        
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('email') }}
                    {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                    {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('password') }}
                    {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
                    {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>