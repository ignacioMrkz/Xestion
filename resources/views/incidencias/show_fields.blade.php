<!-- Id Field -->
<div class="form-group">
    {!! Form::label('imaxe', 'Imaxe:') !!}
    <p>{{Html::image('imaxes/'.$incidencia->id.'/'.$incidencia->imaxe, '', ['height'=>400, 'width'=> 'auto'])}}</p>
    <a href="{{url('imaxes/'.$incidencia->id.'/'.$incidencia->imaxe)}}" target="_blank" class="btn btn-default">Ver documento</a>
</div>

<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $incidencia->id !!}</p>
</div>

<!-- Incidencia Field -->
<div class="form-group">
    {!! Form::label('incidencia', 'Incidencia:') !!}
    <p>{!! $incidencia->incidencia !!}</p>
</div>

<!-- Coordinador Id Field -->
<div class="form-group">
    {!! Form::label('coordinador_id', 'Coordinador:') !!}
    <p>{!! $incidencia->coordinador->name !!}</p>
</div>

<!-- Espazo Id Field -->
<div class="form-group">
    {!! Form::label('espazo_id', 'Espazo:') !!}
    <p>{!! $incidencia->espazo->nome !!}</p>
</div>

<!-- Aval Monitores Field -->
<div class="form-group">
    {!! Form::label('aval_monitores', 'Aval Monitores:') !!}
    <p>{!! $incidencia->aval_monitores !!}</p>
</div>

<!-- Aval Usuarios Field -->
<div class="form-group">
    {!! Form::label('aval_usuarios', 'Aval Usuarios:') !!}
    <p>{!! $incidencia->aval_usuarios !!}</p>
</div>

<!-- Suxestions Field -->
<div class="form-group">
    {!! Form::label('suxestions', 'Suxestions:') !!}
    <p>{!! $incidencia->suxestions !!}</p>
</div>

<!-- Cartel Suxestions Field -->
<div class="form-group">
    {!! Form::label('cartel_suxestions', 'Cartel Suxestions:') !!}
    <p>{!! $incidencia->cartel_suxestions !!}</p>
</div>

<!-- Boligrafos Field -->
<div class="form-group">
    {!! Form::label('boligrafos', 'Boligrafos:') !!}
    <p>{!! $incidencia->boligrafos !!}</p>
</div>

<!-- Celo Field -->
<div class="form-group">
    {!! Form::label('celo', 'Celo:') !!}
    <p>{!! $incidencia->celo !!}</p>
</div>

<!-- Carnes Field -->
<div class="form-group">
    {!! Form::label('carnes', 'Carnes:') !!}
    <p>{!! $incidencia->carnes !!}</p>
</div>

<!-- Cartel Fai Carne Field -->
<div class="form-group">
    {!! Form::label('cartel_fai_carne', 'Cartel Fai Carne:') !!}
    <p>{!! $incidencia->cartel_fai_carne !!}</p>
</div>

<!-- Carne Adultos Field -->
<div class="form-group">
    {!! Form::label('carne_adultos', 'Carne Adultos:') !!}
    <p>{!! $incidencia->carne_adultos !!}</p>
</div>

<!-- Carne Menores Field -->
<div class="form-group">
    {!! Form::label('carne_menores', 'Carne Menores:') !!}
    <p>{!! $incidencia->carne_menores !!}</p>
</div>

<!-- Numeros Sorteos Field -->
<div class="form-group">
    {!! Form::label('numeros_sorteos', 'Numeros Sorteos:') !!}
    <p>{!! $incidencia->numeros_sorteos !!}</p>
</div>

<!-- Cartel Sorteos Field -->
<div class="form-group">
    {!! Form::label('cartel_sorteos', 'Cartel Sorteos:') !!}
    <p>{!! $incidencia->cartel_sorteos !!}</p>
</div>

<!-- Completo Field -->
<div class="form-group">
    {!! Form::label('completo', 'Completo:') !!}
    <p>{!! $incidencia->completo !!}</p>
</div>

<!-- Programas Field -->
<div class="form-group">
    {!! Form::label('programas', 'Programas:') !!}
    <p>{!! $incidencia->programas !!}</p>
</div>

<!-- Papel Hixienico Field -->
<div class="form-group">
    {!! Form::label('papel_hixienico', 'Papel Hixienico:') !!}
    <p>{!! $incidencia->papel_hixienico !!}</p>
</div>

<!-- Bolsas Lixo Field -->
<div class="form-group">
    {!! Form::label('bolsas_lixo', 'Bolsas Lixo:') !!}
    <p>{!! $incidencia->bolsas_lixo !!}</p>
</div>

<!-- Panos Limpeza Field -->
<div class="form-group">
    {!! Form::label('panos_limpeza', 'Panos Limpeza:') !!}
    <p>{!! $incidencia->panos_limpeza !!}</p>
</div>

<!-- Produtos Limpieza Field -->
<div class="form-group">
    {!! Form::label('produtos_limpieza', 'Produtos Limpieza:') !!}
    <p>{!! $incidencia->produtos_limpieza !!}</p>
</div>

<!-- Cartel Premios Field -->
<div class="form-group">
    {!! Form::label('cartel_premios', 'Cartel Premios:') !!}
    <p>{!! $incidencia->cartel_premios !!}</p>
</div>

<!-- Cartel Servizos Field -->
<div class="form-group">
    {!! Form::label('cartel_servizos', 'Cartel Servizos:') !!}
    <p>{!! $incidencia->cartel_servizos !!}</p>
</div>

<!-- Vestiarios Mozos Field -->
<div class="form-group">
    {!! Form::label('vestiarios_mozos', 'Vestiarios Mozos:') !!}
    <p>{!! $incidencia->vestiarios_mozos !!}</p>
</div>

<!-- Vestiarios Mozas Field -->
<div class="form-group">
    {!! Form::label('vestiarios_mozas', 'Vestiarios Mozas:') !!}
    <p>{!! $incidencia->vestiarios_mozas !!}</p>
</div>

<!-- Controla Pertenzas Field -->
<div class="form-group">
    {!! Form::label('controla_pertenzas', 'Controla Pertenzas:') !!}
    <p>{!! $incidencia->controla_pertenzas !!}</p>
</div>

<!-- Cinta Non Pasar Field -->
<div class="form-group">
    {!! Form::label('cinta_non_pasar', 'Cinta Non Pasar:') !!}
    <p>{!! $incidencia->cinta_non_pasar !!}</p>
</div>

<!-- Cartel Non Pasar Field -->
<div class="form-group">
    {!! Form::label('cartel_non_pasar', 'Cartel Non Pasar:') !!}
    <p>{!! $incidencia->cartel_non_pasar !!}</p>
</div>

<!-- Cartel Tiro Field -->
<div class="form-group">
    {!! Form::label('cartel_tiro', 'Cartel Tiro:') !!}
    <p>{!! $incidencia->cartel_tiro !!}</p>
</div>

<!-- Outros Field -->
<div class="form-group">
    {!! Form::label('outros', 'Outros:') !!}
    <p>{!! $incidencia->outros !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $incidencia->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $incidencia->updated_at !!}</p>
</div>

