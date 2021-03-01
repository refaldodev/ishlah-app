<section class="jadwalkegiatan">
    <div class="container">
        <div class="row kegiatan">
            <div class="col-12">
                <h1 class="section-judul text-center">Jadwal Kegiatan</h1>
            </div>
            <?php
            foreach ($row as $data) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    <div class="card isijadwal">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $data->judul_kegiatan ?></h5>
                            <h6 class="card-subtitle  "><?= $data->hari ?></h6>
                            <p class="card-text "><?= $data->waktu ?> - <?= $data->waktu2 ?><br><?= $data->tempat ?></p>
                            <!-- <p class="card-text">Via Zoom</p> -->
                            <a href="https://api.whatsapp.com/send?phone=62<?= ltrim($data->pic, '0') ?>&text=Assalamu%27alaykum%2C%20Saya%20ingin%20mengikuti%20kegiatan%20<?= $data->judul_kegiatan ?>" target="_blank" class="card-link ">Info Lebih Lanjut</a>

                        </div>
                    </div>

                </div>
            <?php } ?>

        </div>
    </div>
</section>