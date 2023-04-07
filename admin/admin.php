<?php
include('../database/koneksi.php');
include('inc/header.php');
?>

<title>ADMIN | Dashboard</title>

<div class="container-fluid py-4">

    <div class="col-lg-12 position-relative z-index-2 mb-5">
        <div class="card card-secondary">
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="d-flex flex-column h-100">
                        <h3 class="font-weight-bolder mb-0">Selamat Datang di</h3>
                        <h3 class="font-weight-bolder mb-0">SPK Pemilihan Smartphone Dengan Metode Topsis</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">

        <div class="col-lg-10 position-relative z-index-2 mb-5">
            <div class="row">

                <div class="col-xl-3 col-sm-12 mb-xl-0 mb-4">
                    <a href="data_hp.php">
                        <div class="card card-secondary">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">dashboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h4 class="mb-0 text-capitalize">Alternatif</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"></span>Lihat dan kelola data Alternatif</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-sm-12 mb-xl-0 mb-4">
                    <a href="kriteria.php">
                        <div class="card card-secondary">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">dashboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h4 class="mb-0 text-capitalize">Kriteria</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"></span>Sesuaikan pilihan kriteria yang tersedia</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-sm-12 mb-xl-0 mb-4">
                    <a href="warna.php">
                        <div class="card card-secondary">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">dashboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h4 class="mb-0 text-capitalize">Warna</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"></span>tambahkan atau hapus warna</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-sm-12 mb-xl-0 mb-4">
                    <a href="riwayat.php">
                        <div class="card card-secondary">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">dashboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h4 class="mb-0 text-capitalize">Riwayat</h4>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"></span>Lihat riwayat Pencarian yang telah dilakukan</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>


<?php include('inc/footer.php'); ?>