@extends('layouts.front')

@section('content')
@include('coordinador.layout.nav')
@if(isset($mensaje))
<div class="alert alert-danger">
    <ul>
        <div class="card-panel teal white-text lighten-2">
            {{$mensaje}}
        </div>
    </ul>
</div>
@endif

<div class="row">
    <div class="col s12 m6">
        <div class="search">
          <div class="search-wrapper">
            <input id="search" placeholder="Buscador">
            <div class="search-results"></div>
        </div>
    </div>
</div>
</div>
{{--
    <div class="input-field">
        <input id="search" type="search">
        <label class="label-icon" for="search"><i class="material-icons">search</i></label>
        <i class="material-icons">close</i>
    </div>
    --}}
    <div class="row center"><br>
        <div class="col s12 m4">
            <a id="button-home" class="waves-effect waves-light btn-large" href="{!!url('coordinador/novo-socio')!!}">Engadir persoa socia</a>
        </div>
        <div class="col s12 m4">
            <a id="button-home" class="waves-effect waves-light btn-large" href="{!!url('coordinador/incidencias')!!}">Incidencias/Reposición</a>
        </div>
        <div class="col s12 m4">
            <a class="waves-effect waves-light btn-large" href="{!!url('coordinador/sorteo-participantes')!!}">Sorteo participantes</a>
        </div>
    </div>
    <div class="row">
        @foreach($actividades as $actividade)
        <div class="col s12 m6 l4">
            <div class="card small">
                <div class="card-content">
                    <h6 class="actividade-title">{{$actividade->nome}}</h6>
                    <a class="btn waves-effect waves-light light-blue lighten-2 btn-small monitor-btn" href="{!!'avaliacion-monitors/'.$actividade->id!!}">Avaliación monitors</a>
                    <a class="btn waves-effect waves-light teal lighten-2 btn-small" href="{!!'avaliacion-satisfaccion/'.$actividade->id!!}">Enquisa satisfacción</a>
                    <hr>
                    @foreach($actividade->espazos as $espazo)
                    <div class="row">
                        <div class="col s12">
                            @if($espazo->mapa)
                            <a class="btn-floating waves-effect waves-light red right" href="{!!$espazo->mapa!!}" target="_blank"><i class="material-icons">place</i></a>
                            @endif
                            <p>{!!$espazo->nome!!}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="row">
                        <div class="col s12">
                            <small>Datas: 
                                @foreach($actividade->eventos as $evento)
                                @if($evento->inicio > \Carbon\Carbon::now()->subDays(3) && $evento->inicio < \Carbon\Carbon::now()->addDays(5))
                                {!!date_format($evento->inicio, 'd-m-Y')!!}@if(!$loop->last){!!numEnquisas($actividade->id, $evento->id)!!}, @endif
                                @endif
                                @endforeach
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div id="modal-pendientes" class="modal">
        <div class="modal-content">
          <h4>Revisar avaliacións</h4>
          <p>Tes avaliacións para revisar</p>
      </div>
      <div class="modal-footer">
        <a href="{!!url('coordinador/revisar-avaliacions')!!}" class="waves-effect waves-light btn-small">Revisar</a>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Pechar</a>
    </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    @if($coordinador->pendienteRevisar())
    $(document).ready(function(){
        $('.modal').modal();
        $('#modal-pendientes').modal('open');
    });
    @endif
    $('#search').on('input', function() {
        var value = $(this).val();
        if (value.length > 3) {
            $('.card').each(function(index, el) {
                if ($(this).find('.actividade-title').html().toUpperCase().includes(value.toUpperCase())) {
                    $(this).show('400');
                } else {
                    $(this).hide('400');
                /*
                */
            }
        });
        } else {
            $('.card').show('400');
        }
    });
</script>
@endsection