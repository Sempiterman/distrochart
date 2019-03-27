<div class="form-group form-inline">
    {{ Form::label('nameuser', 'Nombre de usuario') }}
    {{ Form::text('nameuser', null, ['class' => 'form-control', 'id' => 'nameuser']) }}

    {{ Form::label('nombre', 'Nombre') }}
    {{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}

    {{ Form::label('apellidop', 'Apellidos') }}
    {{ Form::text('apellidop', null, ['class' => 'form-control', 'id' => 'apellidop','placeholder'=>'Apellido Paterno']) }}
    {{-- {{ Form::label('apellidom', 'Apellido Materno') }} --}}
    {{ Form::text('apellidom', null, ['class' => 'form-control', 'id' => 'apellidom','placeholder'=>'Apellido Materno']) }}
</div>
<div class="form-group form-inline">
    {{ Form::label('correo', 'Correo') }}
    {{ Form::text('correo', null, ['class' => 'form-control', 'id' => 'correo']) }}

    {{ Form::label('password', 'Password') }}
    {{ Form::text('password', null, ['class' => 'form-control', 'id' => 'password']) }}

    {{ Form::label('nummoviline', 'Numero de telefono') }}
    {{ Form::text('nummoviline', null, ['class' => 'form-control', 'id' => 'nummoviline']) }}
    <hr>
    {{ Form::label('observaciones', 'Detalles') }}
    {{ Form::textarea('observaciones', null, ['class' => 'form-control','rows' => '2']) }}
</div>
<hr>
    {{ Form::label('slug', 'Estado') }}
    <label>
        {{ Form::radio('status', 'ACTIVA') }} ACTIVA
    </label>
    <label>
        {{ Form::radio('status', 'INACTIVA') }} INACTIVA
    </label>
    <label>
        {{ Form::radio('status', 'INHABILITADA') }} INHABILITADA
    </label>
    <label>
        {{ Form::radio('status', 'SUSPENDIDA') }} SUSPENDIDA
    </label>
    <hr>
<div align="center" class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

{{-- @section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#nameuser, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });
	});
</script>
@endsection --}}