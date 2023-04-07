<div class="modal fade" id="Modalbatrai" tabindex="-1" aria-labelledby="Modalbatrai" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Edit Kriteria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form role="form" action="proses_kriteria.php" method="POST">

                    <input type="hidden" name="id" value="<?php echo $batrai['id_kriteria']; ?>">

                    <div class="form-group">
                        <div class="row">
                            <div class="col-8"><label>Kriteria</label></div>
                            <div class="col-2"><label>Value</label></div>
                        </div>
                        <div class="mt-2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k1" class="form-control" value="<?php echo $a_batrai_awal[0];  ?>" disabled>
                                    </div>
                                </div> -
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k2" class="form-control" value="<?php echo $a_batrai_akhir[0]; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="value" class="form-control" value="1" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k3" class="form-control" value="<?php echo $a_batrai_awal[1]; ?>">
                                    </div>
                                </div> -
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k4" class="form-control" value="<?php echo $a_batrai_akhir[1]; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="value" class="form-control" value="2" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k5" class="form-control" value="<?php echo $a_batrai_awal[2]; ?>">
                                    </div>
                                </div> -
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k6" class="form-control" value="<?php echo $a_batrai_akhir[2]; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="value" class="form-control" value="3" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k7" class="form-control" value="<?php echo $a_batrai_awal[3]; ?>">
                                    </div>
                                </div> -
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k8" class="form-control" value="<?php echo $a_batrai_akhir[3]; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="value" class="form-control" value="4" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k9" class="form-control" value="<?php echo $a_batrai_awal[4]; ?>" disabled>
                                    </div>
                                </div> -
                                <div class="col-4">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="k10" class="form-control" value="<?php echo $a_batrai_akhir[4]; ?>">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group input-group-outline">
                                        <input type="number" name="value" class="form-control" value="5" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" name="aksi" value="batrai" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Batal</button>
            </div>
            </form>

        </div>
    </div>
</div>