@extends('layouts.front')

@section('content')
@include('coordinador.layout.nav')
<div class="container">
	<h4>Modificar avaliación persoas usuarias</h4>
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
	{{--
	{!!Form::open(['url'=>'coordinador/modificar-avaliacion-satisfaccion'])!!}
	--}}
	<div class="row">
		<div class="input-field col s12">
			<div class="input-field col s12">
				<h5>Actividade: {{$avaliacion->actividade->nome}}</h5>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6 l4">
			<h5>Son</h5>
			<p>
				<label>
					<input name="xenero" type="radio" value="home" {{ $avaliacion->xenero === 'home' ? ' checked' : 'disabled' }}/>
					<span>Home</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="muller" {{ $avaliacion->xenero === 'muller' ? ' checked' : 'disabled' }}/>
					<span>Muller</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="no_binaria" {{ $avaliacion->xenero === 'no_binaria' ? ' checked' : 'disabled' }}/>
					<span>Persoa non binaria</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="outro" {{ $avaliacion->xenero === 'outro' ? ' checked' : 'disabled' }}/>
					<span>Outras identidades</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="no_contesta" {{ $avaliacion->xenero === 'no_contesta' ? ' checked' : 'disabled' }}/>
					<span>Prefiro non contestar</span>
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6 l4">
			<h5>Idade</h5>
			<p>
				<label>
					<input type="number" name="idade" disabled="" value="{{ $avaliacion->idade }}">
				</label>
			</p>
			{{--
			<p>
				<label>
					<input name="idade" type="radio" value="12-16" {{ old('idade') === '12-16' ? ' checked' : 'disabled' }}/>
					<span>12-16</span>
				</label>
			</p>
			<p>
				<label>
					<input name="idade" type="radio" value="17-25" {{ old('idade') === '17-25' ? ' checked' : 'disabled' }}/>
					<span>17-25</span>
				</label>
			</p>
			<p>
				<label>
					<input name="idade" type="radio" value="26 e +" {{ old('idade') === '26 e +' ? ' checked' : 'disabled' }}/>
					<span>26 e +</span>
				</label>
			</p>
			--}}
		</div>
		<div class="input-field col s12 l4">
			<h5>Son do Concello de</h5>
			<p>
				<label>
					<input name="concello" disabled="" type="text" value="{{ $avaliacion->concello }}"/>
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Actualmente</h5>
			<p>
				<label>
					<input type="checkbox" name="estado[]" value="estudo" {{ strpos('estudo', $avaliacion->estado) !== false ? ' checked' : 'disabled' ? ' checked' : 'disabled' }}/>
					<span>estudo</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="estado[]" value="traballo" {{ strpos('traballo', $avaliacion->estado) !== false ? ' checked' : 'disabled' }}/>
					<span>traballo</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="estado[]" value="desemprego" {{ strpos('desemprego', $avaliacion->estado) !== false ? ' checked' : 'disabled' }}/>
					<span>desemprego</span>
				</label>
			</p>
			{{--
			<p>
				<label>
					<input name="estado" type="radio" value="estudo"  {{ old('estado') === 'estudo' ? ' checked' : 'disabled' }}/>
					<span>estudo</span>
				</label>
			</p>
			<p>
				<label>
					<input name="estado" type="radio" value="traballo"  {{ old('estado') === 'traballo' ? ' checked' : 'disabled' }}/>
					<span>traballo</span>
				</label>
			</p>
			<p>
				<label>
					<input name="estado" type="radio" value="desemprego"  {{ old('estado') === 'desemprego' ? ' checked' : 'disabled' }}/>
					<span>desemprego</span>
				</label>
			</p>
			--}}
			<p>
				<label>
					<input disabled="" name="estadoOutro" type="text" placeholder="outro" value="{{ $avaliacion->estadoOutro }}"/>
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Veño a Noites a</h5>
			<p>
				<label>
					<input type="checkbox" name="motivacion[]" value="entreterme" {{ strpos('entreterme', $avaliacion->motivacion) !== false ? ' checked' : 'disabled' }}/>
					<span>entreterme</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="motivacion[]" value="aprender" {{ strpos('aprender', $avaliacion->motivacion) !== false ? ' checked' : 'disabled' }}/>
					<span>aprender</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="motivacion[]" value="coñecer xente" {{ strpos('coñecer xente', $avaliacion->motivacion) !== false ? ' checked' : 'disabled' }}/>
					<span>coñecer xente</span>
				</label>
			</p>
			{{--
			<p>
				<label>
					<input name="motivacion" type="radio" value="entreterme"   {{ old('motivacion') === 'entreterme' ? ' checked' : 'disabled' }}/>
					<span>entreterme</span>
				</label>
			</p>
			<p>
				<label>
					<input name="motivacion" type="radio" value="aprender"   {{ old('motivacion') === 'aprender' ? ' checked' : 'disabled' }}/>
					<span>aprender</span>
				</label>
			</p>
			<p>
				<label>
					<input name="motivacion" type="radio" value="conecer"   {{ old('motivacion') === 'conecer' ? ' checked' : 'disabled' }}/>
					<span>coñecer xente</span>
				</label>
			</p>
			--}}
			<p>
				<label>
					<input disabled="" name="motivacionOutro" type="text" placeholder="outro" value="{{ $avaliacion->motivacionOutro }}"/>
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<h5>Infórmome do relativo a Noites Abertas por:</h5>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Web Noites" {{ strpos('Web Noites', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Web Noites</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Instagram" {{ strpos('Instagram', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Instagram</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Facebook Noites" {{ strpos('Facebook', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Facebook Noites</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Twitter Noites" {{ strpos('Twitter Noites', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Twitter Noites</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Folleto" {{ strpos('Folleto', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Folleto</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Cartel" {{ strpos('Cartel', $avaliacion->encontrou) !== false && strpos('Cartel de rúa', $avaliacion->encontrou) === false ? ' checked' : 'disabled' }}/>
				<span>Cartel</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Cartel de rúa" {{ strpos('Cartel de rúa', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Cartel de rúa</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Prensa" {{ strpos('Prensa', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Prensa</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Web Xuventude" {{ strpos('Web Xuventude', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Web Xuventude</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Oficina Xuventude" {{ strpos('Oficina Xuventude', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Oficina Xuventude</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Amizades" {{ strpos('Amizades', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Amizades</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Familia" {{ strpos('Familia', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Familia</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Profe" {{ strpos('Profe', $avaliacion->encontrou) !== false ? ' checked' : 'disabled' }}/>
				<span>Profe</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input disabled="" type="text" name="encontrouOutro" placeholder="outro" value="{{ $avaliacion->encontrouOutro }}" />
			</label>
		</p>
	</div><br><br>
	<div class="row">
		<h5>Valoracions:</h5>
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
					<td>Monitorado</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="1"{{ $avaliacion->monitores === 1 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="2"{{ $avaliacion->monitores === 2 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="3"{{ $avaliacion->monitores === 3 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="4"{{ $avaliacion->monitores === 4 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="5"{{ $avaliacion->monitores === 5 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Espazo</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="1" {{ $avaliacion->espazo === 1 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="2" {{ $avaliacion->espazo === 2 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="3" {{ $avaliacion->espazo === 3 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="4" {{ $avaliacion->espazo === 4 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="5" {{ $avaliacion->espazo === 5 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Materiais</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="1" {{ $avaliacion->materiais === 1 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="2" {{ $avaliacion->materiais === 2 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="3" {{ $avaliacion->materiais === 3 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="4" {{ $avaliacion->materiais === 4 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="5" {{ $avaliacion->materiais === 5 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Horario</td>
					<td>
						<label>
							<input type="radio" name="horario" value="1" {{ $avaliacion->horario === 1 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="2" {{ $avaliacion->horario === 2 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="3" {{ $avaliacion->horario === 3 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="4" {{ $avaliacion->horario === 4 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="5" {{ $avaliacion->horario === 5 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Valoración xeral</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="1" {{ $avaliacion->xeral === 1 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="2" {{ $avaliacion->xeral === 2 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="3" {{ $avaliacion->xeral === 3 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="4" {{ $avaliacion->xeral === 4 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="5" {{ $avaliacion->xeral === 5 ? ' checked' : 'disabled' }}/>
							<span></span>
						</label>
					</td>
				</tr>
			</tbody>
		</table>
		<p><b>1</b>: moi mal; <b>2</b>: mal; <b>3</b>: regular; <b>4</b>: ben; <b>5</b>: moi ben</p>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<textarea disabled="" id="falta" class="materialize-textarea" name="falta">{{$avaliacion->falta}}</textarea>
			<label for="falta">En Noites boto en falta a actividade:</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<textarea disabled="" id="suxerencias" class="materialize-textarea" name="suxerencias">{{$avaliacion->suxerencias}}</textarea>
			<label for="suxerencias">Observacións, suxestións de mellora, comentario:</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<a href="{!!url('coordinador/ver-enquisas')!!}" class="btn waves-effect waves-light" type="submit">Ver todas
				<i class="material-icons right">arrow_back</i>
			</a>
		</div>
	</div>
	{{--
	{!!Form::close()!!}
	--}}
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('select').formSelect();
	});
</script>
@endsection