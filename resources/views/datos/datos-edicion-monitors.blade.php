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
	{{--
	<div class="row">
		<div class="col-md-12">
			<div class="box box-success box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Actividades</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-responsive" id="actividades-table">
						<thead>
							<tr>
								<th>Edición</th>
								<th>Ano</th>
								<th>Nome</th>
								<th>Empresa</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($actividades as $actividade)
							<tr>
								<td>{!! $actividade->edicion !!}</td>
								<td>{!! $actividade->ano !!}</td>
								<td>{!! $actividade->nome !!}</td>
								<td>{!! $actividade->empresa !!}</td>
								<td>
									{!! Form::open(['route' => ['actividades.destroy', $actividade->id], 'method' => 'delete']) !!}
									<div class='btn-group'>
										<a href="{!! route('actividades.show', [$actividade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
										<a href="{!! route('actividades.edit', [$actividade->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
										{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
									</div>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	--}}
	<div class="row">
		<h2 class="page-header" style="padding-left: 20px;">Avaliacions monitors</h2>
		<div class="col-md-6">
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Valoracións</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="valoracion" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Novos usuarios</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="novos" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-danger">
				<div class="box-header with-border">
					<h3 class="box-title">Idade usuarios</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="idade" style="height: 428px; width: 457px;" width="914" height="656"></canvas>
				</div>
				<div class="box-footer with-border text-center">
					@php $todos = moza12Edicion($edicion)+moza17Edicion($edicion)+moza26Edicion($edicion)+mozo12Edicion($edicion)+mozo17Edicion($edicion)+mozo26Edicion($edicion)+no_binaria12Edicion($edicion)+no_binaria17Edicion($edicion)+no_binaria26Edicion($edicion)+outro12Edicion($edicion)+outro17Edicion($edicion)+outro26Edicion($edicion)+no_contesta12Edicion($edicion)+no_contesta17Edicion($edicion)+no_contesta26Edicion($edicion); @endphp
					
					Mozas {!!round(100*((moza12Edicion($edicion)+moza17Edicion($edicion)+moza26Edicion($edicion))/$todos), 1)!!}% | Mozos {!!round(100*((mozo12Edicion($edicion)+mozo17Edicion($edicion)+mozo26Edicion($edicion))/$todos), 1)!!}% | Persoa non binaria {!!round(100*((no_binaria12Edicion($edicion)+no_binaria17Edicion($edicion)+no_binaria26Edicion($edicion))/$todos), 1)!!}% | Outras identidades {!!round(100*((outro12Edicion($edicion)+outro17Edicion($edicion)+outro26Edicion($edicion))/$todos), 1)!!}% | Prefiro non contestar {!!round(100*((no_contesta12Edicion($edicion)+no_contesta17Edicion($edicion)+no_contesta26Edicion($edicion))/$todos), 1)!!}% | TOTAL: {{$todos}}
				</div>
			</div>
		</div>
	</div>
	{{--
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
					<h3 class="box-title">Onde nos atopan</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<canvas id="encontrouParticipantes" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
				</div>
			</div>
		</div>
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
	</div>
	--}}
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$('#actividades-table').DataTable();
	var ctx = $('#valoracion');
	var myRadarChart = new Chart(ctx, {
		type: 'radar',
		data: {
			labels: ['Espazo', 'Materiais', 'Horario', 'Participación', 'Xeral', 'Labor de control'],
			datasets: [{
				label: 'Valoracions',
				data: [{!!monitorsEspazoEdicion($edicion)!!}, {!!monitorsMateriaisEdicion($edicion)!!}, {!!monitorsHorarioEdicion($edicion)!!}, {!!monitorsParticipacionEdicion($edicion)!!}, {!!monitorsXeralEdicion($edicion)!!}, {!!monitorsControlEdicion($edicion)!!}],
				backgroundColor: '#dd4b3966',
				borderColor: '#dd4b39',
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
	var ctx2 = $('#novos');
	var novosChart = new Chart(ctx2, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [{!!novosParticipantesEdicion($edicion)!!}, {!!participantesEdicion($edicion)!!} - {!!novosParticipantesEdicion($edicion)!!}],
				backgroundColor: ['#00a65a', '#dd4b39'],
			}],
			labels: ['Novos', 'Recurrentes'],
		},
		options: {
			title: {
				display: true,
				text: 'Total participantes {!!participantesEdicion($edicion)!!}'
			}
		}
	});
	var ctx3 = $('#idade');
	var idadeChart = new Chart(ctx3, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [{!!moza12Edicion($edicion)!!}, {!!moza17Edicion($edicion)!!}, {!!moza26Edicion($edicion)!!}, {!!mozo12Edicion($edicion)!!}, {!!mozo17Edicion($edicion)!!}, {!!mozo26Edicion($edicion)!!}, {!!no_binaria12Edicion($edicion)!!}, {!!no_binaria17Edicion($edicion)!!}, {!!no_binaria26Edicion($edicion)!!}, {!!outro12Edicion($edicion)!!}, {!!outro17Edicion($edicion)!!}, {!!outro26Edicion($edicion)!!}, {!!no_contesta12Edicion($edicion)!!}, {!!no_contesta17Edicion($edicion)!!}, {!!no_contesta26Edicion($edicion)!!}],
				backgroundColor: [
	                '#82e9de', '#4db6ac', '#00867d',
	                '#ffffa8', '#fff176', '#cabf45',
	                '#ffa4a2', '#e57373', '#af4448',
	                '#9be7ff', '#64b5f6', '#2286c3',
	                '#c1d5e0', '#90a4ae', '#62757f',
	            ],
			}],
			labels: ['Mozas 12-16', 'Mozas 17-25', 'Mozas 26 e +', 'Mozos 12-16', 'Mozos 17-25', 'Mozos 26 e +', 'Persoa non binaria 12-16', 'Persoa non binaria 17-25', 'Persoa non binaria 26 e +', 'Outras identidades 12-16', 'Outras identidades 17-25', 'Outras identidades 26 e +', 'Prefiro non contestar 12-16', 'Prefiro non contestar 17-25', 'Prefiro non contestar 26 e +'],
		}
	});
	{{--
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
				data: [{!!homesEdicion($edicion)!!}, {!!mulleresEdicion($edicion)!!}, {!!outrosEdicion($edicion)!!}],
				backgroundColor: ['#00a65a', '#dd4b39'],
			}],
			labels: ['Home', 'Muller', 'Outro'],
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
				text: 'Onde nos atopan'
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
				text: 'Onde nos atopan'
			}
		}
	});
	--}}
</script>
@endsection