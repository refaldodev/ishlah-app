 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800">Kelola Artikel</h1>
     </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
         </div>
         <div class="card-body">
             <!-- <a href="#" class="btn btn-default btn-md mb-3" data-toggle="modal" data-target="#modal-default"><i class=" fas fa-plus"></i> Tambah User</a> -->
             <a href="<?= base_url('artikel/tambah_artikel') ?>" class="btn btn-primary btn-icon-split mb-3">
                 <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Artikel</button> <br> <br> -->
                 <span class="icon text-white-50">
                     <i class="fas fa-plus"></i>
                 </span>
                 <span class="text">Tambah Artikel</span>
             </a>
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>No.</th>
                             <th>Judul Artikel</th>
                             <th>Action</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php
                            $no = 1;
                            foreach ($row as $data) { ?>
                             <tr>
                                 <td><?= $no++ ?></td>
                                 <td><?= $data->judul_artikel ?></td>
                                 <td>
                                     <?= anchor('artikel/detail/' . $data->id, '<div class="btn btn-outline-primary"><i class="fa fa-search-plus"></i></div>') ?>
                                     <?= anchor('artikel/edit/' . $data->id, '<div class="btn btn-outline-primary"><i class="far fa-edit"></i></div>') ?>

                                     <span onclick="javascript: return confirm('Anda Yakin ingin menghapus <?php echo $data->judul_artikel ?> ?')"><?= anchor('user/hapus/' . $data->id, '<div class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></div>') ?></span>


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
                 <h4 class="modal-title">Tambah Artikel</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <?= form_open_multipart('artikel/tambah_artikel'); ?>
                 <div class="form-group">
                     <label>Judul Artikel</label>
                     <input type="text" class="form-control" placeholder="Isi Judul Artikel" name="judul_artikel">
                 </div>
                 <div class="form-group">
                     <label>Deskripsi Artikel</label>
                     <textarea name="isi_artikel" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi Artikel"></textarea>
                     <!-- <input type="text" class="form-control" placeholder="Deskripsi Artikel" name="isi_artikel"> -->
                 </div>
                 <div class="form-group">
                     <label>Upload Cover Artikel</label>
                     <input type="file" class="form-control" name="cover_artikel">
                 </div>

             </div>
             <div class="modal-footer justify-content-between">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary swalDefaultSuccess">Simpan</button>
             </div>
         </div>
         <?= form_close(); ?>
         <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
 </div>