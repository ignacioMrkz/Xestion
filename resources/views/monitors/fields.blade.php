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

<div class="form-group col-sm-12">
    {!! Form::label('actividades[]', 'Actividades nas que participa o monitor:') !!}
    <select class="form-control select2" name="actividades[]" multiple="multiple">
        @if(isset($monitor))
        @foreach($actividades as $actividade)
        <option @if(in_array($actividade->id, $monitor->actividades->pluck('id')->toArray())) selected @endif value="{!!$actividade->id!!}">{!!$actividade->nome!!}</option>
        @endforeach
        @else
        @foreach($actividades as $actividade)
        <option value="{!!$actividade->id!!}">{!!$actividade->nome!!}</option>
        @endforeach
        @endif
    </select>
</div>
@if(!isset($monitor))
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
    <a href="{!! route('monitors.index') !!}" class="btn btn-default">Cancel</a>
</div>
