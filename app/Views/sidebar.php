<!-- LOGO -->
<div class="navbar-brand-box">
    <!-- Dark Logo-->
    <a href="<?= site_url('admin/home') ?>" class="logo logo-dark">
        <span class="logo-sm">
            <img src="<?= base_url('assets/admin/images/logo-sm.png') ?>" alt="" height="22">
        </span>
        <span class="logo-lg">
            <img src="<?= base_url('assets/admin/images/logo-dark.png') ?>" alt="" height="17">
        </span>
    </a>
    <!-- Light Logo-->
    <a href="<?= site_url('admin/home') ?>" class="logo logo-light">
        <span class="logo-sm">
            <img src="<?= base_url('assets/dist/img/logo_desnet2.webp') ?>" alt="" height="35">
        </span>
        <span class="logo-lg">
            <img src="<?= base_url('assets/dist/img/logo_desnet.png') ?>" alt="" height="50">
        </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
        <i class="ri-record-circle-line"></i>
    </button>
</div>

<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
                <a class="nav-link menu-link" href="<?= base_url('dashboard'); ?>">
                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                </a>
            </li> <!-- end Dashboard Menu -->

            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Master Data</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="<?= base_url('pengguna_read'); ?>">
                    <i class="las la-user"></i> <span data-key="t-authentication">Data Pengguna</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#">
                    <i class="las la-users"></i> <span data-key="t-authentication">Data Karyawan</span>
                </a>
            </li>

            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Orders</span></li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="<?= base_url('barang_read'); ?>">
                    <i class="las la-box"></i> <span data-key="t-authentication">Data Barang</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link menu-link" href="#">
                    <i class="las la-envelope"></i> <span data-key="t-authentication">Data Surat</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>