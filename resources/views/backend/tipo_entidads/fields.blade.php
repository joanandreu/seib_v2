<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Funcional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_funcional', 'Tipo Funcional:') !!}
    {!! Form::select('tipo_funcional', 
    ['Administración Pública' => 'Administración Pública',
     'Administración Titular' => 'Administración Titular',
     'Empresa o Entidad Privada' => 'Empresa o Entidad Privada',
     'Organismo Público' => 'Organismo Público',
     'Empresa pública' => 'Empresa pública',
     ], null, ['class' => 'form-control']) !!}

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.tipoEntidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
