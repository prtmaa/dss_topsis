<?php
include('database/koneksi.php');
include('layout/user_header.php');
$data = mysqli_query($koneksi, "SELECT * FROM tb_hp")
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" />


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<title>TOPSIS | Data Smartphone</title>


<main class="main-content  mt-0">
    <div class=" align-items-start min-vh-100" style="background-image: url('assets/img/cool-background.png'); background-size: cover;">
        <div class="container my-auto">
            <div>
                <div class="row">

                    <div class="col-lg-12 col-md-8 col-12 mx-auto mt-7">

                        <div class="card mt-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center">Data Smartphone</h4>

                                </div>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive p-0">
                                    <table id="data" class="table align-items-center mb-0">
                                        <thead>
                                            <th class=" aliign-middle text-center">No</th>
                                            <th class="">Nama</th>
                                            <th class="">Harga</th>
                                            <th class="aliign-middle text-center">RAM</th>
                                            <th class="aliign-middle text-center">Internal</th>
                                            <th class="">Procesor</th>
                                            <th class="">Aksi</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            while ($user = mysqli_fetch_array($data)) {
                                                include('modal/detail_modal.php');
                                            ?>
                                                <tr>
                                                    <th scope="row" class="aliign-middle text-center text-sm"><?php echo $no++ ?></th>
                                                    <td class="text-sm"><?php echo $user['nama_hp'] ?></td>
                                                    <td class="text-sm"><?php echo "Rp " . number_format("$user[harga_hp]", 2, ",", ".")  ?></td>
                                                    <td class="aliign-middle text-center text-sm"><?php echo $user['ram_hp'] ?> GB</td>
                                                    <td class="aliign-middle text-center text-sm"><?php echo $user['rom_hp'] ?> GB</td>
                                                    <td class="text-sm"><?php echo $user['procesor_hp'] ?> (<?php echo $user['rank_pro'] ?>)</td>

                                                    <td>
                                                        <a type="button" class="btn btn-dark btn-sm" data-bs-toggle="modal" data-bs-target="#ModalDetail<?php echo $user['id_hp']; ?>">Detail</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('#data').DataTable();
                        });
                    </script>



                    <?php include('layout/user_footer.php'); ?>