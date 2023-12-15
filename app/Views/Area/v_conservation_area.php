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
                        <li class="breadcrumb-item active">Kawasan Konservasi</li>
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

            <div class="row">
                
                <div class="col-sm-5">
                    <div class="card">
                        <div class="card-body">
                            <div id="map" style="width: 100%; height: 900px;"></div>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="card card-default col-sm-7">
                    <!-- Fill Data -->
                    <div class="card-body">
                        <!-- Fill Name Area 1 -->
                        <form class="form-horizontal form-material">
                            <br>
                            <div class="row">
                                <!-- Abbreviation Area Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Abbreviation Area Name</label>
                                        <input class="form-control" name="kk_abb_area">
                                        <p class="text-danger"><?= isset($errors['kk_abb_area']) == isset($errors['kk_abb_area']) ? validation_show_error('kk_abb_area') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End Abbreviation Area Name -->

                                <!-- Name of Area Conservation -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name of Area Conservation</label>
                                        <input class="form-control" name="kk_area_name">
                                        <p class="text-danger"><?= isset($errors['kk_area_name']) == isset($errors['kk_area_name']) ? validation_show_error('kk_area_name') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End Name of Area Conservation -->
                            </div>
                            <!-- /.End Fill Name Area 1 -->

                            <br>
                            <!-- Fill Name Area 2 -->
                            <div class="row">
                                <!-- Number of Species -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Number of Species</label>
                                        <input class="form-control" name="kk_species">
                                        <p class="text-danger"><?= isset($errors['kk_species']) == isset($errors['kk_species']) ? validation_show_error('kk_species') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End Number of Species -->

                                <!-- Area Residents -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Area Residents</label>
                                        <input class="form-control" name="kk_res_area">
                                        <p class="text-danger"><?= isset($errors['kk_res_area']) == isset($errors['kk_res_area']) ? validation_show_error('kk_res_area') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End Area Residents -->
                            </div>
                            <!-- /.End Fill Name Area 2 -->
                        </form>

                        <br>
                        <!-- Address -->
                        <form>
                            <label>Address</label>
                            <textarea class="form-control" name="kk_address" cols="25" rows="5"></textarea>
                        </form>
                        <!-- /.End Address -->

                        <br>
                        <!-- Province and City -->
                        <form>
                            <div class="row">
                                <!-- Province -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Province</label>
                                        <input class="form-control" name="kk_province">
                                        <p class="text-danger"><?= isset($errors['kk_province']) == isset($errors['kk_province']) ? validation_show_error('kk_province') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End Province -->

                                <!-- City -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input class="form-control" name="kk_city">
                                        <p class="text-danger"><?= isset($errors['kk_city']) == isset($errors['kk_city']) ? validation_show_error('kk_city') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End City -->
                            </div>
                        </form>
                        <!-- /.End Province and City -->

                        <br>
                        <!-- District and Code -->
                        <form>
                            <div class="row">
                                <!-- District -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>District</label>
                                        <input class="form-control" name="kk_district">
                                        <p class="text-danger"><?= isset($errors['kk_district']) == isset($errors['kk_district']) ? validation_show_error('kk_district') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End District -->

                                <!-- Code -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Code</label>
                                        <input class="form-control" name="kk_code">
                                        <p class="text-danger"><?= isset($errors['kk_code']) == isset($errors['kk_code']) ? validation_show_error('kk_code') : '' ?></p>
                                    </div>
                                </div>
                                <!-- /.End Code -->
                            </div>
                        </form>
                        <!-- /.End District and Code -->

                        <br>
                        <!-- Latitude and Longitude -->
                        <form>
                            <div class="row">
                                <!-- Latitude -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Latitude</label>
                                        <input class="form-control" name="kk_latitude" id="Latitude">
                                    </div>
                                </div>
                                <!-- /.End Latitude -->

                                <!-- Longitude -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Longitude</label>
                                        <input class="form-control" name="kk_longitude" id="Longitude">
                                    </div>
                                </div>
                                <!-- /.End Longitude -->
                            </div>
                        </form>
                        <!-- /.End Latitude and Longitude -->

                        <br>
                        <!-- Position -->
                        <form>
                            <div class="form-group">
                                <label>Position</label>
                                <input class="form-control" name="kk_posisi" id="Posisi">
                            </div>
                        </form>
                        <!-- /.End Position -->
                    </div>
                    <!-- /.End Fill Data -->
                </div>
                <!-- /.End Form -->
            </div>
            <!-- /.End Maps Row -->

            <!-- Description -->
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title"><b>Description</b></h3>
                </div>
                <!-- Text Area -->
                <div class="card-body">
                    <form>
                        <textarea class="form-control" name="kk_description" cols="25" rows="5"></textarea>
                        <p class="text-danger"><?= isset($errors['kk_description']) == isset($errors['kk_description']) ? validation_show_error('kk_description') : '' ?></p>
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
                <a href="<?= base_url('Flora') ?>"></a>
            </div>
            <!-- /.End Submit Button -->

            <!-- Close Form for Input Data -->
            <?php echo form_close() ?>

            <!-- Maps -->
            <script>
                var peta1 = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                    maxZoom: 12,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                    attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>',
                });
                var peta2 = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
                    maxZoom: 12,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                    attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>',
                });
                var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                });
                var peta4 = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
                    maxZoom: 12,
                    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
                    attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>',
                });
                const map = L.map('map', {
                    center: [-7.799348647388478, 110.37888637720054],
                    zoom: 12,
                    layers: [peta3],
                });
                const baseLayers = {
                    'Hibrida': peta1,
                    'Medan': peta2,
                    'Street': peta3,
                    'Satellite': peta4,
                };
            
                const layerControl = L.control.layers(baseLayers).addTo(map);
                
                var latInput = document.querySelector("[name=kk_latitude]");
                var lngInput = document.querySelector("[name=kk_longitude]");
                var posisi = document.querySelector("[name=kk_posisi]");

                var curLocation = [-7.799348647388478, 110.37888637720054];
                map.attributionControl.setPrefix(false);

                var marker = L.marker(curLocation, {
                    draggable: true,
                }).addTo(map);
            
                marker.on('dragend', function (e) {
                    var position = marker.getLatLng();
                    marker.setLatLng(position);
                    latInput.value = position.lat;
                    lngInput.value = position.lng;
                    posisi.value = position.lat + ',' + position.lng;
                });
            
                map.on('click', function (e) {
                    var lat = e.latlng.lat;
                    var lng = e.latlng.lng;
                    marker.setLatLng(e.latlng);
                    latInput.value = lat;
                    lngInput.value = lng;
                    posisi.value = lat + ',' + lng;
                });
            </script>
            <!-- /.End Maps -->
        </div>
    </section>
    <!-- /.End Main Content -->

<?= $this->endSection(); ?>