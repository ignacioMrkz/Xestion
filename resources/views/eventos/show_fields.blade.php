<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $evento->id !!}</p>
</div>

<!-- Inicio Field -->
<div class="form-group">
    {!! Form::label('inicio', 'Inicio:') !!}
    <p>{!! $evento->inicio !!}</p>
</div>

<!-- Fin Field -->
<div class="form-group">
    {!! Form::label('fin', 'Fin:') !!}
    <p>{!! $evento->fin !!}</p>
</div>

<!-- Actividade Id Field -->
<div class="form-group">
    {!! Form::label('actividade_id', 'Actividade Id:') !!}
    <p>{!! $evento->actividade_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $evento->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $evento->updated_at !!}</p>
</div>

