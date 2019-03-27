<div class="form-group form-inline">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}

    {{ Form::label('email', 'Correo') }}
    {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
    {{ Form::label('password', 'Password') }}
    {{ Form::text('password', null, ['class' => 'form-control', 'id' => 'password']) }}
</div>
<div class="form-group" align="center">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>
