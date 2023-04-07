<?php
require_once 'topsis_user.php';
$topsis = new topsis();

include('../database/koneksi.php');
include('layout/user_header.php');

$sql = "TRUNCATE TABLE `perhitungan`";
mysqli_query($koneksi, $sql);



$jml = mysqli_query($koneksi, "SELECT * from tb_hp_user");

?>

<title>TOPSIS | Hasil</title>


<main class="main-content  mt-0">
    <div class=" align-items-start min-vh-100" style="background-image: url('../assets/img/cool-background.png'); background-size: cover;">
        <div class="container my-auto">
            <div>
                <div class="row">

                    <div class="col-lg-12 col-md-8 col-12 mx-auto mt-7">

                        <div class="card mt-2">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center">Hasil Perhitungan</h4>
                                </div>
                            </div>


                            <?php $count = mysqli_num_rows($jml);
                            if ($count != 0) { ?>


                                <div class="card-body">
                                    <h2>Kriteria, Bobot, dan Atribut</h2>
                                    <div class="table-responsive p-0 mb-3">
                                        <table class="table text-center">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode</th>
                                                    <th>Kriteria</th>
                                                    <th>Bobot</th>
                                                    <th>Atribut</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                $no = 1;
                                                $total = 0;
                                                foreach ($topsis->kriteria as $k) { ?>

                                                    <tr>
                                                        <td><?php echo $no ?></td>
                                                        <td>C <?php echo $no ?></td>
                                                        <td><?php echo $k[0] ?></td>
                                                        <td><?php echo $k[1] ?></td>
                                                        <td><?php echo $k[2] ?></td>

                                                    <?php
                                                    $no++;
                                                }
                                                    ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>


                        <div class="card mt-2">
                            <div class="card-body">
                                <h2>Alternatif dan Bobot Preverensi</h2>
                                <div class="table-responsive p-0 mb-3">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>C1<br>(Harga)</th>
                                                <th>C2<br>(RAM)</th>
                                                <th>C3<br>(Memori)</th>
                                                <th>C4<br>(Processor)</th>
                                                <th>C5<br>(Kamera Blkg)</th>
                                                <th>C6<br>(Kamera Dpn)</th>
                                                <th>C7<br>(Batrai)</th>
                                                <th>C8<br>(OS)</th>
                                                <th>C9<br>(Resolusi)</th>
                                                <th>C9<br>(Warna)</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $total = 0;
                                            // while ($data_hp = mysqli_fetch_array($price)) {

                                            //     include('value.php');
                                            //     $alternatif = array($wh, $wr, $wm, $wp, $wkb, $wkd, $wb, $ws, $wl);


                                            foreach ($topsis->alternatif as $a) {
                                            ?>

                                                <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $a[0] ?></td>
                                                    <td><?php echo $a[1] ?></td>
                                                    <td><?php echo $a[2] ?></td>
                                                    <td><?php echo $a[3] ?></td>
                                                    <td><?php echo $a[4] ?></td>
                                                    <td><?php echo $a[5] ?></td>
                                                    <td><?php echo $a[6] ?></td>
                                                    <td><?php echo $a[7] ?></td>
                                                    <td><?php echo $a[8] ?></td>
                                                    <td><?php echo $a[9] ?></td>
                                                    <td><?php echo $a[10] ?></td>
                                                </tr>

                                            <?php
                                                $no++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                        <div class="card mt-2">
                            <div class="card-body">
                                <h2>Pembagi</h2>
                                <div class="table-responsive p-0 mb-3">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>Kriteria</th>
                                                <th>C1</th>
                                                <th>C2</th>
                                                <th>C3</th>
                                                <th>C4</th>
                                                <th>C5</th>
                                                <th>C6</th>
                                                <th>C7</th>
                                                <th>C8</th>
                                                <th>C9</th>
                                                <th>C10</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Pembagi</td>
                                                <td><?= $topsis->pembagi[0] ?></td>
                                                <td><?= $topsis->pembagi[1] ?></td>
                                                <td><?= $topsis->pembagi[2] ?></td>
                                                <td><?= $topsis->pembagi[3] ?></td>
                                                <td><?= $topsis->pembagi[4] ?></td>
                                                <td><?= $topsis->pembagi[5] ?></td>
                                                <td><?= $topsis->pembagi[6] ?></td>
                                                <td><?= $topsis->pembagi[7] ?></td>
                                                <td><?= $topsis->pembagi[8] ?></td>
                                                <td><?= $topsis->pembagi[9] ?></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-2">
                            <div class="card-body">
                                <h2>Nilai Ternormalisasi</h2>
                                <div class="table-responsive p-0 mb-3">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>C1</th>
                                                <th>C2</th>
                                                <th>C3</th>
                                                <th>C4</th>
                                                <th>C5</th>
                                                <th>C6</th>
                                                <th>C7</th>
                                                <th>C8</th>
                                                <th>C9</th>
                                                <th>C10</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $total = 0;
                                            foreach ($topsis->normalisasi as $n) { ?>

                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $n[0]; ?></td>
                                                    <td><?= $n[1]; ?></td>
                                                    <td><?= $n[2]; ?></td>
                                                    <td><?= $n[3]; ?></td>
                                                    <td><?= $n[4]; ?></td>
                                                    <td><?= $n[5]; ?></td>
                                                    <td><?= $n[6]; ?></td>
                                                    <td><?= $n[7]; ?></td>
                                                    <td><?= $n[8]; ?></td>
                                                    <td><?= $n[9]; ?></td>
                                                    <td><?= $n[10]; ?></td>
                                                </tr>

                                            <?php
                                                $no++;
                                            }
                                            ?>

                                            <tr>
                                                <th>Bobot</th>
                                                <th></th>
                                                <th><?= $topsis->bobot[0]; ?></th>
                                                <th><?= $topsis->bobot[1]; ?></th>
                                                <th><?= $topsis->bobot[2]; ?></th>
                                                <th><?= $topsis->bobot[3]; ?></th>
                                                <th><?= $topsis->bobot[4]; ?></th>
                                                <th><?= $topsis->bobot[5]; ?></th>
                                                <th><?= $topsis->bobot[6]; ?></th>
                                                <th><?= $topsis->bobot[7]; ?></th>
                                                <th><?= $topsis->bobot[8]; ?></th>
                                                <th><?= $topsis->bobot[9]; ?></th>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-2">
                            <div class="card-body">
                                <h2>Nilai Ternormalisasi dan Terbobot</h2>
                                <div class="table-responsive p-0 mb-3">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode</th>
                                                <th>C1</th>
                                                <th>C2</th>
                                                <th>C3</th>
                                                <th>C4</th>
                                                <th>C5</th>
                                                <th>C6</th>
                                                <th>C7</th>
                                                <th>C8</th>
                                                <th>C9</th>
                                                <th>C10</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $total = 0;
                                            foreach ($topsis->normxbobot as $nb) { ?>

                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $nb[0]; ?></td>
                                                    <td><?= $nb[1]; ?></td>
                                                    <td><?= $nb[2]; ?></td>
                                                    <td><?= $nb[3]; ?></td>
                                                    <td><?= $nb[4]; ?></td>
                                                    <td><?= $nb[5]; ?></td>
                                                    <td><?= $nb[6]; ?></td>
                                                    <td><?= $nb[7]; ?></td>
                                                    <td><?= $nb[8]; ?></td>
                                                    <td><?= $nb[9]; ?></td>
                                                    <td><?= $nb[10]; ?></td>
                                                </tr>

                                            <?php
                                                $no++;
                                            }
                                            ?>
                                            <tr>
                                                <th>*</th>
                                                <th>Atribut</th>
                                                <th><?= $topsis->atribut[0]; ?></th>
                                                <th><?= $topsis->atribut[1]; ?></th>
                                                <th><?= $topsis->atribut[2]; ?></th>
                                                <th><?= $topsis->atribut[3]; ?></th>
                                                <th><?= $topsis->atribut[4]; ?></th>
                                                <th><?= $topsis->atribut[5]; ?></th>
                                                <th><?= $topsis->atribut[6]; ?></th>
                                                <th><?= $topsis->atribut[7]; ?></th>
                                                <th><?= $topsis->atribut[8]; ?></th>
                                                <th><?= $topsis->atribut[9]; ?></th>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-2">
                            <div class="card-body">
                                <h2>Nilai Y max dan Y min</h2>
                                <div class="table-responsive p-0 mb-3">
                                    <table class="table text-center">
                                        <tbody>
                                            <tr>
                                                <th>Max(y+)</th>
                                                <td><?= $topsis->ymax[0]; ?></td>
                                                <td><?= $topsis->ymax[1]; ?></td>
                                                <td><?= $topsis->ymax[2]; ?></td>
                                                <td><?= $topsis->ymax[3]; ?></td>
                                                <td><?= $topsis->ymax[4]; ?></td>
                                                <td><?= $topsis->ymax[5]; ?></td>
                                                <td><?= $topsis->ymax[6]; ?></td>
                                                <td><?= $topsis->ymax[7]; ?></td>
                                                <td><?= $topsis->ymax[8]; ?></td>
                                                <td><?= $topsis->ymax[9]; ?></td>
                                            </tr>
                                        </tbody>

                                        <tbody>
                                            <tr>
                                                <th>Min(y-)</th>
                                                <td><?= $topsis->ymin[0]; ?></td>
                                                <td><?= $topsis->ymin[1]; ?></td>
                                                <td><?= $topsis->ymin[2]; ?></td>
                                                <td><?= $topsis->ymin[3]; ?></td>
                                                <td><?= $topsis->ymin[4]; ?></td>
                                                <td><?= $topsis->ymin[5]; ?></td>
                                                <td><?= $topsis->ymin[6]; ?></td>
                                                <td><?= $topsis->ymin[7]; ?></td>
                                                <td><?= $topsis->ymin[8]; ?></td>
                                                <td><?= $topsis->ymin[9]; ?></td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-2">
                            <div class="card-body">
                                <h2>Nilai D puls dan D min</h2>
                                <div class="table-responsive p-0 mb-3">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Alternatif</th>
                                                <th>D+</th>
                                                <th>D-</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $total = 0;
                                            foreach ($topsis->dplusmin as $dpm) { ?>

                                                <tr>
                                                    <td><?= $no; ?></td>
                                                    <td><?= $dpm[0]; ?></td>
                                                    <td><?= $dpm[6]; ?></td>
                                                    <td><?= $dpm[7]; ?></td>
                                                </tr>

                                            <?php
                                                $no++;
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card mt-2">
                            <div class="card-body">
                                <h2>Alternatif Yang Direkomendasikan</h2>
                                <div class="table-responsive p-0 mb-3">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Alternatif</th>
                                                <th>Nilai</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            error_reporting(E_ALL ^ E_NOTICE);
                                            $x = 0;
                                            $no = 1;
                                            // $total = 0;
                                            // foreach ($topsis->dplusmin as $dpm) {
                                            // $pref = round($dpm[7] / ($dpm[7] + $dpm[6]), 2);

                                            $nilaiV = array();
                                            $rank = array();
                                            $id = array();
                                            $warna = array('#ffbf00', '#c2c2a3', '#bf8040');

                                            while ($data_hp = mysqli_fetch_array($jml)) {

                                                array_push($id, $data_hp['id_hp']);
                                                array_push($rank, $data_hp['nama_hp']);
                                            }

                                            foreach ($topsis->dplusmin as $dpm) {
                                                array_push($nilaiV, round($dpm[7] / ($dpm[7] + $dpm[6]), 2));
                                            }


                                            $a = count($rank);
                                            for ($i = 0; $i < $a; $i++) {
                                                $sql = "INSERT INTO `perhitungan`(`nama`, `nilai`, `id_hp`) VALUES ('$rank[$i]','$nilaiV[$i]', '$id[$i]')";
                                                mysqli_query($koneksi, $sql);
                                            }

                                            $query = mysqli_query($koneksi, "SELECT * FROM perhitungan ORDER BY  nilai DESC");
                                            while ($user = mysqli_fetch_array($query)) {

                                                include('layout/detail_modal_user.php');
                                            ?>

                                                <tr>
                                                    <th>
                                                        <?= $no; ?>
                                                    </th>
                                                    <td>
                                                        <?= $user['nama']; ?>
                                                    </td>
                                                    <th>
                                                        <?= $user['nilai']; ?>
                                                    </th>
                                                    <th><a style="background: <?= $warna[$x]; ?>" type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetail<?php echo $user['id_hp']; ?>">Detail</a></th>
                                                </tr>

                                            <?php
                                                $no++;
                                                $x++;
                                            }

                                            include('proses_riwayat_user.php');
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    <?php } else { ?>
                        <div class="col-lg-8 col-md-10 mx-auto">
                            <div class="card mt-4 mb-5">
                                <div class="card-body p-3">
                                    <h3 class="mb-3">Belum ada data alternatif</h3>
                                    <a href="user_input.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>


                <?php
                            }
                ?>


                <?php include('layout/user_footer.php'); ?>