<table class="table table-responsive table-condensed" id="avaliacionmonitors-table">
    <thead>
        <tr>
            <th>Participantes</th>
        <th>Actividade</th>
        <th>Data</th>
        <th>Espazo</th>
        <th>Revisada</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($avaliacionmonitors as $avaliacionmonitor)
        <tr>
            <td>{!! $avaliacionmonitor->participantes !!}</td>
            <td>{!! $avaliacionmonitor->actividade->nome !!}</td>
            <td>{!! date_format($avaliacionmonitor->data, 'Y-m-d') !!}</td>
            <td>{!! $avaliacionmonitor->espazo->nome !!}</td>
            <td>
                <a href="{!!url('cambiar-revisada/'.$avaliacionmonitor->id)!!}">
                @if($avaliacionmonitor->revisada)
                <i class="text-green glyphicon glyphicon glyphicon-ok"></i>
                @else
                <i class="text-red glyphicon glyphicon-remove"></i>
                @endif
                </a>
            </td>
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
@section('scripts')
<script type="text/javascript">
    $('#avaliacionmonitors-table').DataTable({
        "iDisplayLength": 100
    });
</script>
@endsection