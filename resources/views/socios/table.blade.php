<table class="table table-responsive" id="socios-table">
    <thead>
        <tr>
            <th>Edicion</th>
        <th>Ano</th>
        <th>Numero</th>
        <th>Espazo</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Cesion</th>
        <th>Localidade</th>
        <th>Telefono 1</th>
        <th>Telefono 2</th>
        <th>Email</th>
        <th>Xenero</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($socios as $socio)
        <tr>
            <td>{!! $socio->edicion !!}</td>
            <td>{!! $socio->ano !!}</td>
            <td>{!! $socio->numero !!}</td>
            <td>{!! $socio->espazo !!}</td>
            <td>{!! $socio->nome !!}</td>
            <td>{!! $socio->idade !!}</td>
            <td>{!! $socio->cesion !!}</td>
            <td>{!! $socio->localidade !!}</td>
            <td>{!! $socio->telefono !!}</td>
            <td>{!! $socio->telefono2 !!}</td>
            <td>{!! $socio->email !!}</td>
            <td>{!! $socio->xenero !!}</td>
            <td>
                {!! Form::open(['route' => ['socios.destroy', $socio->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('socios.show', [$socio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('socios.edit', [$socio->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
    $('#socios-table').DataTable({
        "iDisplayLength": 100
    });
</script>
@endsection