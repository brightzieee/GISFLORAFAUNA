<?= $this->extend('template/index') ?>

<?= $this->section('content'); ?>

<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $title_content ?></h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /.End Content Header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">

                <!-- Contact -->
                <div class="card card-solid">
                        <div class="card-body pb-0">
                            <div class="row">
                                <!-- Profile Card 1 -->
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">Content Creator</div>
                                        <!-- Profil Column -->
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <!-- Name -->
                                                    <h2 class="lead">
                                                        <b>Albert Gideon</b>
                                                    </h2>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="<?= base_url() ?>/assets/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End Profile Column -->
                                        
                                        <!-- Profile Footer -->
                                        <div class="card-footer">
                                            <div class="text-left">
                                                <a href="#" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-user"></i> View Profile
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.End Profile Footer -->
                                    </div>
                                </div>
                                <!-- /.End Profile Card 1 -->
                                
                                <!-- Profile Card 2 -->
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <div class="card-header text-muted border-bottom-0">Social Media Specialist</div>
                                        <!-- Profile Column -->
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <!-- Profile Name -->
                                                    <h2 class="lead">
                                                        <b>Stephanie Chou</b>
                                                    </h2>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="<?= base_url() ?>/assets/dist/img/user4-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End Profile Column -->
                                        
                                        <!-- Profile Footer -->
                                        <div class="card-footer">
                                            <div class="text-left">
                                                <a href="#" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-user"></i> View Profile
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.End Profile Footer -->
                                    </div>
                                </div>
                                <!-- /.End Profile Card 2 -->
                                
                                <!-- Profile Card 3 -->
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                    <div class="card bg-light d-flex flex-fill">
                                        <!-- Profile Column -->
                                        <div class="card-header text-muted border-bottom-0">Web/Mobile Development</div>
                                        <div class="card-body pt-0">
                                            <div class="row">
                                                <div class="col-7">
                                                    <!-- Profile Name -->
                                                    <h2 class="lead">
                                                        <b>Nicole Pearson</b>
                                                    </h2>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="<?= base_url() ?>/assets/dist/img/user3-128x128.jpg" alt="user-avatar" class="img-circle img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.End Profile Column -->
                                        
                                        <!-- Profile Footer -->
                                        <div class="card-footer">
                                            <div class="text-left">
                                                <a href="#" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-user"></i> View Profile
                                                </a>
                                            </div>
                                        </div>
                                        <!-- /.End Profile Footer -->
                                    </div>
                                </div>
                                <!-- /.End Profile Card 3 -->
                            </div>
                        </div>
                    </div>
                    <!-- /.End Contact -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.End Main Content -->

<?= $this->endSection(); ?>