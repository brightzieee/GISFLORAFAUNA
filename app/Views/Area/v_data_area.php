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
                        <li class="breadcrumb-item active">Data User</li>
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

                <!-- Data Tables -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Table -->
                            <table id="example1" class="table table-bordered table-striped">
                                <!-- Headline -->
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Area Name</th>
                                        <th>Species</th>
                                        <th>Area Residents</th>
                                        <th>Address</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <!-- /.End Headline -->

                                <!-- Data -->
                                <tbody>
                                    //<?php $no = 1;
                                    //foreach ($datar as $keu -> $value) { ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['kk_name_area'] ?></td>
                                        <td><?= $value['kk_species'] ?></td>
                                        <td><?= $value['kk_res_area'] ?></td>
                                        <td><?= $value['kk_address'] ?></td>
                                        <td><?= $value['kk_image'] ?></td>
                                        <td><?= $value['kk_description'] ?></td>
                                    </tr>

                                    //<?php } ?>
                                </tbody>
                                <!-- /.End Data -->
                            </table>
                            <!-- /.End Table -->
                        </div>
                    </div>
                </div>
                <!-- /.End Data Tables -->
            </div>
        </div>
    </section>
    <!-- /.End Main Content -->

<?= $this->endSection(); ?>