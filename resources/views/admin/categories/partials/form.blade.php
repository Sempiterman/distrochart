<div class="form-group form-inline">
    {{ Form::label('name', 'Nombre de la categoria') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}

    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group" align="center">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });
	});
</script>
@endsection