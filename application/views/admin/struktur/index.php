 <!-- Begin Page Content -->
 <div class="container-fluid">



     <?php if ($this->session->flashdata('flash')) : ?>
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             Data <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
     <?php endif; ?>



     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
         </div>
         <div class="card-body">

             <?php
                foreach ($row as $data) :
                ?>
                 <img src="<?= base_url('assets/galeri/' . $data->image_struktur) ?>" alt="" width="300" height="300">
             <?php endforeach; ?>
             <br><br>
             <?= anchor('struktur/edit/' . $data->id, '<div class="btn btn-outline-primary">Ubah Struktur Organisasi</div>') ?>
         </div>
     </div>



 </div>
 <!-- /.container-fluid -->