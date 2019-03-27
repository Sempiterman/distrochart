@extends('layouts.docs')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="{{ url('cartaspdf') }}"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        {{ Form::open(['route' => 'cartas.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                {{ Form::text('folio', null, ['class' => 'form-control', 'placeholder' => 'Buscar por folio']) }}
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><span class="label label-info">Buscar</span>
                                </button>

                            </div>
                        {{ Form::close() }}
                </div>
                <div class="panel-heading">
                    Listado de cartas de notificacion
                    <a href="{{ route('cartas.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>
                
                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Folio</th>
                                <th>Detalles</th>
                                <th>Zore</th>
                                <th>Are</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($charters as $charter)
                            <tr>
                                <td>{{ $charter->id }}</td>
                                <td>{{ $charter->folio }}</td>
                                <td>{{ $charter->detalles }}</td>
                                <td>{{ $charter->zore_id}}</td>
                                <td>{{ $charter->are_id}}</td>
                                <td>{{ $charter->status}}</td>
                                {{-- <td>{{ $kitform->employ->numempleado }}</td> --}}
                                
                                </td>
                                
                                <td width="10px">
                                    <a href="{{ route('cartas.show', $charter->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('cartas.edit', $charter->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['cartas.destroy', $charter->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $charters->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
