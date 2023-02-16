<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Belanja</h1>
        </div>

        <div class="container-fluid">

            <?php foreach ($belanja as $act) : ?>

                <form action="<?php echo base_url('operator/CBelanjaCRUD/fungsiUpdate') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Belanja</label>
                                <input type="text" name="sub_belanja" class="form-control" value="<?php echo $act->sub_belanja ?>">
                                <input type="hidden" name="id_belanja" class="form-control" value="<?php echo $act->id_belanja ?>">
                            </div>
                            <div class="form-group">
                                <label>Kode Rekening</label>
                                <input type="text" name="kode_rek" class="form-control" value="<?php echo $act->kode_rek ?>">
                                <input type="hidden" name="id_belanja" class="form-control" value="<?php echo $act->id_belanja ?>">
                            </div>

                            <div class="form-group">
                                <label>Pagu Anggaran</label>
                                <input type="number" name="jml_anggaran" class="form-control" value="<?php echo $act->jml_anggaran ?>">
                                <input type="hidden" name="id_belanja" class="form-control" value="<?php echo $act->id_belanja ?>">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Input</label>
                                <input type="date" name="tanggal_input" class="form-control" value="<?php echo $act->tanggal_input ?>">
                            </div>
                        </div>

                    </div>
                    <?php echo anchor('operator/CBelanjaCRUD/', '<div class="btn btn-danger mb-1">Kembali</div>') ?>
                    <button type="submit" class="btn btn-primary mb-1 ml-3">Simpan</button>
                </form>

            <?php endforeach; ?>
        </div>
    </section>
</div>