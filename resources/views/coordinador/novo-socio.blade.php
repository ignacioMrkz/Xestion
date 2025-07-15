@extends('layouts.front')

@section('content')
<div class="container">
	<h4>Engadir nova persoa socia</h4>
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
	{!!Form::open(['url'=>'coordinador/novo-socio'])!!}
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Edición:</h5>
			<p>
				<label>
					<input type="number" name="edicion" value="{{ old('edicion') }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Ano:</h5>
			<p>
				<label>
					<input type="number" name="ano" value="{{ old('ano') }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Número de persoa socia:</h5>
			<p>
				<label>
					<input type="text" name="numero" value="{{ old('numero') }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Espazo:</h5>
			<select name="espazo">
				<option value="" disabled selected="selected">-- Escolle un espazo --</option>
				<option value="Froebel" {{ old('espazo') == 'Froebel' ? ' selected' : '' }}>Froebel</option>
				<option value="Deportes" {{ old('espazo') == 'Deportes' ? ' selected' : '' }}>Deportes</option>
				<option value="Casa Azul" {{ old('espazo') == 'Casa Azul' ? ' selected' : '' }}>Casa Azul</option>
				<option value="Casa da Luz" {{ old('espazo') == 'Casa da Luz' ? ' selected' : '' }}>Casa da Luz</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<h5>Nome e apelidos:</h5>
			<p>
				<label>
					<input type="text" name="nome" value="{{ old('nome') }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m4">
			<h5>Idade:</h5>
			<p>
				<label>
					<input type="number" name="idade" value="{{ old('idade') }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m8">
			<h5>Localidade:</h5>
			<p>
				<label>
					<input type="text" name="localidade" value="{{ old('localidade') }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m4">
			<h5>Teléfono 1:</h5>
			<p>
				<label>
					<input type="number" name="telefono" value="{{ old('telefono') }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m4">
			<h5>Teléfono 2:</h5>
			<p>
				<label>
					<input type="number" name="telefono2" value="{{ old('telefono2') }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m4">
			<h5>Email:</h5>
			<p>
				<label>
					<input type="email" name="email" value="{{ old('email') }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Xénero:</h5>
			<select name="xenero">
				<option value="" disabled selected="selected">-- Escolle un xénero --</option>
				<option value="home" {{ old('xenero') == 'home' ? ' selected' : '' }}>Home</option>
				<option value="muller" {{ old('xenero') == 'muller' ? ' selected' : '' }}>Muller</option>
				<option value="no_binaria" {{ old('xenero') == 'no_binaria' ? ' selected' : '' }}>Persoa non binaria</option>
				<option value="outro" {{ old('xenero') == 'outro' ? ' selected' : '' }}>Outras identidades</option>
				<option value="no_contesta" {{ old('xenero') == 'no_contesta' ? ' selected' : '' }}>Prefiro non contestar</option>
			</select>
		</div>
		<div class="input-field col s12 m6">
			<h5>Cede os dereitos?:</h5>
			<select name="cesion">
				<option value="" disabled selected="selected">-- Escolle unha resposta --</option>
				<option value="SI" {{ old('cesion') == 'SI' ? ' selected' : '' }}>SI</option>
				<option value="NON" {{ old('cesion') == 'NON' ? ' selected' : '' }}>NON</option>
			</select>
		</div>
	</div>
	{{--
	<div class="row">
		<h5>Espazo:</h5>
		<select name="espazo_id">
			<option value="" disabled selected="selected">Escolle un espazo</option>
			@foreach($espazos as $espazo)
			<option value="{!!$espazo->id!!}" {{ old('espazo_id') == $espazo->id ? ' selected' : '' }}>{!!$espazo->nome!!}</option>
			@endforeach
		</select>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<h5>Data:</h5>
			<p>
				<label>
					<input type="text" class="datepicker" name="data">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Total persoas participantes:</h5>
			<p>
				<label>
					<input type="number" name="participantes" value="{{ old('participantes') }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Cántas persoas veñen por vez primeira a Noites este ano?:</h5>
			<p>
				<label>
					<input type="number" name="primeiravez" value="{{ old('primeiravez') }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<h5>Anota as persoas participantes:</h5>
		<table class="center-align" id="participantes-table">
			<thead>
				<tr>
					<th></th>
					<th class="center-align">Mozos</th>
					<th class="center-align">Mozas</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>12-16</td>
					<td>
						<label>
							<input type="number" name="mozo12" value="{{ old('mozo12') }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="moza12" value="{{ old('moza12') }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>17-25</td>
					<td>
						<label>
							<input type="number" name="mozo17" value="{{ old('mozo17') }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="moza17" value="{{ old('moza17') }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>26 e +</td>
					<td>
						<label>
							<input type="number" name="mozo26" value="{{ old('mozo26') }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="moza26" value="{{ old('moza26') }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td>TOTAIS</td>
					<td id="total-mozos" class="center-align">0</td>
					<td id="total-mozas" class="center-align">0</td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="row">
		<h5>Avalía os seguintes apartados da actividade:</h5>
		<table class="center-align">
			<thead>
				<tr>
					<th></th>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Espazo</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="1" {{ old('valoracionespazo') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="2" {{ old('valoracionespazo') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="3" {{ old('valoracionespazo') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="4" {{ old('valoracionespazo') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="5" {{ old('valoracionespazo') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Materiais</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="1" {{ old('valoracionmateriais') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="2" {{ old('valoracionmateriais') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="3" {{ old('valoracionmateriais') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="4" {{ old('valoracionmateriais') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="5" {{ old('valoracionmateriais') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Horario</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="1" {{ old('valoracionhorario') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="2" {{ old('valoracionhorario') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="3" {{ old('valoracionhorario') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="4" {{ old('valoracionhorario') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="5" {{ old('valoracionhorario') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Participación</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="1"{{ old('valoracionparticipacion') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="2"{{ old('valoracionparticipacion') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="3"{{ old('valoracionparticipacion') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="4"{{ old('valoracionparticipacion') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="5"{{ old('valoracionparticipacion') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Valoración xeral</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="1" {{ old('valoracionxeral') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="2" {{ old('valoracionxeral') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="3" {{ old('valoracionxeral') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="4" {{ old('valoracionxeral') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="5" {{ old('valoracionxeral') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Labor de control</td>
					<td>
						<label>
							<input type="radio" name="control" value="1" {{ old('control') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="2" {{ old('control') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="3" {{ old('control') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="4" {{ old('control') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="5" {{ old('control') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
(
				</tr>
			</tbody>
		</table>
		<p><b>1</b>: moi mal; <b>2</b>: mal; <b>3</b>: regular; <b>4</b>: ben; <b>5</b>: moi ben</p>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<textarea id="obsevacions" class="materialize-textarea" name="obsevacions">{{old('obsevacions')}}</textarea>
			<label for="obsevacions">Observacións, suxestións de mellora, comentario:</label>
		</div>
	</div>
	--}}
	<div class="row">
		<div class="input-field col s12">
			<button class="btn waves-effect waves-light" type="submit">Gardar
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