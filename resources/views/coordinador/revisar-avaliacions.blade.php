@extends('layouts.front')

@section('content')
@include('coordinador.layout.nav')
<div class="row">
    @if($coordinador->pendienteRevisar())
<table class="highlight centered centered-table">
    <thead>
        <tr>
            <th>Actividade</th>
            <th>Data</th>
            <th>Accions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($avaliacions as $avaliacion)
        <tr>
            <td>{{$avaliacion->actividade->nome}}</td>
            <td>{{$avaliacion->data->format('d-m-Y')}}</td>
            <td>
                <a href="{!!url('coordinador/revisar-avaliacion/'.$avaliacion->id)!!}" class="waves-effect waves-light orange btn"><i class="material-icons right">rate_review</i>Revisar</a>
                <a href="{!!url('coordinador/validar-avaliacion/'.$avaliacion->id)!!}" class="waves-effect waves-light btn"><i class="material-icons right">check</i>Validar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<h5 class="center-align">Non tes avaliacións que revisar</h5>
@endif
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
</script>
@endsection