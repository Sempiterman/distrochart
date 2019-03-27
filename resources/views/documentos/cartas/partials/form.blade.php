{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group form-inline">
    {{ Form::label('folio', 'FOLIO') }}
    {{ Form::text('folio', null, ['class' => 'form-control', 'id' => 'folio']) }}

	{{ Form::label('are_id', 'ARES') }}
	{{ Form::select('are_id', $ares, null, ['class' => 'form-control']) }}

	{{ Form::label('zore_id', 'ZORES') }}
	{{ Form::select('zore_id', $zores, null, ['class' => 'form-control']) }}

</div>

<div class="form-group">
    {{ Form::label('detalles', 'Detalles') }}
    {{ Form::textarea('detalles', null, ['class' => 'form-control','rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label('img', 'Imagen') }}
    {{ Form::file('img') }}
</div>
<div class="form-group form-inline">
    {{ Form::label('slug', 'Estado') }}
    <label>
        {{ Form::radio('status', 'DISPONIBLE') }} DISPONIBLE
    </label>
    <label>
        {{ Form::radio('status', 'EXPEDIENTE PRESTADO') }} EXPEDIENTE PRESTADO
    </label>
    <label>
        {{ Form::radio('status', 'EXPEDIENTE DESTRUIDO') }} EXPEDIENTE DESTRUIDO
    </label>
</div>
<hr>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

{{-- @section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#folio, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

	    CKEDITOR.config.height = 400;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace('body');
	});
</script>
@endsection --}}