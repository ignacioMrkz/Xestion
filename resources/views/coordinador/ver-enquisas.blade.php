@extends('layouts.front')

@section('content')
@include('coordinador.layout.nav')
<div class="row">
<table class="highlight centered centered-table">
    <thead>
        <tr>
            <th>Espazo</th>
            <th>Actividade</th>
            <th>Data</th>
            <th>Accions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($avaliacions->sortBy('espazoNome') as $avaliacion)
        <tr>
            <td>{{$avaliacion->espazoNome}}</td>
            <td>{{$avaliacion->actividade->nome}}</td>
            <td>{{$avaliacion->created_at->format('d-m-Y')}}</td>
            <td>
                <a href="{!!url('coordinador/revisar-avaliacion-satisfacion/'.$avaliacion->id)!!}" class="waves-effect waves-light orange btn"><i class="material-icons right">pageview</i>Revisar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
</script>
@endsection