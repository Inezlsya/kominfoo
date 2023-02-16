<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Update Data Kegiatan</h1>
        </div>

        <div class="container-fluid">

            <?php foreach ($kegiatan as $act) : ?>

                <form action="<?php echo base_url('operator/CKegiatanCRUD/fungsiUpdate') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Kegiatan</label>
                                <input type="text" name="nama_kegiatan" class="form-control" value="<?php echo $act->nama_kegiatan ?>">
                                <input type="hidden" name="id_kegiatan" class="form-control" value="<?php echo $act->id_kegiatan ?>">
                            </div>


                            <div class="form-group">
                                <label>Tanggal Input</label>
                                <input type="date" name="tanggal_input" class="form-control" value="<?php echo $act->tanggal_input ?>">
                            </div>
                        </div>

                    </div>
                    <?php echo anchor('operator/CKegiatanCRUD/', '<div class="btn btn-danger mb-1">Kembali</div>') ?>
                    <button type="submit" class="btn btn-primary mb-1 ml-3">Simpan</button>
                </form>

            <?php endforeach; ?>
        </div>
    </section>
</div>