@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="{{ url('dispositivospdf') }}"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>  
                        {{ Form::open(['route' => 'dispositivos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('imei', null, ['class' => 'form-control', 'placeholder' => 'Buscar por IMEI']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Buscar por numero de chip']) }}
                            </div>
                            <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>
                        {{ Form::close() }}
                </div>
                <div class="panel-heading">
                    Listado de informacion de dispositivos moviles
                    <a href="{{ route('dispositivos.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>IMEI</th>
                                <th>Marca</th>
                                <th>No. de chip</th>
                                <th>Compania</th>
                                <th>Observaciones</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($devices as $device)
                            <tr>
                                <td>{{ $device->id }}</td>
                                <td>{{ $device->imei }}</td>
                                <td>{{ $device->marca }}</td>
                                <td>{{ $device->numtelchip }}</td>
                                <td>{{ $device->compania }}</td>
                                <td>{{ $device->observaciones }}</td>
                                <td>{{ $device->status }}</td>
                                <td width="10px">
                                    <a href="{{ route('dispositivos.show', $device->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('dispositivos.edit', $device->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['dispositivos.destroy', $device->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $devices->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
