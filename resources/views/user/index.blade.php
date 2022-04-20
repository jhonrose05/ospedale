@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Usuario') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Documento</th>
										<th>Genero</th>
										<th>Edad</th>
										<th>Telefono</th>
										<th>Eps</th>
										<th>Rol</th>
										<th>Accion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    @if ($user->edad < 18)
                                        <tr style="background-color: green">
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->documento }}</td>
                                            <td>{{ $user->genero }}</td>
                                            <td>{{ $user->edad ." Años" }}</td>
                                            <td>{{ $user->telefono }}</td>
                                            <td>{{ $user->eps }}</td>
                                            <td>{{ $user->rol }}</td>
                                            {{-- <td>{{ $user->email }}</td> --}}

                                            <td>
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    {{-- <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Modificar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @elseif ($user->edad > 50)
                                    <tr style="background-color: red">
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->documento }}</td>
                                        <td>{{ $user->genero }}</td>
                                        <td>{{ $user->edad ." Años" }}</td>
                                        <td>{{ $user->telefono }}</td>
                                        <td>{{ $user->eps }}</td>
                                        <td>{{ $user->rol }}</td>
                                        {{-- <td>{{ $user->email }}</td> --}}

                                        <td>
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                {{-- <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Modificar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->documento }}</td>
                                        <td>{{ $user->genero }}</td>
                                        <td>{{ $user->edad ." Años" }}</td>
                                        <td>{{ $user->telefono }}</td>
                                        <td>{{ $user->eps }}</td>
                                        <td>{{ $user->rol }}</td>
                                        {{-- <td>{{ $user->email }}</td> --}}

                                        <td>
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                {{-- <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> --}}
                                                <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Modificar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endif
                                      
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- {!! $users->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
