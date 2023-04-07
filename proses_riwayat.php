<?php
$riwayat = array();

$max = $_POST['max'];
$min = $_POST['min'];

$W2    = $_POST['ram'];
$W3    = $_POST['memori'];
$W4    = $_POST['processor'];
$W5    = $_POST['kamera_b'];
$W6    = $_POST['kamera_d'];
$W7    = $_POST['batrai'];
$W8    = $_POST['os'];
$W9    = $_POST['resolusi'];

$r1 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%ram%' AND bobot LIKE '%" . $W2 . "%'");
if ($r_ram = mysqli_fetch_array($r1)) {
    $rr_ram = $r_ram['kriteria'];
} else {
    $rr_ram = 'Tidak Ada';
};


$r2 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%rom%' AND bobot LIKE '%" . $W3 . "%'");
if ($r_rom = mysqli_fetch_array($r2)) {
    $rr_rom = $r_rom['kriteria'];
} else {
    $rr_rom = 'Tidak Ada';
};

$r3 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%pro%' AND bobot LIKE '%" . $W4 . "%'");
if ($r_pro = mysqli_fetch_array($r3)) {
    $rr_pro = $r_pro['kriteria'];
} else {
    $rr_pro = 'Tidak Ada';
};

$r4 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamb%' AND bobot LIKE '%" . $W5 . "%'");
if ($r_kamb = mysqli_fetch_array($r4)) {
    $rr_kamb = $r_kamb['kriteria'];
    $rr_kamb2 = $r_kamb['kriteria2'];
} else {
    $rr_kamb = 'Tidak Ada';
    $rr_kamb2 = '';
};

$r5 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamd%' AND bobot LIKE '%" . $W6 . "%'");
if ($r_kamd = mysqli_fetch_array($r5)) {
    $rr_kamd = $r_kamd['kriteria'];
    $rr_kamd2 = $r_kamd['kriteria2'];
} else {
    $rr_kamd = 'Tidak Ada';
    $rr_kamd2 = '';
};

$r6 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%bat%' AND bobot LIKE '%" . $W7 . "%'");
if ($r_bat = mysqli_fetch_array($r6)) {
    $rr_bat = $r_bat['kriteria'];
    $rr_bat2 = $r_bat['kriteria2'];
} else {
    $rr_bat = 'Tidak Ada';
    $rr_bat2 = '';
};

$r7 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%os%' AND bobot LIKE '%" . $W8 . "%'");
if ($r_os = mysqli_fetch_array($r7)) {
    $rr_os = $r_os['kriteria'];
} else {
    $rr_os = 'Tidak Ada';
};

$r8 = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%layar%' AND bobot LIKE '%" . $W9 . "%'");
if ($r_layar = mysqli_fetch_array($r8)) {
    $rr_layar = $r_layar['kriteria'];
} else {
    $rr_layar = 'Tidak Ada';
};

array_push(
    $riwayat,
    $min,
    $max,
    $rr_ram,
    $rr_rom,
    $rr_pro,
    $rr_kamb,
    $rr_kamb2,
    $rr_kamd,
    $rr_kamd2,
    $rr_bat,
    $rr_bat2,
    $rr_os,
    $rr_layar
);

$query = mysqli_query($koneksi, "SELECT * FROM perhitungan ORDER BY  nilai DESC limit 1");
$rekomendasi = mysqli_fetch_array($query);
$nama = $rekomendasi['nama'];
$nilai = $rekomendasi['nilai'];
$tanggal = date("Y-m-d H:i:s");

$sql = "INSERT INTO `tb_riwayat`(`tanggal`,`rekomendasi`, `nilai`, `harga`, `ram`, `rom`, `procesor`, `kamb`, `kamd`, `batrai`, `os`, `layar`) 
                            VALUES ('$tanggal', '$nama','$nilai', '$riwayat[0] - $riwayat[1]', '$riwayat[2]', '$riwayat[3]', '$riwayat[4]', '$riwayat[5] - $riwayat[6]', '$riwayat[7] - $riwayat[8]',
                            '$riwayat[9] - $riwayat[10]', '$riwayat[11]', '$riwayat[12]' )";
mysqli_query($koneksi, $sql);
