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
@section('scripts')
<script type="text/javascript">
    $('#actividades-table').DataTable({
        "iDisplayLength": 100
    });
</script>
@endsection