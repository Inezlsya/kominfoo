<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Input / Edit Bukti Transfer</h1>
        </div>

        <div class="container-fluid">

            <?php foreach ($subkegiatan as $act) : ?>

                <form action="<?php echo base_url('bendahara/CBendahara/fungsiInput') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <?php 
                                    if (empty($act->bukti_transfer1)) {
                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" /> </center>';
                                    
                                    } elseif($act->bukti_transfer1) {
                                        echo '<center><img src="' . base_url('./uploads/bukti_transfer/' . $act->bukti_transfer1) . '" class="img-fluid" /> <br><br> </center>';
                                    } if (empty($act->bukti_transfer2)) {
                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" /> </center>';
                                    
                                    } elseif($act->bukti_transfer2) {
                                        echo '<center><img src="' . base_url('./uploads/bukti_transfer/' . $act->bukti_transfer2) . '" class="img-fluid" /> <br><br> </center>';
                                    }
                                ?>

                                <!-- <img src="<?php echo base_url('./uploads/bukti_transfer/') . $act->bukti_transfer1 ?>" class="img-fluid" /> <br><br> -->
                                <label>Bukti Transfer 1</label>
                                <input type="file" class="form-control" name="bukti_transfer1">
                                <input type="hidden" name="bukti_transfer1" value="<?php echo $act->bukti_transfer1; ?>">

                                <!-- <img src="<?php echo base_url('./uploads/bukti_transfer/') . $act->bukti_transfer2 ?>" class="img-fluid" /> <br><br> -->
                                <label>Bukti Transfer 2</label>
                                <input type="file" class="form-control" name="bukti_transfer2">
                                <input type="hidden" name="bukti_transfer2" value="<?php echo $act->bukti_transfer2; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nominal</label>
                                <input type="text" name="nominal" class="form-control">
                            </div>

                            
                            
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <?php 
                                    if (empty($act->bukti_transfer3)) {
                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" class="img-fluid" /> </center>';
                                    
                                    } else {
                                        echo '<center><img src="' . base_url('./uploads/bukti_transfer/' . $act->bukti_transfer3) . '" class="img-fluid" /> <br><br> </center>';
                                    }
                                ?>

                                <!-- <img src="<?php echo base_url('./uploads/bukti_transfer/') . $act->bukti_transfer3 ?>" class="img-fluid" /> <br><br> -->
                                <label>Bukti Transfer 3 </label>
                                <input type="file" class="form-control" name="bukti_transfer3">
                                <input type="hidden" name="bukti_transfer3" value="<?php echo $act->bukti_transfer3; ?>">
                            </div>

                            <div class="form-group">
                                <label>Nama Kegiatan</label>
                                <input type="text" name="nama_kegiatan" class="form-control" value="<?php echo $act->nama_kegiatan ?>" readonly>
                                <input type="hidden" name="id_subkegiatan" class="form-control" value="<?php echo $act->id_subkegiatan ?>">
                            </div>

                            <div class="form-group">
                                <label>Sub Kegiatan</label>
                                <input type="text" name="sub_kegiatan" class="form-control" value="<?php echo $act->sub_kegiatan ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Nama Belanja</label>
                                <input type="text" name="nama_belanja" class="form-control" value="<?php echo $act->nama_belanja ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Kode Rekening</label>
                                <input type="text" name="kode_rekening" class="form-control" value="<?php echo $act->kode_rekening ?>" readonly>
                            </div>
                        
                            <div class="form-group">
                                <label>Pagu Anggaran</label>
                                <input type="text" name="pagu_anggaran" class="form-control" value="<?php echo $act->pagu_anggaran ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Nama PPTK</label>
                                <input type="text" name="nama_pptk" class="form-control" value="<?php echo $act->nama_pptk ?>" readonly>
                            </div>

                            <div class="form-group">
                                <label>Tanggal Input</label>
                                <input type="date" name="tanggal_input" class="form-control" value="<?php echo $act->tanggal_input ?>" readonly>
                            </div>
                        </div>

                    </div>

                    <?php echo anchor('bendahara/CBendahara/', '<div class="btn btn-danger mb-1">Kembali</div>') ?>
                    <button type="submit" class="btn btn-primary btn sm mb-1 ml-3">Simpan</button>
                </form>

            <?php endforeach; ?>
        </div>
    </section>
</div>