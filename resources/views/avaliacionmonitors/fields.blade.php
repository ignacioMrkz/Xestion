<!-- Espazo Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('coordinador_id', 'Coordinador da actividade:') !!}
    <select class="form-control select2" name="coordinador_id">
        @if(isset($avaliacionmonitors))
        @foreach($coordinadores as $coordinador)
        <option @if($coordinador->id === $avaliacionmonitors->coordinador_id) selected @endif value="{!!$coordinador->id!!}">{!!$coordinador->name!!}</option>
        @endforeach
        @else
        <option value="" disabled="disabled">-- Selecciona un coordinador --</option>
        @foreach($coordinadores as $coordinador)
        <option value="{!!$coordinador->id!!}">{!!$coordinador->name!!}</option>
        @endforeach
        @endif
    </select>
</div>

<!-- monitors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monitors', 'Nome do monitorado:') !!}
    {!! Form::text('monitors', null, ['class' => 'form-control']) !!}
</div>

<!-- monitors Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data', 'Data:') !!}
    @if(isset($avaliacionmonitors))
    {!! Form::date('data', $avaliacionmonitors->data, ['class' => 'form-control']) !!}
    @else
    {!! Form::date('data', null, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Participantes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('participantes', 'Participantes:') !!}
    {!! Form::number('participantes', null, ['class' => 'form-control']) !!}
</div>

<!-- Participantes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publico', 'Público:') !!}
    {!! Form::number('publico', null, ['class' => 'form-control']) !!}
</div>


<!-- Participantes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fora', 'Xente fora:') !!}
    {!! Form::number('fora', null, ['class' => 'form-control']) !!}
</div>

<!-- Primeiravez Field -->
<div class="form-group col-sm-6">
    {!! Form::label('primeiravez', 'Veñen por vez primeira:') !!}
    {!! Form::number('primeiravez', null, ['class' => 'form-control']) !!}
</div>

<!-- Moza12 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('moza12', 'Mozas 12-16:') !!}
    {!! Form::number('moza12', null, ['class' => 'form-control']) !!}
</div>

<!-- Moza17 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('moza17', 'Mozas 17-25:') !!}
    {!! Form::number('moza17', null, ['class' => 'form-control']) !!}
</div>

<!-- moza26 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('moza26', 'Mozas 26 e +:') !!}
    {!! Form::number('moza26', null, ['class' => 'form-control']) !!}
</div>

<!-- Mozo12 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mozo12', 'Mozos 12-16:') !!}
    {!! Form::number('mozo12', null, ['class' => 'form-control']) !!}
</div>

<!-- Mozo17 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mozo17', 'Mozos 17-25:') !!}
    {!! Form::number('mozo17', null, ['class' => 'form-control']) !!}
</div>

<!-- mozo26 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mozo26', 'Mozos 26 e +:') !!}
    {!! Form::number('mozo26', null, ['class' => 'form-control']) !!}
</div>

<!-- Persoa non binaria12 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_binaria12', 'Persoas non binarias 12-16:') !!}
    {!! Form::number('no_binaria12', null, ['class' => 'form-control']) !!}
</div>

<!-- Persoa non binaria17 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_binaria17', 'Persoas non binarias 17-25:') !!}
    {!! Form::number('no_binaria17', null, ['class' => 'form-control']) !!}
</div>

<!-- Persoa non binaria26 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_binaria26', 'Persoas non binarias 26 e +:') !!}
    {!! Form::number('no_binaria26', null, ['class' => 'form-control']) !!}
</div>

<!-- Outras identidades12 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outro12', 'Outras identidades 12-16:') !!}
    {!! Form::number('outro12', null, ['class' => 'form-control']) !!}
</div>

<!-- Outras identidades17 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outro17', 'Outras identidades 17-25:') !!}
    {!! Form::number('outro17', null, ['class' => 'form-control']) !!}
</div>

<!-- Outras identidades26 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('outro26', 'Outras identidades 26 e +:') !!}
    {!! Form::number('outro26', null, ['class' => 'form-control']) !!}
</div>

<!-- Prefiro non contestar12 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_contesta12', 'Prefiro non contestar 12-16:') !!}
    {!! Form::number('no_contesta12', null, ['class' => 'form-control']) !!}
</div>

<!-- Prefiro non contestar17 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_contesta17', 'Prefiro non contestar 17-25:') !!}
    {!! Form::number('no_contesta17', null, ['class' => 'form-control']) !!}
</div>

<!-- Prefiro non contestar26 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_contesta26', 'Prefiro non contestar 26 e +:') !!}
    {!! Form::number('no_contesta26', null, ['class' => 'form-control']) !!}
</div>

<!-- Valoracionespazo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoracionespazo', 'Valoracion Espazo:') !!}
    {!! Form::number('valoracionespazo', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Valoracionmateriais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoracionmateriais', 'Valoracion Materiais:') !!}
    {!! Form::number('valoracionmateriais', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Valoracionhorario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoracionhorario', 'Valoracion Horario:') !!}
    {!! Form::number('valoracionhorario', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Valoracionparticipacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoracionparticipacion', 'Valoracion Participacion:') !!}
    {!! Form::number('valoracionparticipacion', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Valoracionxeral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valoracionxeral', 'Valoracion Xeral:') !!}
    {!! Form::number('valoracionxeral', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Control Field -->
<div class="form-group col-sm-6">
    {!! Form::label('control', 'Labor de control:') !!}
    {!! Form::number('control', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Obsevacions Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('obsevacions', 'Obsevacions:') !!}
    {!! Form::textarea('obsevacions', null, ['class' => 'form-control']) !!}
</div>

<!-- Espazo Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('actividade_id', 'Actividade a que corresponde a avaliación:') !!}
    <select class="form-control select2" name="actividade_id">
        @if(isset($avaliacionmonitors))
        @foreach($actividades as $actividade)
        <option @if($actividade->id === $avaliacionmonitors->actividade_id) selected @endif value="{!!$actividade->id!!}">{!!$actividade->nome!!} (Edición {!!$actividade->edicion!!}, ano {!!$actividade->ano!!})</option>
        @endforeach
        @else
        <option value="" disabled="disabled">-- Selecciona unha actividade --</option>
        @foreach($actividades as $actividade)
        <option value="{!!$actividade->id!!}">{!!$actividade->nome!!} (Edición {!!$actividade->edicion!!}, ano {!!$actividade->ano!!})</option>
        @endforeach
        @endif
    </select>
</div>

<!-- Espazo Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('espazo_id', 'Espazo onde se celebra a actividade:') !!}
    <select class="form-control select2" name="espazo_id">
        @if(isset($avaliacionmonitors))
        @foreach($espazos as $espazo)
        <option @if($espazo->id === $avaliacionmonitors->espazo_id) selected @endif value="{!!$espazo->id!!}">{!!$espazo->nome!!}</option>
        @endforeach
        @else
        <option value="" disabled="disabled">-- Selecciona un espazo --</option>
        @foreach($espazos as $espazo)
        <option value="{!!$espazo->id!!}">{!!$espazo->nome!!}</option>
        @endforeach
        @endif
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('avaliacionmonitors.index') !!}" class="btn btn-default">Cancel</a>
</div>
