@extends('layouts.app')

@section('content')
    <style>
        /* Incluye los estilos aquí o en tu hoja de estilos */
        body, .container-fluid {
            padding: 0;
            margin: 0;
        }
        #sidebarMenu, .col-md-9.ms-sm-auto.col-lg-10.px-md-4 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        .nav, .navbar {
            margin-bottom: 0 !important;
        }
    </style>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('proyectos.index') }}">
                                <span data-feather="file-text"></span>
                                Proyectos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tareas.index') }}">
                                <span data-feather="check-square"></span>
                                Tareas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reportes.index') }}">
                                <span data-feather="bar-chart-2"></span>
                                Reportes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('usuarios.index') }}">
                                <span data-feather="users"></span>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auditorias.index') }}">
                                <span data-feather="activity"></span>
                                Auditorías
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>


            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">{{ __('Dashboard') }}</h1>
                </div>

                <!-- Dashboard Tiles -->
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <div class="card-title">Proyectos</div>
                                <h1>7</h1>
                                <a href="#" class="stretched-link text-white">Ir al Módulo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-white bg-danger">
                            <div class="card-body">
                                <div class="card-title">Tareas</div>
                                <h1>19</h1>
                                <a href="#" class="stretched-link text-white">Ir al Módulo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-white bg-warning">
                            <div class="card-body">
                                <div class="card-title">Reportes</div>
                                <h1>19</h1>
                                <a href="#" class="stretched-link text-white">Ir al Módulo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <div class="card-title">Auditorias</div>
                                <h1>23</h1>
                                <a href="#" class="stretched-link text-white">Ir al Módulo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="card">
                    <div class="card-header">
                        Lista de Proyectos
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Proyecto</th>
                                <th>Cliente</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Entrega</th>
                                <th>Fecha Pago</th>
                                <th>Monto A Pagar</th>
                                <th>Monto Pendiente</th>
                                <th>Estado</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!-- Sample row -->
                            <tr>
                                <td>1</td>
                                <td>Gestor Proyectos</td>
                                <td>Empornac</td>
                                <td>01/05/2024</td>
                                <td>20/07/2024</td>
                                <td>01/05/2024</td>
                                <td>53,000.00</td>
                                <td>0.00</td>
                                <td><span class="badge bg-danger">pendiente</span></td>
                            </tr>
                            <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection
