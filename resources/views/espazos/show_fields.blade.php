<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $espazo->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    <p>{!! $espazo->nome !!}</p>
</div>

<!-- Enderezo Field -->
<div class="form-group">
    {!! Form::label('enderezo', 'Enderezo:') !!}
    <p>{!! $espazo->enderezo !!}</p>
</div>

<!-- Postal Field -->
<div class="form-group">
    {!! Form::label('postal', 'Postal:') !!}
    <p>{!! $espazo->postal !!}</p>
</div>

<!-- Localidade Field -->
<div class="form-group">
    {!! Form::label('localidade', 'Localidade:') !!}
    <p>{!! $espazo->localidade !!}</p>
</div>

<!-- Mapa Field -->
<div class="form-group">
    {!! Form::label('mapa', 'Mapa:') !!}
    <p>{!! $espazo->mapa !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $espazo->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $espazo->updated_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('participantes', 'Total de participantes:') !!}
    <p>{!! $espazo->participantes() !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('participantes', 'Total de público:') !!}
    <p>{!! $espazo->publico() !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('participantes', 'Total de xente fora:') !!}
    <p>{!! $espazo->fora() !!}</p>
</div>

