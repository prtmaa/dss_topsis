<?php
include('../database/koneksi.php');
include('inc/header.php');
$data = mysqli_query($koneksi, "select * from tb_riwayat");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<title>ADMIN | Riwayat</title>

<div class="container-fluid py-4 mt-3">


    <div class="col-12">
        <div class="card card-secondary">

            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-primary border-radius-lg pt-4 pb-3">
                    <h3 class="text-white text-capitalize ps-3">Riwayat Perhitungan</h3>
                </div>
            </div>

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <form action="proses_riwayat.php" method="POST">
                        <button class="btn btn-dark" name="archive" type="submit" onclick="archiveFunction()">
                            <i class="fas fa-trash"></i> Kosongkan data</button>
                    </form>
                </div>

                <div class="card card-secondary">
                    <div class="card-body">
                        <div class="table-responsive p-0">
                            <table id="data" class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Tanggal</th>
                                        <th rowspan="2">Rekomendasi</th>
                                        <th rowspan="2">Nilai</th>
                                        <th colspan="9" class="align-middle text-center">Kriteria</th>
                                    </tr>
                                    <tr>

                                        <th class="text-sm">Harga</th>
                                        <th class="text-sm">RAM</th>
                                        <th class="text-sm">Internal</th>
                                        <th class="text-sm">Rank Processor</th>
                                        <th class="text-sm">Kamera Belakang</th>
                                        <th class="text-sm">Kamera Depan</th>
                                        <th class="text-sm">Batrai</th>
                                        <th class="text-sm">Sistem Operasi</th>
                                        <th class="text-sm">Resolusi Layar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($data_hp = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <th class="align-middle text-center text-sm"><?php echo $no++ ?></th>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['tanggal'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['rekomendasi'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['nilai'] ?></td>
                                            <td class="align-middle text-center text-sm">Rp. <?php echo $data_hp['harga'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['ram'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['rom'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['procesor'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['kamb'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['kamd'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['batrai'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['os'] ?></td>
                                            <td class="align-middle text-center text-sm"><?php echo $data_hp['layar'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>

                        <script>
                            $(document).ready(function() {
                                $('#data').DataTable();
                            });
                        </script>
                    </div>


                    <script>
                        function archiveFunction() {
                            event.preventDefault(); // prevent form submit
                            var form = event.target.form; // storing the form
                            swal({
                                    title: "Apakah kamu yakin?",
                                    text: "Data akan dikosongkan.",
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