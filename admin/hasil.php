<?php
require_once '../topsis.php';
$topsis = new topsis();

include('../database/koneksi.php');
include('inc/header.php');

$sql = "TRUNCATE TABLE `perhitungan`";
mysqli_query($koneksi, $sql);

$max = $_POST['max'];
$min = $_POST['min'];

$price = mysqli_query($koneksi, "SELECT * from tb_hp WHERE harga_hp BETWEEN '$min' AND '$max'");

?>

<title>ADMIN | Hasil</title>

<div class="container-fluid py-4 mt-3">

    <div class="col-lg-12 position-relative z-index-2 mb-5">
        <div class="card card-secondary">
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="d-flex flex-column h-100">
                        <h2 class="font-weight-bolder mb-0">Halaman Perhitungan</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $count = mysqli_num_rows($price);
    if ($count > 1) { ?>

        <div class="card card-secondary">
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


                <h2>Alternatif dan Bobot Preverwnsi</h2>
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
                                </tr>

                            <?php
                                $no++;
                            }
                            ?>

                        </tbody>
                    </table>
                </div>


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
                            </tr>
                        </tbody>

                    </table>
                </div>


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
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            $total = 0;
                            foreach ($topsis->normalisasi as $n) { ?>

                                <tr>
                                    <td><?= $no; ?></td>
                                    <td>C<?php echo $no ?>. <?= $n[0]; ?></td>
                                    <td><?= $n[1]; ?></td>
                                    <td><?= $n[2]; ?></td>
                                    <td><?= $n[3]; ?></td>
                                    <td><?= $n[4]; ?></td>
                                    <td><?= $n[5]; ?></td>
                                    <td><?= $n[6]; ?></td>
                                    <td><?= $n[7]; ?></td>
                                    <td><?= $n[8]; ?></td>
                                    <td><?= $n[9]; ?></td>
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
                            </tr>

                        </tbody>
                    </table>
                </div>


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
                            </tr>

                        </tbody>
                    </table>
                </div>


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
                            </tr>
                        </tbody>

                        <tbody>
                            <tr>
                                <th>Min(y+)</th>
                                <td><?= $topsis->ymin[0]; ?></td>
                                <td><?= $topsis->ymin[1]; ?></td>
                                <td><?= $topsis->ymin[2]; ?></td>
                                <td><?= $topsis->ymin[3]; ?></td>
                                <td><?= $topsis->ymin[4]; ?></td>
                                <td><?= $topsis->ymin[5]; ?></td>
                                <td><?= $topsis->ymin[6]; ?></td>
                                <td><?= $topsis->ymin[7]; ?></td>
                                <td><?= $topsis->ymin[8]; ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>

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

                <h2>Alternatif Yang Direkomndasikan</h2>
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


                            $x = 0;
                            $no = 1;
                            // $total = 0;
                            // foreach ($topsis->dplusmin as $dpm) {
                            // $pref = round($dpm[7] / ($dpm[7] + $dpm[6]), 2);

                            $nilaiV = array();
                            $rank = array();
                            $id = array();
                            $warna = array('#ffbf00', '#c2c2a3', '#bf8040');

                            while ($data_hp = mysqli_fetch_array($price)) {

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

                            $query = mysqli_query($koneksi, "SELECT * FROM perhitungan ORDER BY  nilai DESC limit 3");
                            while ($user = mysqli_fetch_array($query)) {

                                include('../modal/detail_modal.php');
                            ?>

                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $user['nama']; ?></td>
                                    <th><?= $user['nilai']; ?></th>
                                    <th><a style="background: <?= $warna[$x]; ?>" type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetail<?php echo $user['id_hp']; ?>">Detail</a></th>
                                </tr>


                            <?php
                                $no++;
                                $x++;
                            }

                            include('../proses_riwayat.php');

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } elseif ($count == 1) {

        $alternatif = mysqli_query($koneksi, "SELECT * from tb_hp WHERE harga_hp BETWEEN '$min' AND '$max'");
        $data = mysqli_fetch_array($alternatif);
    ?>


        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card mt-4 mb-5">
                <div class="card-body p-3">
                    <h3 class="mb-0">Tidak ada Perhitungan di harga <?= $min ?> - <?= $max ?></h3>
                    <h3 class="mb-3">Hanya terdapat 1 alternatif : <?= $data['nama_hp'] ?></h3>
                    <a href="admin/admin.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>

    <?php } else { ?>
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card mt-4 mb-5">
                <div class="card-body p-3">
                    <h3 class="mb-3">Tidak ada data di harga <?= $min ?> - <?= $max ?></h3>
                    <a href="admin/admin.php" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>

</div>
<?php
    }
?>


<?php
include('inc/footer.php');
?>