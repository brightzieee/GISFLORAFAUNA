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
                        <li class="breadcrumb-item active">Fauna</li>
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
            
                <!-- Data Validation -->
                <?php
                session();
                $validation = \Config\Services::validation();
                ?>

                <!-- Open Form for Input Data -->
                <?php echo form_open('Flora/insertData') ?>

                <!-- Success Notification -->
                <?php
                if (session()->getFlashData('insert'))
                {
                    echo '<div class="alert alert-success">';
                        echo session()->getFlashData('insert');
                        echo '</div>';
                }
                ?>

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
                                        <th>Name of Fauna</th>
                                        <th>Latin Name of Fauna</th>
                                        <th>Type of Fauna</th>
                                        <th>Number of Fauna</th>
                                        <th>Class of Fauna</th>
                                        <th>Area of Fauna</th>
                                        <th>Image of Flora</th>
                                        <th>Description of Flora</th>
                                    </tr>
                                </thead>
                                <!-- /.End Headline -->

                                <!-- Data -->
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_fauna as $key => $value) { ?>

                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value['or_name_org'] ?></td>
                                        <td><?= $value['or_name_latin'] ?></td>
                                        <td><?= $value['or_type'] ?></td>
                                        <td><?= $value['or_amount'] ?></td>
                                        <td><?= $value['or_class'] ?></td>
                                        <td><?= $value['or_insitu'] ?></td>
                                        <td><?= $value['or_eksitu'] ?></td>
                                        <td><?= $value['or_description'] ?></td>
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

                <!-- Close Form for Input Data -->
                <?php echo form_close() ?>
            </div>
        </div>
    </section>
    <!-- /.End Main Content -->

<?= $this->endSection(); ?>