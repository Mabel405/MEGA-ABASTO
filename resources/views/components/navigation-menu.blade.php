<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <!-- Encabezado del Sidebar con color morado -->
        <div class="sb-sidenav-header py-4" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);">
            <div class="d-flex align-items-center justify-content-center">
                <div class="sidebar-logo me-2" style="background: rgba(255, 255, 255, 0.2);">
                    <i class="fas fa-store-alt fa-2x text-white"></i>
                </div>
                <div>
                    <h5 class="mb-0 text-white fw-bold">Sistema Abarrotes</h5>
                    <small class="text-white" style="opacity: 0.9;">Panel Administrativo</small>
                </div>
            </div>
        </div>
        
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- Sección Principal -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-bold" style="color: #b39ddb;">Principal</div>
                
                <!-- Panel de Control -->
                <a class="nav-link active" href="{{ route('panel') }}" style="background: linear-gradient(90deg, #7b1fa2 0%, #9c27b0 100%);">
                    <div class="sb-nav-link-icon" style="background: rgba(255, 255, 255, 0.2);">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span class="nav-link-text">Panel de Control</span>
                </a>

                <!-- Separador de Módulos -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-bold mt-4" style="color: #b39ddb;">Módulos del Sistema</div>
                
                <!-- Compras -->
                @can('ver-compra')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCompras" aria-expanded="false" aria-controls="collapseCompras">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #4a148c 0%, #7b1fa2 100%);">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                    <span class="nav-link-text">Gestión de Compras</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseCompras" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('compras.index') }}">
                            <i class="fas fa-list me-2"></i>Ver Compras
                        </a>
                        <a class="nav-link" href="{{ route('compras.create') }}">
                            <i class="fas fa-plus-circle me-2"></i>Nueva Compra
                        </a>
                    </nav>
                </div>
                @endcan

                <!-- Ventas -->
                @can('ver-venta')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseVentas" aria-expanded="false" aria-controls="collapseVentas">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #6a1b9a 0%, #8e24aa 100%);">
                        <i class="fa-solid fa-cash-register"></i>
                    </div>
                    <span class="nav-link-text">Gestión de Ventas</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseVentas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('ventas.index') }}">
                            <i class="fas fa-list me-2"></i>Ver Ventas
                        </a>
                        <a class="nav-link" href="{{ route('ventas.create') }}">
                            <i class="fas fa-plus-circle me-2"></i>Nueva Venta
                        </a>
                    </nav>
                </div>
                @endcan

                <!-- Catálogos -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-bold mt-4" style="color: #b39ddb;">Catálogos</div>
                
                @can('ver-categoria')
                <a class="nav-link" href="{{ route('categorias.index') }}">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #4527a0 0%, #5e35b1 100%);">
                        <i class="fa-solid fa-folder-tree"></i>
                    </div>
                    <span class="nav-link-text">Categorías</span>
                </a>
                @endcan

                @can('ver-presentacione')
                <a class="nav-link" href="{{ route('presentaciones.index') }}">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #5e35b1 0%, #7e57c2 100%);">
                        <i class="fa-solid fa-box-open"></i>
                    </div>
                    <span class="nav-link-text">Presentaciones</span>
                </a>
                @endcan

                @can('ver-marca')
                <a class="nav-link" href="{{ route('marcas.index') }}">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #3949ab 0%, #5c6bc0 100%);">
                        <i class="fa-solid fa-trademark"></i>
                    </div>
                    <span class="nav-link-text">Marcas</span>
                </a>
                @endcan

                <!-- Gestión de Productos -->
                @can('ver-producto')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProductos" aria-expanded="false" aria-controls="collapseProductos">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #8e24aa 0%, #ab47bc 100%);">
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <span class="nav-link-text">Gestión de Productos</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseProductos" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('productos.index') }}">
                            <i class="fas fa-list me-2"></i>Ver Productos
                        </a>
                        <a class="nav-link" href="{{ route('productos.create') }}">
                            <i class="fas fa-plus-circle me-2"></i>Nuevo Producto
                        </a>
                    </nav>
                </div>
                @endcan

                <!-- Personas y Contactos -->
                <div class="sb-sidenav-menu-heading text-uppercase small fw-bold mt-4" style="color: #b39ddb;">Personas y Contactos</div>
                
                @can('ver-cliente')
                <a class="nav-link" href="{{ route('clientes.index') }}">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #7b1fa2 0%, #9c27b0 100%);">
                        <i class="fa-solid fa-users-line"></i>
                    </div>
                    <span class="nav-link-text">Clientes</span>
                </a>
                @endcan

                @can('ver-proveedore')
                <a class="nav-link" href="{{ route('proveedores.index') }}">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #6a1b9a 0%, #8e24aa 100%);">
                        <i class="fa-solid fa-truck-field"></i>
                    </div>
                    <span class="nav-link-text">Proveedores</span>
                </a>
                @endcan

                <!-- Administración del Sistema -->
                @canany(['ver-user', 'ver-role'])
                <div class="sb-sidenav-menu-heading text-uppercase small fw-bold mt-4" style="color: #b39ddb;">Administración</div>
                
                @can('ver-user')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsuarios" aria-expanded="false" aria-controls="collapseUsuarios">
                    <div class="sb-nav-link-icon" style="background: linear-gradient(135deg, #4a148c 0%, #7b1fa2 100%);">
                        <i class="fa-solid fa-user-shield"></i>
                    </div>
                    <span class="nav-link-text">Seguridad</span>
                    <div class="sb-sidenav-collapse-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
                <div class="collapse" id="collapseUsuarios" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            <i class="fas fa-user me-2"></i>Usuarios
                        </a>
                        @can('ver-role')
                        <a class="nav-link" href="{{ route('roles.index') }}">
                            <i class="fas fa-user-tag me-2"></i>Roles y Permisos
                        </a>
                        @endcan
                    </nav>
                </div>
                @endcan
                @endcanany
            </div>
        </div>

        <!-- Footer del Sidebar con colores morados -->
        <div class="sb-sidenav-footer p-3" style="background: linear-gradient(135deg, #4a148c 0%, #7b1fa2 100%);">
            <div class="d-flex align-items-center">
                <div class="user-avatar me-3">
                    <div class="avatar-circle d-flex align-items-center justify-content-center" 
                         style="width: 45px; height: 45px; border-radius: 50%; background: linear-gradient(135deg, #ab47bc 0%, #8e24aa 100%);">
                        <i class="fas fa-user text-white"></i>
                    </div>
                </div>
                <div class="user-info">
                    <div class="small" style="color: rgba(255, 255, 255, 0.8);">Bienvenido</div>
                    <div class="text-white fw-bold">{{ auth()->user()->name }}</div>
                    <div class="small" style="color: rgba(255, 255, 255, 0.8);">
                        <i class="fas fa-circle text-success me-1" style="font-size: 8px;"></i> En línea
                    </div>
                </div>
            </div>
            
            <!-- Botón de Cerrar Sesión -->
            <div class="mt-3">
                <a href="{{ route('logout') }}" class="btn btn-sm w-100" 
                   style="background: rgba(255, 255, 255, 0.2); color: white; border: 1px solid rgba(255, 255, 255, 0.3);"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt me-2"></i>Cerrar Sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>
