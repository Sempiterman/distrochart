@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" {{-- align="center" --}}>
                    <a href="{{ route('cuentas.index') }}"><button type="button" class="btn btn-sm btn-dark">Regresar</button></a>
                    Ver informacion de registro {{ $account->id }}
                </div>

                <div class="panel-body">
                    <p><strong>Usuario: </strong> {{ $account->nameuser }}</p>
                    {{-- <p><strong>Slug </strong> {{ $account->slug }}</p> --}}
                    <p><strong>Nombre: </strong> {{ $account->nombre }} {{ $account->apellidop}} {{ $account->apellidom }}</p>
                    <p><strong>Correo: </strong>{{ $account->correo }}</p>
                    <p><strong>Password: </strong> {{ $account->password }}</p>
                    <p><strong>No. Telefono: </strong> {{ $account->nummoviline }}</p>
                    <p><strong>Observaciones: </strong> {{ $account->observaciones }}</p>
                    <p><strong>Status: </strong> {{ $account->status }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
