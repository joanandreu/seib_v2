<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Entidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('entidad', 'Entidad:') !!}
    {!! Form::text('entidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo', 'Cargo:') !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellidos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidos', 'Apellidos:') !!}
    {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
</div>

<!-- Nif Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nif', 'Nif:') !!}
    {!! Form::text('nif', null, ['class' => 'form-control']) !!}
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

<!-- Horarios Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horarios', 'Horarios:') !!}
    {!! Form::text('horarios', null, ['class' => 'form-control']) !!}
</div>

<!-- Emails Field -->
<div class="form-group col-sm-6">
    {!! Form::label('emails', 'Emails:') !!}
    {!! Form::text('emails', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.personaFisicas.index') !!}" class="btn btn-default">Cancel</a>
</div>
