<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <button class="btn sidebar-brand d-flex align-items-center justify-content-center mb-3">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-plane-departure"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Asgaf Tour<sup></sup></div>
    </button>

    <!-- Divider -->
    <hr class="sidebar-divider my-0 mb-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <button class="btn bg-primary nav-link" onclick="location.href='<?= base_url('admin/dashboard'); ?>'">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span>
        </button>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <div class="nav-item">
        <button class="btn bg-primary nav-link collapsed" type="button" data-target="#collapseOne" data-toggle="collapse" aria-controls="collapseOne" aria-expanded="true">
            <i class="fas fa-fw fa-globe-asia"></i>
            <span>Negara</span>
        </button>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Option:</h6>
                <button class="btn btn-sm collapse-item" type="button" onclick="location.href='<?= base_url('admin/listnegara'); ?>'">List Negara</button>
                <button class="btn btn-sm collapse-item" type="button" onclick="location.href='<?= base_url('admin/tambahnegara'); ?>'">Tambah Negara</button>
            </div>
        </div>
    </div>

    <!-- Nav Item - Paket -->
    <li class="nav-item">
        <button class="btn bg-primary nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-suitcase"></i>
            <span>Paket</span>
        </button>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Option:</h6>
                <button class="btn btn-sm collapse-item" type="button" href="<?= base_url('admin/paket'); ?>">List Paket</button>
                <button class="btn btn-sm collapse-item" type="button" href="<?= base_url('admin/tambahpaket'); ?>">Tambah Paket</button>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pegawai -->
    <li class="nav-item">
        <button class="btn btn-primary nav-link" onclick="location.href='<?= base_url('admin/pegawai'); ?>'">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pegawai</span>
        </button>
    </li>





    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->