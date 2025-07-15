@extends('layouts.front')

@section('content')
@include('coordinador.layout.nav')
<div class="alert alert-danger">
    <ul>
        <div class="card-panel teal white-text lighten-2">
            Enquisa gardada correctamente.
        </div>
    </ul>
</div>
<div class="center-align">
	<a href="{!!url('coordinador/home')!!}" class="waves-effect waves-light btn-large">Volver a páxina inicio</a>
</div>
@endsection