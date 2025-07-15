<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('apelido1', 'Primeiro apelido:') !!}
    {!! Form::text('apelido1', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('apelido2', 'Segundo completo:') !!}
    {!! Form::text('apelido2', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-6">
    {!! Form::label('dni', 'DNI:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-6">
    {!! Form::label('nacemento', 'Data nacemento:') !!}
    {!! Form::date('nacemento', null, ['class' => 'form-control']) !!}
</div>

<!-- Enderezo Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('telefono', 'Teléfono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('empresa', 'Empresa:') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>
@if(!isset($coordinador))
<!-- Postal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Contrasinal:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Postal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password-confirm', 'Confirma contrasinal:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>
@endif
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('espazos.index') !!}" class="btn btn-default">Cancel</a>
</div>
