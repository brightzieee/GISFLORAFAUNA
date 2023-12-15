<?= $this->extend('template/index') ?>

<?= $this->section('content'); ?>

<!-- Content Header -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $title_content ?></h1>
            </div>
        </div>
    </div>
</div>
<!-- /.End Content Header -->

<!-- Main Content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">

            <!-- Cards Content -->
            <!-- Gallery of Flora -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>
                        <p>Gallery of Flora</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-images"></i>
                    </div>
                    <a href="<?= base_url('Flora/galleryFlora') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /.End Gallery of Flora -->
                    
            <!-- Gallery of Fauna -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Gallery of Fauna</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-images"></i>
                    </div>
                    <a href="<?= base_url('Fauna/galleryFauna') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /.End Gallery of Fauna -->

            <!-- Conservation Area -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Conservation Area Data</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-map"></i>
                    </div>
                    <a href="<?= base_url('Conservation_Area/dataArea') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /.End Conservation Area -->

            <!-- User Reporting -->
            <div class="col-lg-3 col-6">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>
                        <p>User Reporting Table</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-android-chat"></i>
                    </div>
                    <a href="<?= base_url('User_Reporting/dataUser') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- /.End User Reporting -->
            <!-- /.End Cards Content -->

            <!-- Maps Content -->
            <div class="col-lg-12">
                <div id="map" style="width: 100%; height: 380px;"></div>
                <div name="posisi" id="Posisi"></div>

                <!-- Base Maps Layer -->
                <script>
                    //** Base Layer Hibrida */
                    var peta1 = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',
                    {
                        maxZoom: 15,
                        subdomains:['mt0','mt1','mt2','mt3'],
                        attribution: 'Map data & copy; <a href="https://www.google.com/maps">Google Maps</a>'
                    });
                    //** Base Layer Medan */
                    var peta2 = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',
                    {
                        maxZoom: 15,
                        subdomains:['mt0','mt1','mt2','mt3'],
                        attribution: 'Map data & copy; <a href="https://www.google.com/maps">Google Maps</a>'
                    });
                    //** Base Layer Street */
                    var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                    });
                    //** Base Layer Satellite */        
                    var peta4 = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',
                    {
                        maxZoom: 15,
                        subdomains:['mt0','mt1','mt2','mt3'],
                        attribution: 'Map data & copy; <a href="https://www.google.com/maps">Google Maps</a>'
                    });
                        
                    const baseLayers = {
                    'Hibrida': peta1,
                    'Medan': peta2,
                    'Street': peta3,
                    'Satellite': peta4
                    };
                        
                    //** Geolocation */
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(showPosition);
                        } else {
                        alert('Geolocation Tidak Support Pada Browser Yang Anda Gunakan!')
                    }

                    function showPosition(position) {
                        document.getElementById("Posisi").value = position.coords.latitude + "," + position.coords.longitude;
                    
                        //** Show Position to Maps */
                        const map = L.map('map', {
	                        center: [position.coords.latitude, position.coords.longitude],
	                        zoom: 15,
	                        layers: [peta1]
                        });
                    
                        //** Icon Base Layer */
                        const layerControl = L.control.layers(baseLayers)
                        .addTo(map);
                        
                        //** User Mark */
                        L.marker([position.coords.latitude, position.coords.longitude])
                        .addTo(map)
                        .bindPopup("Your Position")
                        .openPopup();
                    }
                </script>
                <!-- /.End Base Maps Layer -->
            </div>
            <!-- /.End Maps Content -->
        </div>
    </div>
</section>
<!-- /.End Main Content -->

<?= $this->endSection(); ?>