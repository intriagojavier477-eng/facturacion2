<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Logotipo del sistema -->
    <div class="sidebar-brand text-center py-2">
        <a href="<?= base_url('dashboard') ?>" class="brand-link text-decoration-none">
            <img src="<?= base_url('img/logo.jpg'); ?>" alt="Logotipo del Sistema" class="brand-logo" width="120">
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                
                <!-- Opción Simple: Dashboard -->
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link <?= url_is('dashboard') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Opción Añadida: Usuarios -->
                <li class="nav-item">
                    <a href="<?= base_url('usuarios') ?>" class="nav-link <?= url_is('usuarios*') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-people"></i>
                        <p>Usuarios</p>
                    </a>
                </li>

                <!-- Opción con Desplegable: Facturación -->
                <li class="nav-item <?= url_is('facturas*') ? 'menu-open' : '' ?>">
                    <a href="#" class="nav-link <?= url_is('facturas*') ? 'active' : '' ?>">
                        <i class="nav-icon bi bi-receipt"></i>
                        <p>
                            Facturación
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('facturas/nueva') ?>" class="nav-link <?= url_is('facturas/nueva') ? 'active' : '' ?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Nueva Factura</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('facturas') ?>" class="nav-link <?= url_is('facturas') ? 'active' : '' ?>">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Historial</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Cerrar Sesión -->
                <li class="nav-item mt-3 border-top pt-2">
                    <a href="<?= base_url('logout'); ?>" class="nav-link text-danger" onclick="return confirm('¿Está seguro que desea cerrar sesión?');">
                        <i class="nav-icon bi bi-box-arrow-right"></i>
                        <p>Cerrar Sesión</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>