<?php
include('../database/koneksi.php');
$hp = $_POST['hp_id'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tb_hp WHERE id_hp='$hp'");
$r = mysqli_fetch_array($tampil);

$jml = mysqli_num_rows($tampil);

// if ($jml > 0) {
// while ($r = mysqli_fetch_array($tampil)) {

$warna = explode(', ', $r['warna_hp']);
sort($warna);
// $i++;


foreach ($warna as $value) { ?>
<?php
    echo ('<option value="' . $value . '">' . $value . '</option>');
}




// } else {
//     echo "<option selected>- Data Wilayah Tidak Ada, Pilih Yang Lain -</option>";
// }
