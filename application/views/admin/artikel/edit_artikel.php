 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800">Edit Artikel</h1>
     </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
         </div>
         <div class="card-body">
             <!-- <div class="form mb-5">
                 <div class="row">
                     <div class="col-md-6 offset-md-3"> -->
             <form method="POST" action="<?= base_url('artikel_admin/updatedata') ?>" enctype="multipart/form-data">
                 <div class="form-group">
                     <label>Judul Artikel<span class="text-danger"> *</span></label>
                     <input type="hidden" name="id" class="form-control" value="<?php echo $data->id ?>">
                     <input type="text" class="form-control" placeholder="Isi Judul Artikel" name="judul_artikel" value="<?= $data->judul_artikel ?>" required>
                 </div>

                 <div class="form-group">
                     <label>Deskripsi Artikel<span class="text-danger"> *</span></label>
                     <textarea id="editor1" name="isi_artikel" required><?= $data->isi_artikel ?></textarea>
                 </div>
                 <div class="form-group">
                     <label>Upload Cover Artikel <small>(Biarkan kosong jika tidak diganti) </small></label>
                     <input type="file" class="form-control" name="fotopost">
                     <span class="text-danger"><small class="text-danger">
                             Format yang diizinkan : jpg | png | jpeg | gif <p>
                                 Max Size : 2MB</p>
                         </small></span>
                     <!-- file lama -->
                     <input type="hidden" name="filelama" value="<?= $data->cover_artikel ?>">
                     <p>Foto saat ini </p>
                     <img src="<?= base_url('assets/image/artikel/' . $data->cover_artikel) ?>" alt="" width="200"><br>

                 </div>
                 <div class="form-group">
                     <label>Uploader</label>
                     <input type="text" class="form-control" name="post_by" value="<?= $user['name'] ?>" readonly>
                 </div>
                 <input type="hidden" name="post_slug" value="<?= $data->post_slug ?>">
                 <a href="<?= base_url('artikel_admin/index') ?>" class="btn btn-secondary">Kembali</a>
                 <button type="submit" class="btn btn-primary">Update</button>
                 <script>
                     CKEDITOR.replace('editor1');
                 </script>
             </form>
             <!-- </div>
                 </div>
             </div> -->


         </div>

     </div>



 </div>
 <!-- /.container-fluid -->