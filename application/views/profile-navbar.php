<!DOCTYPE html>
<html>

<head>
    <!-- JANGAN DIUBAH -->
    <title>Profile - Kata Pijar</title>
    <link href="<?php echo base_url('assets/img/logos/logotitle.ico') ?>" rel="icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <!-- ------------- -->

    <!-- Import fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assets/css/katapijar.css') ?>" rel="stylesheet" type="text/css" >

</head>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="profileNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('home')?>">Kata Pijar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a style="margin-right: 10px" class="nav-link js-scroll-trigger" href="<?php echo site_url('home') ?>">Home</a>
                </li>
                <div class="dropdown">
                    <a href="<?php echo site_url('profile/logout') ?>"><button style="background-color: #fed136;cursor:pointer;" class="btn btn-primary" type="button">LOGOUT
                            <span class="caret"></span></button></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a style="text-transform: none;" href="#">Lihat Profil</a></li>
            <li><a style="text-transform: none;" href="#">Pengaturan</a></li>
            <li><a style="text-transform: none;" href="#">Keluar</a></li> -->
                    </ul>
                </div>
            </ul>
        </div>
    </div>
</nav>