<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Enderezo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enderezo', 'Enderezo:') !!}
    {!! Form::text('enderezo', null, ['class' => 'form-control']) !!}
</div>

<!-- Postal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postal', 'Código postal:') !!}
    {!! Form::text('postal', null, ['class' => 'form-control']) !!}
</div>

<!-- Localidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('localidade', 'Localidade:') !!}
    {!! Form::select('localidade', pontevedra(), null, ['class' => 'form-control', 'placeholder'=>'--Escolle unha cidade--']) !!}
</div>

<!-- Mapa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mapa', 'Mapa:') !!}
    {!! Form::text('mapa', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('espazos.index') !!}" class="btn btn-default">Cancel</a>
</div>
