<div class="row">
<!-- Id Field -->
<div class="form-group col-sm-1">
    {!! Form::label('id', 'Num ref:') !!}
    <p>{!! $entidad->id !!}</p>
</div>

<!-- Entidad Field -->
<div class="form-group col-sm-3">
    {!! Form::label('entidad', 'Nombre o Razón Social:') !!}
    <p>{!! $entidad->entidad !!}</p>
</div>
<!-- Abreviatura Field -->
<div class="form-group col-sm-3">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    <p>{!! $entidad->abreviatura !!}</p>
</div>
</div>
<!-- Tipoentidad Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tipoentidad', 'Tipoentidad:') !!}
    <p>{!! $entidad->tipoentidad !!}</p>
</div>

<!-- Tipofuncional Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tipofuncional', 'Tipofuncional:') !!}
    <p>{!! $entidad->tipofuncional !!}</p>
</div>

<!-- Nivel Field -->
<div class="form-group col-sm-3">
    {!! Form::label('nivel', 'Nivel:') !!}
    <p>{!! $entidad->nivel !!}</p>
</div>

<!-- Cif Field -->
<div class="form-group col-sm-3">
    {!! Form::label('cif', 'Cif:') !!}
    <p>{!! $entidad->cif !!}</p>
</div>

<!-- Telefonoprincipal Field -->
<div class="form-group col-sm-3">
    {!! Form::label('telefonoprincipal', 'Telefonoprincipal:') !!}
    <p>{!! $entidad->telefonoprincipal !!}</p>
</div>

<!-- Descripcion Telprincipal Field -->
<div class="form-group col-sm-3">
    {!! Form::label('descripcion_telprincipal', 'Descripcion Telprincipal:') !!}
    <p>{!! $entidad->descripcion_telprincipal !!}</p>
</div>

<!-- Emailprincipal Field -->
<div class="form-group col-sm-3">
    {!! Form::label('emailprincipal', 'Emailprincipal:') !!}
    <p>{!! $entidad->emailprincipal !!}</p>
</div>

<!-- Descripcion Emailprincipal Field -->
<div class="form-group col-sm-3">
    {!! Form::label('descripcion_emailprincipal', 'Descripcion Emailprincipal:') !!}
    <p>{!! $entidad->descripcion_emailprincipal !!}</p>
</div>

<!-- Responsable Field -->
<div class="form-group col-sm-3">
    {!! Form::label('responsable', 'Responsable:') !!}
    <p>{!! $entidad->responsable !!}</p>
</div>



<div class="row">
<!-- Municipio Field -->
<div class="form-group col-sm-3">
    {!! Form::label('municipio', 'Municipio:') !!}
    <p>{!! $entidad->municipio !!}</p>
</div>

<!-- Calle Field -->
<div class="form-group col-sm-3">
    {!! Form::label('calle', 'Calle:') !!}
    <p>{!! $entidad->calle !!}</p>
</div>

<!-- Ine Via Field -->
<div class="form-group col-sm-3">
    {!! Form::label('ine_via', 'Ine Via:') !!}
    <p>{!! $entidad->ine_via !!}</p>
</div>

<!-- Numero Field -->
<div class="form-group col-sm-3">
    {!! Form::label('numero', 'Numero:') !!}
    <p>{!! $entidad->numero !!}</p>
</div>

<!-- Piso Field -->
<div class="form-group col-sm-3">
    {!! Form::label('piso', 'Piso:') !!}
    <p>{!! $entidad->piso !!}</p>
</div>

<!-- Puerta Field -->
<div class="form-group col-sm-3">
    {!! Form::label('puerta', 'Puerta:') !!}
    <p>{!! $entidad->puerta !!}</p>
</div>

<!-- Escalera Field -->
<div class="form-group col-sm-3">
    {!! Form::label('escalera', 'Escalera:') !!}
    <p>{!! $entidad->escalera !!}</p>
</div>

<!-- Tipo Coordenadas Field -->
<div class="form-group col-sm-3">
    {!! Form::label('tipo_coordenadas', 'Tipo Coordenadas:') !!}
    <p>{!! $entidad->tipo_coordenadas !!}</p>
</div>

<!-- Lon Field -->
<div class="form-group col-sm-1">
    {!! Form::label('lon', 'Lon:') !!}
    <p>{!! $entidad->lon !!}</p>
</div>

<!-- Lat Field -->
<div class="form-group col-sm-1">
    {!! Form::label('lat', 'Lat:') !!}
    <p>{!! $entidad->lat !!}</p>
</div>

<!-- X Field -->
<div class="form-group col-sm-1">
    {!! Form::label('x', 'X:') !!}
    <p>{!! $entidad->x !!}</p>
</div>

<!-- Y Field -->
<div class="form-group col-sm-1">
    {!! Form::label('y', 'Y:') !!}
    <p>{!! $entidad->y !!}</p>
</div>
</div>




<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Registro creado:') !!}
    <p>{!! $entidad->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Registro revisado/actualizado:') !!}
    <p>{!! $entidad->updated_at !!}</p>
</div>

