<?php
include('../database/koneksi.php');
include('inc/header.php');
?>

<title>ADMIN | Detail HP</title>

<?php
$id = $_POST['id'];
$sql = $koneksi->query("SELECT * FROM tb_hp WHERE id_hp='$id'");
$row = $sql->fetch_assoc();
?>

<div class="container-fluid py-4 mt-3">


    <div class="d-flex justify-content-center">

        <div class="col-lg-10 position-relative z-index-2 mb-5">


            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3">
                        <h3 class="text-white text-capitalize ps-3">Detail Smartphone</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div class="row">

                            <div class="col-lg-3 col-md-4">

                                <img src="../assets/img/produk/<?= $row['foto'] ?>" alt="..." class="img-responsive border-radius-lg shadow-lg" width="370px" height="520px">
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-6 ms-5">
                            <h3 class="font-weight-bolder mb-3"><?= $row['nama_hp'] ?></h3>
                            <div class="table-responsive p-0">
                                <table class="table mb-4 ">
                                    <tr>
                                        <th>
                                            <h5>Harga</h5>
                                        </th>
                                        <td>
                                            <h5>:</h5>
                                        </td>
                                        <td>
                                            <h5><?php echo "Rp " . number_format("$row[harga_hp]", 2, ",", ".")  ?></h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Ram</th>
                                        <td>:</td>
                                        <td><?= $row['ram_hp'] ?> GB</td>
                                    </tr>
                                    <tr>
                                        <th>Internal</th>
                                        <td>:</td>
                                        <td><?= $row['rom_hp'] ?> GB</td>
                                    </tr>
                                    <tr>
                                        <th>Processor</th>
                                        <td>:</td>
                                        <td><?= $row['procesor_hp'] ?> (<?= $row['rank_pro']; ?>)</td>
                                    </tr>
                                    <tr>
                                        <th>Kamera Belakang</th>
                                        <td>:</td>
                                        <td><?= $row['kamblkg_hp'] ?> MP</td>
                                    </tr>
                                    <tr>
                                        <th>Kamera Depan</th>
                                        <td>:</td>
                                        <td><?= $row['kamdpn_hp'] ?> MP</td>
                                    </tr>
                                    <tr>
                                        <th>Batrai</th>
                                        <td>:</td>
                                        <td><?= $row['batrai_hp'] ?> Mah</td>
                                    </tr>
                                    <tr>
                                        <th>Sistem Operasi</th>
                                        <td>:</td>
                                        <td>Andrroid <?= $row['os_hp'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Resolusi Layar</th>
                                        <td>:</td>
                                        <td><?= $row['layar_hp'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Warna</th>
                                        <td>:</td>
                                        <td><?= $row['warna_hp'] ?></td>
                                    </tr>

                                </table>
                                <div class="d-flex justify-content-start">
                                    <div class="me-3"><a href="<?= $row['link_hp'] ?>" class="btn btn-dark">GSMarena</a></div>
                                    <div><a href="data_hp.php" class="btn btn-primary">Kembali</a></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('inc/footer.php');  ?>