@extends('layouts.front')

@section('content')
<div class="container">
	<h4>Avaliación persoas usuarias</h4>
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
	{!!Form::open(['url'=>'coordinador/avaliacion-satisfaccion'])!!}
	<div class="row">
		<div class="input-field col s12">
			<div class="input-field col s12">
				<h5>Actividade: {{$actividade->nome}}</h5>
				{!!Form::hidden('actividade_id', $actividade->id)!!}
			</div>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6 l4">
			<h5>Son</h5>
			<p>
				<label>
					<input name="xenero" type="radio" value="home" {{ old('xenero') === 'home' ? ' checked' : '' }}/>
					<span>Home</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="muller" {{ old('xenero') === 'muller' ? ' checked' : '' }}/>
					<span>Muller</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="no_binaria" {{ old('xenero') === 'no_binaria' ? ' checked' : '' }}/>
					<span>Persoa non binaria</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="outro" {{ old('xenero') === 'outro' ? ' checked' : '' }}/>
					<span>Outras identidades</span>
				</label>
			</p>
			<p>
				<label>
					<input name="xenero" type="radio" value="no_contesta" {{ old('xenero') === 'no_contesta' ? ' checked' : '' }}/>
					<span>Prefiro non contestar</span>
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6 l4">
			<h5>Idade</h5>
			<p>
				<label>
					<input type="number" name="idade" value="{{ old('idade') }}">
				</label>
			</p>
			{{--
			<p>
				<label>
					<input name="idade" type="radio" value="12-16" {{ old('idade') === '12-16' ? ' checked' : '' }}/>
					<span>12-16</span>
				</label>
			</p>
			<p>
				<label>
					<input name="idade" type="radio" value="17-25" {{ old('idade') === '17-25' ? ' checked' : '' }}/>
					<span>17-25</span>
				</label>
			</p>
			<p>
				<label>
					<input name="idade" type="radio" value="26 e +" {{ old('idade') === '26 e +' ? ' checked' : '' }}/>
					<span>26 e +</span>
				</label>
			</p>
			--}}
		</div>
		<div class="input-field col s12 l4">
			<h5>Son do Concello de</h5>
			<p>
				<label>
					<input name="concello" type="text" value="{{ old('concello') == null ? 'Pontevedra' : old('concello') }}"/>
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m6">
			<h5>Actualmente</h5>
			<p>
				<label>
					<input type="checkbox" name="estado[]" value="estudo" {{ (is_array(old('estudo')) && in_array('estudo', old('estudo'))) ? ' checked' : '' }}/>
					<span>estudo</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="estado[]" value="traballo" {{ (is_array(old('traballo')) && in_array('traballo', old('traballo'))) ? ' checked' : '' }}/>
					<span>traballo</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="estado[]" value="desemprego" {{ (is_array(old('desemprego')) && in_array('desemprego', old('desemprego'))) ? ' checked' : '' }}/>
					<span>desemprego</span>
				</label>
			</p>
			{{--
			<p>
				<label>
					<input name="estado" type="radio" value="estudo"  {{ old('estado') === 'estudo' ? ' checked' : '' }}/>
					<span>estudo</span>
				</label>
			</p>
			<p>
				<label>
					<input name="estado" type="radio" value="traballo"  {{ old('estado') === 'traballo' ? ' checked' : '' }}/>
					<span>traballo</span>
				</label>
			</p>
			<p>
				<label>
					<input name="estado" type="radio" value="desemprego"  {{ old('estado') === 'desemprego' ? ' checked' : '' }}/>
					<span>desemprego</span>
				</label>
			</p>
			--}}
			<p>
				<label>
					<input name="estadoOutro" type="text" placeholder="outro" value="{{ old('estadoOutro') }}"/>
				</label>
			</p>
		</div>
		<div class="input-field col s12 m6">
			<h5>Veño a Noites a</h5>
			<p>
				<label>
					<input type="checkbox" name="motivacion[]" value="entreterme" {{ (is_array(old('entreterme')) && in_array('entreterme', old('entreterme'))) ? ' checked' : '' }}/>
					<span>entreterme</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="motivacion[]" value="aprender" {{ (is_array(old('aprender')) && in_array('aprender', old('aprender'))) ? ' checked' : '' }}/>
					<span>aprender</span>
				</label>
			</p>
			<p>
				<label>
					<input type="checkbox" name="motivacion[]" value="coñecer xente" {{ (is_array(old('coñecer xente')) && in_array('coñecer xente', old('coñecer xente'))) ? ' checked' : '' }}/>
					<span>coñecer xente</span>
				</label>
			</p>
			{{--
			<p>
				<label>
					<input name="motivacion" type="radio" value="entreterme"   {{ old('motivacion') === 'entreterme' ? ' checked' : '' }}/>
					<span>entreterme</span>
				</label>
			</p>
			<p>
				<label>
					<input name="motivacion" type="radio" value="aprender"   {{ old('motivacion') === 'aprender' ? ' checked' : '' }}/>
					<span>aprender</span>
				</label>
			</p>
			<p>
				<label>
					<input name="motivacion" type="radio" value="conecer"   {{ old('motivacion') === 'conecer' ? ' checked' : '' }}/>
					<span>coñecer xente</span>
				</label>
			</p>
			--}}
			<p>
				<label>
					<input name="motivacionOutro" type="text" placeholder="outro" value="{{ old('motivacionOutro') }}"/>
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<h5>Infórmome do relativo a Noites Abertas por:</h5>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Web Noites" {{ (is_array(old('encontrou')) && in_array('Web Noites', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Web Noites</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Instagram" {{ (is_array(old('encontrou')) && in_array('Instagram', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Instagram</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Facebook Noites" {{ (is_array(old('encontrou')) && in_array('Facebook Noites', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Facebook Noites</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Twitter Noites" {{ (is_array(old('encontrou')) && in_array('Twitter Noites', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Twitter Noites</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Folleto" {{ (is_array(old('encontrou')) && in_array('Folleto', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Folleto</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Cartel" {{ (is_array(old('encontrou')) && in_array('Cartel', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Cartel</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Cartel de rúa" {{ (is_array(old('encontrou')) && in_array('Cartel de rúa', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Cartel de rúa</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Prensa" {{ (is_array(old('encontrou')) && in_array('Prensa', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Prensa</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Web Xuventude" {{ (is_array(old('encontrou')) && in_array('Web Xuventude', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Web Xuventude</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Oficina Xuventude" {{ (is_array(old('encontrou')) && in_array('Oficina Xuventude', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Oficina Xuventude</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Amizades" {{ (is_array(old('encontrou')) && in_array('Amizades', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Amizades</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Familia" {{ (is_array(old('encontrou')) && in_array('Familia', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Familia</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="checkbox" name="encontrou[]" value="Profe" {{ (is_array(old('encontrou')) && in_array('Profe', old('encontrou'))) ? ' checked' : '' }}/>
				<span>Profe</span>
			</label>
		</p>
		<p class="input-field col s6 m4 l3">
			<label>
				<input type="text" name="encontrouOutro" placeholder="outro" value="{{ old('encontrouOutro') }}" />
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
							<input type="radio" name="monitores" value="1"{{ old('monitores') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="2"{{ old('monitores') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="3"{{ old('monitores') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="4"{{ old('monitores') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="monitores" value="5"{{ old('monitores') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Espazo</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="1" {{ old('espazo') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="2" {{ old('espazo') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="3" {{ old('espazo') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="4" {{ old('espazo') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="espazo" value="5" {{ old('espazo') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Materiais</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="1" {{ old('materiais') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="2" {{ old('materiais') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="3" {{ old('materiais') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="4" {{ old('materiais') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="materiais" value="5" {{ old('materiais') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Horario</td>
					<td>
						<label>
							<input type="radio" name="horario" value="1" {{ old('horario') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="2" {{ old('horario') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="3" {{ old('horario') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="4" {{ old('horario') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="horario" value="5" {{ old('horario') === '5' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Valoración xeral</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="1" {{ old('xeral') === '1' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="2" {{ old('xeral') === '2' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="3" {{ old('xeral') === '3' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="4" {{ old('xeral') === '4' ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="xeral" value="5" {{ old('xeral') === '5' ? ' checked' : '' }}/>
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
			<textarea id="falta" class="materialize-textarea" name="falta">{{old('falta')}}</textarea>
			<label for="falta">En Noites boto en falta a actividade:</label>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<textarea id="suxerencias" class="materialize-textarea" name="suxerencias">{{old('suxerencias')}}</textarea>
			<label for="suxerencias">Observacións, suxestións de mellora, comentario:</label>
		</div>
	</div>
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