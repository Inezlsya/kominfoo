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
                                <div class="col mr-2">
                                    <div class="small text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    ANGGARAN TERSERAP
                                    </div>
                                    <div class="h8 mb-0 font-weight-bold text-gray-800">
                                        <td>Rp<?php echo number_format($nominal, 0, ',', '.') ?> /  <td>
                                            Rp<?php echo number_format($pagu_anggaran, 0, ',', '.') ?> </div>
                                </div>
                                <div class="col-auto">
                                    <!-- <i class="fas fa-tasks fa-2x text-gray-300"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="small text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        KEGIATAN
                                    </div>
                                    <div class="h8 mb-0 font-weight-bold text-gray-800"><?= $keg ?></td>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <!-- <i class="fas fa-tasks fa-2x text-gray-300"></i> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="small text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        TOTAL USER
                                    </div>
                                    <div class="h8 mb-0 font-weight-bold text-gray-800"><?= $PPTK ?>
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

        <buttton class="btn btn-primary mb-3" data-toggle="modal" data-target="#TambahKegiatan">
            <i class="fas fa-plus fa-sm"></i> Tambah Kegiatan</buttton>
        <div>
                <tr>
                    <td colspan="4">
                        <?php $attributes = array('class' => 'row'); ?>
                        <?php echo form_open('operator/CKegiatanCRUD/search',$attributes);?>
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
                    <th>Nama Kegiatan</th>
                    <th>Tanggal Input</th>
                    <th colspan="3">Aksi</th>
                </thead>

                <?php
                $no = 1;
                foreach ($kegiatan as $dxd) :
                ?>
                    <tbody>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $dxd->nama_kegiatan ?></td>
                        <td><?php echo $dxd->tanggal_input ?></td>

                        <td>
                            <?php echo anchor(
                                'operator/CKegiatanCRUD/halamanDetail/' . $dxd->id_kegiatan,
                                '<div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></div>'
                            ) ?>
                        </td>

                        <td>
                            <?php echo anchor(
                                'operator/CKegiatanCRUD/halamanUpdate/' . $dxd->id_kegiatan,
                                '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>'
                            ) ?>
                        </td>

                        <td>
                            <!-- <a class="btn btn-danger btn-sm" 
                            onclick="return confirm('Apakah anda yakin ingin menghapus data?')"
                            href="<?php echo base_url('operator/CKegiatanCRUD/fungsiDelete/') ?>/<?php echo $dxd->id_kegiatan ?>">
                            <i class="fa fa-trash"></i>
                        </a> -->

                            <a onclick="deleteConfirm('<?php echo site_url('operator/CKegiatanCRUD/fungsiDelete/' . $dxd->id_kegiatan) ?>')" href="#!" class="btn btn-sm btn-danger "><i class="fa fa-trash"></i></a>
                        </td>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>

    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="TambahKegiatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('operator/CKegiatanCRUD/fungsiTambah') ?>" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Kegiatan</label>
                                <input type="text" name="nama_kegiatan" class="form-control" required>
                            </div>


                            <div class="form-group">
                                <label>Tanggal Input</label>
                                <input type="date" name="tanggal_input" class="form-control">
                            </div>
                        </div>
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

<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin menghapus data?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data yang sudah dihapus tidak bisa dikembalikan</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
            </div>
        </div>
    </div>
</div>

<script>
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>

<!-- <script>
$(document).ready(function() {
    $('#dataTables').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"> -->