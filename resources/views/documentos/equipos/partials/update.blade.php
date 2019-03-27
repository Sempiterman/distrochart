{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('folio', 'Folio:') }}
    {{ Form::text('folio', null, ['class' => 'form-control', 'id' => 'folio']) }}
</div>

<div class="form-group">
	{{ Form::label('Chaleco') }}
	<label>
		{{ Form::radio('chaleco', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('chaleco', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Mochila') }}
	<label>
		{{ Form::radio('mochila', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('mochila', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Gafete') }}
	<label>
		{{ Form::radio('gafete', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('gafete', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Rotafolio') }}
	<label>
		{{ Form::radio('rotafolio', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('rotafolio', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Manuales') }}
	<label>
		{{ Form::radio('manuales', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('manuales', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Sombrero') }}
	<label>
		{{ Form::radio('sombrero', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('sombrero', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Portahojas') }}
	<label>
		{{ Form::radio('portahojas', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('portahojas', 'NO') }} NO
	</label>
</div>

<div class="form-group">
	{{ Form::label('Utileria') }}
	<label>
		{{ Form::radio('utileria', 'SI') }} SI
	</label>
	<label>
		{{ Form::radio('utileria', 'NO') }} NO
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
@endsection