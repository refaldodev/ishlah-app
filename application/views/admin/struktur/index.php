 <!-- Begin Page Content -->
 <div class="container-fluid">

     <?php echo $this->session->flashdata('message') ?>
     <?php $this->view('messages') ?>

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
         </div>
         <div class="card-body">


             <?php
                foreach ($row as $data) :
                ?>
                 <img src="<?= base_url('assets/struktur_organisasi/' . $data->image_struktur) ?>" alt="" width="300" height="300">
             <?php endforeach; ?>
             <br><br>
             <?= anchor('struktur/edit/' . $data->id, '<div class="btn btn-outline-primary">Ubah Struktur Organisasi</div>') ?>

         </div>
     </div>



 </div>
 <!-- /.container-fluid -->