<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kata Pijar - Media Belajar Mahasiswa</title>

  <!-- Bootstrap core CSS -->
  <link rel="icon" href="<?php echo base_url('assets/img/logos/logotitle.ico') ?>">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">


  <!-- Import fonts -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <!-- <link href="css/katapijar.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/katapijar.css') ?>">

</head>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Kata Pijar</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
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
          <button style="color: white" class="btn btn-primary btndropdown dropdown-toggle" type="button" data-toggle="dropdown">
            <?php echo $this->session->userdata('username') ?>
            <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a style="text-transform: none;" href="<?php echo site_url('profile/index/' . $this->session->userdata('user_id')) ?>">Lihat Profil</a></li>
            <!-- <li><a style="text-transform: none;" href="#">Pengaturan</a></li> -->
            <li><a style="text-transform: none;" href="<?php echo site_url('profile/logout') ?>">Keluar</a></li>
          </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>

<script src="js/katapijar.min.js"></script>