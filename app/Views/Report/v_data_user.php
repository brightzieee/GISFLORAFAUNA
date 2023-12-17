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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Number Phone</th>
                                        <th>Date</th>
                                        <th>Type of Organism</th>
                                        <th>Organism Name</th>
                                        <th>Image of Organism</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <!-- /.End Headline -->

                                <!-- Data -->
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_user as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['rp_name'] ?></td>
                                        <td><?= $value['rp_email'] ?></td>
                                        <td><?= $value['rp_number_phone'] ?></td>
                                        <td><?= $value['rp_type_org'] ?></td>
                                        <td><?= $value['rp_address'] ?></td>
                                        <td><?= $value['rp_image'] ?></td>
                                        <td><?= $value['rp_date'] ?></td>
                                        <td><?= $value['kk_description'] ?></td>
                                    </tr>

                                    <?php } ?>
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