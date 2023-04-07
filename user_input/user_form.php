<?php
include('../database/koneksi.php');
include('layout/user_header.php');
$hps = "TRUNCATE TABLE `tb_hp_user`";
mysqli_query($koneksi, $hps);


?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<meta http-equiv="refresh" />

<title>TOPSIS | Home</title>

<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('../assets/img/cool-background.png');">
        <div class="container my-auto">
            <div>
                <div class="row">

                    <div class="col-lg-12 col-md-8 col-12 mt-8 mx-auto ">

                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3  z-index-2">
                                <div class="bg-gradient-dark shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center">Pilih Alternatif</h4>

                                </div>
                            </div>
                            <div class="card-body">
                                <form method="post" action="proses_hp_user.php">
                                    <div class="fieldGroup">

                                        <div class="mb-2">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h6>Alternatif 1</h6>
                                                </div>
                                                <div class="col-4">
                                                    <h6>Warna tersedia :</h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group input-group-outline">
                                                        <select required name="nama[]" class="form-control" id="hp1">
                                                            <option value="" disabled selected>Pilih Alternatif</option>
                                                            <?php
                                                            $data = mysqli_query($koneksi, "SELECT * FROM tb_hp ORDER BY nama_hp");
                                                            while ($datahp = mysqli_fetch_array($data)) {
                                                            ?>
                                                                <option value="<?= $datahp['id_hp'] ?>"><?php echo $datahp['nama_hp'] ?> - Rp. <?php echo $datahp['harga_hp'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="input-group input-group-outline">
                                                        <select name="warna[]" class="form-control" id="warna1">


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <h6>Alternatif 2</h6>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group input-group-outline">
                                                        <select required name="nama[]" class="form-control" id="hp2">
                                                            <option value="" disabled selected>Pilih Alternatif</option>
                                                            <?php
                                                            $data1 = mysqli_query($koneksi, "SELECT * FROM tb_hp ORDER BY nama_hp");
                                                            while ($datahp1 = mysqli_fetch_array($data1)) {
                                                            ?>
                                                                <option value="<?= $datahp1['id_hp'] ?>"><?php echo $datahp1['nama_hp'] ?> - Rp. <?php echo $datahp1['harga_hp'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="input-group input-group-outline">
                                                        <select name="warna[]" class="form-control" id="warna2">


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <h6>Alternatif 3</h6>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group input-group-outline">
                                                        <select required name="nama[]" class="form-control" id="hp3">
                                                            <option value="" disabled selected>Pilih Alternatif</option>
                                                            <?php
                                                            $data2 = mysqli_query($koneksi, "SELECT * FROM tb_hp ORDER BY nama_hp");
                                                            while ($datahp2 = mysqli_fetch_array($data2)) {
                                                            ?>
                                                                <option value="<?= $datahp2['id_hp'] ?>"><?php echo $datahp2['nama_hp'] ?> - Rp. <?php echo $datahp2['harga_hp'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="input-group input-group-outline">
                                                        <select name="warna[]" class="form-control" id="warna3">


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <h6>Alternatif 4</h6>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group input-group-outline">
                                                        <select name="nama[]" class="form-control" id="hp4">
                                                            <option value="" disabled selected>Pilih Alternatif</option>
                                                            <?php
                                                            $data3 = mysqli_query($koneksi, "SELECT * FROM tb_hp ORDER BY nama_hp");
                                                            while ($datahp3 = mysqli_fetch_array($data3)) {
                                                            ?>
                                                                <option value="<?= $datahp3['id_hp'] ?>"><?php echo $datahp3['nama_hp'] ?> - Rp. <?php echo $datahp3['harga_hp'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="input-group input-group-outline">
                                                        <select name="warna[]" class="form-control" id="warna4">


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <h6>Alternatif 5</h6>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group input-group-outline">
                                                        <select name="nama[]" class="form-control" id="hp5">
                                                            <option value="" disabled selected>Pilih Alternatif</option>
                                                            <?php
                                                            $data4 = mysqli_query($koneksi, "SELECT * FROM tb_hp ORDER BY nama_hp");
                                                            while ($datahp4 = mysqli_fetch_array($data4)) {
                                                            ?>
                                                                <option value="<?= $datahp4['id_hp'] ?>"><?php echo $datahp4['nama_hp'] ?> - Rp. <?php echo $datahp4['harga_hp'] ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="input-group input-group-outline">
                                                        <select name="warna[]" class="form-control" id="warna5">


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="input-group-addon ml-3 mt-5">
                                        <!-- <a href="javascript:void(0)" class="btn btn-success addMore" onclick="tambah()"><i class="fas fa-plus"></i>Tambah</a> -->
                                        <button type="submit" name="submit" class="btn btn-primary" value="Submit">Simpan</button>
                                    </div>


                                </form>


                                <!-- <div class="fieldGroupCopy" style="display: none;">
                                    <div class="mt-2">
                                        <h6>Alternatif</h6>
                                        <div class="input-group input-group-outline">

                                            <select required name="ram[]" class="form-control" id="1">
                                                <option value="" disabled selected>Pilih Alternatif</option>
                                                <?php
                                                $data = mysqli_query($koneksi, "SELECT * FROM tb_hp");
                                                while ($datahp = mysqli_fetch_array($data)) {
                                                ?>
                                                    <option value="<?= $datahp['id_hp'] ?>"><?php echo $datahp['nama_hp'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="input-group input-group-outline">
                                            <select name="warna[]" class="form-control" id="w1">


                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <label for="nama" class="col-sm-4 col-form-label"></label>
                                        <div class="input-group-addon  ml-5">
                                            <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fas fa-trash"></i> Hapus</a>
                                        </div>
                                    </div>

                                </div> -->


                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#hp1').select2();
                });

                $(document).ready(function() {
                    $('#warna1').select2();
                });

                $('#hp1').change(function() {
                    var hp = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: 'ajax_warna.php',
                        data: 'hp_id=' + hp,
                        success: function(response) {
                            $('#warna1').html(response);
                        }
                    });
                });
            </script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#hp2').select2();
                });

                $(document).ready(function() {
                    $('#warna2').select2();
                });

                $('#hp2').change(function() {
                    var hp = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: 'ajax_warna.php',
                        data: 'hp_id=' + hp,
                        success: function(response) {
                            $('#warna2').html(response);
                        }
                    });
                });
            </script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#hp3').select2();
                });

                $(document).ready(function() {
                    $('#warna3').select2();
                });

                $('#hp3').change(function() {
                    var hp = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: 'ajax_warna.php',
                        data: 'hp_id=' + hp,
                        success: function(response) {
                            $('#warna3').html(response);
                        }
                    });
                });
            </script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#hp4').select2();
                });

                $(document).ready(function() {
                    $('#warna4').select2();
                });

                $('#hp4').change(function() {
                    var hp = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: 'ajax_warna.php',
                        data: 'hp_id=' + hp,
                        success: function(response) {
                            $('#warna4').html(response);
                        }
                    });
                });
            </script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#hp5').select2();
                });

                $(document).ready(function() {
                    $('#warna5').select2();
                });

                $('#hp5').change(function() {
                    var hp = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: 'ajax_warna.php',
                        data: 'hp_id=' + hp,
                        success: function(response) {
                            $('#warna5').html(response);
                        }
                    });
                });
            </script>




            <!-- <script>
                $(document).ready(function() {
                    // membatasi jumlah inputan
                    var maxGroup = 5;
                    var x = 0;
                    var h = 0;


                    //melakukan proses multiple input 
                    $(".addMore").click(function() {
                        if ($('body').find('.fieldGroup').length < maxGroup) {
                            var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
                            $('body').find('.fieldGroup:last').after(fieldHTML);
                            x++;
                            h++;
                            $('#' + h).select2();
                            $('#w' + x).select2();

                            $('#' + x).change(function() {
                                var hp = $(this).val();
                                $.ajax({
                                    type: 'POST',
                                    url: 'ajax_warna.php',
                                    data: 'hp_id=' + hp,
                                    success: function(response) {
                                        $('#w' + x).html(response);
                                    }
                                });
                            });


                        } else {
                            alert('Maximum ' + maxGroup + ' groups are allowed.');
                        }
                    });

                    //remove fields group
                    $("body").on("click", ".remove", function() {
                        $(this).parents(".fieldGroup").remove();
                        x--;
                    });
                });
            </script> -->



            <?php include('layout/user_footer.php'); ?>