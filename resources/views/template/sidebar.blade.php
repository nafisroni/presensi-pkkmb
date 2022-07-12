<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="container">
        <div class="row mt-4">
            <div class="col text-center">
                <span class="fw-bold fs-5 text-white">PKKMB FMIPA UNNES</span>
            </div>
        </div>
        <br>
        <div class="user-panel pb-3 mb-3 d-flex">
            <div class="info">
                <p class="text-white text-uppercase">{{ auth()->user()->name}}</p>
            </div>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                @if (auth()->user()->level=="mahasiswa")
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>
                            PRESENSI
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-user"></i>
                                <p>Presensi Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-user"></i>
                                <p>Presensi Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            LAPORAN
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (auth()->user()->level=="mahasiswa")
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Presensi Mahasiswa</p>
                            </a>
                        </li>
                        @endif
                        @if (auth()->user()->level=="admin")
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Presensi Keseluruhan</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link ">
                        <i class="nav-icon fas fa-arrow-right"></i>
                        <p>
                            LOGOUT
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>