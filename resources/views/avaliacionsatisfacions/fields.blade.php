<!-- Xenero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xenero', 'Xenero:') !!}
    <input type="radio" name="xenero" value="home" @if($avaliacionsatisfacion->xenero == 'home')checked @endif> Home
    <input type="radio" name="xenero" value="muller" @if($avaliacionsatisfacion->xenero == 'muller')checked @endif> Muller
    <input type="radio" name="xenero" value="no_binaria" @if($avaliacionsatisfacion->xenero == 'no_binaria')checked @endif> Persoa non binaria
    <input type="radio" name="xenero" value="outro" @if($avaliacionsatisfacion->xenero == 'outro')checked @endif> Outras identidades
    <input type="radio" name="xenero" value="no_contesta" @if($avaliacionsatisfacion->xenero == 'no_contesta')checked @endif> Prefiro non contestar
</div>

<!-- Puntuacion Monitores Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idade', 'Idade:') !!}
    {!! Form::text('idade', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12">
    {!! Form::label('concello', 'Concello:') !!}
    {!! Form::text('concello', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
@if(isset($avaliacionsatisfacion))
    {!! Form::label('estado[]', 'Veño a Noites a:') !!}<br>
    <input type="checkbox" name="estado[]" value="estudo" @if(in_array('estudo', explode('|', $avaliacionsatisfacion->estado)))checked @endif> estudo<br>
    <input type="checkbox" name="estado[]" value="traballo" @if(in_array('traballo', explode('|', $avaliacionsatisfacion->estado)))checked @endif> traballo<br>
    <input type="checkbox" name="estado[]" value="desemprego" @if(in_array('desemprego', explode('|', $avaliacionsatisfacion->estado)))checked @endif> desemprego<br>
    @if(count(array_diff(explode('|', $avaliacionsatisfacion->estado), ['estudo', 'traballo', 'desemprego'])) > 0)
    {!! Form::text('estadoOutro', array_values(array_diff(explode('|', $avaliacionsatisfacion->estado), ['estudo', 'traballo', 'desemprego']))[0], ['class' => 'form-control']) !!}
    @else
    {!! Form::text('estadoOutro', null, ['class' => 'form-control']) !!}
    @endif
@endif
</div>

<div class="form-group col-sm-6">
@if(isset($avaliacionsatisfacion))
    {!! Form::label('motivacion[]', 'Veño a Noites a:') !!}<br>
    <input type="checkbox" name="motivacion[]" value="entreterme" @if(in_array('entreterme', explode('|', $avaliacionsatisfacion->motivacion)))checked @endif> entreterme<br>
    <input type="checkbox" name="motivacion[]" value="aprender" @if(in_array('aprender', explode('|', $avaliacionsatisfacion->motivacion)))checked @endif> aprender<br>
    <input type="checkbox" name="motivacion[]" value="coñecer xente" @if(in_array('coñecer xente', explode('|', $avaliacionsatisfacion->motivacion)))checked @endif> coñecer xente<br>
    @if(count(array_diff(explode('|', $avaliacionsatisfacion->motivacion), ['entreterme', 'aprender', 'coñecer xente'])) > 0)
    {!! Form::text('motivacionOutro', array_values(array_diff(explode('|', $avaliacionsatisfacion->motivacion), ['entreterme', 'aprender', 'coñecer xente']))[0], ['class' => 'form-control']) !!}
    @else
    {!! Form::text('motivacionOutro', null, ['class' => 'form-control']) !!}
    @endif
@endif
</div>

<div class="form-group col-sm-12">
@if(isset($avaliacionsatisfacion))
    {!! Form::label('encontrou[]', 'Veño a Noites a:') !!}<br>
    <div class="form-group col-sm-12 col-lg-3">
        <input type="checkbox" name="encontrou[]" value="Web Noites" @if(in_array('Web Noites', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Web Noites<br>
        <input type="checkbox" name="encontrou[]" value="Folleto" @if(in_array('Folleto', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Folleto<br>
        <input type="checkbox" name="encontrou[]" value="Web Xuventude" @if(in_array('Web Xuventude', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Web Xuventude<br>
        <input type="checkbox" name="encontrou[]" value="Profe" @if(in_array('Profe', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Profe<br>
    </div>

    <div class="form-group col-sm-12 col-lg-3">
        <input type="checkbox" name="encontrou[]" value="Instagram" @if(in_array('Instagram', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Instagram<br>
        <input type="checkbox" name="encontrou[]" value="Cartel" @if(in_array('Cartel', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Cartel<br>
        <input type="checkbox" name="encontrou[]" value="Oficina Xuventude" @if(in_array('Oficina Xuventude', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Oficina Xuventude<br>
        @if(count(array_diff(explode('|', $avaliacionsatisfacion->encontrou), ['Web Noites', 'Folleto', 'Web Xuventude', 'Profe', 'Instagram', 'Cartel', 'Oficina Xuventude', 'Facebook Noites', 'Cartel de rúa', 'Amizades', 'Twitter Noites', 'Prensa', 'Familia'])) > 0)
        {!! Form::text('encontrouOutro', array_values(array_diff(explode('|', $avaliacionsatisfacion->encontrou), ['Web Noites', 'Folleto', 'Web Xuventude', 'Profe', 'Instagram', 'Cartel', 'Oficina Xuventude', 'Facebook Noites', 'Cartel de rúa', 'Amizades', 'Twitter Noites', 'Prensa', 'Familia']))[0], ['class' => 'form-control']) !!}
        @else
        {!! Form::text('encontrouOutro', null, ['class' => 'form-control']) !!}
        @endif
    </div>

    <div class="form-group col-sm-12 col-lg-3">
        <input type="checkbox" name="encontrou[]" value="Facebook Noites" @if(in_array('Facebook Noites', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Facebook Noites<br>
        <input type="checkbox" name="encontrou[]" value="Cartel de rúa" @if(in_array('Cartel de rúa', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Cartel de rúa<br>
        <input type="checkbox" name="encontrou[]" value="Amizades" @if(in_array('Amizades', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Amizades<br>
    </div>

    <div class="form-group col-sm-12 col-lg-3">
        <input type="checkbox" name="encontrou[]" value="Twitter Noites" @if(in_array('Twitter Noites', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Twitter Noites<br>
        <input type="checkbox" name="encontrou[]" value="Prensa" @if(in_array('Prensa', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Prensa<br>
        <input type="checkbox" name="encontrou[]" value="Familia" @if(in_array('Familia', explode('|', $avaliacionsatisfacion->encontrou)))checked @endif> Familia<br>
    </div>
@endif
</div>

<!-- Puntuacion Monitores Field -->
<div class="form-group col-sm-6">
    {!! Form::label('monitores', 'Puntuacion Monitorado:') !!}
    {!! Form::number('monitores', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Puntuacionespazo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('espazo', 'Puntuacion Espazo:') !!}
    {!! Form::number('espazo', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Puntuacion Materiais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('materiais', 'Puntuacion Materiais:') !!}
    {!! Form::number('materiais', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Puntuacion Horario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horario', 'Puntuacion Horario:') !!}
    {!! Form::number('horario', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Valoracion Xeral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('xeral', 'Valoracion Xeral:') !!}
    {!! Form::number('xeral', null, ['class' => 'form-control', 'step'=>1, 'min'=>1, 'max'=>5]) !!}
</div>

<!-- Falta Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('falta', 'Falta:') !!}
    {!! Form::textarea('falta', null, ['class' => 'form-control']) !!}
</div>

<!-- Suxerencias Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('suxerencias', 'Suxerencias:') !!}
    {!! Form::textarea('suxerencias', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('avaliacionsatisfacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
