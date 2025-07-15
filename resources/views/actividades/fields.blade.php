<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('subtitulo', 'Subtítulo:') !!}
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('idade', 'Idade:') !!}
    {!! Form::text('idade', null, ['class' => 'form-control']) !!}
</div>
{{--
<!-- Capacidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capacidade', 'Capacidade:') !!}
    {!! Form::number('capacidade', null, ['class' => 'form-control']) !!}
</div>
<!-- Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data', 'Data:') !!}
    @if(isset($actividade))
    {!! Form::date('data', $actividade->data, ['class' => 'form-control']) !!}
    @else
    {!! Form::date('data', null, ['class' => 'form-control']) !!}
    @endif
</div>
--}}
{{--
<!-- Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horario', 'Horario:') !!}
    {!! Form::text('horario', null, ['class' => 'form-control']) !!}
</div>
--}}

<!-- Materiais Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>
<!-- Materiais Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('materiais', 'Materiais:') !!}
    {!! Form::textarea('materiais', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('espazos[]', 'Espazos onde se celebra a actividade:') !!}
    <select class="form-control select2" name="espazos[]" multiple="multiple">
        @if(isset($actividade))
        @foreach($espazos as $espazo)
        <option @if(in_array($espazo->id, $actividade->espazos->pluck('id')->toArray())) selected @endif value="{!!$espazo->id!!}">{!!$espazo->nome!!}</option>
        @endforeach
        @else
        @foreach($espazos as $espazo)
        <option value="{!!$espazo->id!!}">{!!$espazo->nome!!}</option>
        @endforeach
        @endif
    </select>
</div>

<!-- Empresa Field -->
<div class="form-group col-sm-12">
    {!! Form::label('empresa', 'Empresa:') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('ano', 'Ano:') !!}
    {!! Form::number('ano', null, ['class'=>'form-control', 'step'=>1]) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('edicion', 'Edición:') !!}
    {!! Form::number('edicion', null, ['class'=>'form-control', 'step'=>1]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('actividades.index') !!}" class="btn btn-default">Cancel</a>
</div>
