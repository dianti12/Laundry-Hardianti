<?php
$navbarID = $_SESSION['id'];
$queryNavbar = mysqli_query($config, "SELECT * FROM user WHERE id = '$navbarID'");
$dataNavbar = mysqli_fetch_assoc($queryNavbar);
?>


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

    <!-- Start Menu Admin -->
    <?php if ($dataNavbar['id_level'] == 1) : ?>
        <li class="nav-item active <?= !isset($_GET['page']) || ($_GET['page'] == 'dashboard') ? 'active' : '' ?>">
            <a class="nav-link" href="?page=dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Admin</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Master Data:</h6>
                    <a class="collapse-item <?= (isset($_GET['page']) && ($_GET['page'] == 'user' || $_GET['page'] == 'add-user')) ? 'active' : '' ?>" href="?page=user">User</a>
                    <a class="collapse-item <?= (isset($_GET['page']) && ($_GET['page'] == 'level' || $_GET['page'] == 'add-level')) ? 'active' : '' ?>" href="?page=level">Level</a>
                    <a class="collapse-item" <?= (isset($_GET['page']) && ($_GET['page'] == 'customer' || $_GET['page'] == 'add-customer')) ? 'active' : '' ?> href="?page=customer">Customer</a>
                    <a class="collapse-item" <?= (isset($_GET['page']) && ($_GET['page'] == 'service' || $_GET['page'] == 'add-service')) ? 'active' : '' ?> href="?page=service">Service</a>
        </li>
        <hr class="sidebar-divider my-0">
    <?php elseif ($dataNavbar['id_level'] == 2) : ?>
        <li class="nav-item active <?= !isset($_GET['page']) || ($_GET['page'] == 'dashboard') ? 'active' : '' ?>">
            <a class="nav-link" href="?page=dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Operator</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Master Data:</h6>
                    <a class="collapse-item <?= (isset($_GET['page']) && ($_GET['page'] == 'order' || $_GET['page'] == 'add-order')) ? 'active' : '' ?>" href="?page=order">Order</a>
                    <a class="collapse-item <?= (isset($_GET['page']) && ($_GET['page'] == 'pickup' || $_GET['page'] == 'add-pickup')) ? 'active' : '' ?>" href="?page=pickup">Pickup</a>
                </div>
            </div>
        </li>

        <hr class="sidebar-divider my-0">
    <?php elseif ($dataNavbar['id_level'] == 3) : ?>
        <li class="nav-item active <?= !isset($_GET['page']) || ($_GET['page'] == 'dashboard') ? 'active' : '' ?>">
            <a class="nav-link" href="?page=dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
            <hr class="sidebar-divider">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pimpinan</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Master Data:</h6>
                    <a class="collapse-item <?= (isset($_GET['page']) && ($_GET['page'] == 'report' || $_GET['page'] == 'add-report')) ? 'active' : '' ?>" href="?page=report">Report</a>
                </div>
            </div>
        </li>
    <?php endif ?>

</ul>