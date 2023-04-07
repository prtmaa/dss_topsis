<?php
include('../database/koneksi.php');
include('inc/header.php');
?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<title>ADMIN | Kriteria</title>

<div class="container-fluid py-4">


    <div class="col-lg-12 position-relative z-index-2 mb-4">
        <div class="card card-secondary">
            <div class="card-body">
                <div class="col-lg-12">
                    <div class="d-flex flex-column h-100">
                        <h2 class="font-weight-bolder mb-0">Warna yg Tersedia</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <!-- ram -->
        <div class="col-6">
            <div class="card card-secondary">
                <div class="card-body">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th class="align-middle text-center">No</th>
                                    <th class="align-middle text-center">Warna</th>
                                    <th class="align-middle text-center">Keterangan</th>
                                    <th class="align-middle text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i = 1;
                                $sql = $koneksi->query("SELECT * FROM tb_warna");
                                while ($warna = $sql->fetch_assoc()) {

                                ?>
                                    <tr>
                                        <td class="align-middle text-center">
                                            <?php echo $i ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <?php echo $warna['nama'] ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <?php echo $warna['keterangan'] ?>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="warna.php?ubah=<?php echo $warna['id_warna']; ?>" type="button" class="btn btn-dark btn-sm"> <i class="fas fa-edit"></i> Edit</a>

                                            <form action="proses_warna.php" method="POST">
                                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $warna["id_warna"]; ?>">
                                                <button class="btn btn-dark btn-sm" name="archive" type="submit" onclick="archiveFunction()">
                                                    <i class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                        </td>

                                    </tr>

                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php
        $nama = '';
        $ket = '';


        if (isset($_GET['ubah'])) {
            $id_warna = $_GET['ubah'];
            $query = "SELECT * FROM tb_warna WHERE id_warna = '$id_warna';";
            $sql = mysqli_query($koneksi, $query);

            $result = mysqli_fetch_assoc($sql);

            $warna = $result['nama'];
            $ket = $result['keterangan'];
        }
        ?>

        <div class="col-6">
            <div class="card card-secondary">
                <div class="card-body">
                    <?php if (isset($_GET['ubah'])) { ?>
                        <h4>Edit Warna</h4>
                    <?php } else { ?>
                        <h4>Tambah Warna</h4>
                    <?php } ?>

                    <form method="POST" action="proses_warna.php">
                        <input type="hidden" value="<?php echo $id_warna; ?>" name="id_warna">
                        <div class="mb-3 row">
                            <label for="warna" class="col-form-label">Nama</label>
                            <div class="input-group input-group-outline">
                                <input type="text" class="form-control" id="warna" name="warna" value="<?php echo $warna; ?>" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="warna" class="col-form-label">Keterangan</label>
                            <div class="input-group input-group-outline">
                                <select required name="ket" id="ket" class="form-control">
                                    <option value="" disabled selected>- PILIH -</option>
                                    <?php
                                    ?>
                                    <option <?php if ($ket == 'Populer') {
                                                echo "selected";
                                            } ?> value="Populer">Populer</option>
                                    <option <?php if ($ket == 'Sedang') {
                                                echo "selected";
                                            } ?> value="Sedang">Sedang</option>
                                    <option <?php if ($ket == 'Kurang') {
                                                echo "selected";
                                            } ?> value="Kurang">Kurang</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row mt-4">
                            <div class="col">
                                <?php if (isset($_GET['ubah'])) { ?>
                                    <button type="submit" name="aksi" value="edit" class="btn btn-success btn-sm">Simpan</button>
                                    <a href="warna.php" type="button" class="btn btn-primary btn-sm">Batal</a>
                                <?php } else { ?>
                                    <button type="submit" name="aksi" value="tambah" class="btn btn-success btn-sm">Tambah</button>
                                <?php } ?>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>

<?php if (@$_SESSION['sukses']) { ?>
    <script>
        swal("SUKSES!", "<?php echo $_SESSION['sukses']; ?>", "success");
    </script>

<?php unset($_SESSION['sukses']);
} ?>


<script>
    function archiveFunction() {
        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form
        swal({
                title: "Apakah kamu yakin?",
                text: "Data akan dihapus.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya",
                cancelButtonText: "Batal",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    form.submit(); // submitting the form when user press yes
                } else {
                    swal("Batal", "Data tidak dihapus.", "error");
                }
            });
    }
</script>





<?php include('inc/footer.php');  ?>