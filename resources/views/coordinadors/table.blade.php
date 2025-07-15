<table class="table table-responsive" id="coordinadors-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Email</th>
        <th>Teléfono</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($coordinadors as $coordinador)
        <tr>
            <td>{!! $coordinador->name !!}</td>
            <td>{!! $coordinador->email !!}</td>
            <td>{!! $coordinador->telefono !!}</td>
            <td>
                {!! Form::open(['route' => ['coordinadors.destroy', $coordinador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('coordinadors.show', [$coordinador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('coordinadors.edit', [$coordinador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>