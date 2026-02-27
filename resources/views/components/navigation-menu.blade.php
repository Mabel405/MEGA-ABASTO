<div id="layoutSidenav_nav" class="layoutSidenav_nav-fixed">
    <nav class="sb-sidenav sb-sidenav-dark" id="sidenavAccordion"> 
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- Header del Sidebar -->
                <div class="d-flex align-items-center px-3 mb-3 sidebar-header">
                    
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('panel') }}">
                        <div class="sidebar-logo me-2 d-flex align-items-center justify-content-center">
                            <img src="/ICON/logo.png" alt="Logo" />
                        </div>
                        <div class="sidebar-text">
                            <h6 class="mb-0 fw-semibold">MEGA ABASTO</h6>
                            <small>
                                <i class="fas fa-circle me-1"></i>
                                Panel Administrativo
                            </small>
                        </div>
                    </a>

                </div>

                <!-- Sección Principal -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-semibold px-3 mb-2" 
                     style="color: #7c83fd; 
                            letter-spacing: 0.5px;
                            font-size: 0.7rem;">
                    <i class="fas fa-circle me-2" style="color: #fbcfe8; font-size: 4px;"></i>PRINCIPAL
                </div>
                <!-- Panel de Control -->
                <a class="nav-link active" href="{{ route('panel') }}" 
                   style="background: linear-gradient(135deg, #eef2ff 0%, #fdf2f8 100%);
                          color: #1e293b;
                          border-left: 4px solid #7c83fd;
                          margin: 4px 12px;
                          padding: 12px 16px !important;
                          border-radius: 12px;
                          box-shadow: 0 4px 12px -8px rgba(124, 131, 253, 0.25);
                          font-weight: 500;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span class="nav-link-text">Panel de Control</span>
                </a>

                <!-- MÓDULOS DEL SISTEMA -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-semibold px-3 mt-4 mb-2" 
                     style="color: #7c83fd; 
                            letter-spacing: 0.5px;
                            font-size: 0.7rem;">
                    <i class="fas fa-circle me-2" style="color: #fbcfe8; font-size: 4px;"></i>MÓDULOS DEL SISTEMA
                </div>
                
                <!-- Gestión de Compras -->
                @can('ver-compra')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCompras" 
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                    <span class="nav-link-text">Gestión de Compras</span>
                    <div class="sb-sidenav-collapse-arrow ms-auto" style="color: #a5b4fc;">
                        <i class="fas fa-chevron-down" style="font-size: 11px;"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseCompras">
                    <nav class="sb-sidenav-menu-nested nav ps-4">
                        <a class="nav-link" href="{{ route('compras.index') }}">
                            Ver Compras
                        </a>
                        <a class="nav-link" href="{{ route('compras.create') }}">
                            Nueva Compra
                        </a>
                    </nav>
                </div>
                @endcan

                <!-- Gestión de Ventas -->
                @can('ver-venta')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVentas"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-cash-register"></i>
                    </div>
                    <span class="nav-link-text">Gestión de Ventas</span>
                    <div class="sb-sidenav-collapse-arrow ms-auto" style="color: #a5b4fc;">
                        <i class="fas fa-chevron-down" style="font-size: 11px;"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseVentas">
                    <nav class="sb-sidenav-menu-nested nav ps-4">
                        <a class="nav-link" href="{{ route('ventas.index') }}"
                           style="color: #4b5565;
                                  padding: 8px 16px !important;
                                  margin: 2px 12px 2px 28px;
                                  border-radius: 8px;">
                            <i class="fas fa-circle me-2" style="color: #fbcfe8; font-size: 6px;"></i>
                            Ver Ventas
                        </a>
                        <a class="nav-link" href="{{ route('ventas.create') }}"
                           style="color: #4b5565;
                                  padding: 8px 16px !important;
                                  margin: 2px 12px 2px 28px;
                                  border-radius: 8px;">
                            <i class="fas fa-circle me-2" style="color: #fbcfe8; font-size: 6px;"></i>
                            Nueva Venta
                        </a>
                    </nav>
                </div>
                @endcan

                <!-- CATÁLOGOS -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-semibold px-3 mt-4 mb-2" 
                     style="color: #7c83fd; 
                            letter-spacing: 0.5px;
                            font-size: 0.7rem;">
                    <i class="fas fa-circle me-2" style="color: #fbcfe8; font-size: 4px;"></i>CATÁLOGOS
                </div>
                
                <!-- Categorías -->
                @can('ver-categoria')
                <a class="nav-link" href="{{ route('categorias.index') }}"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-folder-tree"></i>
                    </div>
                    <span class="nav-link-text">Categorías</span>
                </a>
                @endcan

                <!-- Presentaciones -->
                @can('ver-presentacione')
                <a class="nav-link" href="{{ route('presentaciones.index') }}"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <span class="nav-link-text">Presentaciones</span>
                </a>
                @endcan

                <!-- Marcas -->
                @can('ver-marca')
                <a class="nav-link" href="{{ route('marcas.index') }}"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-trademark"></i>
                    </div>
                    <span class="nav-link-text">Marcas</span>
                </a>
                @endcan

                <!-- Productos -->
                @can('ver-producto')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProductos"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <span class="nav-link-text">Productos</span>
                    <div class="sb-sidenav-collapse-arrow ms-auto" style="color: #a5b4fc;">
                        <i class="fas fa-chevron-down" style="font-size: 11px;"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseProductos">
                    <nav class="sb-sidenav-menu-nested nav ps-4">
                        <a class="nav-link" href="{{ route('productos.index') }}">
                            Ver Productos
                        </a>
                        <a class="nav-link" href="{{ route('productos.create') }}">
                            Nuevo Producto
                        </a>
                    </nav>
                </div>
                @endcan

                <!-- PERSONAS Y CONTACTOS -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-semibold px-3 mt-4 mb-2" 
                     style="color: #7c83fd; 
                            letter-spacing: 0.5px;
                            font-size: 0.7rem;">
                    <i class="fas fa-circle me-2" style="color: #fbcfe8; font-size: 4px;"></i>PERSONAS Y CONTACTOS
                </div>
                
                <!-- Clientes -->
                @can('ver-cliente')
                <a class="nav-link" href="{{ route('clientes.index') }}"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-users-line"></i>
                    </div>
                    <span class="nav-link-text">Clientes</span>
                </a>
                @endcan

                <!-- Proveedores -->
                @can('ver-proveedore')
                <a class="nav-link" href="{{ route('proveedores.index') }}"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-truck-field"></i>
                    </div>
                    <span class="nav-link-text">Proveedores</span>
                </a>
                @endcan

                <!-- ADMINISTRACIÓN -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-semibold px-3 mt-4 mb-2" 
                     style="color: #7c83fd; 
                            letter-spacing: 0.5px;
                            font-size: 0.7rem;">
                    <i class="fas fa-circle me-2" style="color: #fbcfe8; font-size: 4px;"></i>ADMINISTRACIÓN
                </div>
                
                <!-- Usuarios -->
                @can('ver-user')
                <a class="nav-link" href="{{ route('users.index') }}"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <span class="nav-link-text">Usuarios</span>
                </a>
                @endcan

                <!-- Roles -->
                @can('ver-role')
                <a class="nav-link" href="{{ route('roles.index') }}"
                   style="color: #475569;
                          margin: 2px 12px;
                          padding: 10px 16px !important;
                          border-radius: 10px;">
                    <div class="sb-nav-link-icon me-3" 
                         style="color: #7c83fd;">
                        <i class="fa-solid fa-user-tag"></i>
                    </div>
                    <span class="nav-link-text">Roles y Permisos</span>
                </a>
                @endcan
            </div>
        </div>

    </nav>
