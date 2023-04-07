<?php
include('../database/koneksi.php');

//tambah data
if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == "tambah") {
        session_start();

        error_reporting(E_ALL ^ E_NOTICE);
        $nama = $_POST['nama'];

        $harga = $_POST['harga'];
        $harga = preg_replace('/[^0-9]/', '', $harga);
        $harga = $harga / 100;

        $ram = $_POST['ram'];
        $memori = $_POST['memori'];
        $processor = $_POST['processor'];
        $r_processor = $_POST['r_processor'];
        $kamerab = $_POST['kamerab'];
        $kamerad = $_POST['kamerad'];
        $batrai = $_POST['batrai'];
        $os = $_POST['os'];
        $resolusi = $_POST['resolusi'];
        $link = $_POST['link'];
        $warna = implode(", ", $_POST['warna']);
        $foto = $_FILES['foto']['name'];

        $dir = "../assets/img/produk/";
        $tmpFile = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $foto);


        $sql = $koneksi->query("INSERT INTO tb_hp(nama_hp, harga_hp, ram_hp, rom_hp, procesor_hp, rank_pro, kamblkg_hp, kamdpn_hp, batrai_hp, os_hp, layar_hp, link_hp, warna_hp, foto) 
        VALUES ('$nama', '$harga', '$ram', '$memori', '$processor', '$r_processor', '$kamerab', '$kamerad', '$batrai', '$os', '$resolusi', '$link', '$warna', '$foto')");

        if ($sql) {
            $_SESSION["sukses"] = 'Data Berhasil Disimpan';
?>
            <script type='text/javascript'>
                window.location.href = "data_hp.php"
            </script>
        <?php }

        //edit data
    } elseif ($_POST['aksi'] == "edit") {
        error_reporting(E_ALL ^ E_NOTICE);
        session_start();
        $id = $_POST['id_hp'];
        $nama = $_POST['nama'];

        $harga = $_POST['harga'];
        $harga = preg_replace('/[^0-9]/', '', $harga);
        $harga = $harga / 100;

        $ram = $_POST['ram'];
        $memori = $_POST['memori'];
        $processor = $_POST['processor'];
        $r_processor = $_POST['r_processor'];
        $kamerab = $_POST['kamerab'];
        $kamerad = $_POST['kamerad'];
        $batrai = $_POST['batrai'];
        $os = $_POST['os'];
        $link = $_POST['link'];
        $resolusi = $_POST['resolusi'];
        $warna = implode(", ", $_POST['warna']);
        $foto = $_FILES['foto']['name'];

        $dir = "../assets/img/produk/";
        $tmpFile = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmpFile, $dir . $foto);

        $query = "UPDATE tb_hp SET id_hp='$id', nama_hp='$nama', harga_hp='$harga', ram_hp='$ram', rom_hp='$memori', procesor_hp='$processor',
        rank_pro='$r_processor', kamblkg_hp='$kamerab', kamdpn_hp='$kamerad', batrai_hp='$batrai', os_hp='$os', layar_hp='$resolusi', warna_hp='$warna', link_hp='$link', foto='$foto' WHERE id_hp='$id';";

        $sql = mysqli_query($koneksi, $query);

        if ($sql) {
            $_SESSION["sukses"] = 'Data Berhasil Diubah';
        ?>
            <script type='text/javascript'>
                window.location.href = "data_hp.php"
            </script>
    <?php }
    }
}


//hapus data
$id = $_POST['id'];

// $hapusFoto = mysqli_query($koneksi, "SELECT FROM data_hp WHERE id_hp='$id'");
// $result = mysqli_fetch_assoc($hapusFoto);
// unlink("../assets/img/" . $result['foto']);

$sql = $koneksi->query("DELETE FROM tb_hp WHERE id_hp='$id'");

if ($sql) {
    ?>
    <script type='text/javascript'>
        window.location.href = "data_hp.php"
    </script>
<?php }
