<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Kegiatan</h1>
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <?php foreach ($kegiatan as $act) : ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <tr>
                                            <td>Nama Kegiatan</td>
                                            <td><strong><?php echo $act->nama_kegiatan ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Input</td>
                                            <td><strong><?php echo $act->tanggal_input ?></strong></td>
                                        </tr>
                                    </table>
                                </div>

                        

                                <?php echo anchor('operator/CKegiatanCRUD/', '<div class="btn btn-danger ml-5">Kembali</div>') ?>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section>
</div>