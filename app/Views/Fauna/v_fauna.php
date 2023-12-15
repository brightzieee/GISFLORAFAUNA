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

            <!-- Form -->
            <div class="card card-default">
                <!-- Fill Data -->
                <div class="card-body">
                    <form   form class="form-horizontal form-material">
                        <!-- Fauna Name -->
                        <div class="form-group">
                            <label>Fauna Name</label>
                            <input class="form-control" name="or_name_org">
                            <p class="text-danger"><?= isset($errors['or_name_org']) == isset($errors['or_name_org']) ? validation_show_error('or_name_org') : '' ?></p>
                        </div>
                        <!-- /.End Fauna Name -->

                        <br>
                        <div class="row">
                            <!-- Latin Name of Fauna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Latin Name of Fauna</label>
                                    <input class="form-control" name="or_name_latin">
                                    <p class="text-danger"><?= isset($errors['or_name_latin']) == isset($errors['or_name_latin']) ? validation_show_error('or_name_latin') : '' ?></p>
                                </div>
                            </div>
                            <!-- /.End Latin Name of fauna -->

                            <!-- Types of Fauna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Types of Fauna</label>
                                    <input class="form-control" name="or_type">
                                    <p class="text-danger"><?= isset($errors['or_type']) == isset($errors['or_type']) ? validation_show_error('or_type') : '' ?></p>
                                </div>
                            </div>
                            <!-- /.End Types of Fauna -->
                        </div>

                        <br>
                        <!-- Amount and Class -->
                        <div class="row">
                            <!-- Number of Fauna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Number of Fauna</label>
                                    <input class="form-control" name="or_amount">
                                    <p class="text-danger"><?= isset($errors['or_amount']) == isset($errors['or_amount']) ? validation_show_error('or_amount') : '' ?></p>
                                </div>
                            </div>
                            <!-- /.End Number of Fauna-->

                            <!-- Class of Fauna -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Class of Fauna</label>
                                    <input class="form-control" name="or_class">
                                    <p class="text-danger"><?= isset($errors['or_class']) == isset($errors['or_class']) ? validation_show_error('or_class') : '' ?></p>
                                </div>
                            </div>
                            <!-- /.End Class of Fauna -->
                        </div>
                        <!-- /.End Amount and Class -->
                    </form>

                    <br>
                    <!-- InEk Area -->
                    <div class="row">
                        <!-- Insitu Area -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>INSITU Area</label>
                                <select class="select2bs4" name="or_insitu" multiple="multiple" data-placeholder="Select area" style="width: 100%;">
                                    <option>Cagar Alam Batu Gamping</option>
                                    <option>Cagar Alam Imogiri</option>
                                    <option>Cagar Biosfer Merapi Menoreh Merbabu</option>
                                    <option>Suaka Margastwa Paliyan</option>
                                    <option>Suaka Margasatwa Sermo</option>
                                    <option>Taman Wisata Alam Batu Gamping</option>
                                </select>
                                <p class="text-danger"><?= isset($errors['or_insitu']) == isset($errors['or_insitu']) ? validation_show_error('or_insitu') : '' ?></p>
                            </div>
                        </div>
                        <!-- /.End Insitu Area -->

                        <!-- Eksitu Area -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>EKSITU Area</label>
                                <select class="select2bs4" name="or_eksitu" multiple="multiple" data-placeholder="Select area" style="width: 100%;">
                                    <option>Gembira Loka Zoo</option>
                                    <option>Habitat Burung Migran Trisik Kab. Kulon Progo</option>
                                    <option>Kawasan Mangrove Baros</option>
                                    <option>Kawasan Mangrove Jangkaran</option>
                                    <option>Konservasi Penyu Pesisir Pantai Selatan</option>
                                    <option>Stasiun fauna dan Fauna Bunder</option>
                                    <option>Wildlife Rescue Center (YKAY)</option>
                                </select>
                                <p class="text-danger"><?= isset($errors['or_eksitu']) == isset($errors['or_eksitu']) ? validation_show_error('or_eksitu') : '' ?></p>
                            </div>
                        </div>
                        <!-- /.End Eksitu Area -->
                    </div>
                    <!-- /.End InEk Area -->
                </div>
                <!-- /.End Fill Data -->
            </div>
            <!-- /.End Form -->

            <!-- Description -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title"><b>Description</b></h3>
                </div>
                <!-- Text Area -->
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" name="or_description" cols="25" rows="5"></textarea>
                            <p class="text-danger"><?= isset($errors['or_description']) == isset($errors['or_description']) ? validation_show_error('or_description') : '' ?></p>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.End Description -->
            
            <!-- Upload File -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title"><b>Image Upload</b></h3>
                        </div>
                        <div class="card-body">
                            <div id="actions" class="row">
                                <!-- Add File -->
                                <div class="col-lg-6">
                                    <div class="btn-group w-100">
                                        <span class="btn btn-success col fileinput-button">
                                            <i class="fas fa-plus"></i>
                                            <span>Add files</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- File Upload Process -->
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div class="fileupload-process w-100">
                                        <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Process Preview -->
                            <div class="table table-striped files" id="previews">
                                <div id="template" class="row mt-2">
                                    <div class="col-auto">
                                        <span class="preview"><img src="data:," alt data-dz-thumbnail/></span>
                                    </div>
                                    <!-- Error -->
                                    <div class="col d-flex align-items-center">
                                        <p class="mb-0">
                                        <span class="lead" data-dz-name></span>
                                        (<span data-dz-size></span>)
                                        </p>
                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                    </div>
                                    <!-- Success -->
                                    <div class="col-4 d-flex align-items-center">
                                        <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                        </div>
                                    </div>

                                    <!-- Upload Command -->
                                    <div class="col-auto d-flex align-items-center">
                                        <div class="btn-group">
                                            <!-- Start -->
                                            <button class="btn btn-primary start">
                                                <i class="fas fa-upload"></i>
                                                <span>Start</span>
                                            </button>
                                            <!-- Cancel -->
                                            <button data-dz-remove class="btn btn-warning cancel">
                                                <i class="fas fa-times-circle"></i>
                                                <span>Cancel</span>
                                            </button>
                                            <!-- Delete -->
                                            <button data-dz-remove class="btn btn-danger delete">
                                                <i class="fas fa-trash"></i>
                                                <span>Delete</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.End Upload Command -->
                                </div>
                            </div>
                            <!-- /.End Preview Process -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.End Upload File -->

            <!-- Submit Button -->
            <div class="mb-3">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <a href="<?= base_url('Fauna') ?>"></a>
            </div>
            <!-- /.End Submit Button -->

            <!-- Close Form for Input Data -->
            <?php echo form_close() ?>
        </div>
    </section>
    <!-- /.End Main Content -->

<?= $this->endSection(); ?>