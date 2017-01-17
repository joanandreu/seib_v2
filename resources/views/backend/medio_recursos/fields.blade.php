<!-- Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidad', 'Entidad:') !!}
    {!! Form::text('entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Medio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_medio', 'Tipo Medio:') !!}
    {!! Form::text('tipo_medio', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Medida Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medida', 'Medida:') !!}
    {!! Form::text('medida', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Riesgo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_riesgo', 'Tipo Riesgo:') !!}
    {!! Form::text('tipo_riesgo', null, ['class' => 'form-control']) !!}
</div>

<!-- Modelo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo', 'Modelo:') !!}
    {!! Form::text('modelo', null, ['class' => 'form-control']) !!}
</div>

<!-- Matricula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('matricula', 'Matricula:') !!}
    {!! Form::text('matricula', null, ['class' => 'form-control']) !!}
</div>

<!-- Transporte Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transporte', 'Transporte:') !!}
    {!! Form::text('transporte', null, ['class' => 'form-control']) !!}
</div>

<!-- Grua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grua', 'Grua:') !!}
    {!! Form::text('grua', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
</div>

<!-- Contacto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('contacto', 'Contacto:') !!}
    {!! Form::text('contacto', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio', 'Municipio:') !!}
    {!! Form::text('municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Nucleo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nucleo', 'Nucleo:') !!}
    {!! Form::text('nucleo', null, ['class' => 'form-control']) !!}
</div>

<!-- Calle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calle', 'Calle:') !!}
    {!! Form::text('calle', null, ['class' => 'form-control']) !!}
</div>

<!-- Ine Via Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ine_via', 'Ine Via:') !!}
    {!! Form::text('ine_via', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Piso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('piso', 'Piso:') !!}
    {!! Form::text('piso', null, ['class' => 'form-control']) !!}
</div>

<!-- Puerta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('puerta', 'Puerta:') !!}
    {!! Form::text('puerta', null, ['class' => 'form-control']) !!}
</div>

<!-- Escalera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('escalera', 'Escalera:') !!}
    {!! Form::text('escalera', null, ['class' => 'form-control']) !!}
</div>

<!-- Lon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lon', 'Lon:') !!}
    {!! Form::text('lon', null, ['class' => 'form-control']) !!}
</div>

<!-- Lat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lat', 'Lat:') !!}
    {!! Form::text('lat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.medioRecursos.index') !!}" class="btn btn-default">Cancel</a>
</div>
