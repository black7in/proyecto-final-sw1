<ul>
    <li class="nav-item @if (request()->routeIs('home')) active @endif">
        <a href="{{ route('home') }}">
            <span class="icon">
                <i class="lni lni-restaurant"></i>
            </span>
            <span class="text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('predicciones.index')) active @endif">
        <a href="{{ route('predicciones.index') }}">
            <span class="icon">
                <i class="lni lni-reddit"></i>
            </span>
            <span class="text">{{ __('Predicciones') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('ventas.index') || request()->routeIs('ventas.create') || request()->routeIs('ventas.edit')) active @endif">
        <a href="{{ route('ventas.index') }}">
            <span class="icon">
                <i class="lni lni-dollar"></i>
            </span>
            <span class="text">{{ __('Ventas') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('movimientos.index') ||
            request()->routeIs('movimientos.create') ||
            request()->routeIs('movimientos.edit')) active @endif">
        <a href="{{ route('movimientos.index') }}">
            <span class="icon">
                <i class="lni lni-cart"></i>
            </span>
            <span class="text">{{ __('Movimientos') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('recetas.index') ||
            request()->routeIs('recetas.create') ||
            request()->routeIs('recetas.edit') ||
            request()->routeIs('recetas.show')) active @endif">
        <a href="{{ route('recetas.index') }}">
            <span class="icon">
                <i class="lni lni-service"></i>
            </span>
            <span class="text">{{ __('Recetas') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('insumos.index') || request()->routeIs('insumos.create') || request()->routeIs('insumos.edit')) active @endif">
        <a href="{{ route('insumos.index') }}">
            <span class="icon">
                <i class="lni lni-sprout"></i>
            </span>
            <span class="text">{{ __('Insumos') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('proveedores.index') ||
            request()->routeIs('proveedores.create') ||
            request()->routeIs('proveedores.edit')) active @endif">
        <a href="{{ route('proveedores.index') }}">
            <span class="icon">
                <i class="lni lni-delivery"></i>
            </span>
            <span class="text">{{ __('Proveedores') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('categorias.index') ||
            request()->routeIs('categorias.create') ||
            request()->routeIs('categorias.edit')) active @endif">
        <a href="{{ route('categorias.index') }}">
            <span class="icon">
                <i class="lni lni-tag"></i>
            </span>
            <span class="text">{{ __('Categorías') }}</span>
        </a>
    </li>


    <li class="nav-item @if (request()->routeIs('unidades.index')) active @endif">
        <a href="{{ route('unidades.index') }}">
            <span class="icon">
                <i class="lni lni-cogs"></i>
            </span>
            <span class="text">{{ __('Unidades de medida') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('restaurante.show')) active @endif">
        <a href="{{ route('restaurante.show') }}">
            <span class="icon">
                <i class="lni lni-restaurant"></i>
            </span>
            <span class="text">{{ __('Mi Restaurante') }}</span>
        </a>
    </li>


</ul>
