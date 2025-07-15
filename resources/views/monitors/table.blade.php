<table class="table table-responsive" id="monitors-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Email</th>
        <th>Teléfono</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($monitors as $monitor)
        <tr>
            <td>{!! $monitor->name !!}</td>
            <td>{!! $monitor->email !!}</td>
            <td>{!! $monitor->telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['monitors.destroy', $monitor->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('monitors.show', [$monitor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('monitors.edit', [$monitor->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>