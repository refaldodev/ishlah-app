 <!-- Begin Page Content -->
 <div class="container-fluid">



     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Struktur</h6>
         </div>
         <div class="card-body">
             <form method="POST" action="<?= base_url('struktur/updatedata') ?>" enctype="multipart/form-data">


                 <div class="form-group">
                     <label>Upload Foto</label>
                     <input type="file" class="form-control" name="fotopost" value="<?= $data->image_struktur ?>" required>
                     <span class="text-danger"><small class="text-danger">
                             Format yang diizinkan : jpg | png | jpeg | gif <p>
                                 Max Size : 2MB</p>
                         </small></span>
                 </div>

                 <!-- file lama -->
                 <input type="hidden" name="filelama" value="<?= $data->image_struktur ?>">
                 <!-- ID -->
                 <input type="hidden" name="id" value="<?= $data->id ?>">

                 <a href="<?= base_url('struktur/index') ?>" class="btn btn-secondary">Kembali</a>
                 <button type="submit" class="btn btn-primary">Update</button>

             </form>
         </div>

     </div>



 </div>
 <!-- /.container-fluid -->