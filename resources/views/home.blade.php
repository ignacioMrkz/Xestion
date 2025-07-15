@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
    	@foreach($edicions as $edicion)
    	<a href="{!!url('datos-actividades/'.$edicion)!!}" class="btn bg-maroon btn-flat margin">Edición {!!$edicion!!} actividades</a>
    	<a href="{!!url('datos-monitors/'.$edicion)!!}" class="btn bg-maroon btn-flat margin">Edición {!!$edicion!!} avaliacións monitors</a>
    	<a href="{!!url('datos-satisfaccion/'.$edicion)!!}" class="btn bg-maroon btn-flat margin">Edición {!!$edicion!!} avaliacións satisfacción</a>
    	<a href="{!!url('datos-segmentados/')!!}" class="btn bg-maroon btn-flat margin">Datos segmentados por data</a>
    	@endforeach

    </div>
    <div class="row">
		<div class="col-md-12">
			<div class="box box-success box-solid">
				<div class="box-header with-border">
					<h3 class="box-title">Avaliacións con observacions:</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-responsive" id="actividades-table">
						<thead>
							<tr>
								<th>Actividade</th>
								<th>Data</th>
								<th>Suxerencia</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($avaliacions as $avaliacionmonitor)
							<tr>
								<td>{!! $avaliacionmonitor->actividade->nome !!}</td>
            					<td>{!! date_format($avaliacionmonitor->data, 'Y-m-d') !!}</td>
								<td style="font-size: 10px">{!! $avaliacionmonitor->obsevacions !!}</td>
								<td>
					                {!! Form::open(['route' => ['avaliacionmonitors.destroy', $avaliacionmonitor->id], 'method' => 'delete']) !!}
					                <div class='btn-group'>
					                    <a href="{!! route('avaliacionmonitors.show', [$avaliacionmonitor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
					                    <a href="{!! route('avaliacionmonitors.edit', [$avaliacionmonitor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$('#actividades-table').DataTable({
        "iDisplayLength": 100,
        "order": [[ 1, "desc" ]]
    });
</script>
@endsection