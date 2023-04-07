<?php
include('../database/koneksi.php');
include('inc/header.php');
$data = mysqli_query($koneksi, "SELECT * FROM tb_hp")
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<!-- sweet alert  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


<title>ADMIN | Data HP</title>


<title>Data Smartphone</title>



<div class="container-fluid py-4 mt-3">


    <div class="col-12">
        <div class="card card-secondary">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3">
                    <h3 class="text-white text-capitalize ps-3">Daftar Smartphone</h3>
                </div>
            </div>

            <div class="card-body">

                <div class="d-flex justify-content-between">
                    <a href="form_hp.php" type="button" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>

                <div class="table-responsive p-0">
                    <table id="data" class="table align-items-center mb-0">
                        <thead>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>RAM</th>
                            <th>Internal</th>
                            <th class="align-middle text-center">Procesor</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($data_hp = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $data_hp['nama_hp'] ?></td>
                                    <td class="align-middle text-center text-sm"><?php echo "Rp " . number_format("$data_hp[harga_hp]", 2, ",", ".")  ?></td>
                                    <td class="align-middle text-center text-sm"><?php echo $data_hp['ram_hp'] ?> GB</td>
                                    <td class="align-middle text-center text-sm"><?php echo $data_hp['rom_hp'] ?> GB</td>
                                    <td class="align-middle text-center text-sm"><?php echo $data_hp['procesor_hp'] ?> (<?php echo $data_hp['rank_pro'] ?>)</td>
                                    <td class="align-middle text-center text-sm"><img class="avatar avatar-sm me-3 border-radius-lg" width="40px" src="../assets/img/produk/<?php echo $data_hp['foto'] ?>" alt=""></td>
                                    <td>
                                        <a href="form_hp.php?ubah=<?php echo $data_hp['id_hp']; ?>" type="button" class="btn btn-dark btn-sm"> <i class="fas fa-edit"></i> Edit</a>

                                        <form action="detail_hp.php" method="POST">
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data_hp["id_hp"]; ?>">
                                            <button class="btn btn-dark btn-sm" name="archive" type="submit">
                                                <i class="fas fa-search"></i> Detail</a>
                                        </form>

                                        <form action="proses_hp.php" method="POST">
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $data_hp["id_hp"]; ?>">
                                            <button class="btn btn-dark btn-sm " name="archive" type="submit" onclick="archiveFunction()">
                                                <i class="fas fa-trash"></i> Hapus</button>
                                        </form>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

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


<script>
    $(document).ready(function() {
        $('#data').DataTable();
    });
</script>


<?php include('inc/footer.php'); ?>