</div>

<!-- Estilos CSS mejorados para sidebar morado -->
<style>
    /* Fondo del sidebar con gradiente morado */
    .sb-sidenav {
    width: 320px !important;   /* antes 280px */
    background: linear-gradient(180deg, #7f7fd5 0%, #86a8e7 50%, #91eae4 100%));
    }
    
    .sb-sidenav-header {
        border-bottom: 2px solid rgba(255, 255, 255, 0.1);
    }
    
    .sidebar-logo {
        background: rgba(255, 255, 255, 0.15);
        width: 55px;
        height: 55px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(5px);
    }
    
    /* Enlaces mejorados */
    .nav-link {
        color: rgba(255, 255, 255, 0.85);
        border-radius: 10px;
        margin: 3px 10px;
        padding: 14px 18px !important;
        transition: all 0.3s ease;
        font-size: 1.05rem !important;
    }
    
    .nav-link:hover {
        background: rgba(255, 255, 255, 0.15);
        color: white;
        transform: translateX(8px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }
    
    .nav-link.active {
        box-shadow: 0 4px 12px rgba(123, 31, 162, 0.4);
        color: white;
    }
    
    /* Iconos más grandes */
    .sb-nav-link-icon {
        width: 50px !important;
        height: 50px !important;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        font-size: 1.3rem !important;
    }
    
    .nav-link:hover .sb-nav-link-icon {
        transform: scale(1.15) rotate(5deg);
    }
    
    .sb-sidenav-menu-heading {
        padding: 20px 22px 10px 22px !important;
        font-size: 0.95rem !important;
        letter-spacing: 1px;
        margin-top: 10px;
    }
    
    /* Submenús mejorados */
    .sb-sidenav-menu-nested {
        margin-left: 25px;
        padding-left: 15px;
        border-left: 2px solid rgba(156, 39, 176, 0.3);
    }
    
    .sb-sidenav-menu-nested .nav-link {
        padding: 12px 18px !important;
        font-size: 1rem !important;;
        margin: 2px 0;
        background: rgba(255, 255, 255, 0.05);
    }
    
    .sb-sidenav-menu-nested .nav-link:hover {
        background: rgba(255, 255, 255, 0.1);
        transform: translateX(5px);
    }
    
    .sb-sidenav-collapse-arrow {
        transition: transform 0.3s ease;
        color: rgba(255, 255, 255, 0.6);
    }
    
    .nav-link[aria-expanded="true"] .sb-sidenav-collapse-arrow {
        transform: rotate(180deg);
        color: white;
    }
    
    /* Badges mejorados */
    .badge {
        font-size: 0.75rem;
        padding: 4px 10px;
        font-weight: 500;
    }
    
    /* Scrollbar personalizado morado */
    .sb-sidenav-menu::-webkit-scrollbar {
        width: 8px;
    }
    
    .sb-sidenav-menu::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 10px;
    }
    
    .sb-sidenav-menu::-webkit-scrollbar-thumb {
        background: linear-gradient(135deg, #7b1fa2 0%, #9c27b0 100%);
        border-radius: 10px;
    }
    
    .sb-sidenav-menu::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(135deg, #9c27b0 0%, #ab47bc 100%);
    }
    
    /* Footer mejorado */
    .sb-sidenav-footer {
        border-top: 2px solid rgba(255, 255, 255, 0.1);
    }
    
    /* Efecto de brillo en hover */
    .nav-link:hover {
        position: relative;
        z-index: 1;
    }
    
    .nav-link:hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
        z-index: -1;
        animation: shine 2s infinite;
        border-radius: 10px;
    }
    
    @keyframes shine {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
</style>

<!-- Script para mejorar la interacción -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Guardar estado del sidebar
        const sidebarItems = document.querySelectorAll('.nav-link[data-bs-toggle="collapse"]');
        
        sidebarItems.forEach(item => {
            item.addEventListener('show.bs.collapse', function() {
                const target = this.getAttribute('data-bs-target');
                localStorage.setItem('sidebarState', target);
                
                // Animar icono
                const icon = this.querySelector('.sb-nav-link-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.1)';
                    setTimeout(() => {
                        icon.style.transform = '';
                    }, 300);
                }
            });
            
            item.addEventListener('hide.bs.collapse', function() {
                const icon = this.querySelector('.sb-nav-link-icon');
                if (icon) {
                    icon.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        icon.style.transform = '';
                    }, 300);
                }
            });
        });
        
        // Restaurar estado del sidebar
        const savedState = localStorage.getItem('sidebarState');
        if (savedState) {
            const element = document.querySelector(savedState);
            if (element) {
                new bootstrap.Collapse(element, { show: true });
            }
        }
        
        // Efecto hover mejorado
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            });
        });
        
        // Sonido sutil en clic (opcional)
        const clickSound = new Audio('data:audio/wav;base64,UklGRigAAABXQVZFZm10IBIAAAABAAEAQB8AAEAfAAABAAgAZGF0YQ');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                // Solo para enlaces internos que no son dropdowns
                if (this.getAttribute('href') && this.getAttribute('href') !== '#') {
                    try {
                        clickSound.play();
                    } catch (e) {
                        // Ignorar errores de audio
                    }
                }
            });
        });
    });
</script>