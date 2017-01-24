<table class="table table-responsive" id="cargosEntidads-table">
    <thead>
        <th>Tipo Entidads Id</th>
        <th>Cargo</th>
        <th>Abrv</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($cargosEntidads as $cargosEntidad)
        <tr>
            <td>{!! $cargosEntidad->tipo_entidads_id !!}</td>
            <td>{!! $cargosEntidad->cargo !!}</td>
            <td>{!! $cargosEntidad->abrv !!}</td>
            <td>
                {!! Form::open(['route' => ['backend.cargosEntidads.destroy', $cargosEntidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('backend.cargosEntidads.show', [$cargosEntidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('backend.cargosEntidads.edit', [$cargosEntidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>