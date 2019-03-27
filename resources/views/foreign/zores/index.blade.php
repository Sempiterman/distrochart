@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <a href="{{ url('zorespdf') }}"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        {{ Form::open(['route' => 'zores.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar por nombre']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Buscar por descripcion']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>

                            </div>
                        {{ Form::close() }}
                </div>
                <div class="panel-heading">
                    Listado de ZORES
                    <a href="{{ route('zores.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>No# ARE</th>
                                <th>Descripcion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($zores as $zore)
                            <tr>
                                <td>{{ $zore->id }}</td>
                                <td>{{ $zore->name}}</td>
                                <td>{{ $zore->descripcion }}</td>
                                <td width="10px">
                                    <a href="{{ route('zores.show', $zore->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('zores.edit', $zore->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['zores.destroy', $zore->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $zores->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
