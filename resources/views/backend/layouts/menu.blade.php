

<li class="{{ Request::is('tipoEntidads*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoEntidads.index') !!}"><i class="fa fa-edit"></i><span>TipoEntidads</span></a>
</li>

<li class="{{ Request::is('entidads*') ? 'active' : '' }}">
    <a href="{!! route('backend.entidads.index') !!}"><i class="fa fa-edit"></i><span>Entidads</span></a>
</li>

<li class="{{ Request::is('personaFisicas*') ? 'active' : '' }}">
    <a href="{!! route('backend.personaFisicas.index') !!}"><i class="fa fa-edit"></i><span>PersonaFisicas</span></a>
</li>

<li class="{{ Request::is('medioRecursos*') ? 'active' : '' }}">
    <a href="{!! route('backend.medioRecursos.index') !!}"><i class="fa fa-edit"></i><span>MedioRecursos</span></a>
</li>

<li class="{{ Request::is('catalogoMedios*') ? 'active' : '' }}">
    <a href="{!! route('backend.catalogoMedios.index') !!}"><i class="fa fa-edit"></i><span>CatalogoMedios</span></a>
</li>

