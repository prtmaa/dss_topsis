<?php
include('../database/koneksi.php');
include('layout/user_header.php');

?>

<title>TOPSIS | Home</title>

<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/cool-background.png');">
        <div class="container my-auto">
            <div>
                <div class="row">

                    <div class="col-lg-10 col-md-8 col-12 mx-auto mt-7">

                        <div class="card z-index-0 fadeIn3 fadeInBottom mt-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center">Daftar Alternatif</h4>

                                </div>
                            </div>

                            <div class="card-body">

                                <div class="d-flex">
                                    <a class="btn bg-gradient-dark" href="user_form.php">Kembali</a>
                                </div>

                                <?php
                                $jumlah = mysqli_query($koneksi, "SELECT * from tb_hp_user");

                                $count = mysqli_num_rows($jumlah);
                                if ($count != 0) {
                                ?>

                                    <div class="table-responsive p-0">
                                        <table id="data" class="table align-items-center mb-0">
                                            <thead>
                                                <th>No</th>
                                                <th class="">Nama</th>
                                                <th class="align-middle text-center">Harga</th>
                                                <th class="align-middle text-center">Procesor</th>
                                                <!-- <th>Aksi</th> -->
                                            </thead>
                                            <tbody>
                                                <?php
                                                $data = mysqli_query($koneksi, "SELECT * FROM tb_hp_user");
                                                $no = 1;
                                                while ($data_hp = mysqli_fetch_array($data)) {

                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $no++ ?></th>
                                                        <td><?php echo $data_hp['nama_hp'] ?></td>
                                                        <td class="align-middle text-center text-sm"><?php echo "Rp " . number_format("$data_hp[harga_hp]", 2, ",", ".")  ?></td>
                                                        <td class="align-middle text-center text-sm"><?= $data_hp['procesor_hp']; ?> (<?php echo $data_hp['rank_pro'] ?>)</td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                        </div>

                        <div class="card z-index-0 fadeIn3 fadeInBottom mt-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">

                                    <h4 class="text-white font-weight-bolder text-center">Pilih Kriteria</h4>

                                </div>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="user_hasil.php">
                                    <div class="row">
                                        <div class="col-6">


                                            <?php
                                            $query = mysqli_query($koneksi, "SELECT * FROM tb_hp_user");
                                            while ($result = mysqli_fetch_array($query)) {
                                                $harga[] = $result['harga_hp'];
                                            }
                                            ?>

                                            <div class="mt-2">
                                                <h6 for="price-min">Harga</h6>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <div class="input-group input-group-outline">
                                                            <input class="form-control" type="number" id="min" name="min" value="<?php echo MIN($harga); ?>" min="0" disabled>
                                                        </div>
                                                    </div> -
                                                    <div class="col-5">
                                                        <div class="input-group input-group-outline">
                                                            <input class="form-control" type="number" id="max" name="max" value="<?php echo MAX($harga); ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <h6>RAM</h6>
                                                <?php $ram = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%ram%'") ?>
                                                <div class="input-group input-group-outline">
                                                    <select required name="ram" class="form-control">
                                                        <option value="" disabled selected>Kriteria RAM</option>
                                                        <?php
                                                        while ($data_ram = mysqli_fetch_array($ram)) {
                                                        ?>
                                                            <option value="<?= $data_ram['bobot'] ?>"><?php echo $data_ram['kriteria'] ?> GB</option>
                                                        <?php } ?>
                                                        <option value="0">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <h6>Memori</h6>
                                                <?php $memori = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%rom%'")  ?>
                                                <div class="input-group input-group-outline">
                                                    <select required name="memori" class="form-control">
                                                        <option value="" disabled selected>Kriteria Memori</option>
                                                        <?php
                                                        while ($data_memori = mysqli_fetch_array($memori)) {
                                                        ?>
                                                            <option value="<?= $data_memori['bobot'] ?>"><?php echo $data_memori['kriteria'] ?> GB</option>
                                                        <?php } ?>
                                                        <option value="0">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <h6>Processor</h6>
                                                <?php $procesor = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%pro%'")  ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="input-group input-group-outline">
                                                            <select required name="processor" class="form-control">
                                                                <option value="" disabled selected>Kriteria Processor</option>
                                                                <?php
                                                                while ($data_procesor = mysqli_fetch_array($procesor)) {
                                                                ?>
                                                                    <option value="<?= $data_procesor['bobot'] ?>"><?php echo $data_procesor['kriteria'] ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <a type="button" class="btn bg-gradient-dark btn-sm" href="https://nanoreview.net/en/soc-list/rating" target="_blank">Cek Rating Processor</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <h6>Kamera Belakang</h6>
                                                <?php $kamerab = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamb%'")  ?>
                                                <div class="input-group input-group-outline">
                                                    <select required name="kamera_b" class="form-control">
                                                        <option value="" disabled selected>Kriteria Kamera Belakang</option>
                                                        <?php
                                                        while ($data_kamerab = mysqli_fetch_array($kamerab)) {
                                                        ?>
                                                            <option value="<?= $data_kamerab['bobot'] ?>"><?php echo $data_kamerab['kriteria'] ?> - <?php echo $data_kamerab['kriteria2'] ?> MP</option>
                                                        <?php } ?>
                                                        <option value="0">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-6">

                                            <div class="mt-2">
                                                <h6>Kamera Depan</h6>
                                                <?php $kamerad = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamd%'")  ?>
                                                <div class="input-group input-group-outline">
                                                    <select required name="kamera_d" class="form-control">
                                                        <option value="" disabled selected>Kriteria Kamera Depan</option>
                                                        <?php
                                                        while ($data_kamerad = mysqli_fetch_array($kamerad)) {
                                                        ?>
                                                            <option value="<?= $data_kamerad['bobot'] ?>"><?php echo $data_kamerad['kriteria'] ?> - <?php echo $data_kamerad['kriteria2'] ?> MP</option>
                                                        <?php } ?>
                                                        <option value="0">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <h6>Batrai</h6>
                                                <?php $batrai = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%bat%'")  ?>
                                                <div class="input-group input-group-outline">
                                                    <select required name="batrai" class="form-control">
                                                        <option value="" disabled selected>Kriteria Batrai</option>
                                                        <?php
                                                        while ($data_batrai = mysqli_fetch_array($batrai)) {
                                                        ?>
                                                            <option value="<?= $data_batrai['bobot'] ?>"><?php echo $data_batrai['kriteria'] ?> - <?php echo $data_batrai['kriteria2'] ?> Mah</option>
                                                        <?php } ?>
                                                        <option value="0">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <h6>Sistem Operasi</h6>
                                                <?php $os = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%os%'")  ?>
                                                <div class="input-group input-group-outline">
                                                    <select required name="os" class="form-control">
                                                        <option value="" disabled selected>Kriteria OS</option>
                                                        <?php
                                                        while ($data_os = mysqli_fetch_array($os)) {
                                                        ?>
                                                            <option value="<?= $data_os['bobot'] ?>">Android <?php echo $data_os['kriteria'] ?></option>
                                                        <?php } ?>
                                                        <option value="0">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="mt-2">
                                                <h6>Resolusi Layar</h6>
                                                <?php $resolusi = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%layar%'")  ?>
                                                <div class="input-group input-group-outline">
                                                    <select required name="resolusi" class="form-control">
                                                        <option value="" disabled selected>Kriteria Resolusi</option>
                                                        <?php
                                                        while ($data_resolusi = mysqli_fetch_array($resolusi)) {
                                                        ?>
                                                            <option value="<?= $data_resolusi['bobot'] ?>"> <?php echo $data_resolusi['kriteria'] ?></option>
                                                        <?php } ?>
                                                        <option value="0">Tidak Ada</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <h6>Warna</h6>
                                                <div class="input-group input-group-outline">
                                                    <select required name="warna" class="form-control">
                                                        <option value="" disabled selected>Kriteria Warna</option>

                                                        <option value="3">Populer</option>
                                                        <option value="2">Sedang</option>
                                                        <option value="1">Kurang</option>
                                                        <option value="0">Tidak Ada</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="card-footer d-flex justify-content-end mt-5">
                                                </i> <button type='submit' name='submit' class='btn bg-gradient-dark'><i class="fas fa-search"></i> Cari</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } else { ?>
                        <h3>Data masih kosong silahkan masukan data alternatif</h3>
                        <a href="user_form.php" class="btn bg-gradient-dark">Iya</a>
                    <?php } ?>

                    <?php include('layout/user_footer.php'); ?>