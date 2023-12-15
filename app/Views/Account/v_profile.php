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
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Content Header -->

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Start Page Content -->
            <div class="row">
                <!-- Profile Tab -->
                <div class="col-lg-4 col-xlg-3 col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <br>
                            <div class="text-center">
                                <img src="<?= base_url() ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" width="150">
                            </div>
                            <br>
                            <h3 class="text-center"><b>Alwan TD</b></h3>
                            <h6 class="text-center">Admin</h6>
                        </div>
                        <div>
                            <hr>
                        </div>
                        <div class="card-body">
                            <medium class="text-muted">Email</medium>
                            <h6>alwantd@gmail.com</h6>
                            <medium class="text-muted p-t-30 db">Phone</medium>
                            <h6>+62 8953 2236 3009</h6>
                            <medium class="text-muted p-t-30 db">Address</medium>
                            <h6>Sleman, Daerah Istimewa Yogyakarta</h6>
                            <div class="map-box">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
                <!-- /.End Profile Tab -->

                <!-- Detail Profile Tab -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <!-- Nav Tab -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a></li>
                        </ul>

                        <div class="tab-content">
                            <!--First Tab-->
                            <div class="tab-pane active" id="profile" role="tabpanel">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-xs-6"> <strong>Full Name</strong>
                                            <br>
                                            <p class="text-muted">Alwan Titis Darmawan</p>
                                        </div>
                                        <div class="col-md-4 col-xs-6"> <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">alwantd@admin.com</p>
                                        </div>
                                        <div class="col-md-4 col-xs-6"> <strong>Phone</strong>
                                            <br>
                                            <p class="text-muted">(+62) 8953 2236 009</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                            <!-- /.End First Tab -->

                            <!-- Second Tab -->
                            <div class="tab-pane" id="settings" role="tabpanel">
                                <div class="card-body">
                                    <form class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-12">Full Name</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="Alwan Titis Darmawan" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-email" class="col-md-12">Email</label>
                                            <div class="col-md-12">
                                                <input type="email" placeholder="alwantd@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Password</label>
                                            <div class="col-md-12">
                                                <input type="password" value="password" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Phone</label>
                                            <div class="col-md-12">
                                                <input type="text" placeholder="+62 8953 2236 009" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button class="btn btn-success">Update Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.End Second Tab -->
                        </div>
                    </div>
                </div>
                <!-- /.End Detail Profile Tab -->
            </div>
            <!-- End Page Content -->
        </div>
    </section>
    <!-- /.End Main Content -->

<?= $this->endSection(); ?>