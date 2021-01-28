        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori') ?>">Kategori</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/objek_wisata') ?>">Objek Wisata</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/galeri') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Galeri</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('admin/komentar') ?>">
                        <i class="fas fa-comments"></i>
                        <span>Komentar</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/balas_komentar') ?>">
                            <i class="fas fa-comments"></i>
                            <span>Komentar Balasan</span></a>
                        </li>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

                    </ul>
        <!-- End of Sidebar -->