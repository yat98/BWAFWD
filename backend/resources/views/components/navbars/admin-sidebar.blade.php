<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-text mx-3">Nomads Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Travel Packages -->
    <li class="nav-item {{ request()->routeIs('admin.travel-package.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.travel-package.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Travel Packages</span></a>
    </li>

    <!-- Nav Item - Gallery Travels -->
    <li class="nav-item {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Gallery Travels</span></a>
    </li>

    <!-- Nav Item - Transactions -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Transactions</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>