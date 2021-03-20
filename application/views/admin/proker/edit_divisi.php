 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
     </div>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Data Divisi</h6>
         </div>
         <div class="card-body">
             <?php
                foreach ($divisi as $data) {
                ?>
                 <form method="POST" action="<?= base_url('divisi_proker/update_divisi') ?>">

                     <div class="form-group">
                         <label>Nama Divisi<span class="text-danger"> *</span></label>
                         <input type="text" class="form-control" placeholder="Nama Divisi" name="nama_divisi" value="<?= $data->nama_divisi ?>" required>
                     </div>


                     <!-- ID -->
                     <input type="hidden" name="id" value="<?= $data->id ?>">

                     <a href="<?= base_url('divisi_proker/index_divisi') ?>" class="btn btn-secondary">Kembali</a>
                     <button type="submit" class="btn btn-primary">Update</button>

                 </form>
             <?php } ?>
         </div>

     </div>



 </div>
 <!-- /.container-fluid -->