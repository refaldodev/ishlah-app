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

             <form method="POST" action="<?= base_url('artikel_admin/updatedata') ?>" enctype="multipart/form-data">
                 <div class="form-group">
                     <label>Judul Artikel</label>
                     <input type="hidden" name="id" class="form-control" value="<?php echo $data->id ?>">
                     <input type="text" class="form-control" placeholder="Isi Judul Artikel" name="judul_artikel" value="<?= $data->judul_artikel ?>" required>
                 </div>

                 <div class="form-group">
                     <label>Deskripsi Artikel</label>
                     <textarea id="editor1" name="isi_artikel" required><?= $data->isi_artikel ?></textarea>
                 </div>
                 <div class="form-group">
                     <label>Upload Cover Artikel</label>
                     <input type="file" class="form-control" name="fotopost" required>
                 </div>
                 <a href="<?= base_url('artikel/index_admin') ?>" class="btn btn-secondary">Kembali</a>
                 <button type="submit" class="btn btn-primary">Simpan</button>
                 <script>
                     CKEDITOR.replace('editor1');
                 </script>
             </form>

         </div>

     </div>



 </div>
 <!-- /.container-fluid -->