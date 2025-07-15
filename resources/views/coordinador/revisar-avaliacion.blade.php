@extends('layouts.front')

@section('content')
@include('coordinador.layout.nav')
<div class="container">
	<div class="card-panel amber darken-1">
		<h4 class="white-text center-align">Modificar avaliación monitors</h4>
	</div>
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
	{!!Form::open(['url'=>'coordinador/modificar-avaliacion-monitors'])!!}
	{!!Form::hidden('avaliacion_id', $avaliacion->id)!!}
	<div class="row">
		<h5>Actividade: {{$avaliacion->actividade->nome}}</h5>
		<select name="actividade_id">
			<option value="" disabled>Escolle unha actividade</option>
			@foreach($actividades as $actividade)
			<option value="{!!$actividade->id!!}" {{ $avaliacion->actividade->id == $actividade->id ? ' selected' : '' }}>{!!$actividade->nome!!}</option>
			@endforeach
		</select>
	</div>
	<div class="row">
		<h5>Nome do monitorado:</h5>
		<p>
			<label>
				<input type="text" name="monitors" value="{{ $avaliacion->monitors }}">
			</label>
		</p>
	</div>
	<div class="row">
		<h5>Espazo:</h5>
		<select name="espazo_id">
			<option value="" disabled selected="selected">Escolle un espazo</option>
			@foreach($espazos as $espazo)
			<option value="{!!$espazo->id!!}" {{ $avaliacion->espazo->id == $espazo->id ? ' selected' : '' }}>{!!$espazo->nome!!}</option>
			@endforeach
		</select>
		{{--
		<select name="espazo_id">
			<option value="" disabled selected="selected">Escolle un espazo</option>
			@foreach($actividade->espazos as $espazo)
			<option value="{!!$espazo->id!!}" {{ $avaliacion->espazo->id == $espazo->id ? ' selected' : '' }}>{!!$espazo->nome!!}</option>
			@endforeach
		</select>
		--}}
	</div>
	<div class="row">
		<div class="input-field col s12">
			<h5>Data:</h5>
			<p>
				<label>
					<input type="text" class="datepicker" name="data" value="{{ $avaliacion->data->format('d/m/y') }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m4">
			<h5>Total persoas participantes:</h5>
			<p>
				<label>
					<input type="number" name="participantes" value="{{ $avaliacion->participantes }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m4">
			<h5>Público:</h5>
			<p>
				<label>
					<input type="number" name="publico" value="{{ $avaliacion->publico }}">
				</label>
			</p>
		</div>
		<div class="input-field col s12 m4">
			<h5>Xente fora:</h5>
			<p>
				<label>
					<input type="number" name="fora" value="{{ $avaliacion->fora }}">
				</label>
			</p>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12">
			<h5>Cántas persoas veñen por vez primeira a Noites este ano?:</h5>
			<p>
				<label>
					<input type="number" name="primeiravez" value="{!! $avaliacion->primeiravez !!}">
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
					<th class="center-align">Persoa non binaria</th>
					<th class="center-align">Outras identidades</th>
					<th class="center-align">Prefiro non contestar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>12-16</td>
					<td>
						<label>
							<input type="number" name="mozo12" value="{{ $avaliacion->mozo12 }}" class="center-align" min="0" step="1" />
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="moza12" value="{{ $avaliacion->moza12 }}" class="center-align" min="0" step="1" />
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="no_binaria12" value="{{ $avaliacion->no_binaria12 }}" class="center-align" min="0" step="1" />
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="outro12" value="{{ $avaliacion->outro12 }}" class="center-align" min="0" step="1" />
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="no_contesta12" value="{{ $avaliacion->no_contesta12 }}" class="center-align" min="0" step="1" />
						</label>
					</td>
				</tr>
				<tr>
					<td>17-25</td>
					<td>
						<label>
							<input type="number" name="mozo17" value="{{ $avaliacion->mozo17 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="moza17" value="{{ $avaliacion->moza17 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="no_binaria17" value="{{ $avaliacion->no_binaria17 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="outro17" value="{{ $avaliacion->outro17 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="no_contesta17" value="{{ $avaliacion->no_contesta17 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>26 e +</td>
					<td>
						<label>
							<input type="number" name="mozo26" value="{{ $avaliacion->mozo26 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="moza26" value="{{ $avaliacion->moza26 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="no_binaria26" value="{{ $avaliacion->no_binaria26 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="outro26" value="{{ $avaliacion->outro26 }}" class="center-align" min="0" step="1" />
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="number" name="no_contesta26" value="{{ $avaliacion->no_contesta26 }}" class="center-align" min="0" step="1" />
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
					<td id="total-no_binarias" class="center-align">0</td>
					<td id="total-outros" class="center-align">0</td>
					<td id="total-no_contestas" class="center-align">0</td>
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
							<input type="radio" name="valoracionespazo" value="1" {{ $avaliacion->valoracionespazo === 1 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="2" {{ $avaliacion->valoracionespazo === 2 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="3" {{ $avaliacion->valoracionespazo === 3 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="4" {{ $avaliacion->valoracionespazo === 4 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionespazo" value="5" {{ $avaliacion->valoracionespazo === 5 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Materiais</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="1" {{ $avaliacion->valoracionmateriais === 1 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="2" {{ $avaliacion->valoracionmateriais === 2 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="3" {{ $avaliacion->valoracionmateriais === 3 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="4" {{ $avaliacion->valoracionmateriais === 4 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionmateriais" value="5" {{ $avaliacion->valoracionmateriais === 5 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Horario</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="1" {{ $avaliacion->valoracionhorario === 1 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="2" {{ $avaliacion->valoracionhorario === 2 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="3" {{ $avaliacion->valoracionhorario === 3 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="4" {{ $avaliacion->valoracionhorario === 4 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionhorario" value="5" {{ $avaliacion->valoracionhorario === 5 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Participación</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="1"{{ $avaliacion->valoracionparticipacion === 1 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="2"{{ $avaliacion->valoracionparticipacion === 2 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="3"{{ $avaliacion->valoracionparticipacion === 3 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="4"{{ $avaliacion->valoracionparticipacion === 4 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionparticipacion" value="5"{{ $avaliacion->valoracionparticipacion === 5 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Valoración xeral</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="1" {{ $avaliacion->valoracionxeral === 1 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="2" {{ $avaliacion->valoracionxeral === 2 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="3" {{ $avaliacion->valoracionxeral === 3 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="4" {{ $avaliacion->valoracionxeral === 4 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="valoracionxeral" value="5" {{ $avaliacion->valoracionxeral === 5 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Labor de control</td>
					<td>
						<label>
							<input type="radio" name="control" value="1" {{ $avaliacion->control === 1 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="2" {{ $avaliacion->control === 2 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="3" {{ $avaliacion->control === 3 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="4" {{ $avaliacion->control === 4 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
					<td>
						<label>
							<input type="radio" name="control" value="5" {{ $avaliacion->control === 5 ? ' checked' : '' }}/>
							<span></span>
						</label>
					</td>
				</tr>
			</tbody>
		</table>
		<p><b>1</b>: moi mal; <b>2</b>: mal; <b>3</b>: regular; <b>4</b>: ben; <b>5</b>: moi ben</p>
	</div>
	<div class="row">
		<textarea id="obsevacions" class="materialize-textarea" name="obsevacions">{{$avaliacion->obsevacions}}</textarea>
		<label for="obsevacions">Observacións, suxestións de mellora, comentario:</label>
	</div>
	<div class="row">
		<button class="btn waves-effect waves-light" type="submit">Modificar e validar
			<i class="material-icons right">send</i>
		</button>
	</div>
	{!!Form::close()!!}
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('#total-mozos').html((parseInt($('input[name="mozo12"]').val()) || 0) + (parseInt($('input[name="mozo17"]').val()) || 0) + (parseInt($('input[name="mozo26"]').val()) || 0));
		$('#total-mozas').html((parseInt($('input[name="moza12"]').val()) || 0) + (parseInt($('input[name="moza17"]').val()) || 0) + (parseInt($('input[name="moza26"]').val()) || 0));
		$('#total-no_binarias').html((parseInt($('input[name="no_binaria12"]').val()) || 0) + (parseInt($('input[name="no_binaria17"]').val()) || 0) + (parseInt($('input[name="no_binaria26"]').val()) || 0));
		$('#total-outros').html((parseInt($('input[name="outro12"]').val()) || 0) + (parseInt($('input[name="outro17"]').val()) || 0) + (parseInt($('input[name="outro26"]').val()) || 0));
		$('#total-no_contestas').html((parseInt($('input[name="no_contesta12"]').val()) || 0) + (parseInt($('input[name="no_contesta17"]').val()) || 0) + (parseInt($('input[name="no_contesta26"]').val()) || 0));
		$('select').formSelect();
		$('.datepicker').datepicker({
			i18n: {
				months: ["Xaneiro", "Febreio", "Marzo", "Abril", "Maio", "Xuño", "Xullo", "Agosto", "Setembro", "Outubro", "Novembro", "Decembro"],
				monthsShort: ["Xan", "Feb", "Mar", "Abr", "Mai", "Xun", "Xul", "Ago", "Set", "Out", "Nov", "Dec"],
				weekdays: ["Domingo","Luns", "Martes", "Mércores", "Xoves", "Venres", "Sábado"],
				weekdaysShort: ["Dom","Lun", "Mar", "Mer", "Xov", "Ven", "Sab"],
				weekdaysAbbrev: ["D","L", "M", "M", "X", "V", "S"]
			},
			format: 'dd/mm/yy'
		});
	});
	$('#participantes-table').find('input').on('change', function(event) {
		$('#total-mozos').html((parseInt($('input[name="mozo12"]').val()) || 0) + (parseInt($('input[name="mozo17"]').val()) || 0) + (parseInt($('input[name="mozo26"]').val()) || 0));
		$('#total-mozas').html((parseInt($('input[name="moza12"]').val()) || 0) + (parseInt($('input[name="moza17"]').val()) || 0) + (parseInt($('input[name="moza26"]').val()) || 0));
		$('#total-no_binarias').html((parseInt($('input[name="no_binaria12"]').val()) || 0) + (parseInt($('input[name="no_binaria17"]').val()) || 0) + (parseInt($('input[name="no_binaria26"]').val()) || 0));
		$('#total-outros').html((parseInt($('input[name="outro12"]').val()) || 0) + (parseInt($('input[name="outro17"]').val()) || 0) + (parseInt($('input[name="outro26"]').val()) || 0));
		$('#total-no_contestas').html((parseInt($('input[name="no_contesta12"]').val()) || 0) + (parseInt($('input[name="no_contesta17"]').val()) || 0) + (parseInt($('input[name="no_contesta26"]').val()) || 0));
	});
</script>
@endsection