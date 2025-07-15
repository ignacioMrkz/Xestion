<!-- Edicion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edicion', 'Edición:') !!}
    {!! Form::number('edicion', null, ['class' => 'form-control']) !!}
</div>

<!-- Ano Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano', 'Ano:') !!}
    {!! Form::number('ano', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Número de persoa socia:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Cesion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('espazo', 'Espazo:') !!}
    {!! Form::select('espazo', ['Froebel' => 'Froebel', 'Deportes' => 'Deportes', 'Casa da Luz' => 'Casa da Luz', 'Casa Azul' => 'Casa Azul'], null, ['placeholder' => '-- Escolle un espazo --', 'class' => 'form-control select2']) !!}

</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome e apelidos:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Idade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idade', 'Idade:') !!}
    {!! Form::number('idade', null, ['class' => 'form-control']) !!}
</div>

<!-- Cesion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cesion', 'Autoriza a cesión de datos:') !!}
    {!! Form::select('cesion', ['SI' => 'SI', 'NON' => 'NON'], null, ['placeholder' => '-- Escolle unha opción --', 'class' => 'form-control select2']) !!}

</div>

<!-- Localidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('localidade', 'Localidade:') !!}
    {!! Form::text('localidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono 1:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono2', 'Telefono 2:') !!}
    {!! Form::text('telefono2', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Xenero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xenero', 'Xenero:') !!}
    {!! Form::select('xenero', ['muller' => 'Muller', 'home' => 'Home', 'no_binaria' => 'Persoa non binaria', 'outro' => 'Outras identidades', 'no_contesta' => 'Prefiro non contestar'], null, ['placeholder' => '-- Escolle o xénero --', 'class' => 'form-control select2']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('socios.index') !!}" class="btn btn-default">Cancel</a>
</div>
