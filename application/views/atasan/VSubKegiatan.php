<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kegiatan</h1>
        </div>

        <?php echo $this->session->flashdata('message'); ?>

        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-3 col-md-6">
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
              <a  class="btn btn-warning mb-3" href = "<?php echo base_url('atasan/CSubKegiatanCRUD/print')?>" >
            <i class="fas fa-fw fa-print"></i> Ekspor PDF</a>
            <a class="nav navbar-form navbar-right">
                <?php echo form_open('atasan/CAtasan/search') ?>
                <input type="text" name="keyword" class="form-control" placeholder="Search">
                <button type="submit" class="btn btn-success">Cari</button>
                <?php echo form_close() ?>
            </a>
        </div>

        <table id="dataTables" class="table table-hover table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Tanggal Input</th>
            </thead>

            <?php
            $no = 1;
            foreach ($subkegiatan as $act) :
            ?>
                <tbody>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $act->nama_kegiatan ?></td>
                    <td><?php echo $act->tanggal_input ?></td>

                </tbody>
            <?php endforeach; ?>
        </table>

    </section>
</div>