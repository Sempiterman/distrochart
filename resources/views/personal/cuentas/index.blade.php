@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    <a href="{{ url('cuentaspdf') }}"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        {{ Form::open(['route' => 'cuentas.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('nameuser', null, ['class' => 'form-control', 'placeholder' => 'Buscar por nombre de usuario']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Buscar por correo']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('nummoviline', null, ['class' => 'form-control', 'placeholder' => 'Buscar por telefono']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>

                            </div>
                        {{ Form::close() }}
                </div>
                <div class="panel-heading">
                    Listado de cuentas de dispositivos moviles
                    <a href="{{ route('cuentas.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Usuario</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Password</th>
                                <th>Numero Movil</th>
                                <th>Observaciones</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($accounts as $account)
                            <tr>
                                <td>{{ $account->id }}</td>
                                <td>{{ $account->nameuser }}</td>
                                <td>{{ $account->nombre }} {{ $account->apellidop }} {{ $account->apellidom }}</td>
                                <td>{{ $account->correo }}</td>
                                <td>{{ $account->password }}</td>
                                <td>{{ $account->nummoviline }}</td>
                                <td>{{ $account->observaciones }}</td>
                                <td>{{ $account->status }}</td>
                                <td width="10px">
                                    <a href="{{ route('cuentas.show', $account->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('cuentas.edit', $account->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['cuentas.destroy', $account->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $accounts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
