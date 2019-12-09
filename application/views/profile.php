<body class="bodyprofile">
    <div class="container main-secction">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 image-section">
                <img style="background-image: url('<?php echo base_url('assets/img/earth.png') ?>')">
            </div>
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center">
                            <img src="<?php echo base_url('assets/img/portfolio/arti.jpg') ?>" style="border-radius: 50px">
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                            <button style="cursor: pointer;" class="btn btn-default follow "><i class="fa fa-user-o" aria-hidden="true"></i> FOLLOW</button>
                        </div>
                        <div class="row user-detail-row">
                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                <div class="border"></div>
                                <p><?php echo $profil->email?></p>
                            </div>
                            <div class="col-md-12 col-sm-12 user-detail-section2 pull-left">
                                <div class="border"></div>
                                <p><?php echo $profil->date_joined?></p>
                                <!-- Tanggal Join -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                    <h1><?php echo $this->session->userdata('username') ?></h1>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-11 profile-tag-section text-center">
                                    <?php if ($course != null) :
                                     foreach ($course as $row) { ?>
                                        <div class="cardprofile w-100">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $row->course_name ?></h5>
                                                <p class="card-text"><?php echo $row->course_desc ?></p>
                                                <a href="<?php echo site_url('home/subjek/' . $row->course_id . '/0') ?>" class="btn btn-primary">Pelajari</a>
                                            </div>
                                        </div><br>
                                    <?php } 
                                    else :
                                    ?>
                                    <p>anda belum punya course</p>
                                    <?php endif ?>
                                </div>
                                <!-- <div class="col-md-4 img-main-rightPart">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row image-right-part">
                                                <div class="col-md-6 pull-left image-right-detail">
                                                    <p>LIST OF FRIENDS</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="col-md-12 image-right">
                                            <img src="img/team/adam.jpg">
                                        </div>
                                        <div class="col-md-12 image-right-detail-section2">
                                            <p>Nama Teman 1</p><br>
                                        </div>
                                         <div  class="col-md-12 image-right">
                                            <img src="img/team/ahmad.jpg">
                                        </div>
                                        <div class="col-md-12 image-right-detail-section2">
                                            <p>Nama Teman 2</p><br>
                                        </div>
                                         <div  class="col-md-12 image-right">
                                            <img src="img/team/shadieq.jpg">
                                        </div>
                                        <div class="col-md-12 image-right-detail-section2">
                                            <p>Nama Teman 3</p><br>
                                        </div>
                                         <div  class="col-md-12 image-right">
                                            <img src="img/team/rayhan.jpg">
                                        </div>
                                        <div class="col-md-12 image-right-detail-section2">
                                            <p>Nama Teman 4</p><br>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/js/katapijar.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/profile.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/katapijar.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>