
<li class="{{ Request::is('tipoEntidads*') ? 'active' : '' }}">
    <a href="{!! route('backend.tipoEntidads.index') !!}"><i class="fa fa-edit"></i><span>TipoEntidads</span></a>
</li>

<li class="{{ Request::is('cargosEntidads*') ? 'active' : '' }}">
    <a href="{!! route('backend.cargosEntidads.index') !!}"><i class="fa fa-edit"></i><span>CargosEntidads</span></a>
</li>

