<h5><b>Actividade:</b> {!!$avaliacionmonitors->actividade->nome!!}</h5>
<h5><b>Data:</b> {!!date_format($avaliacionmonitors->data, 'd-m-Y')!!}</h5>
<h5><b>Espazo:</b> {!!$avaliacionmonitors->espazo->nome!!}</h5>
<h5><b>Realizado por:</b> {!!$avaliacionmonitors->coordinador->name!!} {!!$avaliacionmonitors->coordinador->apellido1!!} {!!$avaliacionmonitors->coordinador->apellido2!!}</h5>
<h5><b>Estado:</b> @if($avaliacionmonitors->revisada)Revisada @else Pendiente de revisar @endif</h5>
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
<div class="box box-warning">
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
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Idade usuarios</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <canvas id="idade" style="height: 228px; width: 657px;" width="914" height="656"></canvas>
    </div>
</div>
</div>
<div class="col-md-6">
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Datos xerais</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <p><b>Público:</b> {!!$avaliacionmonitors->publico!!}</p>
        <p><b>Xente fora:</b> {!!$avaliacionmonitors->fora!!}</p>
        <p><b>Nome do espazo:</b> {!!$avaliacionmonitors->espazo->nome!!}</p>
        <p><b>Data:</b> {!!date_format($avaliacionmonitors->data, 'd-m-Y')!!}</p>
        <p><b>Suxerencias:</b> {!!$avaliacionmonitors->obsevacions!!}</p>
    </div>
</div>
</div>
@section('scripts')
<script type="text/javascript">
var ctx = $('#valoracion');
var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Espazo', 'Materiais', 'Horario', 'Participación', 'Xeral', 'Labor de control'],
        datasets: [{
            label: 'Valoracions',
            data: [{!!$avaliacionmonitors->valoracionespazo!!}, {!!$avaliacionmonitors->valoracionmateriais!!}, {!!$avaliacionmonitors->valoracionhorario!!}, {!!$avaliacionmonitors->valoracionparticipacion!!}, {!!$avaliacionmonitors->valoracionxeral!!}, {!!$avaliacionmonitors->control!!}],
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
var ctx2 = $('#novos');
var novosChart = new Chart(ctx2, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [{!!$avaliacionmonitors->primeiravez!!}, {!!$avaliacionmonitors->participantes - $avaliacionmonitors->primeiravez!!}],
            backgroundColor: ['#00a65a', '#dd4b39'],
        }],
        labels: ['Novos ({!!$avaliacionmonitors->primeiravez!!})', 'Recurrentes ({!!$avaliacionmonitors->participantes - $avaliacionmonitors->primeiravez!!})'],
    }
});
var ctx3 = $('#idade');
var idadeChart = new Chart(ctx3, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [{!!$avaliacionmonitors->moza12!!}, {!!$avaliacionmonitors->moza17!!}, {!!$avaliacionmonitors->moza26!!}, {!!$avaliacionmonitors->mozo12!!}, {!!$avaliacionmonitors->mozo17!!}, {!!$avaliacionmonitors->mozo26!!}, {!!$avaliacionmonitors->no_binaria12!!}, {!!$avaliacionmonitors->no_binaria17!!}, {!!$avaliacionmonitors->no_binaria26!!}, {!!$avaliacionmonitors->outro12!!}, {!!$avaliacionmonitors->outro17!!}, {!!$avaliacionmonitors->outro26!!}, {!!$avaliacionmonitors->no_contesta12!!}, {!!$avaliacionmonitors->no_contesta17!!}, {!!$avaliacionmonitors->no_contesta26!!}],
            backgroundColor: [
                '#82e9de', '#4db6ac', '#00867d',
                '#ffffa8', '#fff176', '#cabf45',
                '#ffa4a2', '#e57373', '#af4448',
                '#9be7ff', '#64b5f6', '#2286c3',
                '#c1d5e0', '#90a4ae', '#62757f',
            ],
        }],
        labels: ['Mozas 12-16 ({!!$avaliacionmonitors->moza12!!})', 'Mozas 17-25 ({!!$avaliacionmonitors->moza17!!})', 'Mozas 26 e + ({!!$avaliacionmonitors->moza26!!})', 'Mozos 12-16 ({!!$avaliacionmonitors->mozo12!!})', 'Mozos 17-25 ({!!$avaliacionmonitors->mozo17!!})', 'Mozos 26 e + ({!!$avaliacionmonitors->mozo26!!})', 'Persoa non binaria 12-16 ({!!$avaliacionmonitors->no_binaria12!!})', 'Persoa non binaria 17-25 ({!!$avaliacionmonitors->no_binaria17!!})', 'Persoa non binaria 26 e + ({!!$avaliacionmonitors->no_binaria26!!})', 'Outras identidades 12-16 ({!!$avaliacionmonitors->outro12!!})', 'Outras identidades 17-25 ({!!$avaliacionmonitors->outro17!!})', 'Outras identidades 26 e + ({!!$avaliacionmonitors->outro26!!})', 'Prefiro non contestar 12-16 ({!!$avaliacionmonitors->no_contesta12!!})', 'Prefiro non contestar 17-25 ({!!$avaliacionmonitors->no_contesta17!!})', 'Prefiro non contestar 26 e + ({!!$avaliacionmonitors->no_contesta26!!})'],
    }
});
</script>
@endsection