<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left Navbar -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url() ?>" class="nav-link">Home</a>
        </li>
        
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?= base_url('Home/contact') ?>" class="nav-link">Contact</a>
        </li>
    </ul>
    <!-- /.End Left Navbar -->

    <!-- Right Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('Auth/logout') ?>">
                Logout
                <i class="fa fa-arrow-circle-right"></i>
            </a>
        </li>
    </ul>
    <!-- /.End Right Navbar -->
</nav>