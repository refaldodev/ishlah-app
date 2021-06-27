<section class="galeri">
    <div class="container content-gambar">
        <div class="row">
            <div class="col-12">
                <h1 class=" section-judul judul-manfaat text-center"> Galeri </h1>
            </div>
        </div>
        <div class="row galerys">
            <?php
            foreach ($row as $data) {
            ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6 col-xl-3  pt-3">
                    <a href="<?= base_url('assets/image/galeri/' . $data->image_galeri) ?>" target="_blank" title="<?= $data->judul ?>"> <img src="<?= base_url('assets/image/galeri/' . $data->image_galeri) ?>" alt="gambar cis" class="img-fluid">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>