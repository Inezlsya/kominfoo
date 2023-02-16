<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Sub Kegiatan</h1>
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
                                            <td>Sub Kegiatan</td>
                                            <td><strong><?php echo $act->sub_kegiatan ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Nama Belanja</td>
                                            <td><strong><?php echo $act->nama_belanja ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Kode Rekening</td>
                                            <td><strong><?php echo $act->kode_rekening ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Pagu Anggaran</td>
                                            <td><strong>Rp<?php echo number_format($act->pagu_anggaran, 0, ',', '.') ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Nama PPTK</td>
                                            <td><strong><?php echo $act->nama_pptk ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Input</td>
                                            <td><strong><?php echo $act->tanggal_input ?></strong></td>
                                        </tr>
                                    </table>
                                </div>

                                <
                                <?php echo anchor('operator/CSubKegiatanCRUD/', '<div class="btn btn-danger ml-5">Kembali</div>') ?>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section>
</div>