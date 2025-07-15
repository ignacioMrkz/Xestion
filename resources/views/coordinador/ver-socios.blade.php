@extends('layouts.front')

@section('content')
@include('coordinador.layout.nav')
@if (isset($mensajeActualizar))
<div class="row">
    <div class="alert alert-danger">
        <ul>
            <div class="card-panel teal lighten-2 white-text">
                Persoa socia actualizada correctamente
            </div>
        </ul>
    </div>
</div>
@elseif (isset($mensajeBorrar))
<div class="row">
    <div class="alert alert-danger">
        <ul>
            <div class="card-panel red lighten-2 white-text">
                Persoa socia eliminada correctamente
            </div>
        </ul>
    </div>
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
<div class="row">
<table class="highlight centered centered-table">
    <thead>
        <tr>
            <th>Número</th>
            <th>Nome</th>
            <th>Accións</th>
            {{--
            <th>Accions</th>
            --}}
        </tr>
    </thead>

    <tbody>
        @foreach($socios as $socio)
        <tr class="socio">
            <td class="numero-socio">{{$socio->numero}}</td>
            <td class="nome-socio">{{$socio->nome}}</td>
            <td>
                <a href="{!!url('coordinador/editar-socio/'.$socio->id)!!}" class="waves-effect waves-light orange btn-small"><i class="material-icons">edit</i></a>
                <a href="{!!url('coordinador/eliminar-socio/'.$socio->id)!!}" class="waves-effect waves-light red btn-small" onclick="return confirm('Eliminarás esta persoa socia, estás seguro?')"><i class="material-icons">delete</i></a>
            </td>
            {{--
            <td>{{$avaliacion->data->format('d-m-Y')}}</td>
            <td>
                <a href="{!!url('coordinador/revisar-avaliacion/'.$avaliacion->id)!!}" class="waves-effect waves-light orange btn"><i class="material-icons right">rate_review</i>Revisar</a>
                <a href="{!!url('coordinador/validar-avaliacion/'.$avaliacion->id)!!}" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Validar</a>
            </td>
            --}}
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#search').on('input', function() {
            var value = $(this).val();
            if (value.length > 3) {
                $('.socio').each(function(index, el) {
                    if ($(this).find('.nome-socio').html().toUpperCase().includes(value.toUpperCase()) || $(this).find('.numero-socio').html().toUpperCase().includes(value.toUpperCase())) {
                        $(this).show('400');
                    } else {
                        $(this).hide('400');
                    }
                });
            } else {
                $('.socio').show('400');
            }
        });
    });
</script>
@endsection