 <?php $b = $data->row_array(); ?>
 <section class="programkami">
     <div class="container">

         <div class="row isiprogram">
             <div class="col-12">

                 <h1 class="section-judul text-center">
                     <?= $b['judul_proker'] ?>
                 </h1>

             </div>
             <div class="col-12 m-auto text-center">
                 <img src="<?= base_url('assets/cover_proker/' . $b['cover_proker']) ?>" alt="">
             </div>
             <div class="col-12 col-lg-12 col-sm-12 col-md-12 isi ">
                 <h5><?= $b['id_divisi_proker'] ?></h5>
                 <h5><?= $b['judul_proker'] ?></h5>
                 <br>
                 <h5 class="deskripsi">Deskripsi Program</h5>
                 <p><?= $b['deskripsi_proker'] ?></p>
             </div>
         </div>



     </div>
 </section>