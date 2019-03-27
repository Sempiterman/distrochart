@extends('layouts.personal')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="{{ url('empleadospdf') }}"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                            {{-- <button type="button" class="btn btn-sm btn-danger">Descargar PDF</button> --}}
                        {{ Form::open(['route' => 'personal.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('numempleado', null, ['class' => 'form-control', 'placeholder' => 'Buscar por numero de empleado']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Buscar por correo']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Buscar por telefono']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>
                            </div>
                        {{ Form::close() }}
                </div>
                <div class="panel-heading">
                    Listado de personal de proceso electoral
                    <a href="{{ route('personal.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>NoEmpleado</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Status</th>
                                {{-- <th>CURP</th>
                                <th>RFC</th> --}}
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employs as $employ)
                            <tr>
                                <td>{{ $employ->id }}</td>
                                <td>{{ $employ->numempleado }}</td>
                                <td>{{ $employ->name }} {{ $employ->apellidop }} {{ $employ->apellidom }}</td>
                                <td>{{ $employ->direccion }}</td>
                                <td>{{ $employ->telefono }}</td>
                                <th>{{ $employ->correo }}</th>
                                <th>{{ $employ->status }}</th>
                                {{-- <th>{{ $employ->curp }}</th>
                                <th>{{ $employ->rfc }}</th> --}}
                                <td width="10px">
                                    <a href="{{ route('personal.show', $employ->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('personal.edit', $employ->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['personal.destroy', $employ->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $employs->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