</div>

<style>

#layoutSidenav_nav {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 260px;
    z-index: 1030;
}

/* Sidebar */
.sb-sidenav-dark {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 260px;
    background: linear-gradient(180deg, #4e73df 10%, #224abe 100%);
    border-right: 0;
    box-shadow: 10px 0 30px -15px rgba(0,0,0,.35);
    overflow-y: auto;
    transform: none !important;
}

/* Contenido */
#layoutSidenav_content {
    margin-left: 260px;
}

/* Menu */
.sb-sidenav-dark .sb-sidenav-menu {
    background: transparent !important;
    padding: 16px 0;
}

/* =========================
   HEADER
   ========================= */
.sidebar-header {
    padding: 14px 12px 18px;
    margin-bottom: 8px;
}

.sb-sidenav-dark .navbar-brand {
    text-decoration: none;
}

/* Logo */
.sidebar-logo {
    width: 42px;
    height: 42px;
    border-radius: 12px;
    background: rgba(255,255,255,0.15);
    border: 1px solid rgba(255,255,255,0.25);
    box-shadow: 0 4px 10px -6px rgba(0,0,0,.4);
    padding: 6px;
}

.sidebar-logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

/* Texto */
.sidebar-text h6 {
    color: #ffffff;
    font-size: 0.95rem;
    line-height: 1.1;
    margin-bottom: 2px;
}

