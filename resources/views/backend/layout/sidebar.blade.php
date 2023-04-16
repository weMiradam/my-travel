<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider" style="padding-bottom: 0px !important;margin-bottom: 0px !important;">
    <li class="nav-item">
        <a class="nav-link" href="{{route('adminTravel')}}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Order Travel</span></a>
    </li>
    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>
    <li class="nav-item">
        <a class="nav-link" href="{{route('adminTravel')}}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>List Travel</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('adminTrainer')}}">
            <i class="fas fa-fw fa-list-alt"></i>
            <span>List Trainer</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
