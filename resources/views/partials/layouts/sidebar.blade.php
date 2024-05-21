<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="./assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Laporan</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="./assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="dashboard" class="nav-link {{ request()->path() == '/dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>

            </li>
            <li class="nav-item">
                <a href="userview" class="nav-link {{ request()->path() == '/userview' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Kelola User
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="kategoriview" class="nav-link {{ request()->path() == '/kategori' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>
                        Kategori
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="laporanview" class="nav-link {{ request()->path() == '/laporanview' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                        Laporan Anggota
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                        <i class="right fas fa-angle-right"></i>
                    </p>
                </a>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
