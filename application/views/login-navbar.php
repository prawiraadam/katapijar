<!DOCTYPE html>
<html>

<head>
    <!-- JANGAN DIUBAH -->
    <title>Login - Kata Pijar</title>
    <link rel="icon" href="<?php echo base_url('assets/img/logos/logotitle.ico') ?>">
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>>
    <!-- ------------- -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/katapijar.css') ?>">

    <!-- Import fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="loginNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('home')?>">Kata Pijar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <!-- <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#services">Get Started!</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#services">Start!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#portfolio">Subjects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
        </li>
        <div class="dropdown">
          <!-- <a href="#"> <button href="" style="margin-top: 2px" class="btn btn-primary" type="button" data-toggle="dropdown">SIGN IN</a> 
            <span class="caret"></span></button> -->
          <a href="<?php echo site_url('home/signIn') ?>" class="btn btn-primary">SIGN IN</a>

          <!-- Nanti kalo udah login di-enable dropdownnya yak -->

          <!-- <ul class="dropdown-menu">
            <li><a style="text-transform: none;" href="#">Lihat Profil</a></li>
            <li><a style="text-transform: none;" href="#">Pengaturan</a></li>
            <li role="separator" class="divider"></li>
            <li><a style="text-transform: none;" href="#">Keluar</a></li>
          </ul> -->
        </div>
      </ul>
    </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="courseNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('home') ?>">Kata Pijar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a style="margin-right: 10px" class="nav-link js-scroll-trigger" href="<?php echo site_url('home') ?>">Home</a>
                </li>
                <?php if ($this->session->userdata('user_id') != null) : ?>
                    <!-- <div class="dropdown">
                        <button style="background-color: #fed136" class="btn btn-primary" type="button"><?php echo $this->session->userdata('username') ?>
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a style="text-transform: none;" href="<?php echo site_url('profile/index/' . $this->session->userdata('user_id')) ?>">Lihat Profil</a></li>
                            <li><a style="text-transform: none;" href="#">Pengaturan</a></li>
                            <li><a style="text-transform: none;" href="<?php echo site_url('profile/logout') ?>">Keluar</a></li>
                        </ul>
                    </div> -->
                    <div class="dropdown">
                        <button style="background: rgb(177, 177, 177); color: white" class="btn btn-primary btndropdown dropdown-toggle" type="button" data-toggle="dropdown">
                            <?php echo $this->session->userdata('username') ?>
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a style="text-transform: none;" href="<?php echo site_url('profile/index/' . $this->session->userdata('user_id')) ?>">Lihat Profil</a></li>
                            <li><a style="text-transform: none;" href="#">Pengaturan</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a style="text-transform: none;" href="<?php echo site_url('profile/logout') ?>">Keluar</a></li>
                        </ul>
                    </div>
                <?php else : ?>
                    <a href="<?php echo site_url('home/signIn') ?>" class="btn btn-primary">SIGN IN</a>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>


