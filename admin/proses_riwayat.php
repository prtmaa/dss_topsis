<?php
include('../database/koneksi.php');
$hps = "TRUNCATE TABLE `tb_hp_user`";

$sql = $koneksi->query("TRUNCATE TABLE `tb_riwayat`");

if ($sql) {
?>
    <script type='text/javascript'>
        window.location.href = "riwayat.php"
    </script>
<?php }
