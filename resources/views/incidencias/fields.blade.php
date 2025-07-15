<!-- Incidencia Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('incidencia', 'Incidencia:') !!}
    {!! Form::textarea('incidencia', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('coordinador_id', 'Coordinador que solicita:') !!}
    <select class="form-control select2" name="coordinador_id">
        @if(isset($incidencia))
        @foreach($coordinadores as $coordinador)
        <option @if($incidencia->coordinador_id === $coordinador->id) selected @endif value="{!!$coordinador->id!!}">{!!$coordinador->name!!}</option>
        @endforeach
        @else
        <option value="" disabled="disabled" selected="selected">-- Selecciona unha persoa coordinadora --</option>
        @foreach($coordinadores as $coordinador)
        <option value="{!!$coordinador->id!!}">{!!$coordinador->name!!}</option>
        @endforeach
        @endif
    </select>
</div>

<div class="form-group col-sm-12">
    {!! Form::label('espazo_id', 'Espazo da incidencia:') !!}
    <select class="form-control select2" name="espazo_id">
        @if(isset($incidencia))
        @foreach($espazos as $espazo)
        <option @if($incidencia->espazo_id === $espazo->id) selected @endif value="{!!$espazo->id!!}">{!!$espazo->nome!!}</option>
        @endforeach
        @else
        <option value="" disabled="disabled" selected="selected">-- Selecciona un espazo --</option>
        @foreach($espazos as $espazo)
        <option value="{!!$espazo->id!!}">{!!$espazo->nome!!}</option>
        @endforeach
        @endif
    </select>
</div>

<!-- Aval Monitores Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aval_monitores', 'Avaliación Monitores:') !!}
    {!! Form::number('aval_monitores', null, ['class' => 'form-control']) !!}
</div>

<!-- Aval Usuarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aval_usuarios', 'Avaliación Usuarios:') !!}
    {!! Form::number('aval_usuarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Suxestions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('suxestions', 'Suxestions:') !!}
    {!! Form::number('suxestions', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartel Suxestions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartel_suxestions', 'Cartel Suxestions:') !!}
    {!! Form::number('cartel_suxestions', null, ['class' => 'form-control']) !!}
</div>

<!-- Boligrafos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('boligrafos', 'Boligrafos:') !!}
    {!! Form::number('boligrafos', null, ['class' => 'form-control']) !!}
</div>

<!-- Celo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celo', 'Celo:') !!}
    {!! Form::number('celo', null, ['class' => 'form-control']) !!}
</div>

<!-- Carnes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carnes', 'Carnes:') !!}
    {!! Form::number('carnes', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartel Fai Carne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartel_fai_carne', 'Cartel Fai Carne:') !!}
    {!! Form::number('cartel_fai_carne', null, ['class' => 'form-control']) !!}
</div>

<!-- Carne Adultos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carne_adultos', 'Carne Adultos:') !!}
    {!! Form::number('carne_adultos', null, ['class' => 'form-control']) !!}
</div>

<!-- Carne Menores Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carne_menores', 'Carne Menores:') !!}
    {!! Form::number('carne_menores', null, ['class' => 'form-control']) !!}
</div>

<!-- Numeros Sorteos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeros_sorteos', 'Numeros Sorteos:') !!}
    {!! Form::number('numeros_sorteos', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartel Sorteos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartel_sorteos', 'Cartel Sorteos:') !!}
    {!! Form::number('cartel_sorteos', null, ['class' => 'form-control']) !!}
</div>

<!-- Completo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('completo', 'Completo:') !!}
    {!! Form::number('completo', null, ['class' => 'form-control']) !!}
</div>

<!-- Programas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('programas', 'Programas:') !!}
    {!! Form::number('programas', null, ['class' => 'form-control']) !!}
</div>

<!-- Papel Hixienico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('papel_hixienico', 'Papel Hixienico:') !!}
    {!! Form::number('papel_hixienico', null, ['class' => 'form-control']) !!}
</div>

<!-- Bolsas Lixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bolsas_lixo', 'Bolsas Lixo:') !!}
    {!! Form::number('bolsas_lixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Panos Limpeza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('panos_limpeza', 'Panos Limpeza:') !!}
    {!! Form::number('panos_limpeza', null, ['class' => 'form-control']) !!}
</div>

<!-- Produtos Limpieza Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produtos_limpieza', 'Produtos Limpieza:') !!}
    {!! Form::number('produtos_limpieza', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartel Premios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartel_premios', 'Cartel Premios:') !!}
    {!! Form::number('cartel_premios', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartel Servizos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartel_servizos', 'Cartel Servizos:') !!}
    {!! Form::number('cartel_servizos', null, ['class' => 'form-control']) !!}
</div>

<!-- Vestiarios Mozos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vestiarios_mozos', 'Vestiarios Mozos:') !!}
    {!! Form::number('vestiarios_mozos', null, ['class' => 'form-control']) !!}
</div>

<!-- Vestiarios Mozas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vestiarios_mozas', 'Vestiarios Mozas:') !!}
    {!! Form::number('vestiarios_mozas', null, ['class' => 'form-control']) !!}
</div>

<!-- Controla Pertenzas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('controla_pertenzas', 'Controla Pertenzas:') !!}
    {!! Form::number('controla_pertenzas', null, ['class' => 'form-control']) !!}
</div>

<!-- Cinta Non Pasar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cinta_non_pasar', 'Cinta Non Pasar:') !!}
    {!! Form::number('cinta_non_pasar', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartel Non Pasar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartel_non_pasar', 'Cartel Non Pasar:') !!}
    {!! Form::number('cartel_non_pasar', null, ['class' => 'form-control']) !!}
</div>

<!-- Cartel Tiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cartel_tiro', 'Cartel Tiro:') !!}
    {!! Form::number('cartel_tiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Outros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outros', 'Outros:') !!}
    {!! Form::text('outros', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('incidencias.index') !!}" class="btn btn-default">Cancel</a>
</div>
