    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-user"></i>
            </div>
            <div class="sidebar-brand-text mx-3">D'Latih <sup> Admin </sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php if ($this->uri->segment(1) == "dashboard") : ?> active <?php endif; ?> ">
            <a class="nav-link" href="<?= base_url("dashboard"); ?>">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li
            class="nav-item  <?php if ($this->uri->segment(1) == "pelatih" || $this->uri->segment(1) == "siswa") : ?> active <?php endif; ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-user"></i>
                <span>User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data User:</h6>
                    <a class="collapse-item <?php if ($this->uri->segment(1) == "pelatih") : ?> active <?php endif; ?>"
                        href="<?= base_url("pelatih"); ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Pelatih</span></a>
                    <a class="collapse-item <?php if ($this->uri->segment(1) == "siswa") : ?> active <?php endif; ?>"
                        href="<?= base_url("siswa"); ?>">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Siswa</span></a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item <?php if ($this->uri->segment(1) == "admin") : ?> active <?php endif; ?>">
            <a class="nav-link" href="<?= base_url("admin") ?>">
                <i class="fas fa-fw fa-table"></i>
                <span>Admin</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li
            class="nav-item <?php if ($this->uri->segment(1) == "report" || $this->uri->segment(1) == "feedback" || $this->uri->segment(1) == "event") : ?> active <?php endif; ?>">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Lain-lain</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Laporan :</h6>
                    <a class="collapse-item <?php if ($this->uri->segment(1) == "report") : ?> active <?php endif; ?>"
                        href="<?= base_url("report"); ?>">Report</a>
                    <a class="collapse-item <?php if ($this->uri->segment(1) == "feedback") : ?> active <?php endif; ?>"
                        href="<?= base_url("feedback") ?>">FeedBack</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Activitas:</h6>
                    <a class="collapse-item <?php if ($this->uri->segment(1) == "event") : ?> active <?php endif; ?>"
                        href="404.html">Event Page</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->