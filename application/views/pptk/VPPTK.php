<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kegiatan</h1>
        </div>

        <?php echo $this->session->flashdata('message'); ?>


                <div class="col-xl-5 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Anggaran Terserap
                                    </div>
                                    <div class="h6 mb-0 font-weight-bold text-gray-800"><td>Rp<?php echo number_format($nominal, 0, ',', '.') ?> /  <td>Rp<?php echo number_format($pagu_anggaran, 0, ',', '.') ?>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <!-- <i class="fas fa-tasks fas-2x text-gray-300"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <tr>
                        <td colspan="4">
                            <?php $attributes = array('class' => 'row'); ?>
                            <?php echo form_open('pptk/CPPTK/search',$attributes);?>
                                <input type="text" name="keyword" placeholder="Search" class="form-control col-md-5">
                                <input type="submit" value="Cari" class="btn btn-warning col-md-1">
                            <?php echo form_close();?>		
                        </td>
                    </tr>
                </div>





                <div class="table-responsive">
                <table id="dataTables" class="table table-hover table-striped table-bordered">
                    <thead>
                        <th>No</th>
                        <!-- <th>ID Kegiatan</th> -->
                        <th>Nama Kegiatan</th>
                        <th>Sub Kegiatan</th>
                        <th>Nama Belanja</th>
                        <th>Pagu Anggaran</th>
                        <th>Bukti Tagihan </th>
                        <th>Status Pembayaran</th>
                        <th colspan="2">Aksi</th>
                    </thead>

                    <?php
                    $no = 1;
                    foreach ($subkegiatan as $act) :
                    ?>
                        <tbody>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $act->nama_kegiatan ?></td>
                            <td><?php echo $act->sub_kegiatan ?></td>
                            <td><?php echo $act->nama_belanja ?></td>
                            <td>Rp<?php echo number_format($act->pagu_anggaran, 0, ',', '.') ?></td>

                            <td>
                                <?php 
                                    if (empty($act->bukti_tagihan1)) {
                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" border="0" width="70px" height="70px"> </center>';

                                    } else {
                                        echo '<center><img src="' . base_url('./uploads/bukti_tagihan/' . $act->bukti_tagihan1) . '" border="0" width="70px" height="70px"> </center>';
                                    }

                                ?>
                                 <?php 
                                    if (empty($act->bukti_tagihan2)) {
                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" border="0" width="70px" height="70px"> </center>';

                                    } else {
                                        echo '<center><img src="' . base_url('./uploads/bukti_tagihan/' . $act->bukti_tagihan2) . '" border="0" width="70px" height="70px"> </center>';
                                    }
                                ?>
                                <?php 
                                    if (empty($act->bukti_tagihan3)) {
                                        echo '<center><img src="' . base_url('./assets/images/noimg.jpg') . '" border="0" width="70px" height="70px"> </center>';

                                    } else {
                                        echo '<center><img src="' . base_url('./uploads/bukti_tagihan/' . $act->bukti_tagihan3) . '" border="0" width="70px" height="70px"> </center>';
                                    }
                                ?>
                            </td>



                            <td>
                                <?php
                                    if (empty($act->bukti_tagihan1) && empty($act->bukti_transfer1)) {
                                        echo "<span class='badge badge-pill badge-dark'>Belum dijalankan</span>";
                                    } elseif (empty($act->bukti_transfer1)) {
                                        echo "<span class='badge badge-pill badge-danger'>Belum dibayar</span>";
                                    } elseif (!empty($act->bukti_tagihan1) && !empty($act->bukti_transfer1)) {
                                        echo "<span class='badge badge-pill badge-success'>Sudah dibayar</span>";
                                    }
                                ?>

<?php
                                    if (empty($act->bukti_tagihan2) && empty($act->bukti_transfer2)) {
                                        echo "<span class='badge badge-pill badge-dark'>Belum dijalankan</span>";
                                    } elseif (empty($act->bukti_transfer2)) {
                                        echo "<span class='badge badge-pill badge-danger'>Belum dibayar</span>";
                                    } elseif (!empty($act->bukti_tagihan2) && !empty($act->bukti_transfer2)) {
                                        echo "<span class='badge badge-pill badge-success'>Sudah dibayar</span>";
                                    }
                                ?>

<?php
                                    if (empty($act->bukti_tagihan3) && empty($act->bukti_transfer3)) {
                                        echo "<span class='badge badge-pill badge-dark'>Belum dijalankan</span>";
                                    } elseif (empty($act->bukti_transfer3)) {
                                        echo "<span class='badge badge-pill badge-danger'>Belum dibayar</span>";
                                    } elseif (!empty($act->bukti_tagihan3) && !empty($act->bukti_transfer3)) {
                                        echo "<span class='badge badge-pill badge-success'>Sudah dibayar</span>";
                                    }
                                ?>
                            </td>

                            <td>
                            <?php echo anchor(
                                    'pptk/CPPTK/halamanInput/' . $act->id_subkegiatan,
                                    '<div class="btn btn-primary btn-sm"><i class="fas fa-file-medical"></i></div>'
                                ) ?>
                            </td>
                            <td>
                            <?php echo anchor(
                                    'pptk/CPPTK/halamanDetail/' . $act->id_subkegiatan,
                                    '<div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></div>'
                                ) ?>
                            </td>
                        </tbody>
                    <?php endforeach; ?>
                </table>
                </div>

    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="InputBuktiTagihan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Bukti Tagihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('pptk/CPPTK/fungsiInput') ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label>Bukti Tagihan</label>
                        <input type="file" name="bukti_tagihan" class="form-control">
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

        </div>
    </div>
</div>
