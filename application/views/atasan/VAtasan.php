<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kegiatan</h1>
        </div>

        <?php echo $this->session->flashdata('message'); ?>

        <div class="container-fluid">
            <div class="row">

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
            </div>
        </div>
        <div>
              <a  class="btn btn-warning mb-3" href = "<?php echo base_url('atasan/CAtasan/print')?>" >
            <i class="fas fa-fw fa-print"></i> Ekspor PDF</a>
            <!-- <a class="nav navbar-form navbar-right">
                <?php echo form_open('atasan/CAtasan/search') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </a> -->
        </div>
        <div>
                <tr>
                    <td colspan="4">
                        <?php $attributes = array('class' => 'row'); ?>
                        <?php echo form_open('atasan/CAtasan/search',$attributes);?>
                            <input type="text" name="keyword" placeholder="Search" class="form-control col-md-5">
                            <input type="submit" value="Cari" class="btn btn-warning col-md-1">
                        <?php echo form_close();?>		
                    </td>
                </tr>
        </div>

        <table id="dataTables" class="table table-hover table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Sub Kegiatan</th>
                <th>Nama Belanja</th>
                <th>Kode Rekening</th>
                <th>Pagu Anggaran</th>
                <th>Nama PPTK</th>
                <th>Tanggal Input</th>
            </thead>

            <?php
            $no = 1;
            foreach ($kegiatan as $act) :
            ?>
                <tbody>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $act->nama_kegiatan ?></td>
                    <td><?php echo $act->sub_kegiatan ?></td>
                    <td><?php echo $act->nama_belanja ?></td>
                    <td><?php echo $act->kode_rekening ?></td>
                    <td>Rp<?php echo number_format($act->pagu_anggaran, 0, ',', '.') ?></td>
                    <td><?php echo $act->nama_pptk ?></td>
                    <td><?php echo $act->tanggal_input ?></td>

                    <!-- <td>
                        <center>
                            <img src="<?php echo base_url('./uploads/bukti_tagihan/'); ?><?php echo $act->bukti_tagihan; ?>" border="0" width="70px" height="70px" />
                        </center>
                    </td>
                    <td>
                        <center>
                            <img src="<?php echo base_url('./uploads/bukti_transfer/'); ?><?php echo $act->bukti_transfer; ?>" border="0" width="70px" height="70px" />
                        </center>
                    </td> -->
                </tbody>
            <?php endforeach; ?>
        </table>

    </section>
</div>