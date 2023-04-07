<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/bd-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/bd.png">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>


<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" ">
                <img src="../assets/img/bd.jpg" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">BALADEWA CELL</span>
            </a>
        </div>


        <hr class="horizontal light mt-0 mb-2">

        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link text-white " href="admin.php">

                        <i class="fas fa-home"></i>
                        <span class="nav-link-text ms-3 ">Dashboard</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="data_hp.php">

                        <i class="fas fa-folder"></i>
                        <span class="nav-link-text ms-3">Data Alternatif</span>

                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white " href="kriteria.php">

                        <i class="fas fa-th-list"></i>
                        <span class="nav-link-text ms-3">Kriteria</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="warna.php">

                        <i class="fas fa-palette"></i>
                        <span class="nav-link-text ms-3">Warna</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="riwayat.php">

                        <i class="fas fa-history"></i>
                        <span class="nav-link-text ms-3">Riwayat</span>

                    </a>
                </li>



                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="profil.php">

                        <i class="fas fa-user"></i>
                        <span class="nav-link-text ms-3">Profile</span>

                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link text-white " href="logout.php">

                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-link-text ms-3">Log Out</span>

                    </a>
                </li>
            </ul>
        </div>

        <div class="sidenav-footer position-absolute w-100 bottom-0 ">

        </div>

    </aside>

    <main class="main-content border-radius-lg ">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">

                    <h6 class="font-weight-bolder mb-0"> <?php
                                                            date_default_timezone_set('Asia/Jakarta');
                                                            echo date('d-M-Y / H:i:s a'); ?></h6>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">


                    </div>
                    <ul class="navbar-nav  justify-content-end">

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->