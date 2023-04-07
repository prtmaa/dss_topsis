<?php
include('../database/koneksi.php');
//tambah data
if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah") {
        session_start();

        error_reporting(E_ALL ^ E_NOTICE);
        $warna = $_POST['warna'];
        $ket = $_POST['ket'];


        $sql = $koneksi->query("INSERT INTO tb_warna(nama, keterangan) VALUES ('$warna', '$ket')");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Telah Tersimpan'
?>
            <script type='text/javascript'>
                window.location.href = "warna.php"
            </script>
        <?php }
        //edit data
    } elseif ($_POST['aksi'] == "edit") {
        session_start();
        error_reporting(E_ALL ^ E_NOTICE);
        $id = $_POST['id_warna'];
        $warna = $_POST['warna'];
        $ket = $_POST['ket'];

        $query = "UPDATE tb_warna SET id_warna='$id', nama='$warna', keterangan='$ket' WHERE id_warna='$id';";

        $sql = mysqli_query($koneksi, $query);
        if ($sql) {
            $_SESSION["sukses"] = 'Data Berhasil Diubah';
        ?>
            <script type='text/javascript'>
                window.location.href = "warna.php"
            </script>
<?php }
    }
}


//hapus data
$id = $_POST['id'];

$sql = $koneksi->query("DELETE FROM tb_warna WHERE id_warna='$id'");

?>
<?php
if ($sql) {
?>
    <script type='text/javascript'>
        window.location.href = "warna.php"
    </script>
<?php }
