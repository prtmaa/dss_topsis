<?php
include('database/koneksi.php');
include('layout/user_header.php');

?>

<title>TOPSIS | Home</title>

<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('assets/img/cool-background.png');">
        <div class="container my-auto">
            <div>
                <div class="row">

                    <div class="col-lg-10 col-md-8 col-12 mx-auto">


                        <div class="card bg-gradient-light">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">

                                    <h4 class="text-white font-weight-bolder text-center">Selamat Datang</h4>

                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-xl-6 col-sm-12 mb-xl-0 mb-4">
                                        <a href="user_input/user_form.php">
                                            <div class="card card-secondary">
                                                <div class="card-header p-3 pt-2">
                                                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                                        <i class="material-icons opacity-10">create</i>
                                                    </div>
                                                    <div class="text-end pt-1">
                                                        <h4 class="mb-0 text-capitalize">Pilih Alternatif</h4>
                                                    </div>
                                                </div>
                                                <hr class="dark horizontal my-0">
                                                <div class="card-footer p-3">
                                                    <p class="mb-0"></span>Pencarian dengan memilih beberapa alternatif</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-6 col-sm-12 mb-xl-0 mb-4">
                                        <a href="cari.php">
                                            <div class="card card-secondary">
                                                <div class="card-header p-3 pt-2">
                                                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                                        <i class="material-icons opacity-10">search</i>
                                                    </div>
                                                    <div class="text-end pt-1">
                                                        <h4 class="mb-0 text-capitalize">Semua Alternatif</h4>
                                                    </div>
                                                </div>
                                                <hr class="dark horizontal my-0">
                                                <div class="card-footer p-3">
                                                    <p class="mb-0"></span>Pencarian dengan semua alternatif berdasarkan harga</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                            </div>

                        </div>


                        <?php include('layout/user_footer.php'); ?>