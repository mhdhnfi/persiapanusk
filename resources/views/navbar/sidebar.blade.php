<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
        <div class="sidebar-brand-text mx-2">Perpus<sup>40</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        Menu
    </div>



    <!-- Nav Item - Buku -->
    <li class="nav-item {{ Request::is('buku*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/buku') }}">
            <i class="fas fa-fw fa-book"></i>
            <span>Buku</span></a>
    </li>

    <!-- Nav Item - Pinjam Collapse Menu -->

    <li class="nav-item {{ Request::is('peminjaman*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="{{ url('/peminjaman') }}" data-toggle="" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-hands-helping"></i>
            <span>Pinjam Buku</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
