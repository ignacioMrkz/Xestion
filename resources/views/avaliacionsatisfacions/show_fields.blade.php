<h5><b>Actividade:</b> {!!$avaliacionsatisfacion->actividade->nome!!}</h5>
<h5><b>Data:</b> {!!$avaliacionsatisfacion->created_at->format('d-m-Y')!!}</h5>
<h5><b>Gardado por:</b> {!!$avaliacionsatisfacion->coordinador->name!!} {!!$avaliacionsatisfacion->coordinador->apellido1!!} {!!$avaliacionsatisfacion->coordinador->apellido2!!}</h5>
<h5><b>Xénero:</b> {!!$avaliacionsatisfacion->xenero!!}</h5>
<h5><b>Idade:</b> {!!$avaliacionsatisfacion->idade!!}</h5>
<h5><b>Concello:</b> {!!$avaliacionsatisfacion->concello!!}</h5>
<h5><b>Actualmente:</b> {!!str_replace('|', ', ', $avaliacionsatisfacion->estado)!!}@if(!is_null($avaliacionsatisfacion->estadoOutro)){{$avaliacionsatisfacion->estadoOutro}}@endif</h5>
<h5><b>Veño a Noites a:</b> {!!str_replace('|', ', ', $avaliacionsatisfacion->motivacion)!!}@if(!is_null($avaliacionsatisfacion->motivacionOutro)){{$avaliacionsatisfacion->motivacionOutro}}@endif</h5>
<h5><b>Infórmome do relativo a Noites Abertas por:</b> {!!str_replace('|', ', ', $avaliacionsatisfacion->encontrou)!!}</h5>
<canvas id="valoracion" style="height: 228px; width: 457px;" width="914" height="456"></canvas>
<h5><b>En Noites boto en falta a actividade:</b> {!!$avaliacionsatisfacion->falta!!}</h5>
<h5><b>Observacións, suxestións de mellora, comentario:</b> {!!$avaliacionsatisfacion->suxerencias!!}</h5>
@section('scripts')
<script type="text/javascript">
var ctx = $('#valoracion');
var myRadarChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: ['Monitores', 'Espazo', 'Materiais', 'Horario', 'Xeral'],
        datasets: [{
            label: 'Valoracions',
            data: [{!!$avaliacionsatisfacion->monitores!!}, {!!$avaliacionsatisfacion->espazo!!}, {!!$avaliacionsatisfacion->materiais!!}, {!!$avaliacionsatisfacion->horario!!}, {!!$avaliacionsatisfacion->xeral!!}],
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
</script>
@endsection