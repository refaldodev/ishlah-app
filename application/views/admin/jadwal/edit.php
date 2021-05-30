 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
     </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
         </div>
         <div class="card-body">
             <?php
                foreach ($jadwal as $data) {
                ?>
                 <form method="POST" action="<?= base_url('JadwalKegiatan_admin/update') ?>">

                     <div class="form-group">
                         <label>Judul Kegiatan<span class="text-danger"> *</span></label>
                         <input type="text" class="form-control" placeholder="Judul Kegiatan" name="judul_kegiatan" value="<?= $data->judul_kegiatan ?>" required>
                     </div>
                     <div class="form-group">
                         <label>Hari<span class="text-danger"> *</span></label>
                         <input type="text" class="form-control" placeholder="Ex : Setiap Hari Senin" name="hari" value="<?= $data->hari ?>" required>
                     </div>
                     <div class="form-group">
                         <label>Waktu<span class="text-danger"> *</span></label>
                         <input type="time" class="form-control" placeholder="Waktu" name="waktu" value="<?= $data->waktu ?>" required> s/d <input type="time" class="form-control" placeholder="Waktu" name="waktu2" value="<?= $data->waktu2 ?>" required>
                     </div>
                     <div class="form-group">
                         <label>Tempat<span class="text-danger"> *</span></label>
                         <input type="text" class="form-control" placeholder="Ex : Via Zoom" name="tempat" value="<?= $data->tempat ?>" required>
                     </div>
                     <div class="form-group">
                         <label>PIC / No. Whatsapp<span class="text-danger"> *</span></label>
                         <input type="number" class="form-control" placeholder="No. WA" name="pic" value="<?= $data->pic ?>" required>
                     </div>


                     <!-- ID -->
                     <input type="hidden" name="id" value="<?= $data->id ?>">

                     <a href="<?= base_url('JadwalKegiatan_admin/index') ?>" class="btn btn-secondary">Kembali</a>
                     <button type="submit" class="btn btn-primary">Update</button>

                 </form>
             <?php } ?>
         </div>

     </div>



 </div>
 <!-- /.container-fluid -->