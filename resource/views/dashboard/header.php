<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Connect - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="<?php echo base_url() ?>public/assets/css/connect.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/assets/css/dark_theme.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
                <span class='sr-only'>Loading...</span>
            </div>
        </div>
        <div class="connect-container align-content-stretch d-flex flex-wrap">
            <div class="page-sidebar">
                <div class="logo-box"><a href="#" class="logo-text">PT. TACI</a><a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i class="material-icons">adjust</i><i class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
                <div class="page-sidebar-inner slimscroll">
                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            Admin Menu
                        </li>
                        <li class="active-page">
                            <a href="index.html" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=admin-orders-index') ?>"><i class="material-icons-outlined">inbox</i>Pesanan Masuk</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=admin-stocks-index') ?>"><i class="material-icons-outlined">account_circle</i>Stock</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=admin-users-index') ?>"><i class="material-icons-outlined">account_circle</i>Users</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=admin-products-index') ?>"><i class="material-icons">cloud_queue</i>Barang</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=admin-laporan-index') ?>"><i class="material-icons-outlined">calendar_today</i>Laporan</a>
                        </li>
                        
                    </ul>

                    <ul class="accordion-menu">
                        <li class="sidebar-title">
                            Petugas Menu
                        </li>
                        <li class="active-page">
                            <a href="index.html" class="active"><i class="material-icons-outlined">dashboard</i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=petugas-orders-index') ?>"><i class="material-icons-outlined">inbox</i>Pesanan APD</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=petugas-stocks-index') ?>"><i class="material-icons-outlined">account_circle</i>Check Stock APD</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=petugas-settings-index') ?>"><i class="material-icons-outlined">account_circle</i>Pengaturan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('?pagename=petugas-help-index') ?>"><i class="material-icons">cloud_queue</i>Bantuan</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="page-container">
                <div class="page-header">
                    <nav class="navbar navbar-expand">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav">
                            <li class="nav-item small-screens-sidebar-link">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                            </li>
                            <li class="nav-item nav-profile dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?php echo base_url() ?>public/assets/images/avatars/profile-image-1.png" alt="profile image">
                                    <span>Nancy Moore</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Calendar<span class="badge badge-pill badge-info float-right">2</span></a>
                                    <a class="dropdown-item" href="#">Settings &amp Privacy</a>
                                    <a class="dropdown-item" href="#">Switch Account</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">mail</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link"><i class="material-icons-outlined">notifications</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
                            </li>
                        </ul>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Tasks</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Reports</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>