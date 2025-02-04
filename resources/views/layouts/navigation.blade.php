<ul>

    <li class="nav-item @if (request()->routeIs('home')) active @endif">
        <a href="{{ route('home') }}">
            <span class="icon">
                <i class="lni lni-restaurant"></i>
            </span>
            <span class="text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    <li class="nav-item @if (request()->routeIs('home')) active @endif">
        <a href="{{ route('home') }}">
            <span class="icon">
                <i class="lni lni-service"></i>
            </span>
            <span class="text">{{ __('Recetas') }}</span>
        </a>
    </li>

    {{-- 
    <li class="nav-item @if (request()->routeIs('users.index')) active @endif">
        <a href="{{ route('users.index') }}">
            <span class="icon">
                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
            </span>
            <span class="text">{{ __('Users') }}</span>
        </a>
    </li>
    --}}

    {{-- 
    <li class="nav-item @if (request()->routeIs('about')) active @endif">
        <a href="{{ route('about') }}">
            <span class="icon">
                <svg width="22" height="22" aria-hidden="true" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z">
                    </path>
                </svg>
            </span>
            <span class="text">{{ __('About us') }}</span>
        </a>
    </li>
    --}}

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
