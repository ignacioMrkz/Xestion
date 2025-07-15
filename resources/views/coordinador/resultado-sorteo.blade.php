@extends('layouts.front')

@section('content')
<div class="container">
	<h4>Grupos ganadores</h4>
	
	<div class="row">
		@foreach($ganadores as $ganador)
		<div class="col s6 m4 l3 center">
			<div class="card blue-grey darken-1">
				<div class="card-content white-text">
					<span class="card-title">{{$ganador}}</span>
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div class="row">
		<div class="input-field col s12">
			<a href="{!!url('coordinador/home')!!}" class="btn waves-effect waves-light" type="submit">Volver al inicio
				<i class="material-icons right">arrow_back</i>
			</a>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('select').formSelect();
	});
</script>
@endsection