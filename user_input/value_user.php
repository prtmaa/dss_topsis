<?php

//mencari bobot harga
$harga1 = MIN($harga);
$harga5 = MAX($harga);
$harga3 = ($harga1 + $harga5) / 2;
$harga4 = ($harga3 + $harga5) / 2;
$harga2 = ($harga1 + $harga3) / 2;

if ($row['harga_hp'] >= $harga1 && $row['harga_hp'] < $harga2) {
    $wh = 5;
} else if ($row['harga_hp'] >= $harga2 && $row['harga_hp'] < $harga3) {
    $wh = 4;
} else if ($row['harga_hp'] >= $harga3 && $row['harga_hp'] < $harga4) {
    $wh = 3;
} else if ($row['harga_hp'] >= $harga4 && $row['harga_hp'] < $harga5) {
    $wh = 2;
} else if ($row['harga_hp'] == $harga5) {
    $wh = 1;
} else {
    $wh = 0;
}

$a_ram = array();
$ram = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%ram%'");
while ($data_ram = mysqli_fetch_array($ram)) {
    array_push($a_ram, $data_ram['kriteria']);
}

if ($row['ram_hp'] == $a_ram[0]) {
    $wr = 1;
} else if ($row['ram_hp'] == $a_ram[1]) {
    $wr = 2;
} else if ($row['ram_hp'] == $a_ram[2]) {
    $wr = 3;
} else if ($row['ram_hp'] == $a_ram[3]) {
    $wr = 4;
} else if ($row['ram_hp'] == $a_ram[4]) {
    $wr = 5;
} else {
    $wr = 0;
}

$a_memori = array();
$memori = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%rom%'");
while ($data_memori = mysqli_fetch_array($memori)) {
    array_push($a_memori, $data_memori['kriteria']);
}

if ($row['rom_hp'] == $a_memori[0]) {
    $wm = 1;
} else if ($row['rom_hp'] == $a_memori[1]) {
    $wm = 2;
} else if ($row['rom_hp'] == $a_memori[2]) {
    $wm = 3;
} else if ($row['rom_hp'] == $a_memori[3]) {
    $wm = 4;
} else if ($row['rom_hp'] == $a_memori[4]) {
    $wm = 5;
} else {
    $wm = 0;
}

//mencari bobot sistem operasi
$a_os = array();
$os = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%os%'");
while ($data_os = mysqli_fetch_array($os)) {
    array_push($a_os, $data_os['kriteria']);
}

if ($row['os_hp'] == $a_os[0]) {
    $ws = 1;
} else if ($row['os_hp'] == $a_os[1]) {
    $ws = 2;
} else if ($row['os_hp'] == $a_os[2]) {
    $ws = 3;
} else if ($row['os_hp'] == $a_os[3]) {
    $ws = 4;
} else if ($row['os_hp'] == $a_os[4]) {
    $ws = 5;
} else {
    $ws = 0;
}


//mencari bobot batrai
$a_batrai_awal = array();
$a_batrai_akhir = array();
$batrai = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%bat%'");
while ($data_batrai = mysqli_fetch_array($batrai)) {
    array_push($a_batrai_awal, $data_batrai['kriteria']);
    array_push($a_batrai_akhir, $data_batrai['kriteria2']);
}

if ($row['batrai_hp'] <= $a_batrai_akhir[0]) {
    $wb = 1;
} else if ($row['batrai_hp'] >= $a_batrai_awal[1] && $row['batrai_hp'] <= $a_batrai_akhir[1]) {
    $wb = 2;
} else if ($row['batrai_hp'] >= $a_batrai_awal[2] && $row['batrai_hp'] <= $a_batrai_akhir[2]) {
    $wb = 3;
} else if ($row['batrai_hp'] >= $a_batrai_awal[3] && $row['batrai_hp'] <= $a_batrai_akhir[3]) {
    $wb = 4;
} else if ($row['batrai_hp'] >= $a_batrai_akhir[4]) {
    $wb = 5;
} else {
    $wb = 0;
}


//mencari bobot kamera belakang
$a_kamerab_awal = array();
$a_kamerab_akhir = array();
$kamerab = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamb%'");
while ($data_kamerab = mysqli_fetch_array($kamerab)) {
    array_push($a_kamerab_awal, $data_kamerab['kriteria']);
    array_push($a_kamerab_akhir, $data_kamerab['kriteria2']);
}

