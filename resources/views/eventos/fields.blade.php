<!-- Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inicio', 'Inicio:') !!}
    @if(isset($evento))
    {!! Form::date('inicio', $evento->inicio, ['class' => 'form-control']) !!}
    @else
    {!! Form::date('inicio', null, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_inicio', 'Hora de inicio:') !!}
    @if(isset($evento))
    {!! Form::time('hora_inicio', date("H:i",strtotime($evento->inicio)), ['class' => 'form-control']) !!}
    @else
    {!! Form::time('hora_inicio', null, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fin', 'Fin:') !!}
    @if(isset($evento))
    {!! Form::date('fin', $evento->fin, ['class' => 'form-control']) !!}
    @else
    {!! Form::date('fin', null, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora_fin', 'Hora fin:') !!}
    @if(isset($evento))
    {!! Form::time('hora_fin', date("H:i",strtotime($evento->fin)), ['class' => 'form-control']) !!}
    @else
    {!! Form::time('hora_fin', null, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Actividade Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('actividade_id', 'Actividade:') !!}
    {!! Form::select('actividade_id', $actividades, null, ['class' => 'form-control select2', 'placeholder' => '-- Escolle unha actividade --']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eventos.index') !!}" class="btn btn-default">Cancel</a>
</div>
