<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #005B41;">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
        <span class="brand-text font-weight-light">GIS Flora and Fauna</span>
    </a>
    <!-- /.End Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar User Panel-->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image my-auto">
                <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= base_url('Account') ?>" class="d-block">AlwanTD</a>
                <small class="d-block text-muted">Admin</i></small>
            </div>
        </div>
        <!-- /.End Sidebar User Panel -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                <li class="nav-item">
                    <a href="<?= base_url('Home') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                        Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('Flora') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                        FLORA
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('Fauna') ?>" class="nav-link">
                        <i class="nav-icon fas fa-crow"></i>
                        <p>
                        FAUNA
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('Conservation_Area') ?>" class="nav-link">
                        <i class="nav-icon fas fa-torii-gate"></i>
                        <p>
                        CONSERVATION AREA
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('User_Reporting') ?>" class="nav-link">
                        <i class="nav-icon fas fa-scroll"></i>
                        <p>
                        USER REPORTING INBOX
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url('Home/Contact') ?>" class="nav-link">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>
                        CONTACT US
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.End Sidebar Menu -->
    </div>
    <!-- /.End Sidebar -->
</aside>