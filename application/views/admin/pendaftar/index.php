<!-- Begin Page Content -->
<div class="container-fluid">


    <?php $this->view('messages') ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
        </div>
        <div class="card-body">
            <form class="" method="POST" action="">
                <p>Tampilkan berdasarkan tanggal </p>
                <div class="row">
                    <div class="input-daterange">
                        <div class="col ">
                            <input type="date" name="awal" value="" class="form-control" />
                        </div>
                    </div>
                    <div class="input-daterange">
                        <div class="col ">
                            <input type="date" name="akhir" value="" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <input type="submit" name="filter" id="search" value="Filter" class="btn btn-info" />
                        <input type="submit" name="reset" id="reset" value="Reset" class="btn btn-info" />
                    </div>
                </div>
                <br>
            </form>
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
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $key => $data) : ?>
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
                                <td><?= longdate_indo($data->date_created) ?></td>
                                <td>
                                    <a href="<?= base_url('pendaftaran_admin/hapus/' . $data->id) ?>" onclick="javascript: return confirm('Anda Yakin ingin menghapus <?= $data->nama ?> ?')" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                                </td>
                                <!-- <td>
                                    <form action="">
                                        <select name="hub" onchange="this.form.submit()">
                                            <option value="YA">YA</option>
                                            <option value="BELUM">BELUM</option>
                                        </select>
                                        <noscript><input type="submit"></noscript>
                                    </form>
                                </td> -->

                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->