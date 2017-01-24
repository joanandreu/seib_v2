<!-- Cargo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cargo', 'Cargo:') !!}
    {!! Form::text('cargo', null, ['class' => 'form-control']) !!}
</div>

<!-- Abrv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('abrv', 'Abrv:') !!}
    {!! Form::text('abrv', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('backend.cargosEntidads.index') !!}" class="btn btn-default">Cancel</a>
</div>
