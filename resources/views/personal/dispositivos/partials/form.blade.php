<div class="form-group form-inline">
    {{ Form::label('imei', 'IMEI') }}
    {{ Form::text('imei', null, ['class' => 'form-control', 'id' => 'imei','placeholder'=>'IMEI del dispositivo']) }}

    {{ Form::label('marca', 'Marca') }}
    {{ Form::text('marca', null, ['class' => 'form-control', 'id' => 'marca','placeholder'=>'Ej: HTC, ZTE, HUAWEI, ETC.']) }}

    {{ Form::label('numtelchip', 'Numero de chip') }}
    {{ Form::text('numtelchip', null, ['class' => 'form-control', 'id' => 'numtelchip','placeholder'=>'Numero telefonico del chip']) }}
    <br><br>
    {{ Form::label('compania', 'Compania') }}
    {{ Form::text('compania', null, ['class' => 'form-control', 'id' => 'compania','placeholder'=>'Ej: Telcel, Movistar, Unefon, etc.']) }}

    {{ Form::label('observaciones', 'Observaciones') }}
    {{ Form::text('observaciones', null, ['class' => 'form-control', 'id' => 'observaciones','placeholder'=>'Ej:desperfectos, complicaciones, danos, etc.']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'Estado') }}
    <label>
        {{ Form::radio('status', 'FUNCIONAL') }} FUNCIONAL
    </label>
    <label>
        {{ Form::radio('status', 'NO FUNCIONAL') }} NO FUNCIONAL
    </label>
</div>
<hr>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
