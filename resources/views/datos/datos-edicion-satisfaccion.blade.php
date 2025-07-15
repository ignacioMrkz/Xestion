@extends('layouts.app')

@section('content')
<div class="content">
	<section class="content-header">
		<h1>
			Noites abertas - Datos
		</h1>
		<h5>Edición: {!!$actividades->first()->edicion!!}</h5>
		<h5>Ano: {!!$actividades->first()->ano!!}</h5>
	</section>
	<div class="row">
		<h2 class="page-header" style="padding-left: 20px;">Avaliacions satisfacción</h2>
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Perfil participantes</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="perfilParticipantes" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Motivación participantes</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="motivacionParticipantes" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Valoracións participantes</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="valoracionParticipantes" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Xénero</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="xenero" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Idade</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="idadeParticipantes" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header">
					@php
					$total = array_sum(array_values(encontrouEdicion($edicion)));
					@endphp
					<h3 class="box-title">Onde nos atopan <small>({{$total}} opcions)</small></h3>
				</div>
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tbody><tr>
							<th>Medio</th>
							<th>Asistentes</th>
							<th>Porcentaxe</th>
						</tr>
						@for($i = 0; $i < count(encontrouEdicion($edicion)); $i++)
						<tr>
							<td>{{array_keys(encontrouEdicion($edicion))[$i]}}</td>
							<td>{{array_values(encontrouEdicion($edicion))[$i]}}</td>
							<td><span class="badge bg-red">{{round(array_values(encontrouEdicion($edicion))[$i] * 100 / $total, 1)}}%</span></td>
						</tr>
					@endfor
					</tbody></table>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header">
					@php
					$total = array_sum(array_values(concelloEdicion($edicion)));
					@endphp
					<h3 class="box-title">Concello <small>({{$total}} asistentes)</small></h3>
				</div>
				<div class="box-body no-padding">
					<table class="table table-striped">
						<tbody><tr>
							<th>Medio</th>
							<th>Asistentes</th>
							<th>Porcentaxe</th>
						</tr>
						@for($i = 0; $i < count(concelloEdicion($edicion)); $i++)
						<tr>
							<td>{{array_keys(concelloEdicion($edicion))[$i]}}</td>
							<td>{{array_values(concelloEdicion($edicion))[$i]}}</td>
							<td><span class="badge bg-red">{{round(array_values(concelloEdicion($edicion))[$i] * 100 / $total, 1)}}%</span></td>
						</tr>
					@endfor
					</tbody></table>
				</div>
			</div>
		</div>
		
		{{--
		<div class="col-md-6">
			<div class="box box-warning">
				<div class="box-header with-border">
					<h3 class="box-title">Concello</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="concelloParticipantes" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
		--}}
	</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$('#actividades-table').DataTable();
	var ctx4 = $('#valoracionParticipantes');
	var valoracionParticipantesChart = new Chart(ctx4, {
		type: 'radar',
		data: {
			labels: ['Monitores', 'Espazo', 'Materiais', 'Horario', 'Xeral'],
			datasets: [{
				label: 'Valoracions',
				data: [{!!satistfaccionMonitores($edicion)!!}, {!!satistfaccionEspazo($edicion)!!}, {!!satistfaccionMateriais($edicion)!!}, {!!satistfaccionHorario($edicion)!!}, {!!satistfaccionXeral($edicion)!!}],
				backgroundColor: '#00a65a66',
				borderColor: '#00a65a',
			}],
		},
		options: {
			scale: {
				ticks: {
					beginAtZero: true,
					max: 5,
					min: 0,
					stepSize: 1
				}
			}
		}
	});
	var ctx5 = $('#xenero');
	var xeneroChart = new Chart(ctx5, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [{!!homesEdicion($edicion)!!}, {!!mulleresEdicion($edicion)!!}, {!!noBinariaEdicion($edicion)!!}, {!!outrosEdicion($edicion)!!}, {!!noContestaEdicion($edicion)!!}],
				backgroundColor: ['#00a65a', '#dd4b39'],
			}],
			labels: ['Home', 'Muller', 'Persoa non binaria', 'Outras identidades',  'Prefiro non contestar'],
		},
		options: {
			title: {
				display: true,
				text: 'Distribución por xénero'
			}
		}
	});
	var ctx6 = $('#perfilParticipantes');
	var xeneroChart = new Chart(ctx6, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: {!!json_encode(array_values(estudianEdicion($edicion)))!!},
				backgroundColor: [
				@for($i = 0; $i < count(estudianEdicion($edicion)); $i++)
				'{!!colores()[$i]!!}',
				@endfor
				],
			}],
			labels: {!!json_encode(array_keys(estudianEdicion($edicion)))!!},
		},
		options: {
			title: {
				display: true,
				text: 'Perfil participantes'
			}
		}
	});
	var ctx7 = $('#motivacionParticipantes');
	var xeneroChart = new Chart(ctx7, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: {!!json_encode(array_values(motivacionEdicion($edicion)))!!},
				backgroundColor: [
				@for($i = 0; $i < count(motivacionEdicion($edicion)); $i++)
				'{!!colores()[$i]!!}',
				@endfor
				],
			}],
			labels: {!!json_encode(array_keys(motivacionEdicion($edicion)))!!},
		},
		options: {
			title: {
				display: true,
				text: 'Motivación asistentes'
			}
		}
	});
	var ctx10 = $('#idadeParticipantes');
	var xeneroChart = new Chart(ctx10, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: {!!json_encode(array_values(idadeEdicion($edicion)))!!},
				backgroundColor: [
				@for($i = 0; $i < count(idadeEdicion($edicion)); $i++)
				'{!!colores()[$i]!!}',
				@endfor
				],
			}],
			labels: {!!json_encode(array_keys(idadeEdicion($edicion)))!!},
		},
		options: {
			title: {
				display: true,
				text: 'Idade participantes'
			}
		}
	});
	{{--
	var ctx8 = $('#encontrouParticipantes');
	var xeneroChart = new Chart(ctx8, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: {!!json_encode(array_values(encontrouEdicion($edicion)))!!},
				backgroundColor: [
				@for($i = 0; $i < count(encontrouEdicion($edicion)); $i++)
				'{!!colores()[$i]!!}',
				@endfor
				],
			}],
			labels: {!!json_encode(array_keys(encontrouEdicion($edicion)))!!},
		},
		options: {
			title: {
				display: true,
				text: 'Onde nos atopan'
			}
		}
	});
	var ctx9 = $('#concelloParticipantes');
	var xeneroChart = new Chart(ctx9, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: {!!json_encode(array_values(concelloEdicion($edicion)))!!},
				backgroundColor: [
				@for($i = 0; $i < count(concelloEdicion($edicion)); $i++)
				'{!!colores()[$i]!!}',
				@endfor
				],
			}],
			labels: {!!json_encode(array_keys(concelloEdicion($edicion)))!!},
		},
		options: {
			title: {
				display: true,
				text: 'Concello'
			}
		}
	});
	--}}
</script>
@endsection