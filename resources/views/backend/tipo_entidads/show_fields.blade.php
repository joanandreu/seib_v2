<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $tipoEntidad->id !!}</p>
</div>

<!-- Parent Id Field -->
<div class="form-group">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    <p>{!! $tipoEntidad->parent_id !!}</p>
</div>

<!-- Tipo Field -->
<div class="form-group">
    {!! Form::label('tipo', 'Tipo:') !!}
    <p>{!! $tipoEntidad->tipo !!}</p>
</div>

<!-- Tipo Funcional Field -->
<div class="form-group">
    {!! Form::label('tipo_funcional', 'Tipo Funcional:') !!}
    <p>{!! $tipoEntidad->tipo_funcional !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $tipoEntidad->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $tipoEntidad->updated_at !!}</p>
</div>

