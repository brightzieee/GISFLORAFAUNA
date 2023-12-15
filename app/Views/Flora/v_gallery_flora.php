<?= $this->extend('template/index') ?>

<?= $this->section('content'); ?>

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $title_content ?></h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">Flora</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Content Header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card-tools text-right">
                        <a href="<?= base_url('Flora') ?>" class="btn btn-flat btn-primary btn-xm">
                            <i class="fas fa-plus"></i>Add Data
                        </a>
                    </div>
                    
                    <br>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title">Flora at Daerah Istimewa Yogyakarta</h4>
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame1.png?text=1" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame1.png?text=1" class="img-fluid mb-2" alt="white sample">
                                    </a>
                                </div>

                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame2.png?text=2" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame2.png?text=2" class="img-fluid mb-2" alt="black sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame3.png?text=3" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame3.png?text=3" class="img-fluid mb-2" alt="red sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame4.png?text=4" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame4.png?text=4" class="img-fluid mb-2" alt="red sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame5.png?text=5" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame5.png?text=5" class="img-fluid mb-2" alt="black sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame6.png?text=6" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame6.png?text=6" class="img-fluid mb-2" alt="white sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame7.png?text=7" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame7.png?text=7" class="img-fluid mb-2" alt="white sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame8.png?text=8" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame8.png?text=8" class="img-fluid mb-2" alt="black sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame9.png?text=9" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame9.png?text=9" class="img-fluid mb-2" alt="red sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame10.png?text=10" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame10.png?text=10" class="img-fluid mb-2" alt="white sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame11.png?text=11" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame11.png?text=11" class="img-fluid mb-2" alt="white sample">
                                    </a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?= base_url() ?>/assets/dist/img/flora/frame12.png?text=12" data-toggle="lightbox" data-title="Sample" data-gallery="gallery">
                                        <img src="<?= base_url() ?>/assets/dist/img/flora/frame12.png?text=12" class="img-fluid mb-2" alt="black sample">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Main Content -->

<?= $this->endSection(); ?>