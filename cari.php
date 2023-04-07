<?php
include('database/koneksi.php');
include('layout/user_header.php');

?>

<script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>

<title>TOPSIS | Home</title>

<main class="main-content  mt-0">
  <div class="page-header align-items-start min-vh-100" style="background-image: url('assets/img/cool-background.png');">
    <div class="container my-auto">
      <div>
        <div class="row">

          <div class="col-lg-10 col-md-8 col-12 mx-auto mt-7">



            <div class="card z-index-0 fadeIn3 fadeInBottom mt-5">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">

                  <h4 class="text-white font-weight-bolder text-center">Pilih Kriteria</h4>

                </div>
              </div>
              <div class="card-body">
                <form method="POST" action="hasil.php">
                  <div class="row">
                    <div class="col-6">


                      <div class="mt-2">

                        <div class="row">
                          <div class="col-5">
                            <h6 for="price-min">Harga Minimal</h6>
                          </div>
                          <div class="col-5">
                            <h6 for="price-max">Harga Maksimal</h6>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-5">
                            <div class="input-group input-group-outline">
                              <input class="form-control" type="text" id="input-vol" name="min" placeholder="MIN" min="0" required>
                            </div>
                          </div> -
                          <div class="col-5">
                            <div class="input-group input-group-outline">
                              <input class="form-control" type="text" id="input-vol2" name="max" placeholder="MAX" required>
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

                      <div class="card-footer d-flex justify-content-end mt-5">
                        </i> <button type='submit' name='submit' class='btn bg-gradient-dark'><i class="fas fa-search"></i> Cari</button>
                      </div>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <script>
            new AutoNumeric('#input-vol', {
              decimalCharacter: AutoNumeric.options.decimalCharacter.comma,
              digitGroupSeparator: AutoNumeric.options.digitGroupSeparator.dot
            });

            AutoNumeric.getAutoNumericElement('#input-vol').set(0);
            var volume = AutoNumeric.getAutoNumericElement('#input-vol').get();
            console.log(volume);

            new AutoNumeric('#input-vol2', {
              decimalCharacter: AutoNumeric.options.decimalCharacter.comma,
              digitGroupSeparator: AutoNumeric.options.digitGroupSeparator.dot
            });

            AutoNumeric.getAutoNumericElement('#input-vol2').set(0);
            var volume = AutoNumeric.getAutoNumericElement('#input-vol2').get();
            console.log(volume);
          </script>

          <?php include('layout/user_footer.php'); ?>