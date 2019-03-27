@extends('layouts.cuentas')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                            <a href="{{ route('home') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                            <a href="{{ url('equipospdf') }}"><button type="button" class="btn btn-sm btn-danger">Descargar PDF</button></a>
                        {{ Form::open(['route' => 'equipos.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
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
                    Listado de equipos
                    <a href="{{ route('equipos.create') }}" class="pull-right btn btn-sm btn-primary">
                        Crear
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">FOLIO</th>
                                <th>NoEmpleado</th>
                                {{-- <th>Nombre</th> --}}
                                <th>Chaleco</th>
                                <th>Mochila</th>
                                <th>Gafete</th>
                                <th>Rotafolio</th>
                                <th>Manuales</th>
                                <th>Sombrero</th>
                                <th>Portahojas</th>
                                <th>Utileria</th>
                                <th>Status</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kits as $kit)
                            <tr>
                                <td>{{ $kit->folio }}</td>
                                <td>{{ $kit->employ->numempleado }}</td>
                                {{-- <td>{{ $kit->employ->name }} {{ $kit->employ->apellidop }} {{ $kit->employ->apellidom }}</td> --}}
                                <td>{{ $kit->chaleco }}</td>
                                <td>{{ $kit->mochila }}</td>
                                <td>{{ $kit->gafete }}</td>
                                <td>{{ $kit->rotafolio }}</td>
                                <td>{{ $kit->manuales }}</td>
                                <td>{{ $kit->sombrero }}</td>
                                <td>{{ $kit->portahojas }}</td>
                                <td>{{ $kit->utileria }}</td>
                                <td>{{ $kit->status }}</td>
                                <td width="10px">
                                    <a href="{{ route('equipos.show', $kit->id) }}" class="btn btn-sm btn-default">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('equipos.edit', $kit->id) }}" class="btn btn-sm btn-default">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['equipos.destroy', $kit->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>
                    {{ $kits->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
