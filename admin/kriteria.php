<?php
include('../database/koneksi.php');
include('inc/header.php');
?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<title>ADMIN | Kriteria</title>

<div class="container-fluid py-4">


    <div class="col-lg-12 position-relative z-index-2 mb-4">
        <div class="card card-secondary">
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="d-flex flex-column h-100">
                        <h2 class="font-weight-bolder mb-0">Halaman Kriteria</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="RAM-tab" data-bs-toggle="tab" data-bs-target="#RAM" type="button" role="tab" aria-controls="RAM" aria-selected="true">RAM</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="INTERNAL-tab" data-bs-toggle="tab" data-bs-target="#INTERNAL" type="button" role="tab" aria-controls="INTERNAL" aria-selected="false">INTERNAL</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="PROCESSOR-tab" data-bs-toggle="tab" data-bs-target="#PROCESSOR" type="button" role="tab" aria-controls="PROCESSOR" aria-selected="false">PROCESSOR</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="SISTEM-tab" data-bs-toggle="tab" data-bs-target="#SISTEM" type="button" role="tab" aria-controls="SISTEM" aria-selected="false">SISTEM OPERASI</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="BELAKANG-tab" data-bs-toggle="tab" data-bs-target="#BELAKANG" type="button" role="tab" aria-controls="BELAKANG" aria-selected="false">KAMERA BELAKANG</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="DEPAN-tab" data-bs-toggle="tab" data-bs-target="#DEPAN" type="button" role="tab" aria-controls="DEPAN" aria-selected="false">KAMERA DEPAN</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="RESOLUSI-tab" data-bs-toggle="tab" data-bs-target="#RESOLUSI" type="button" role="tab" aria-controls="RESOLUSI" aria-selected="false">RESOLUSI LAYAR</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="BATRAI-tab" data-bs-toggle="tab" data-bs-target="#BATRAI" type="button" role="tab" aria-controls="BATRAI" aria-selected="false">BATRAI</button>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="RAM" role="tabpanel" aria-labelledby="RAM-tab">

            <div class="row">

                <div class="col-6">
                    <div class="card card-secondary">
                        <div class="card-body">
                            <h4>RAM</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Ram</th>
                                            <th></th>
                                            <th class="align-middle text-center">Bobot</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%ram%'");
                                        while ($ram = $sql->fetch_assoc()) {

                                            include('modal/ram_modal.php');
                                        ?>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <?php echo $ram['kriteria'] ?> GB
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modalram<?php echo $ram['id_kriteria']; ?>">Edit</a>
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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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
                            <h4>INTERNAL</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Internal</th>
                                            <th></th>
                                            <th class="align-middle text-center">Bobot</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%rom%'");
                                        while ($memori = $sql->fetch_assoc()) {
                                            include('modal/memori_modal.php');
                                        ?>

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <?php echo $memori['kriteria'] ?> GB
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modalmemori<?php echo $memori['id_kriteria']; ?>">Edit</a>
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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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
                            <h4>PROCESSOR</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Processor</th>
                                            <th></th>
                                            <th class="align-middle text-center">Bobot</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%pro%'");

                                        while ($pro = $sql->fetch_assoc()) {
                                            include('modal/processor_modal.php');
                                        ?>

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <?php echo $pro['kriteria'] ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modal<?php echo $pro['id_kriteria']; ?>">Edit</a>
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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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
                            <h4>SISTEM OPERASI</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Sistem Operasi</th>
                                            <th></th>
                                            <th class="align-middle text-center">Bobot</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%os%'");
                                        while ($os = $sql->fetch_assoc()) {
                                            include('modal/os_modal.php');
                                        ?>


                                            <tr>
                                                <td class="align-middle text-center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    Android <?php echo $os['kriteria'] ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modalos<?php echo $os['id_kriteria']; ?>">Edit</a>
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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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
                            <h4>KAMERA BELAKANG</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Kamera Belakang</th>
                                            <th class="align-middle text-center">Bobot</th>
                                            <th></th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $a_kb_awal = array();
                                        $a_kb_akhir = array();
                                        $kamb = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamb%'");
                                        while ($data_kb = mysqli_fetch_array($kamb)) {
                                            array_push($a_kb_awal, $data_kb['kriteria']);
                                            array_push($a_kb_akhir, $data_kb['kriteria2']);
                                        }

                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%kamb%'");
                                        while ($kb = $sql->fetch_assoc()) {
                                            include('modal/kamerablkg_modal.php');
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
                                            <td class="align-middle text-center">
                                                <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modalkamb">Edit</a>
                                            </td>

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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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
                            <h4>KAMERA DEPAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Kamera Depan</th>
                                            <th class="align-middle text-center">Bobot</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $a_kd_awal = array();
                                        $a_kd_akhir = array();
                                        $kamd = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamd%'");
                                        while ($data_kd = mysqli_fetch_array($kamd)) {
                                            array_push($a_kd_awal, $data_kd['kriteria']);
                                            array_push($a_kd_akhir, $data_kd['kriteria2']);
                                        }

                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%kamd%'");
                                        while ($kd = $sql->fetch_assoc()) {
                                            include('modal/kameradpn_modal.php');
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
                                            <td class="align-middle text-center">
                                                <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modalkamd">Edit</a>
                                            </td>

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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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
                            <h4>RESOLUSI LAYAR</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Resolusi Layar</th>
                                            <th></th>
                                            <th class="align-middle text-center">Bobot</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%layar%'");
                                        while ($layar = $sql->fetch_assoc()) {
                                            include('modal/layar_modal.php');
                                        ?>

                                            <tr>
                                                <td class="align-middle text-center">
                                                    <?php echo $i ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <?php echo $layar['kriteria'] ?>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modalresolusi<?php echo $layar['id_kriteria']; ?>">Edit</a>
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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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
                            <h4>BATRAI</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">No</th>
                                            <th class="align-middle text-center">Kriteria Batrai</th>
                                            <th class="align-middle text-center">Bobot</th>
                                            <th></th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $a_batrai_awal = array();
                                        $a_batrai_akhir = array();
                                        $batraia = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%bat%'");
                                        while ($data_batrai = mysqli_fetch_array($batraia)) {
                                            array_push($a_batrai_awal, $data_batrai['kriteria']);
                                            array_push($a_batrai_akhir, $data_batrai['kriteria2']);
                                        }


                                        $i = 1;
                                        $sql = $koneksi->query("SELECT * FROM tb_kriteria WHERE nama LIKE '%bat%'");
                                        while ($batrai = $sql->fetch_assoc()) {
                                            include('modal/batrai_modal.php');
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
                                            <td class="align-middle text-center">
                                                <a type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#Modalbatrai">Edit</a>
                                            </td>

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
                            <h4>KETERANGAN</h4>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center">
                                    <thead>
                                        <tr>
                                            <th class="align-middle text-center">Bobot</th>
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

    </div>
</div>

<?php if (@$_SESSION['sukses']) { ?>
    <script>
        swal("SUKSES!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>

<?php unset($_SESSION['sukses']);
} ?>
<?php include('inc/footer.php');  ?>