@extends('layouts.front')
@section('content')
<nav>
	<div class="nav-wrapper">
		<a href="{!!url('/')!!}" class="brand-logo center">Noites Abertas</a>
	</div>
</nav><br>
<div class="row center-align">
	{{--
	<div class="col s12 m6">
		<a href="{!!url('monitor/login')!!}" class="waves-effect waves-light btn">Monitor</a>
	</div>
	--}}
	<div class="col s12 m6">
		<a href="{!!url('coordinador/login')!!}" class="waves-effect waves-light btn">PERSONAL CONTROLADOR</a>
	</div>
</div>
@endsection