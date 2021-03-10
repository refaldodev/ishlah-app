 <section class="programkami">
     <div class="container">

         <div class="row isiprogram">
             <div class="col-12">

                 <h1 class="section-judul text-center">
                     <?= $detail->judul_proker ?>
                 </h1>

             </div>
             <div class="col-12 m-auto text-center">
                 <img src="<?= base_url('assets/cover_proker/' . $detail->cover_proker) ?>" alt="">
             </div>
             <div class="col-12 col-lg-12 col-sm-12 col-md-12 isi ">
                 <h5><?= $detail->nama_divisi ?></h5>
                 <h5><?= $detail->judul_proker ?></h5>
                 <br>
                 <h5 class="deskripsi">Deskripsi Program</h5>
                 <p><?= $detail->deskripsi_proker ?></p>
             </div>
         </div>



     </div>
 </section>