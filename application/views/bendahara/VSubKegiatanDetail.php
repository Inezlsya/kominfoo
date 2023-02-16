<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail  Kegiatan</h1>
        </div>

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <?php foreach ($subkegiatan as $act) : ?>
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
                                            <td>Tanggal Input</td>
                                            <td><strong><?php echo $act->tanggal_input ?></strong></td>
                                        </tr>
                                        <tr>
                                            <td>Pagu Anggaran</td>
                                            <td><strong>Rp<?php echo number_format($act->pagu_anggaran, 0, ',', '.') ?></strong></td>
                                        </tr>
                                    </table>
                                </div>

                                <div class="col-md-6">
                                    <table class="table">
                                        <tr>
                                            <td>Bukti Tagihan 1 </td>
                                            <td>
                                                <?php 
                                                    if (empty($act->bukti_tagihan1)) {
                                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" width="60" heigth="60" /> </center>';
                                                    
                                                    } else {
                                                        echo '<center><img src="' . base_url('./uploads/bukti_tagihan/' . $act->bukti_tagihan1) . '" class="img-fluid"></strong> </center>';
                                                    }
                                                ?>
                                            </td>
                                            <!-- <td><strong><img src="<?php echo base_url('/uploads/bukti_tagihan/' . $act->bukti_tagihan1) ?>" class="img-fluid"><br><br></strong></td> -->
                                        </tr>

                                        <tr>
                                            <td>Bukti Tagihan 2 </td>
                                            <td>
                                                <?php 
                                                    if (empty($act->bukti_tagihan2)) {
                                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" width="60" heigth="60"/> </center>';
                                                    
                                                    } else {
                                                        echo '<center><img src="' . base_url('./uploads/bukti_tagihan/' . $act->bukti_tagihan2) . '" class="img-fluid"></strong> </center>';
                                                    }
                                                ?>
                                            </td>
                                            <!-- <td><strong><img src="<?php echo base_url('/uploads/bukti_tagihan/' . $act->bukti_tagihan2) ?>" class="img-fluid"><br><br></strong></td> -->
                                        </tr>
                                        <tr>
                                        <td>Bukti Tagihan 3 </td>
                                            <td>
                                                <?php 
                                                    if (empty($act->bukti_tagihan3)) {
                                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid"width="60" heigth="60" /> </center>';
                                                    
                                                    } else {
                                                        echo '<center><img src="' . base_url('./uploads/bukti_tagihan/' . $act->bukti_tagihan3) . '" class="img-fluid"></strong> </center>';
                                                    }
                                                ?>
                                            </td>
                                            <!-- <td><strong><img src="<?php echo base_url('/uploads/bukti_tagihan/' . $act->bukti_tagihan3) ?>" class="img-fluid"><br><br></strong></td> -->
                                        </tr>
                                        <tr>
                                            <td>Bukti Transfer 1 </td>
                                            <td>
                                                <?php 
                                                    if (empty($act->bukti_transfer1)) {
                                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" width="60" heigth="60"/> </center>';
                                                    
                                                    } else {
                                                        echo '<center><img src="' . base_url('./uploads/bukti_transfer/' . $act->bukti_transfer1) . '" class="img-fluid" ></strong> </center>';
                                                    }
                                                ?>
                                            </td>
                                            <!-- <td><strong><img src="<?php echo base_url('/uploads/bukti_transfer/' . $act->bukti_transfer1) ?>" class="img-fluid"><br><br></strong></td> -->
                                        </tr>

                                        <tr>
                                            <td>Bukti Transfer 2 </td>
                                            <td>
                                                <?php 
                                                    if (empty($act->bukti_transfer2)) {
                                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" width="60" heigth="60"/> </center>';
                                                    
                                                    } else {
                                                        echo '<center><img src="' . base_url('./uploads/bukti_transfer/' . $act->bukti_transfer2) . '" class="img-fluid" ></strong> </center>';
                                                    }
                                                ?>
                                            </td>
                                            <!-- <td><strong><img src="<?php echo base_url('/uploads/bukti_transfer/' . $act->bukti_transfer2) ?>" class="img-fluid"><br><br></strong></td> -->
                                        </tr>
                                        <tr>
                                            <td>Bukti Transfer 3 </td>
                                            <td>
                                                <?php 
                                                    if (empty($act->bukti_transfer3)) {
                                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" width="60" heigth="60"/> </center>';
                                                    
                                                    } else {
                                                        echo '<center><img src="' . base_url('./uploads/bukti_transfer/' . $act->bukti_transfer3) . '" class="img-fluid" ></strong> </center>';
                                                    }
                                                ?>
                                            </td>
                                            <!-- <td><strong><img src="<?php echo base_url('/uploads/bukti_transfer/' . $act->bukti_transfer3) ?>" class="img-fluid"><br><br></strong></td> -->
                                        </tr>
                                    </table>
                                </div>

                                <?php echo anchor('bendahara/CBendahara/', '<div class="btn btn-danger ml-5">Kembali</div>') ?>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>

    </section>
</div>