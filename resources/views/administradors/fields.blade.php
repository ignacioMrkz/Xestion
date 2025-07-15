<!-- Nome Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('name', 'Nome:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Enderezo Field -->
<div class="form-group col-sm-12 col-md-4">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
@if(!isset($administrador))
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
    <a href="{!! route('administradors.index') !!}" class="btn btn-default">Cancel</a>
</div>
