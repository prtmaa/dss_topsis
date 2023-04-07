<div class="modal fade" id="Modalresolusi<?php echo $layar['id_kriteria']; ?>" tabindex="-1" aria-labelledby="Modalresolusi<?php echo $layar['id_kriteria']; ?>" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Edit Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form role="form" action="proses_kriteria.php" method="POST">

                    <?php
                    $id = $layar['id_kriteria'];
                    $query_edit = $koneksi->query("SELECT * FROM tb_kriteria WHERE id_kriteria='$id'");

                    while ($row = $query_edit->fetch_assoc()) {
                    ?>

                        <input type="hidden" name="id" value="<?php echo $row['id_kriteria']; ?>">

                        <div class="mb-3 row">
                            <label for="kriteria" class="col-sm-2 col-form-label">Kriteria</label>
                            <div class="input-group input-group-outline">
                                <input type="text" class="form-control" id="kriteria" name="nama" value="<?php echo $row['kriteria']; ?>" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="value" class="col-sm-2 col-form-label">Value</label>
                            <div class="input-group input-group-outline">
                                <input type="text" class="form-control" id="value" value="<?php echo $row['bobot']; ?>" disabled>
                            </div>
                        </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="aksi" value="layar" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>
        <?php
                    }
        ?>
        </div>
    </div>
</div>