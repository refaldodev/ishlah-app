<section class="struktur">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 image-sejarah text-center">
                <h1 class="text-center   section-judul">Struktur Kepengurusan</h1>
                <?php
                foreach ($row as $data) :
                ?>
                    <img src="<?= base_url('assets/struktur_organisasi/' . $data->image_struktur) ?>" alt="" class="gambar">
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>