if ($row['kamblkg_hp'] <= $a_kamerab_akhir[0]) {
    $wkb = 1;
} else if ($row['kamblkg_hp'] >= $a_kamerab_awal[1] && $row['kamblkg_hp'] <= $a_kamerab_akhir[1]) {
    $wkb = 2;
} else if ($row['kamblkg_hp'] >= $a_kamerab_awal[2] && $row['kamblkg_hp'] <= $a_kamerab_akhir[2]) {
    $wkb = 3;
} else if ($row['kamblkg_hp'] >= $a_kamerab_awal[3] && $row['kamblkg_hp'] <= $a_kamerab_akhir[3]) {
    $wkb = 4;
} else if ($row['kamblkg_hp'] >= $a_kamerab_akhir[4]) {
    $wkb = 5;
} else {
    $wkb = 0;
}


//mencari bobot kamera depan
$a_kamerad_awal = array();
$a_kamerad_akhir = array();
$kamerad = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%kamd%'");
while ($data_kamerad = mysqli_fetch_array($kamerad)) {
    array_push($a_kamerad_awal, $data_kamerad['kriteria']);
    array_push($a_kamerad_akhir, $data_kamerad['kriteria2']);
}

if ($row['kamdpn_hp'] <= $a_kamerad_akhir[0]) {
    $wkd = 1;
} else if ($row['kamdpn_hp'] >= $a_kamerad_awal[1] && $row['kamdpn_hp'] <= $a_kamerad_akhir[1]) {
    $wkd = 2;
} else if ($row['kamdpn_hp'] >= $a_kamerad_awal[2] && $row['kamdpn_hp'] <= $a_kamerad_akhir[2]) {
    $wkd = 3;
} else if ($row['kamdpn_hp'] >= $a_kamerad_awal[3] && $row['kamdpn_hp'] <= $a_kamerad_akhir[3]) {
    $wkd = 4;
} else if ($row['kamdpn_hp'] >= $a_kamerad_akhir[4]) {
    $wkd = 5;
} else {
    $wkd = 0;
}


//mencari bobot processor
$a_procesor = array();
$procesor = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%pro%'");
while ($data_procesor = mysqli_fetch_array($procesor)) {
    array_push($a_procesor, $data_procesor['kriteria']);
}

if ($row['rank_pro'] == $a_procesor[0]) {
    $wp = 1;
} else if ($row['rank_pro'] == $a_procesor[1]) {
    $wp = 2;
} else if ($row['rank_pro'] == $a_procesor[2]) {
    $wp = 3;
} else if ($row['rank_pro'] == $a_procesor[3]) {
    $wp = 4;
} else if ($row['rank_pro'] == $a_procesor[4]) {
    $wp = 5;
} else {
    $wp = 0;
}

//mencari bobot processor
$a_resolusi = array();
$resolusi = mysqli_query($koneksi, "SELECT * FROM tb_kriteria WHERE nama LIKE '%layar%'");
while ($data_resolusi = mysqli_fetch_array($resolusi)) {
    array_push($a_resolusi, $data_resolusi['kriteria']);
}

if ($row['layar_hp'] == $a_resolusi[0]) {
    $wl = 1;
} else if ($row['layar_hp'] == $a_resolusi[1]) {
    $wl = 2;
} else if ($row['layar_hp'] == $a_resolusi[2]) {
    $wl = 3;
} else if ($row['layar_hp'] == $a_resolusi[3]) {
    $wl = 4;
} else if ($row['layar_hp'] == $a_resolusi[4]) {
    $wl = 5;
} else {
    $wl = 0;
}

$populer = array();
$sedang = array();
$kurang = array();

$pop = mysqli_query($koneksi, "SELECT * FROM tb_warna WHERE keterangan LIKE '%Populer%'");
while ($a = mysqli_fetch_array($pop)) {
    array_push($populer, $a['nama']);
}
$sed = mysqli_query($koneksi, "SELECT * FROM tb_warna WHERE keterangan LIKE '%Sedang%'");
while ($b = mysqli_fetch_array($sed)) {
    array_push($sedang, $b['nama']);
}
$kur = mysqli_query($koneksi, "SELECT * FROM tb_warna WHERE keterangan LIKE '%Kurang%'");
while ($c = mysqli_fetch_array($kur)) {
    array_push($kurang, $c['nama']);
}



if (array_search("$row[warna_hp]", $populer,) !== false) {
    $ww = 3;
} else if (array_search("$row[warna_hp]", $sedang,) !== false) {
    $ww = 2;
} else if (array_search("$row[warna_hp]", $kurang,) !== false) {
    $ww = 1;
} else {
    $ww = 0;
}
