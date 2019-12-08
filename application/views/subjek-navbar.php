<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Subjek - Kata Pijar</title>
    <link rel="icon" href="<?php echo base_url('assets/img/logos/logotitle.ico') ?>">
    <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'> -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'> -->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/katapijar.css') ?>">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->


    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
</head>
</head>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="subjekNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url('home') ?>">Kata Pijar</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item dropdown">
                    <a style="margin-right:10px" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        List Materi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                        $num = 0;
                        foreach ($video as $row) { ?>
                            <a class="dropdown-item" href="<?php echo site_url('home/subjek/' . $row->course_id . '/' . $num) ?>"><?php echo $row->vid_nama ?></a>
                        <?php $num++;
                        } ?>
                    </div>
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

<script src="<?php echo base_url('assets/js/katapijar.min.js') ?>"></script>