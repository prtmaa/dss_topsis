<?php
include('../database/koneksi.php');


session_start();

$id = $_POST['nama'];
$total = count($id);

for ($i = 0; $i < $total; $i++) {
    $data[$i] = mysqli_query($koneksi, "SELECT * FROM tb_hp WHERE id_hp='$id[$i]'");
    $hp[$i] = mysqli_fetch_array($data[$i]);
}


for ($i = 0; $i < $total; $i++) {
    $nama[$i] = $hp[$i][1];
    $harga[$i] = $hp[$i][2];
    $ram[$i] = $hp[$i][3];
    $memori[$i] = $hp[$i][4];
    $pro[$i] = $hp[$i][5];
    $rank[$i] = $hp[$i][6];
    $kamerad[$i] = $hp[$i][7];
    $kamerab[$i] = $hp[$i][8];
    $batrai[$i] = $hp[$i][9];
    $os[$i] = $hp[$i][10];
    $resolusi[$i] = $hp[$i][11];
    $foto[$i] = $hp[$i][14];
    $warna = $_POST['warna'];

    $sql = $koneksi->query("INSERT INTO tb_hp_user(nama_hp, harga_hp, ram_hp, rom_hp, procesor_hp, rank_pro, kamblkg_hp, kamdpn_hp, batrai_hp, os_hp, layar_hp, warna_hp, foto) 
        VALUES ('$nama[$i]', '$harga[$i]', '$ram[$i]', '$memori[$i]', '$pro[$i]', '$rank[$i]', '$kamerab[$i]', '$kamerad[$i]', '$batrai[$i]', '$os[$i]', '$resolusi[$i]', '$warna[$i]', '$foto[$i]')");
}

if ($sql) {
    $_SESSION["sukses"] = 'Data Berhasil Disimpan';
?>
    <script type='text/javascript'>
        window.location.href = "user_input.php"
    </script>
<?php }
