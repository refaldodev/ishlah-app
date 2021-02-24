 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800">Tambah Isi Proker</h1>
     </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Proker</h6>
         </div>
         <div class="card-body">
             <?= form_open_multipart('divisi_proker/proses_tambah'); ?>
             <div class="form-group">
                 <label>Pilih Divisi Proker</label>
                 <select name="id_divisi_proker" class="form-control">
                     <option>--- Pilih Divisi Proker ---</option>
                     <?php
                        foreach ($divisi_proker as $row_divisi_proker) {
                        ?>
                         <option value=" <?= $row_divisi_proker->id ?>"><?= $row_divisi_proker->nama_divisi ?></option>
                     <?php } ?>
                 </select>
             </div>

             <div class="form-group">
                 <label>Judul Proker</label>
                 <input type="text" class="form-control" placeholder="Isi Judul Proker" name="judul_proker" id="judul_proker">
             </div>
             <div class="form-group">
                 <label>Deskripsi Proker</label>
                 <textarea id="editor1" name="deskripsi_proker"></textarea>
             </div>
             <div class="form-group">
                 <label>Upload Foto</label>
                 <input type="file" class="form-control" name="cover_proker" id="cover_proker">
             </div>

             <a href="<?= base_url('divisi_proker/index_proker') ?>" class="btn btn-secondary">Kembali</a>
             <button type="submit" class="btn btn-primary">Simpan</button>
             <script>
                 CKEDITOR.replace('editor1');
             </script>
             <?= form_close(); ?>
         </div>

     </div>



 </div>
 <!-- /.container-fluid -->