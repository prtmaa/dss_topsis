<?php
include('database/koneksi.php');
include('layout/user_header.php');
// $data = mysqli_query($koneksi, "SELECT * FROM data_hp")
?>

<title>TOPSIS | </title>

<main class="main-content  mt-0">
    <div class=" align-items-start min-vh-100" style="background-image: url('assets/img/cool-background.png'); background-size: cover;">
        <div class="container my-auto">
            <div>
                <div class="row">

                    <div class="col-lg-12 col-md-10 col-12 mx-auto mt-7">

                        <div class="card mt-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center">Info</h4>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <div class="d-flex flex-column h-100">
                                        <h3 class="font-weight-bolder mb-0 mb-5">SPK Pemilihan Smartphone Dengan Metode Topsis</h3>

                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="RAM-tab" data-bs-toggle="tab" data-bs-target="#RAM" type="button" role="tab" aria-controls="RAM" aria-selected="true">
                                                    <h6>RAM</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="INTERNAL-tab" data-bs-toggle="tab" data-bs-target="#INTERNAL" type="button" role="tab" aria-controls="INTERNAL" aria-selected="false">
                                                    <h6>INTERNAL</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="PROCESSOR-tab" data-bs-toggle="tab" data-bs-target="#PROCESSOR" type="button" role="tab" aria-controls="PROCESSOR" aria-selected="false">
                                                    <h6>PROCESSOR</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="SISTEM-tab" data-bs-toggle="tab" data-bs-target="#SISTEM" type="button" role="tab" aria-controls="SISTEM" aria-selected="false">
                                                    <h6>SISTEM OPERASI</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="BELAKANG-tab" data-bs-toggle="tab" data-bs-target="#BELAKANG" type="button" role="tab" aria-controls="BELAKANG" aria-selected="false">
                                                    <h6>KAMERA BELAKANG</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="DEPAN-tab" data-bs-toggle="tab" data-bs-target="#DEPAN" type="button" role="tab" aria-controls="DEPAN" aria-selected="false">
                                                    <h6>KAMERA DEPAN</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="RESOLUSI-tab" data-bs-toggle="tab" data-bs-target="#RESOLUSI" type="button" role="tab" aria-controls="RESOLUSI" aria-selected="false">
                                                    <h6>RESOLUSI LAYAR</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="BATRAI-tab" data-bs-toggle="tab" data-bs-target="#BATRAI" type="button" role="tab" aria-controls="BATRAI" aria-selected="false">
                                                    <h6>BATRAI</h6>
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="BATRAI-tab" data-bs-toggle="tab" data-bs-target="#WARNA" type="button" role="tab" aria-controls="BATRAI" aria-selected="false">
                                                    <h6>WARNA</h6>
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">

                                            <div class="tab-pane fade show active" id="RAM" role="tabpanel" aria-labelledby="RAM-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Ram</th>
                                                                                <th class="align-middle text-center">Bobot</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%ram%'");
                                                                            while ($ram = $sql->fetch_assoc()) {

                                                                            ?>
                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $ram['kriteria'] ?> GB
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $ram['bobot'] ?>
                                                                                    </td>

                                                                                </tr>

                                                                            <?php $i++;
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="tab-pane fade" id="INTERNAL" role="tabpanel" aria-labelledby="INTERNAL-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Internal</th>
                                                                                <th class="align-middle text-center">Bobot</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%rom%'");
                                                                            while ($memori = $sql->fetch_assoc()) {

                                                                            ?>

                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $memori['kriteria'] ?> GB
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $memori['bobot'] ?>
                                                                                    </td>
                                                                                </tr>

                                                                            <?php $i++;
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="PROCESSOR" role="tabpanel" aria-labelledby="PROCESSOR-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Processor</th>
                                                                                <th class="align-middle text-center">Bobot</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%pro%'");

                                                                            while ($pro = $sql->fetch_assoc()) {

                                                                            ?>

                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $pro['kriteria'] ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $pro['bobot'] ?>
                                                                                    </td>

                                                                                </tr>

                                                                            <?php $i++;
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="SISTEM" role="tabpanel" aria-labelledby="SISTEM-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Sistem Operasi</th>
                                                                                <th class="align-middle text-center">Bobot</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%os%'");
                                                                            while ($os = $sql->fetch_assoc()) {

                                                                            ?>


                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        Android <?php echo $os['kriteria'] ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $os['bobot'] ?>
                                                                                    </td>

                                                                                </tr>

                                                                            <?php $i++;
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="BELAKANG" role="tabpanel" aria-labelledby="BELAKANG-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Kamera Belakang</th>
                                                                                <th class="align-middle text-center">Bobot</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php

                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%kamb%'");
                                                                            while ($kb = $sql->fetch_assoc()) {

                                                                            ?>


                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $kb['kriteria'] ?> - <?php echo $kb['kriteria2'] ?> MP
                                                                                    </td>

                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $kb['bobot'] ?>
                                                                                    </td>
                                                                                <?php $i++;
                                                                            } ?>

                                                                                </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="DEPAN" role="tabpanel" aria-labelledby="DEPAN-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Kamera Depan</th>
                                                                                <th class="align-middle text-center">Bobot</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php

                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%kamd%'");
                                                                            while ($kd = $sql->fetch_assoc()) {

                                                                            ?>



                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $kd['kriteria'] ?> - <?php echo $kd['kriteria2'] ?> MP
                                                                                    </td>

                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $kd['bobot'] ?>
                                                                                    </td>
                                                                                <?php $i++;
                                                                            } ?>

                                                                                </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="RESOLUSI" role="tabpanel" aria-labelledby="RESOLUSI-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Resolusi Layar</th>
                                                                                <th class="align-middle text-center">Bobot</th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%layar%'");
                                                                            while ($layar = $sql->fetch_assoc()) {

                                                                            ?>

                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $layar['kriteria'] ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $layar['bobot'] ?>
                                                                                    </td>

                                                                                </tr>

                                                                            <?php $i++;
                                                                            } ?>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="BATRAI" role="tabpanel" aria-labelledby="BATRAI-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Kriteria Batrai</th>
                                                                                <th class="align-middle text-center">Bobot</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%bat%'");
                                                                            while ($batrai = $sql->fetch_assoc()) {
                                                                            ?>

                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $batrai['kriteria'] ?> - <?php echo $batrai['kriteria2'] ?> Mah
                                                                                    </td>

                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $batrai['bobot'] ?>
                                                                                    </td>
                                                                                <?php $i++;
                                                                            } ?>

                                                                                </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">5</td>
                                                                                <td class="align-middle text-center">Sangat Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">4</td>
                                                                                <td class="align-middle text-center">Tinggi</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Rendah</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Sangat Rendah</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="tab-pane fade" id="WARNA" role="tabpanel" aria-labelledby="WARNA-tab">

                                                <div class="row">

                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">No</th>
                                                                                <th class="align-middle text-center">Warna</th>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                            <?php
                                                                            $i = 1;
                                                                            $sql = $koneksi->query("SELECT * FROM tb_warna");
                                                                            while ($warna = $sql->fetch_assoc()) {
                                                                            ?>

                                                                                <tr>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $i ?>
                                                                                    </td>
                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $warna['nama'] ?>
                                                                                    </td>

                                                                                    <td class="align-middle text-center">
                                                                                        <?php echo $warna['keterangan'] ?>
                                                                                    </td>
                                                                                <?php $i++;
                                                                            } ?>

                                                                                </tr>

                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-6">
                                                        <div class="card card-secondary">
                                                            <div class="card-body">

                                                                <div class="table-responsive p-0">
                                                                    <table class="table align-items-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="align-middle text-center">Keterangan</th>
                                                                                <th></th>

                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="align-middle text-center">3</td>
                                                                                <td class="align-middle text-center">Populer</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">2</td>
                                                                                <td class="align-middle text-center">Sedang</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="align-middle text-center">1</td>
                                                                                <td class="align-middle text-center">Kurang</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <?php include('layout/user_footer.php'); ?>