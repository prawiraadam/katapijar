<body>
    <div class="container mt-2">
        <div class="row">
            <?php if ($course != null) : ?>
                <?php foreach ($course as $row) {
                        $owned = false;
                        foreach ($owns as $own) {
                            if ($own->course_id == $row->course_id) $owned = true;
                        }
                        ?>
                    <div class="col-md-3 col-sm-6 text-center">

                        <div class="card card-block" style = "width:100%;height 100%;">
                            <img class="imgcourse" src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                            <h5 class="card-title mt-3 mb-3 text-center" style = "width:100%;height:30px;"><?php echo $row->course_name ?></h5>
                            <p class="card-text scroll text-left"><?php echo $row->course_desc ?></p><br>
                            <a <?php if ($owned) : ?>href="<?php echo site_url('home/subjek/' . $row->course_id . '/0') ?>" <?php else : ?> data-toggle="modal" data-target="#<?php echo $row->course_id ?>" <?php endif; ?>>
                                <p class="btn btn-primary text-center"><?php if ($owned) : ?>Pelajari<?php else : ?>Beli<?php endif; ?></p>
                                <!-- Tinggal tambah href dll -->
                            </a>
                        </div>
                        <!-- </a> -->
                    </div>
                    <div class="modal fade" id="<?php echo $row->course_id ?>" tabindex="-1" role="dialog" aria-labelledby="modalCenterMain" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 30%;">
                            <div class="modal-content">

                                <div class="modal-body text-center">
                                    <div class="text-center">
                                        <img class="img-thumbnail mx-auto d-block" src="<?php echo base_url('assets/img/portfolio/biologi2.jpg') ?>" style="width: 400px;">
                                        <p class="text-center"><?php echo $row->course_desc ?></p>
                                    </div>
                                    <p class="text-sm text-center" style="margin-top: 10px;margin-bottom: 5px;">This course includes</p>
                                    <!-- <div class = "col"> -->
                                    <ul class="list-group-item text-left text-sm" style="list-style-type:square;">
                                        <!-- <li>22.5 Hours on demand video</li> -->
                                        <!-- <li>10 subject articles</li> -->
                                        <!-- <li>Downloadables resources</li> -->
                                        <!-- <li>Full-time access</li>  -->
                                        <li>Access on mobile and website</li>
                                        <li>Certificate upon completion</li>
                                    </ul>
                                    <h4 class="text-secondary" style="margin-bottom:10px;margin-top:15px;">Rp <?php echo number_format($row->course_price, 2) ?></h4>
                                    <a href="<?php if ($this->session->userdata('user_id') != null) echo site_url('payment/payment/' . $row->course_id);
                                                        else echo site_url('home/signIn') ?>"><button type="button" class="btn btn-primary" style = "cursor:pointer;">Beli Sekarang</button></a>
                                    <p class="text-secondary" style="font-size: 12px;margin: 5px;">30 Day Money-Back Guarantee</p>

                                </div>

                            </div>
                        </div>
                    </div>

            <?php }
            endif; ?>

            <!-- <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <img class="imgcourse" src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
                    <h5 class="card-title mt-3 mb-3">Course 1</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra lorem eu sapien eleifend mattis. Suspendisse sodales placerat sapien, nec.</p>
                    <p>Daftar Materi Mata Kuliah:</p><br>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card card-block">
                    <img class="imgcourse" src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
                    <h5 class="card-title  mt-3 mb-3">Course 2</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque viverra lorem eu sapien eleifend mattis. Suspendisse sodales placerat sapien, nec.</p>
                    <p>Daftar Materi Mata Kuliah:</p><br>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                    <a href="<?php echo site_url('home/subjek') ?>">testestes</a>
                </div>
            </div> -->

        </div>



    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.1.1.slim.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>

    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/course.js') ?>"></script>
</body>