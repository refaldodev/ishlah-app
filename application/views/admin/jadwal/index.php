 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
     </div>

     <?php $this->view('messages') ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
         </div>
         <div class="card-body">

             <a href="#" class="btn btn-primary btn-icon-split mb-3" data-toggle="modal" data-target="#exampleModal">
                 <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Artikel</button> <br> <br> -->
                 <span class="icon text-white-50">
                     <i class="fas fa-plus"></i>
                 </span>
                 <span class="text">Tambah Jadwal Kegiatan</span>
             </a>

             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No.</th>
                             <th>Judul Kegiatan</th>
                             <th>Hari</th>
                             <th>Waktu</th>
                             <th>Tempat</th>
                             <th>PIC / No. WA</th>
                             <th>Action</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php
                            $no = 1;
                            foreach ($row as $data) { ?>
                             <tr>
                                 <td><?= $no++ ?></td>
                                 <td><?= $data->judul_kegiatan ?></td>
                                 <td><?= $data->hari ?></td>
                                 <td><?= $data->waktu ?> - <?= $data->waktu2 ?></td>
                                 <td><?= $data->tempat ?></td>
                                 <td><?= $data->pic ?></td>
                                 <td>

                                     <a href="<?= base_url('jadwalkegiatan_admin/edit/' . $data->id) ?>" data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-outline-primary"><i class="far fa-edit"></i></a>
                                     <a href="<?= base_url('jadwalkegiatan_admin/hapus/' . $data->id) ?>" onclick="javascript: return confirm('Anda Yakin ingin menghapus <?= $data->judul_kegiatan ?> ?')" data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></a>



                                 </td>

                             </tr>
                         <?php } ?>

                     </tbody>
                 </table>
             </div>

         </div>
     </div>

 </div>
 <!-- /.container-fluid -->
 <div class="modal fade" id="exampleModal" aria-hidden="true" style="display: none;">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title">Tambah Jadwal Kegiatan</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form action="<?= base_url('jadwalkegiatan_admin/tambah') ?>" method="post">
                     <div class="form-group">
                         <label>Judul Kegiatan</label>
                         <input type="text" class="form-control" placeholder="Judul Kegiatan" name="judul_kegiatan" required>
                     </div>
                     <div class="form-group">
                         <label>Hari</label>
                         <input type="text" class="form-control" placeholder="Ex : Setiap Hari Senin" name="hari" required>
                     </div>
                     <div class="form-group">
                         <label>Waktu</label>
                         <input type="time" class="form-control" placeholder="Waktu" name="waktu"> s/d <input type="time" class="form-control" placeholder="Waktu" name="waktu2" required>
                     </div>
                     <div class="form-group">
                         <label>Tempat</label>
                         <input type="text" class="form-control" placeholder="Ex : Via Zoom" name="tempat" required>
                     </div>
                     <div class="form-group">
                         <label>PIC / No. Whatsapp</label>
                         <input type="number" class="form-control" placeholder="No. WA" name="pic" required>
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