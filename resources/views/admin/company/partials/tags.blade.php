<div id="container-menu-companies">
    <a href="{{ route('companies.index', $userPerfil[0]->perfil_route) }}" id="company-tag">
        <div class="companies-icon"></div>
        <div class="companies-desc">
            <div class="companies-title">Empresa</div>
            <div id="show-info-contact-nombre-tag" class="companies-tittle-tag">{{ substr($empresa->nombre, 0, 6) . '...' }}</div>
        </div>
    </a>

    <a href="{{ route('stores.index', $userPerfil[0]->perfil_route) }}" id="tienda-tag">
        <div class="companies-icon"></div>
        <div class="companies-desc">
            <div class="companies-title">Tiendas</div>
            <div class="companies-tittle-tag"><span id="lb-count-tiendas">{{ $countTiendas }}</span> Tienda (s)</div>
        </div>
    </a>

    <a href="{{ route('employee.index', $userPerfil[0]->perfil_route) }}" id="equipo-tag">
        <div class="companies-icon"></div>
        <div class="companies-desc">
            <div class="companies-title">Equipo</div>
            <div class="companies-tittle-tag"><span id="lb-count-employee">{{ $countEmpleados }}</span> Empleado (s)</div>
        </div>
    </a>

    <a href="{{ route('product.admin.index', $userPerfil[0]->perfil_route) }}" id="productos-tag">
        <div class="companies-icon"></div>
        <div class="companies-desc">
            <div class="companies-title">Productos</div>
            <div class="companies-tittle-tag">Producto (s) Tienda</div>
        </div>
    </a>

    <a href="{{ route('extras.index', $userPerfil[0]->perfil_route) }}" id="extra-tag">
        <div class="companies-icon"></div>
        <div class="companies-desc">
            <div class="companies-title">Opciones</div>
            <div class="companies-tittle-tag">Extra</div>
        </div>
    </a>

</div>
