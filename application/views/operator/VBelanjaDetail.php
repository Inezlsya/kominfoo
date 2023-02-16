<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Belanja</h1>
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <?php foreach ($belanja as $act) : ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <tr>
                                            <td>Nama Belanja</td>
                                            <td><strong><?php echo $act->sub_belanja ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Kode Rekening</td>
                                            <td><strong><?php echo $act->kode_rek ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Pagu Anggaran</td>
                                            <td><strong><?php echo $act->jml_anggaran ?></strong></td>
                                        </tr>

                                        <tr>
                                            <td>Tanggal Input</td>
                                            <td><strong><?php echo $act->tanggal_input ?></strong></td>
                                        </tr>
                                    </table>
                                </div>

                        

                                <?php echo anchor('operator/CBelanjaCRUD/', '<div class="btn btn-danger ml-5">Kembali</div>') ?>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section>
</div>