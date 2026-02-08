@extends('template')

@section('title','Panel')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet"/> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    /* Estilos personalizados */
    .bg-purple {
        background-color: #6f42c1 !important;
    }
    .bg-teal {
        background-color: #20c997 !important;
    }
    .bg-indigo {
        background-color: #6610f2 !important;
    }
    .bg-pink {
        background-color: #d63384 !important;
    }
    .icon-container {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
        border: none;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    }
    /* Títulos más grandes */
    .page-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }
    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        margin-bottom: 2rem;
    }
    .card-title {
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    /* Contador más grande */
    .counter-number {
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1;
    }
</style>
@endpush

@section('content')

@if(session('success'))
<script>
    let message = "{{ session('success') }}";
    Swal.fire({
        title: message,
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    })
</script>
@endif

<div class="container-fluid px-4">
    <!-- Título Principal Centrado -->
    <div class="text-center mb-5">
        <h1 class="page-title text-primary mt-4">Panel Principal</h1>
        <p class="lead text-muted mb-0">Sistema Administrativo - Dashboard</p>
    </div>
    
    <div class="row">
        <!-- Clientes -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-primary text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-primary bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-people-group fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Cliente;
                                $clientes = count(Cliente::all());
                                ?>
                                {{$clientes}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Clientes</h5>
                    <p class="card-text fs-5">Gestión de clientes registrados</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-primary bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('clientes.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Categorías -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-info text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-info bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-tags fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Categoria;
                                $categorias = count(Categoria::all());
                                ?>
                                {{$categorias}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Categorías</h5>
                    <p class="card-text fs-5">Categorías de productos</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-info bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('categorias.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Compras -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-success text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-success bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-cart-shopping fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Compra;
                                $compras = count(Compra::all());
                                ?>
                                {{$compras}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Compras</h5>
                    <p class="card-text fs-5">Registro de compras realizadas</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-success bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('compras.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Marcas -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-danger text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-danger bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-bullhorn fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Marca;
                                $marcas = count(Marca::all());
                                ?>
                                {{$marcas}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Marcas</h5>
                    <p class="card-text fs-5">Marcas de productos</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-danger bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('marcas.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Presentaciones -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-warning bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-box-open fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Presentacione;
                                $presentaciones = count(Presentacione::all());
                                ?>
                                {{$presentaciones}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Presentaciones</h5>
                    <p class="card-text fs-5">Tipos de presentación</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-warning bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('presentaciones.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Productos -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-purple text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-purple bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-boxes-stacked fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Producto;
                                $productos = count(Producto::all());
                                ?>
                                {{$productos}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Productos</h5>
                    <p class="card-text fs-5">Inventario de productos</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-purple bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('productos.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Proveedores -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-teal text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-teal bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-truck fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Proveedore;
                                $proveedores = count(Proveedore::all());
                                ?>
                                {{$proveedores}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Proveedores</h5>
                    <p class="card-text fs-5">Proveedores registrados</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-teal bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('proveedores.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Usuarios -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-dark text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-dark bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-users-gear fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\User;
                                $users = count(User::all());
                                ?>
                                {{$users}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Usuarios</h5>
                    <p class="card-text fs-5">Usuarios del sistema</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-dark bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('users.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Venta  -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-success text-white h-100 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="icon-container bg-success bg-opacity-25 p-3 rounded-circle">
                            <i class="fa-solid fa-cart-shopping fa-2x"></i>
                        </div>
                        <div class="text-end">
                            <h3 class="counter-number mb-0">
                                <?php
                                use App\Models\Venta;
                                $ventas = count(Venta::all());
                                ?>
                                {{$ventas}}
                            </h3>
                            <small>Total</small>
                        </div>
                    </div>
                    <h5 class="card-title fs-3">Ventas</h5>
                    <p class="card-text fs-5">Registro de ventas realizadas</p>
                </div>    
                <div class="card-footer d-flex align-items-center justify-content-between bg-success bg-opacity-10 py-3">
                    <span class="fs-5">Ver detalles</span>
                    <a class="small text-white stretched-link" href="{{ route('ventas.index')}}">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

      
    </div>
    
    <!-- Sección de Estadísticas Adicionales -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card border-0 shadow">
                <div class="card-header bg-white py-3">
                    <h4 class="section-title text-primary mb-0">
                        <i class="fas fa-chart-line me-2"></i>Resumen General
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3 col-6 mb-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="counter-number text-primary">{{$clientes ?? 0}}</h3>
                                <p class="mb-0 text-muted">Clientes Activos</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="counter-number text-success">{{$productos ?? 0}}</h3>
                                <p class="mb-0 text-muted">Productos en Stock</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="counter-number text-warning">{{$proveedores ?? 0}}</h3>
                                <p class="mb-0 text-muted">Proveedores</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="counter-number text-info">{{$users ?? 0}}</h3>
                                <p class="mb-0 text-muted">Usuarios</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="p-3 bg-light rounded">
                                <h3 class="counter-number text-info">{{$ventas ?? 0}}</h3>
                                <p class="mb-0 text-muted">Ventas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
</div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables-simple-demo.js') }}"></script>

@endpush