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
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                     <tr>
                         <th>Judul Artikel</th>
                         <td><?= $detail->judul_artikel ?></td>
                     </tr>
                     <tr>
                         <th>Isi Artikel</th>
                         <td><?= $detail->isi_artikel ?></td>
                     </tr>
                     <tr>
                         <th>Cover Artikel</th>
                         <td><img src="<?php echo base_url(); ?>assets/image/artikel/<?php echo $detail->cover_artikel; ?>" width="90" height="110"></td>
                     </tr>
                     <tr>
                         <th>Tanggal Posted</th>
                         <td><?= date('d F Y', $detail->date_created); ?></td>
                     </tr>
                     <tr>
                         <th>Post By</th>
                         <td><?= $detail->post_by ?></td>
                     </tr>
                 </table>
                 <a href="<?= base_url('artikel_admin/index') ?>" class="btn btn-secondary">Kembali</a>
             </div>
         </div>
     </div>



 </div>
 <!-- /.container-fluid -->