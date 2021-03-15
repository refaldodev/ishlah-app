<?php
function convertDateDBtoIndo($string)
{
    // contoh : 2019-01-30

    $bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

    $tanggal = explode("-", $string)[2];
    $bulan = explode("-", $string)[1];
    $tahun = explode("-", $string)[0];

    return $tanggal . " " . $bulanIndo[abs($bulan)] . " " . $tahun;
}
?>
<!-- Begin Page Content -->
<div class="container-fluid">



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Wa</th>
                            <th>Jenis Kelamin</th>
                            <th>Fakultas</th>
                            <th>Prodi</th>
                            <th>Angkatan</th>
                            <th>Motivasi</th>
                            <th>Date</th>
                            <th>Sudah Dihubungi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($row as $data) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->email ?></td>
                                <td><?= $data->no_wa ?></td>
                                <td><?= $data->jkel ?></td>
                                <td><?= $data->nama_fakultas ?></td>
                                <td><?= $data->nama_prodi ?></td>
                                <td><?= $data->angkatan ?></td>
                                <td><?= $data->motivasi ?></td>
                                <td><?= date('d F Y', $data->date_created); ?></td>
                                <td><select name="" id="">
                                        <option value="">YA</option>
                                        <option value="">BELUM</option>
                                    </select></td>

                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->

<div class="modal fade" id="modal-default" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Galeri</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('galeri_admin/insertdata') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" placeholder="Isi Judul Galeri" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label>Upload Galeri</label>
                        <input type="file" class="form-control" name="fotopost" required>
                    </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary swalDefaultSuccess">Simpan</button>
            </div>
        </div>
        </form>

        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>