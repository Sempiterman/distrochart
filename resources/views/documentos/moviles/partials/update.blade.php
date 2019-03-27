{{-- {{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('employ_id', 'Empleado') }}
	{{ Form::select('employ_id', $employs, null, ['class' => 'form-control']) }}
</div> --}}
<div class="form-group form-inline">
    {{ Form::label('folio', 'Folio:') }}
    {{ Form::text('folio', null, ['class' => 'form-control', 'id' => 'folio']) }}
</div>

<div class="form-group">
	{{ Form::label('Audifonos') }}
	<label>
		{{ Form::radio('audifonos', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('audifonos', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Cargador') }}
	<label>
		{{ Form::radio('cargador', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('cargador', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Cable') }}
	<label>
		{{ Form::radio('cable', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('cable', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Estado') }}
	<label>
		{{ Form::radio('estado', 'BUENO') }} BUENO
	</label>
	<label>
		{{ Form::radio('estado', 'REGULAR') }} REGULAR
	</label>
	<label>
		{{ Form::radio('estado', 'MALO') }} MALO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Bateria') }}
	<label>
		{{ Form::radio('bateria', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('bateria', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Chip') }}
	<label>
		{{ Form::radio('chip', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('chip', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Display') }}
	<label>
		{{ Form::radio('dysplay', 'BUENO') }} BUENO
	</label>
	<label>
		{{ Form::radio('dysplay', 'NO FUNCIONAL') }} NO FUNCIONAL
	</label>
	<label>
		{{ Form::radio('dysplay', 'ESTRELLADO') }} ESTRELLADO
	</label>
</div>

<div class="form-group">
    {{ Form::label('detalles', 'Detalles') }}
    {{ Form::textarea('detalles', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'Estado') }}
    <label>
        {{ Form::radio('status', 'ENTREGADO') }} ENTREGADO
    </label>
    <label>
        {{ Form::radio('status', 'PENDIENTE') }} PENDIENTE
    </label>
</div>
<hr>
<div class="form-group" align="center">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
{{-- <script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

	    CKEDITOR.config.height = 400;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace('body');
	});
</script> --}}
@endsection