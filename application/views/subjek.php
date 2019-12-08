<body class="bodysubjek">
    <!-- modal buy course -->
    <!-- <div class="modal fade" id="buyModal" tabindex="-1" role="dialog" aria-labelledby="modalCenterMain" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="width: 30%;">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="text-center">
                        <img class="img-thumbnail mx-auto d-block" src="<?php echo base_url('assets/img/portfolio/biologi2.jpg') ?>" style="width: 400px;">
                        <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus voluptas ut magni assumenda provident, ullam libero modi laborum dolores doloribus.</p>
                    </div>
                    <p class="text-sm" style="margin-top: 10px;margin-bottom: -2px;">This course includes</p>
                    <ul class="list-group-item text-left text-sm" style="list-style-type:square;">
                        <li>22.5 Hours on demand video</li>
                        <li>10 subject articles</li>
                        <li>Downloadables resources</li>
                        <li>Full-time access</li>
                        <li>Access on mobile and website</li>
                        <li>Certificate upon completion</li>
                    </ul>

                    <h4 class="text-secondary" style="margin-bottom:10px;margin-top:15px;">Rp 2,500,000.00</h4>
                    <a  href="<?php echo site_url('home/payment') ?>"><button type="button" class="btn btn-primary">Beli Sekarang</button></a>
                    <p class="text-secondary" style="font-size: 12px;margin: 5px;">30 Day Money-Back Guarantee</p>

                </div>

            </div>
        </div>
    </div> -->
    <!--msb: main sidebar-->

    <!--main content wrapper-->
    <div class="mcw">
        <div class="cv">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xl-12">
                        <h2 class="text-uppercase"><?php echo $video[$num]->vid_nama ?></h2>
                        <p class="item-intro text-muted"><?php echo $video[$num]->course_name ?></p>
                        <p class="item-intro text-muted">by Universitas Indonesia</p>
                        <!-- <video width="720" height="400" controls>
                            <source src="<?php echo base_url('assets/video/video1.mp4') ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video> -->
                        <iframe width="720" height="400" src="<?php echo $video[$num]->vid_content ?>">
                </iframe>
                        <!-- Ini kalo mau ambil API dari yutup -->
                        <p style="padding-top:15px;"><?php echo $video[$num]->vid_desc ?></p>
                        <!-- <ul class="list-inline">
                            <li>Tambahan 1</li>
                            <li>Tambahan 2</li>
                            <li>Tambahan 3</li>
                        </ul> -->
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buyModal" style="cursor:pointer;">
                            Buy Now
                        </button> -->
                    </div>
                    <!-- <div class = "col-xl-4 position-relative text-justify" style = "margin-top:90px;">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt quibusdam quae explicabo velit mollitia impedit, earum reprehenderit officia consequatur, nesciunt rem itaque ab similique, cupiditate nihil! Tenetur dolores ex inventore saepe accusantium, consequatur ab exercitationem reiciendis quod, quibusdam molestias incidunt eius tempore provident fugiat! Veniam, suscipit iste molestiae, nulla ex et fugiat tempore totam, eaque voluptatum at. Inventore illo nisi, expedita impedit nam velit neque quasi error laborum dignissimos, in, dolorum repudiandae obcaecati facere est? Assumenda ut velit sit harum!</p>
                    </div> -->
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