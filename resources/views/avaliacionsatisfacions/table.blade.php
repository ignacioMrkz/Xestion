<table class="table table-responsive" id="avaliacionsatisfacions-table">
    <thead>
        <tr>
            <th>Actividade</th>
            <th>Edición</th>
            <th>Ano</th>
            <th>Data</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($avaliacionsatisfacions as $avaliacionsatisfacion)
        <tr>
            <td>{!! $avaliacionsatisfacion->actividade->nome !!}</td>
            <td>{!! $avaliacionsatisfacion->actividade->edicion !!}</td>
            <td>{!! $avaliacionsatisfacion->actividade->ano !!}</td>
            <td>{!! $avaliacionsatisfacion->created_at->format('Y-m-d') !!}</td>
            <td>
                {!! Form::open(['route' => ['avaliacionsatisfacions.destroy', $avaliacionsatisfacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('avaliacionsatisfacions.show', [$avaliacionsatisfacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('avaliacionsatisfacions.edit', [$avaliacionsatisfacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
    $('#avaliacionsatisfacions-table').DataTable({
        "iDisplayLength": 100
    });
</script>
@endsection