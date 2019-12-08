<body id="page-top">
  <!-- Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url('assets/img/header/lamp2.jpg') ?>')">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Kata Pijar</div>
        <div class="intro-heading text-uppercase">Media Belajar Mahasiswa Berprestasi</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Mulai Belajar!</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Fokus Utama Kami</h2>
          <h3 class="section-subheading text-muted">Our Main Focus</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-lg-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-user fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Pembentukan Karakter<br></h4>
          <h3 class="section-subheading text-muted">Character Building</h3>
          <p class="text-muted">Proses bagaimana suatu karakter dapat terbentuk dengan menyelaraskan bakat dalam tiap individu.</p>
        </div>
        <div class="col-lg-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-brain fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Berpikir Kritis<br></h4>
          <h3 class="section-subheading text-muted">Critical Thinking</h3>
          <p class="text-muted">Proses bagaimana suatu individu dapat menganalisa suatu permasalahan dengan kritis dan dinamis.</p>
        </div>
        <div class="col-lg-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-balance-scale fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Mandiri dan Jujur</h4>
          <h3 class="section-subheading text-muted">Independent and Honest</h3>
          <p class="text-muted">Proses bagaimana melatih suatu individu agar dapat menjalankan kehidupan dengan mengutamakan kemandirian dan kejujuran</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Mata Kuliah</h2>
          <h3 class="section-subheading text-muted">Subjects</h3>
        </div>
      </div>
      <div class="row">
        <?php foreach ($subject as $row) { ?>

          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" href="<?php echo site_url('home/course/' . $row->sub_id) ?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php echo base_url('assets/img/portfolio/' .   $row->sub_foto) ?>" alt="">

              <div class="portfolio-caption">
                <h4><?php echo $row->sub_nama ?></h4>
                <p class="text-muted"><?php echo $row->sub_nama ?></p>
              </div>
            </a>
          </div>

        <?php } ?>
      </div>
    </div>
  </section>

  <!-- Portfolio Modals -->

  <!-- About -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tentang Kami</h2>
          <h3 class="section-subheading text-muted">About Us</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/about/Lamp2.jpg') ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Maret 2019</h4>
                  <h4 class="subheading">Awal Mula Kata Pijar Berdiri</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Kata Pijar adalah aplikasi penyedia Course berupa Subject yang ada di bangku perkuliahan
                    yang disajikan dalam bentuk video pembelajaran.</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/about/idea.jpg') ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>April-Juli 2019</h4>
                  <h4 class="subheading">Perancangan Kata Pijar</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Merancang dan mendesain bagaimana Kata Pijar sebagai media pembelajaran mahasiswa dapat
                    mencapai tujuan dari pembuatannya.
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/about/build.jpg') ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Agustus-Desember 2019</h4>
                  <h4 class="subheading">Pembuatan Kata Pijar</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Mengaplikasikan desain dan rancangan yang telah dibuat secara total dan menyeluruh
                    demi kenyamanan pengguna.
                  </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url('assets/img/about/launch.jpg') ?>" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Januari 2020</h4>
                  <h4 class="subheading">Peluncuran Perdana</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Kata Pijar secara resmi diluncurkan untuk memulai perjalanannya menuju masa depan
                    mahasiswa yang gemilang!</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Mulai
                  <br>ceritamu
                  <br>sendiri!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Tim Kata Pijar</h2>
          <h3 class="section-subheading text-muted">Our Team</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/shadieq.jpg') ?>" alt="">
            <h4>Nuurshadieq</h4>
            <p class="text-muted">Founder</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/shadieqq/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/ahmad.jpg') ?>" alt="">
            <h4>Ahmad Satriamulya</h4>
            <p class="text-muted">Co-Founder</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/ahmad-satriamulya-85a4a4180/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/rayhan.jpg') ?>" alt="">
            <h4>M. Rayhan Alifinzi Ghiffari</h4>
            <p class="text-muted">Web Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/muhammad-rayhan-alifinzi-ghiffary-353274b7/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/punyaku.jpg') ?>" alt="">
            <h4>Naufal Hilmiaji</h4>
            <p class="text-muted">Web Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/naufalhilmiaji/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url('assets/img/team/adam.jpg') ?>" alt="">
            <h4>Justisio Yan Prawira Adam</h4>
            <p class="text-muted">Business Analyst </p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/prawiraadam/">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    <!-- <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam
          veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
      </div>
    </div> -->
    </div>
  </section>


  <!-- Untuk sponsor kalo diperlukan -->
  <!-- <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Contact -->
  <section id="contact" style="background-image: url(<?php echo base_url('assets/img/map-image.png')?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
          <h3 class="section-subheading" style="color:white">Contact Us</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                  Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->

  <!-- Bootstrap JavaScript -->
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