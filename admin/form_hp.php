<?php
include('../database/koneksi.php');
include('inc/header.php');



$nama = '';
$harga = '';
$ram = '';
$memori = '';
$processor = '';
$r_processor = '';
$kam_b = '';
$kam_d = '';
$batrai = '';
$os = '';
$layar = '';
$link = '';
$warna = '';

if (isset($_GET['ubah'])) {
    $id_hp = $_GET['ubah'];
    $query = "SELECT * FROM tb_hp WHERE id_hp = '$id_hp';";
    $sql = mysqli_query($koneksi, $query);

    $result = mysqli_fetch_assoc($sql);

    $nama = $result['nama_hp'];
    $harga = $result['harga_hp'];
    $ram = $result['ram_hp'];
    $memori = $result['rom_hp'];
    $processor = $result['procesor_hp'];
    $r_processor = $result['rank_pro'];
    $kam_b = $result['kamblkg_hp'];
    $kam_d = $result['kamdpn_hp'];
    $batrai = $result['batrai_hp'];
    $os = $result['os_hp'];
    $layar = $result['layar_hp'];
    $link = $result['link_hp'];
    $warna = explode(', ', $result['warna_hp']);
}
?>

<title>ADMIN | Form HP</title>
<script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>

<div class="container-fluid py-4 mt-3">
    <div class="content-wrapper">
        <div class="row">

            <div class="d-flex justify-content-center">

                <div class="col-lg-10 position-relative z-index-2 mb-5">
                    <div class="card">

                        <div class="card card-secondary">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3">
                                    <h3 class="text-center text-white text-capitalize ps-3">Data Smartphone</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="container">
                                        <form method="POST" action="proses_hp.php" enctype="multipart/form-data">
                                            <input type="hidden" value="<?php echo $id_hp; ?>" name="id_hp">
                                            <div class="mb-3 row">

                                                <div class="input-group input-group-outline">
                                                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                                                    <input type="text" class="form-control form-control-sm" id="harga" name="harga" value="<?php echo $harga; ?>" required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="ram" class="col-sm-3 col-form-label">RAM</label>
                                                    <input type="number" class="form-control" id="ram" name="ram" value="<?php echo $ram; ?>" min='1' required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="memori" class="col-sm-3 col-form-label">Internal</label>
                                                    <input type="number" class="form-control" id="memori" name="memori" value="<?php echo $memori; ?>" min='1' required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="processor" class="col-sm-3 col-form-label">Processor</label>
                                                    <input type="text" class="form-control" id="processor" name="processor" value="<?php echo $processor; ?>" required>
                                                </div>
                                            </div>

                                            <div class="mb-0 row">
                                                <div class="input-group input-group-outline col-sm-8">
                                                    <label for="r_processor" class="col-sm-3 col-form-label">Rank Processor</label>
                                                    <?php $r_procesor = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%pro%'") ?>
                                                    <select required name="r_processor" id="r_processor" class="form-control">
                                                        <option value="" disabled selected>- PILIH -</option>
                                                        <?php
                                                        while ($data_procesor = mysqli_fetch_array($r_procesor)) {
                                                        ?>
                                                            <option <?php if ($r_processor == $data_procesor['kriteria']) {
                                                                        echo "selected";
                                                                    } ?> value="<?= $data_procesor['kriteria'] ?>"><?php echo $data_procesor['kriteria'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-3"></div>
                                                <div class="col-9 ">
                                                    <a type="button" class="btn btn-success btn-sm" href="https://nanoreview.net/en/soc-list/rating" target="_blank">Cek Rangking Processor</a>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="kamera" class="col-sm-3 col-form-label">Kamera Belakang</label>
                                                    <input type="number" class="form-control" id="kamerab" name="kamerab" value="<?php echo $kam_b; ?>" min='1' required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="kamera" class="col-sm-3 col-form-label">Kamera Depan</label>
                                                    <input type="number" class="form-control" id="kamerad" name="kamerad" value="<?php echo $kam_d; ?>" min='1' required>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="kamera" class="col-sm-3 col-form-label">Batrai</label>
                                                    <input type="number" class="form-control" id="batrai" name="batrai" value="<?php echo $batrai; ?>" min='1' required>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <?php $oss = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%os%'") ?>
                                                <div class="input-group input-group-outline">
                                                    <label for="kamera" class="col-sm-3 col-form-label">OS</label>
                                                    <select required name="os" id="os" class="form-control">
                                                        <option value="" disabled selected>- PILIH -</option>
                                                        <?php
                                                        while ($data_os = mysqli_fetch_array($oss)) {
                                                        ?>
                                                            <option <?php if ($os == $data_os['kriteria']) {
                                                                        echo "selected";
                                                                    } ?> value="<?= $data_os['kriteria'] ?>">Android <?php echo $data_os['kriteria'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="resolusi" class="col-sm-3 col-form-label">Resolui Layar</label>
                                                    <?php $resolusi = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%layar%'") ?>
                                                    <select required name="resolusi" id="resolusi" class="form-control">
                                                        <option value="" disabled selected>- PILIH -</option>
                                                        <?php
                                                        while ($data_resolusi = mysqli_fetch_array($resolusi)) {
                                                        ?>
                                                            <option <?php if ($layar == $data_resolusi['kriteria']) {
                                                                        echo "selected";
                                                                    } ?> value="<?= $data_resolusi['kriteria'] ?>"> <?php echo $data_resolusi['kriteria'] ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-0 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="link" class="col-sm-3 col-form-label">Link GSMarena</label>
                                                    <input type="text" class="form-control" id="link" name="link" value="<?php echo $link; ?>" required>
                                                </div>
                                                <div class="col-3"></div>
                                                <div class="col-9 ">
                                                    <a type="button" class="btn btn-success btn-sm" href="https://www.gsmarena.com/" target="_blank">Link GSMArena</a>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <div class="input-group input-group-outline">
                                                    <label for="kamera" class="col-sm-3 col-form-label">Foto</label>
                                                    <input <?php if (isset($_GET['ubah'])) {
                                                                echo "required";
                                                            } ?> type="file" class="form-control" id="foto" name="foto" accept="image/*">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-3">
                                                    <label for="warna" class="form-label">Warna</label>
                                                </div>
                                                <div class="col-9">
                                                    <div class="form-check">
                                                        <?php
                                                        if (isset($_GET['ubah'])) { ?>
                                                            <?php
                                                            $data_warna = mysqli_query($koneksi, "SELECT * FROM tb_warna ");
                                                            while ($warnaa = mysqli_fetch_array($data_warna)) {
                                                                $aa = $warnaa['nama'];
                                                            ?>
                                                                <input class="form-check-input" type="checkbox" name="warna[]" value="<?= $warnaa['nama'] ?>" <?php if (in_array("$aa", $warna)) echo "checked"; ?>>
                                                                <label class="form-check-label"><?= $warnaa['nama'] ?></label><br>
                                                            <?php }
                                                        } else { ?>
                                                            <?php
                                                            $data_warna = mysqli_query($koneksi, "SELECT * FROM tb_warna ");
                                                            while ($warnaa = mysqli_fetch_array($data_warna)) {
                                                                $aa = $warnaa['nama'];
                                                            ?>
                                                                <input class="form-check-input " type="checkbox" name="warna[]" value="<?= $warnaa['nama'] ?>">
                                                                <label class="form-check-label"><?= $warnaa['nama'] ?></label><br>
                                                        <?php }
                                                        }  ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3 row mt-4">
                                                <div class="col">
                                                    <?php if (isset($_GET['ubah'])) { ?>
                                                        <button type="submit" name="aksi" value="edit" class="btn btn-success btn-sm">Simpan</button>
                                                    <?php } else { ?>
                                                        <button type="submit" name="aksi" value="tambah" class="btn btn-success btn-sm">Tambah</button>
                                                    <?php } ?>
                                                    <a href="data_hp.php" type="button" class="btn btn-primary btn-sm">Kembali</a>
                                                </div>
                                            </div>
                                        </form>
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

<script>
    new AutoNumeric('#harga', {
        decimalCharacter: AutoNumeric.options.decimalCharacter.comma,
        digitGroupSeparator: AutoNumeric.options.digitGroupSeparator.dot
    });

    AutoNumeric.getAutoNumericElement('#harga').set();
    var volume = AutoNumeric.getAutoNumericElement('#harga').get();
    console.log(volume);
</script>
<?php include('inc/footer.php');  ?>