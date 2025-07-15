@extends('layouts.front')

@section('content')
<div class="container">
	<h4>Editar persoa socia</h4>
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
	{!!Form::open(['url'=>'coordinador/editar-socio'])!!}
	{!!Form::hidden('socio_id', $socio->id)!!}
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Edición:</h5>
			<p>
				<label>
					<input type="number" name="edicion" value="{{ $socio->edicion }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Ano:</h5>
			<p>
				<label>
					<input type="number" name="ano" value="{{ $socio->ano }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Número de persoa socia:</h5>
			<p>
				<label>
					<input type="text" name="numero" value="{{ $socio->numero }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Espazo:</h5>
			<select name="espazo">
				<option value="Froebel" {{ $socio->espazo == 'Froebel' ? ' selected' : '' }}>Froebel</option>
				<option value="Deportes" {{ $socio->espazo == 'Deportes' ? ' selected' : '' }}>Deportes</option>
				<option value="Casa Azul" {{ $socio->espazo == 'Casa Azul' ? ' selected' : '' }}>Casa Azul</option>
				<option value="Casa da Luz" {{ $socio->espazo == 'Casa da Luz' ? ' selected' : '' }}>Casa da Luz</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<h5>Nome e apelidos:</h5>
			<p>
				<label>
					<input type="text" name="nome" value="{{ $socio->nome }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m4">
			<h5>Idade:</h5>
			<p>
				<label>
					<input type="number" name="idade" value="{{ $socio->idade }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m8">
			<h5>Localidade:</h5>
			<p>
				<label>
					<input type="text" name="localidade" value="{{ $socio->localidade }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m4">
			<h5>Teléfono 1:</h5>
			<p>
				<label>
					<input type="number" name="telefono" value="{{ $socio->telefono }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m4">
			<h5>Teléfono 2:</h5>
			<p>
				<label>
					<input type="number" name="telefono2" value="{{ $socio->telefono2 }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m4">
			<h5>Email:</h5>
			<p>
				<label>
					<input type="email" name="email" value="{{ $socio->email }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Xénero:</h5>
			<select name="xenero">
				<option value="home" {{ $socio->xenero == 'home' ? ' selected' : '' }}>Home</option>
				<option value="muller" {{ $socio->xenero == 'muller' ? ' selected' : '' }}>Muller</option>
				<option value="no_binaria" {{ $socio->xenero == 'no_binaria' ? ' selected' : '' }}>Persoa non binaria</option>
				<option value="outro" {{ $socio->xenero == 'outro' ? ' selected' : '' }}>Outras identidades</option>
				<option value="no_contesta" {{ $socio->xenero == 'no_contesta' ? ' selected' : '' }}>Prefiro non contestar</option>
			</select>
		</div>
		<div class="input-field col s12 m6">
			<h5>Cede os dereitos?:</h5>
			<select name="cesion">
				<option value="SI" {{ $socio->cesion == 'SI' ? ' selected' : '' }}>SI</option>
				<option value="NON" {{ $socio->cesion == 'NON' ? ' selected' : '' }}>NON</option>
			</select>
		</div>
	</div>
	
	<div class="row">
		<div class="input-field col s12">
			<button class="btn waves-effect waves-light" type="submit">Gardar cambios
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