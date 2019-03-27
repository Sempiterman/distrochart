<div class="form-group form-inline">
    {{ Form::hidden('user_id', auth()->user()->id) }}
    {{ Form::label('numempleado', 'No. de empleado') }}
    {{ Form::text('numempleado', null, ['class' => 'form-control', 'id' => 'numempleado']) }}

    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}

    {{ Form::label('apellidop', 'Apellidos') }}
    {{ Form::text('apellidop', null, ['class' => 'form-control', 'id' => 'apellidop','placeholder' =>'Apellido Paterno']) }}

    {{-- {{ Form::label('apellidom', 'Apellido Materno') }} --}}
    {{ Form::text('apellidom', null, ['class' => 'form-control', 'id' => 'apellidom','placeholder' =>'Apellido Materno']) }}
    <br><br>
    {{ Form::label('telefono', 'Telefono') }}
    {{ Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) }}

    {{ Form::label('correo', 'Correo') }}
    {{ Form::text('correo', null, ['class' => 'form-control', 'id' => 'correo']) }}
    
    {{-- {{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }} --}}
    {{ Form::label('direccion', 'Direccion') }}
    {{ Form::textarea('direccion', null, ['class' => 'form-control','rows' => '2']) }}
</div>
{{-- <hr>
<div class="form-group form-inline">
    {{ Form::label('position_id', 'Cargo') }}
    {{ Form::select('position_id', $positions, null, ['class' => 'form-control']) }}

    {{ Form::label('are_id', 'ARES') }}
    {{ Form::select('are_id', $ares, null, ['class' => 'form-control']) }}

    {{ Form::label('zore_id', 'ZORES') }}
    {{ Form::select('zore_id', $zores, null, ['class' => 'form-control']) }}

    {{ Form::label('municipality_id', 'Municipio') }}
    {{ Form::select('municipality_id', $municipalities, null, ['class' => 'form-control']) }}
</div>  --}}
<hr>
<div class="form-group">
    {{ Form::label('slug', 'Estado') }}
    <label>
        {{ Form::radio('status', 'ACTIVO') }} ACTIVO
    </label>
    <label>
        {{ Form::radio('status', 'INACTIVO') }} INACTIVO
    </label>
    <label>
        {{ Form::radio('status', 'SUSPENDIDO') }} SUSPENDIDO
    </label>
    <label>
        {{ Form::radio('status', 'BAJA') }} BAJA
    </label>
</div>
<div align="center" class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>