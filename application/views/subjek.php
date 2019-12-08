<body class="bodysubjek">
    <div class="content">
        <div class="container">
            <div class="row d-flex">
                <div class="col-xl">
                    <h2 class="text-uppercase"><?php echo $video[$num]->vid_nama ?></h2>
                    <p class="item-intro text-muted"><?php echo $video[$num]->course_name ?></p>
                    <!-- <video width="720" height="400" controls>
                            <source src="<?php echo base_url('assets/video/video1.mp4') ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video> -->
                    <iframe width="720" height="400" src="<?php echo $video[$num]->vid_content ?>">
                    </iframe>
                    <p style="padding-top:15px;"><?php echo $video[$num]->vid_desc ?></p>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Contact -->
    <script src="<?php echo base_url('assets/js/jqBootstrapValidation.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/hubungikami.js') ?>"></script>

    <!-- Custom Script -->
    <script src="<?php echo base_url('assets/js/katapijar.min.js') ?>"></script>
</body>