.sidebar-text small {
    color: rgba(255,255,255,.65);
    font-size: 0.65rem;
}

.sidebar-text i {
    color: rgba(255,255,255,.5);
    font-size: 6px;
}

/* =========================
   HEADINGS
   ========================= */
.sb-sidenav-dark .sb-sidenav-menu-heading {
    text-transform: uppercase;
    font-size: .65rem;
    font-weight: 700;
    padding: 12px 16px 6px;
    letter-spacing: .08em;
    color: rgba(255,255,255,.75);
}

/* =========================
   LINKS
   ========================= */
.sb-sidenav-dark .nav-link {
    color: rgba(255,255,255,.85) !important;
    margin: 3px 12px;
    padding: 10px 16px !important;
    border-radius: 10px;
    transition: all .2s ease;
}

.sb-sidenav-dark .nav-link:hover {
    color: #fff !important;
    background: rgba(255,255,255,.14) !important;
    transform: translateX(2px);
}

.sb-sidenav-dark .nav-link.active {
    color: #fff !important;
    background: rgba(255,255,255,.22) !important;
}

/* Iconos */
.sb-sidenav-dark .sb-nav-link-icon,
.sb-sidenav-dark .sb-nav-link-icon i {
    color: rgba(255,255,255,.6) !important;
}

/* Flechas */
.sb-sidenav-dark .sb-sidenav-collapse-arrow i {
    color: rgba(255,255,255,.6) !important;
}

/* =========================
   SUBMENÚS
   ========================= */
.sb-sidenav-dark .sb-sidenav-menu-nested {
    padding-left: .75rem;
}

.sb-sidenav-dark .sb-sidenav-menu-nested .nav-link {
    color: rgba(255,255,255,.8) !important;
    padding: 8px 16px !important;
    margin: 4px 12px 4px 28px;
    border-radius: 8px;
    font-size: .85rem;
    background: transparent !important;
    transition: all .15s ease;
}

.sb-sidenav-dark .sb-sidenav-menu-nested .nav-link:hover {
    color: #fff !important;
    background: rgba(255,255,255,.14) !important;
    transform: translateX(2px);
}

.sb-sidenav-dark .sb-sidenav-menu-nested .nav-link.active {
    color: #fff !important;
    background: rgba(255,255,255,.22) !important;
}

/* Quitar circulitos */
.sb-sidenav-dark .sb-sidenav-menu-nested .nav-link i.fas.fa-circle {
    display: none !important;
}

/* =========================
   SCROLL BONITO
   ========================= */
.sb-sidenav-dark::-webkit-scrollbar {
    width: 6px;
}

.sb-sidenav-dark::-webkit-scrollbar-thumb {
    background: rgba(255,255,255,.25);
    border-radius: 6px;
}

.sb-sidenav-dark::-webkit-scrollbar-track {
    background: transparent;
}


html, body {
    margin: 0 !important;
    padding: 0 !important;
    height: 100%;
}

/* Mata el padding-top que SB Admin mete por el navbar fijo */
body.sb-nav-fixed,
body.sb-nav-fixed #layoutSidenav,
body.sb-nav-fixed #layoutSidenav_nav,
body.sb-nav-fixed #layoutSidenav_content {
    padding-top: 0 !important;
    margin-top: 0 !important;
}

/* Sidebar SIEMPRE arriba */
#layoutSidenav_nav,
#sidenavAccordion,
.sb-sidenav,
.sb-sidenav-dark {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    bottom: 0 !important;
    height: 100vh !important;
    margin-top: 0 !important;
    padding-top: 0 !important;
    transform: none !important;
}

/* Contenido a la derecha del sidebar */
#layoutSidenav_content {
    margin-left: 260px !important;
}

/* Si existe navbar superior, que no empuje el layout */
.sb-topnav,
.navbar {
    position: relative !important;
}
</style>
