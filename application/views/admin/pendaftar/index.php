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
                            <!-- <th>Sudah Dihubungi</th> -->
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
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->