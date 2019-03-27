@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="{{ url('movilespdf') }}"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                            
                        {{ Form::open(['route' => 'moviles.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
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
                    Listado de moviles
                    <a href="{{ route('moviles.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Folio</th>
                                <th>Audifonos</th>
                                <th>Cargador</th>
                                <th>Cable USB</th>
                                <th>Estado</th>
                                <th>Bateria</th>
                                <th>Chip</th>
                                <th>Display</th>
                                <th>Detalles</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($movils as $movil)
                            <tr>
                                <td>{{ $movil->id }}</td>
                                <td>{{ $movil->folio }}</td>
                                <td>{{ $movil->audifonos }}</td>
                                <td>{{ $movil->cargador }}</td>
                                <td>{{ $movil->cable }}</td>
                                <td>{{ $movil->estado }}</td>
                                <td>{{ $movil->bateria }}</td>
                                <td>{{ $movil->chip }}</td>
                                <td>{{ $movil->dysplay }}</td>
                                <td>{{ $movil->detalles }}</td>
                                <td>{{ $movil->status }}</td>
                                <td width="10px">
                                    <a href="{{ route('moviles.show', $movil->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('moviles.edit', $movil->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['moviles.destroy', $movil->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                                <td width="10px">
                                    <a href="{{ url('acusemoviles/{$id}', $movil->id) }}" class="btn btn-sm btn-default">Acuse</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $movils->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
