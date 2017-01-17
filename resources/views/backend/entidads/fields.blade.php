<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Abreviatura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    {!! Form::text('abreviatura', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipoentidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipoentidad', 'Tipoentidad:') !!}
    {!! Form::text('tipoentidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Nivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel', 'Nivel:') !!}
    {!! Form::text('nivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Cif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cif', 'Cif:') !!}
    {!! Form::text('cif', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefonos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefonos', 'Telefonos:') !!}
    {!! Form::text('telefonos', null, ['class' => 'form-control']) !!}
</div>

<!-- Emails Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emails', 'Emails:') !!}
    {!! Form::text('emails', null, ['class' => 'form-control']) !!}
</div>

<!-- Horarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horarios', 'Horarios:') !!}
    {!! Form::text('horarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-6">
    {!! Form::label('responsable', 'Responsable:') !!}
    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('backend.entidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
