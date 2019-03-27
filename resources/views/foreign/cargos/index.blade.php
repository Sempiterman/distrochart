@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="{{ route('personal.index') }}"><button type="button" class="btn btn-sm btn-defaulr">Regresar</button></a>
                        {{ Form::open(['route' => 'cargos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
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
                    Listado de cargos 
                    <a href="{{ route('cargos.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Cargo</th>
                                <th>Descripcion</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($positions as $position)
                            <tr>
                                <td>{{ $position->id }}</td>
                                <td>{{ $position->name}}</td>
                                <td>{{ $position->descripcion }}</td>
                                <td width="10px">
                                    <a href="{{ route('cargos.show', $position->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('cargos.edit', $position->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['cargos.destroy', $position->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $positions->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
