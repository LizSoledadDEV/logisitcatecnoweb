<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('template/dist/img/logo.jpg') }}" alt="Logo Image" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">DELGAS S.R.L</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('template/dist/img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Bienvenido {{-- {{ Auth::user()->name }} --}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Dashboards</p>
                    </a>
                </li>

                @if (auth()->user()->tipo == 'administrador')
                    <li class="nav-item">
                        <a href="{{ route('clientes.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>Clientes</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cisternas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-truck"></i>
                            <p>Cisternas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('gastos.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-money-bill"></i>
                            <p>Gastos</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cargas.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Cargas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('usuarios.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reportes.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-download"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('reportes.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-download"></i>
                            <p>Reportes</p>
                        </a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
