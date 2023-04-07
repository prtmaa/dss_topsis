<?php
include('../database/koneksi.php');
session_start();

if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "processor") {

        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria='$nama' WHERE id_kriteria='$id' ");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Telah Tersimpan'
?>
            <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script>
        <?php }
        //
    } elseif ($_POST['aksi'] == "memori") {

        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria='$nama' WHERE id_kriteria='$id' ");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Telah Tersimpan'
        ?>
            <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script>
        <?php }
        //   
    } elseif ($_POST['aksi'] == "ram") {

        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria='$nama' WHERE id_kriteria='$id' ");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Telah Tersimpan'
        ?>
            <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script>
        <?php }
        //
    } elseif ($_POST['aksi'] == "layar") {

        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria='$nama' WHERE id_kriteria='$id' ");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Telah Tersimpan'
        ?>
            <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script>
        <?php }
        //
    } elseif ($_POST['aksi'] == "os") {

        $id = $_POST['id'];
        $nama = $_POST['nama'];

        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria='$nama' WHERE id_kriteria='$id' ");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Telah Tersimpan'
        ?>
            <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script>
        <?php }
        //
    } elseif ($_POST['aksi'] == "batrai") {

        $k2 = $_POST['k2'];
        $k3 = $_POST['k3'];
        $k4 = $_POST['k4'];
        $k5 = $_POST['k5'];
        $k6 = $_POST['k6'];
        $k7 = $_POST['k7'];
        $k8 = $_POST['k8'];
        $k10 = $_POST['k10'];

        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria2='$k2' WHERE id_kriteria = '36'; ");
        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k3', kriteria2 = '$k4' WHERE id_kriteria = '37'; ");
        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k5', kriteria2 = '$k6' WHERE id_kriteria = '38'; ");
        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k7', kriteria2 = '$k8' WHERE id_kriteria = '39'; ");
        $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria2 = '$k10' WHERE id_kriteria = '40'; ");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Telah Tersimpan'

        ?> <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script> <?php }
                    //
                } elseif ($_POST['aksi'] == "kamb") {

                    $k2 = $_POST['kb2'];
                    $k3 = $_POST['kb3'];
                    $k4 = $_POST['kb4'];
                    $k5 = $_POST['kb5'];
                    $k6 = $_POST['kb6'];
                    $k7 = $_POST['kb7'];
                    $k8 = $_POST['kb8'];
                    $k10 = $_POST['kb10'];

                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria2='$k2' WHERE id_kriteria = '21'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k3', kriteria2 = '$k4' WHERE id_kriteria = '22'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k5', kriteria2 = '$k6' WHERE id_kriteria = '23'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k7', kriteria2 = '$k8' WHERE id_kriteria = '24'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria2 = '$k10' WHERE id_kriteria = '25'; ");

                    if ($sql) {
                        $_SESSION["sukses"] = 'Data Telah Tersimpan'

                        ?> <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script> <?php }
                    //
                } elseif ($_POST['aksi'] == "kamd") {

                    $k2 = $_POST['kd2'];
                    $k3 = $_POST['kd3'];
                    $k4 = $_POST['kd4'];
                    $k5 = $_POST['kd5'];
                    $k6 = $_POST['kd6'];
                    $k7 = $_POST['kd7'];
                    $k8 = $_POST['kd8'];
                    $k10 = $_POST['kd10'];

                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria2='$k2' WHERE id_kriteria = '26'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k3', kriteria2 = '$k4' WHERE id_kriteria = '27'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k5', kriteria2 = '$k6' WHERE id_kriteria = '28'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria = '$k7', kriteria2 = '$k8' WHERE id_kriteria = '29'; ");
                    $sql = $koneksi->query("UPDATE tb_kriteria SET kriteria2 = '$k10' WHERE id_kriteria = '30'; ");

                    if ($sql) {
                        $_SESSION["sukses"] = 'Data Telah Tersimpan'

                        ?> <script type='text/javascript'>
                window.location.href = "kriteria.php"
            </script> <?php }
                }
            }
