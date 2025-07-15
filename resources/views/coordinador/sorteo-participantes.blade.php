@extends('layouts.front')

@section('content')
<div class="container">
	<h4>Sorteo participantes</h4>
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			<div class="card-panel red white-text darken-2">
				@foreach ($errors->all() as $error)
				{{$error}}<br>
				@endforeach
			</div>
		</ul>
	</div>
	@endif
	{!!Form::open(['url'=>'coordinador/sorteo-participantes'])!!}
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Total grupos:</h5>
			<p>
				<label>
					<input type="number" name="grupos" value="{{ old('grupos') }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Número ganadores:</h5>
			<p>
				<label>
					<input type="number" name="ganadores" value="{{ old('ganadores') }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<button class="btn waves-effect waves-light" type="submit">Sorteo
				<i class="material-icons right">send</i>
			</button>
		</div>
	</div>
	{!!Form::close()!!}
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('select').formSelect();
	});
</script>
@endsection