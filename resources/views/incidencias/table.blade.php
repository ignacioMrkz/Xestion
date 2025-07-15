<table class="table table-responsive" id="incidencias-table">
    <thead>
        <tr>
            <th>Incidencia</th>
            <th>Imaxe</th>
        <th>Coordinador</th>
        <th>Espazo</th>
        <th>Data</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($incidencias as $incidencia)
        <tr>
            <td>{!! $incidencia->incidencia !!}</td>
            <td>
                @if(!is_null($incidencia->imaxe))
                    {{Html::image('imaxes/'.$incidencia->id.'/'.$incidencia->imaxe, '', ['height'=>50, 'width'=> 'auto'])}}

                @endif
            </td>
            <td>{!! $incidencia->coordinador->name !!}</td>
            <td>{!! $incidencia->espazo->nome !!}</td>
            <td>{!! date_format($incidencia->created_at, 'd-m-Y') !!}</td>
            <td>
                {!! Form::open(['route' => ['incidencias.destroy', $incidencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('incidencias.show', [$incidencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('incidencias.edit', [$incidencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@section('scripts')
<script type="text/javascript">
    $('#incidencias-table').DataTable({
        "iDisplayLength": 100
    });
</script>
@endsection