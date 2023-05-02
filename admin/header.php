<?php include("config.php");?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


    <title>Lemon Tree Hotel</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">


    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />


</head>



<body>

    <!-- <div class="loader"></div> -->


    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>


                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin</span>
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">

                        <li class="dropdown active">
                            <a href="index.php" class="nav-link">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="bigBanner.php">
                                <i class="far fa-file-alt"></i>
                                <span>Big Banner</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="ourResidence.php">
                                <i class="far fa-file-alt"></i>
                                <span>Our Residence</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="ourRooms.php">
                                <i class="far fa-file-alt"></i>
                                <span>Our Rooms</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="specialFacilities.php">
                                <i class="far fa-file-alt"></i>
                                <span>Special Facilities</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="ourGuest.php">
                                <i class="far fa-file-alt"></i>
                                <span>Our Guest</span>
                            </a>
                        </li>

                 
                        <li>
                            <a class="nav-link" href="newsEvents.php">
                                <i class="far fa-file-alt"></i>
                                <span>News & Events</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="gallery.php">
                                <i class="far fa-file-alt"></i>
                                <span>Gallery</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="blog.php">
                                <i class="far fa-file-alt"></i>
                                <span>Blog</span>
                            </a>
                        </li>


                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">