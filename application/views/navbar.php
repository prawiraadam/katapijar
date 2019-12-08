<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kata Pijar</title>
  <link rel="icon" href="<?php echo base_url('assets/img/logos/logotitle.ico') ?>">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

  <!-- Import fonts -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url('assets/css/katapijar.css') ?>" rel="stylesheet" type="text/css" >

</head>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Kata Pijar</a>
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

<script src="<?php echo base_url('assets/js/katapijar.min.js') ?>"></script>