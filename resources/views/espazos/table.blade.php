<table class="table table-responsive" id="espazos-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Enderezo</th>
        <th>Postal</th>
        <th>Localidade</th>
        <th>Mapa</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($espazos as $espazo)
        <tr>
            <td>{!! $espazo->nome !!}</td>
            <td>{!! $espazo->enderezo !!}</td>
            <td>{!! $espazo->postal !!}</td>
            <td>{!! $espazo->localidade !!}</td>
            <td>{!! $espazo->mapa !!}</td>
            <td>
                {!! Form::open(['route' => ['espazos.destroy', $espazo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('espazos.show', [$espazo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('espazos.edit', [$espazo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Estás seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>