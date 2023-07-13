@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <a href="{{ route('logout') }}">Cerrar sesión</a>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <h1 class="mt-5">Lista de Usuarios</h1>
                    <button type="button" class="btn btn-primary mt-4 mb-4" data-toggle="modal" data-target="#create">
                        Nuevo
                    </button>
                    <tr>
                        <th>Documento</th>
                        <th>Nombres</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario -> Documento }}</td>
                        <td>{{ $usuario -> Nombres }}</td>
                        <td>{{ $usuario -> Correo }}</td>
                        <td>{{ $usuario -> Telefono }}</td>
                        <td>{{ $usuario -> Direccion }}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$usuario->Documento}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$usuario->Documento}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                    @include('usuario.modal-info')
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('usuario.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
