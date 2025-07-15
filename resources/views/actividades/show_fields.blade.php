<div class="col-xs-12">
    <div class="box collapsed-box">
        <div class="box-header with-border">
            <h3 class="box-title">Eventos</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
            </div>
            {{--
            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            --}}
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <thead>
                        <th>Inicio</th>
                        <th>Fin</th>
                    </thead>
                    @foreach($actividade->eventos()->orderBy('inicio', 'desc')->get() as $evento)
                    <tr>
                        <td>{!!$evento->inicio->format('d-m-Y H:i')!!}</td>
                        <td>{!!$evento->fin->format('d-m-Y H:i')!!}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="col-xs-12">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Avaliación monitors</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            {{--
            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            --}}
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <thead>
                        <th>Data</th>
                        <th>Monitors</th>
                        <th>Validada</th>
                        <th>Accions</th>
                    </thead>
                    @foreach($actividade->avaliacionmonitors()->orderBy('data', 'desc')->get() as $avaliacion)
                    <tr>
                        <td>{!!$avaliacion->data->format('d-m-Y')!!}</td>
                        <td>{!!$avaliacion->monitors!!}</td>
                        <td>
                            <a href="{!!url('cambiar-revisada/'.$avaliacion->id)!!}">
                            @if($avaliacion->revisada)
                            <i class="text-green glyphicon glyphicon glyphicon-ok"></i>
                            @else
                            <i class="text-red glyphicon glyphicon-remove"></i>
                            @endif
                            </a>
                        </td>
                        <td><a href="{!! route('avaliacionmonitors.show', [$avaliacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@if($actividade->avaliacionsatisfacions()->count() > 0)
<div class="col-xs-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Avaliación satisfacción, valoracions</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body table-responsive no-padding">
            <canvas id="valoracion" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
        </div>
    </div>
</div>
@endif
<div class="col-xs-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Avaliación satisfacción, actualmente...</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <canvas id="estado" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
        </div>
    </div>
</div>
<div class="col-xs-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Avaliación satisfacción, veño a noites a...</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <canvas id="motivacion" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
        </div>
    </div>
</div>
<div class="col-xs-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Avaliación satisfacción, encontrou noites por...</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <canvas id="encontrou" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
        </div>
    </div>
</div>
<div class="col-xs-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Avaliación satisfacción, boto en falta...</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <ul>
            @foreach($actividade->avaliacionsatisfacions as $avaliacion)
                @if($avaliacion->falta != null)
                <li>{!!$avaliacion->falta!!}</li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="col-xs-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Avaliación satisfacción, observacións e suxerencias...</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <ul>
            @foreach($actividade->avaliacionsatisfacions as $avaliacion)
                @if($avaliacion->suxerencias != null)
                <li>{!!$avaliacion->suxerencias!!}</li>
                @endif
            @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="col-xs-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enquisas satisfacción</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            </div>
            {{--
            <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
            --}}
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                    <thead>
                        <th>Data</th>
                        <th></th>
                        <th></th>
                        <th>Accions</th>
                    </thead>
                    @foreach($actividade->avaliacionsatisfacions()->orderBy('created_at', 'desc')->get() as $avaliacion)
                    <tr>
                        <td>{!!date_format($avaliacion->created_at, 'd-m-Y')!!}</td>
                        <td></td>
                        <td></td>
                        <td><a href="{!! route('avaliacionsatisfacions.show', [$avaliacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
@if($actividade->avaliacionsatisfacions()->count() > 0)
var ctx = $('#valoracion');
var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Monitores', 'Espazo', 'Materiais', 'Horario', 'Xeral'],
        datasets: [{
            label: 'Valoracions',
            data: [{!!$actividade->avaliacionsatisfacions()->sum('monitores')/$actividade->avaliacionsatisfacions()->count('monitores')!!}, {!!$actividade->avaliacionsatisfacions()->sum('espazo')/$actividade->avaliacionsatisfacions()->count('espazo')!!}, {!!$actividade->avaliacionsatisfacions()->sum('materiais')/$actividade->avaliacionsatisfacions()->count('materiais')!!}, {!!$actividade->avaliacionsatisfacions()->sum('horario')/$actividade->avaliacionsatisfacions()->count('horario')!!}, {!!$actividade->avaliacionsatisfacions()->sum('xeral')/$actividade->avaliacionsatisfacions()->count('xeral')!!}],
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
@endif
var ctx2 = $('#estado');
var myRadarChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: {!!json_encode(array_keys(array_count_values($actividade->totalEstados())))!!},
        datasets: [{
            label: 'Valoracions',
            data: {!!json_encode(array_values(array_count_values($actividade->totalEstados())))!!},
            backgroundColor: '#00a65a66',
            borderColor: '#00a65a',
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
var ctx3 = $('#motivacion');
var myRadarChart3 = new Chart(ctx3, {
    type: 'bar',
    data: {
        labels: {!!json_encode(array_keys(array_count_values($actividade->totalMotivacion())))!!},
        datasets: [{
            label: 'Valoracions',
            data: {!!json_encode(array_values(array_count_values($actividade->totalMotivacion())))!!},
            backgroundColor: '#00a65a66',
            borderColor: '#00a65a',
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
var ctx4 = $('#encontrou');
var myRadarChart4 = new Chart(ctx4, {
    type: 'bar',
    data: {
        labels: {!!json_encode(array_keys(array_count_values($actividade->totalEncontrou())))!!},
        datasets: [{
            label: 'Valoracions',
            data: {!!json_encode(array_values(array_count_values($actividade->totalEncontrou())))!!},
            backgroundColor: '#00a65a66',
            borderColor: '#00a65a',
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
@endsection