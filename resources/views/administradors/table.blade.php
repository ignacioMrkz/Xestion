<table class="table table-responsive" id="administradors-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Email</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($administradors as $administrador)
        <tr>
            <td>{!! $administrador->name !!}</td>
            <td>{!! $administrador->email !!}</td>
            <td>
                {!! Form::open(['route' => ['administradors.destroy', $administrador->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('administradors.show', [$administrador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('administradors.edit', [$administrador->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>