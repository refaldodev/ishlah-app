 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
     </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Proker</h6>
         </div>
         <div class="card-body">
             <form method="POST" action="<?= base_url('divisi_proker/update_isi') ?>" enctype="multipart/form-data">
                 <div class="form-group">
                     <label>Pilih Divisi Proker<span class="text-danger"> *</span></label>
                     <select name="id_divisi_proker" class="form-control">
                         <option>--- Pilih Divisi Proker ---</option>
                         <?php
                            foreach ($divisi_proker as $row_divisi_proker) {
                            ?>
                             <option value="<?= $row_divisi_proker->id ?>" <?= $row_divisi_proker->id == $data->id_divisi_proker ? 'selected' : '' ?>><?= $row_divisi_proker->nama_divisi ?></option>
                         <?php } ?>
                     </select>
                 </div>

                 <div class="form-group">
                     <label>Judul Proker<span class="text-danger"> *</span></label>
                     <input type="text" class="form-control" placeholder="Isi Judul Proker" name="judul_proker" value="<?= $data->judul_proker ?>" required>
                 </div>
                 <div class="form-group">
                     <label>Deskripsi Proker<span class="text-danger"> *</span></label>
                     <textarea id="editor1" name="deskripsi_proker" required><?= $data->deskripsi_proker ?></textarea>
                 </div>
                 <div class="form-group">
                     <label>Upload Foto <small>(Biarkan kosong jika tidak diganti) </small></label>
                     <input type="file" class="form-control" name="fotopost">
                     <span class="text-danger"><small class="text-danger">
                             Format yang diizinkan : jpg | png | jpeg | gif <p>
                                 Max Size : 2MB</p>
                         </small></span>
                     <p>Foto saat ini </p>
                     <img src="<?= base_url('assets/cover_proker/' . $data->cover_proker) ?>" alt="" width="200" height="110"><br>
                 </div>

                 <!-- file lama -->
                 <input type="hidden" name="filelama" value="<?= $data->cover_proker ?>">
                 <!-- ID -->
                 <input type="hidden" name="id" value="<?= $data->id ?>">

                 <a href="<?= base_url('divisi_proker/index_proker') ?>" class="btn btn-secondary">Kembali</a>
                 <button type="submit" class="btn btn-primary">Update</button>
                 <script>
                     CKEDITOR.replace('editor1');
                 </script>
             </form>
         </div>

     </div>



 </div>
 <!-- /.container-fluid -->