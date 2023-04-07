<div class="modal fade" id="ModalDetail<?php echo $user['id_hp']; ?>" tabindex="-1" aria-labelledby="ModalDetail<?php echo $user['id_hp']; ?>" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalLabel">Detail Smartphone</h3>

                <button class="btn btn-link" data-bs-dismiss="modal" aria-label="Close"">
                <span class=" material-icons">
                    close
                    </span>
                </button>
            </div>
            <div class="modal-body">

                <form role="form" action="proses_kriteria.php" method="POST">

                    <?php
                    $id = $user['id_hp'];
                    $query_edit = $koneksi->query("SELECT * FROM tb_hp WHERE id_hp='$id'");

                    while ($row = $query_edit->fetch_assoc()) {
                    ?>
                        <div class="row">
                            <div class="col-lg-6 col-ms-4 mb-4">
                                <div class="card">
                                    <!-- <div class="card-body"> -->

                                    <img src="assets/img/produk/<?= $row['foto']; ?> " alt="..." class="img-responsive border-radius-lg shadow-lg" width="370px" height="480px">
                                </div>
                                <!-- </div> -->
                            </div>



                            <div class="col-lg-6 col-ms-8">
                                <div class="card card-secondary">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <h3><?= $row['nama_hp']; ?></h3>
                                        </div>
                                        <div class="mb-3">
                                            <h6>Harga : <?php echo "Rp " . number_format("$row[harga_hp]", 2, ",", ".")  ?></h6>
                                        </div>
                                        <div class="mb-3">
                                            <h6>Processor : <?= $row['procesor_hp']; ?></h6>
                                            <div class="mb-3">
                                                <h6>RAM : <?= $row['ram_hp']; ?> GB</h6>
                                            </div>
                                            <div class="mb-3">
                                                <h6>Internal : <?= $row['rom_hp']; ?> GB</h6>
                                            </div>
                                            <div class="mb-3">
                                                <h6>Batrai : <?= $row['batrai_hp']; ?> Mah</h6>
                                            </div>
                                            <div class="mb-3">
                                                <h6>Kamera Belakang : <?= $row['kamblkg_hp']; ?> MP</h6>
                                            </div>
                                            <div class="mb-3">
                                                <h6>Kamera Depan : <?= $row['kamdpn_hp']; ?> MP</h6>
                                            </div>
                                            <div class="mb-3">
                                                <h6>Sistem Operasi : Android <?= $row['os_hp']; ?></h6>
                                            </div>
                                            <div class="mb-3">
                                                <h6>Resolusi Layar : <?= $row['layar_hp']; ?></h6>
                                            </div>
                                            <div class="mb-3">
                                                <h6>Warna yang Tersedia : <?= $row['warna_hp']; ?></h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">

                            <a href="<?= $row['link_hp']; ?>" target="_blank" class="btn btn-dark">GSMarena</a>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>

                        </div>
                </form>
            <?php
                    }
            ?>
            </div>
        </div>
    </div>