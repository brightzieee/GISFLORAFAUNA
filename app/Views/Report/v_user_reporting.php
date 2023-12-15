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
                        <li class="breadcrumb-item active">User Reporting</li>
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
            
                <!-- Folders Content -->
                
                <!-- /.End Inbox Content -->
            </div>
        </div>
    </section>
    <!-- /.End Main Content -->

<?= $this->endSection(); ?>