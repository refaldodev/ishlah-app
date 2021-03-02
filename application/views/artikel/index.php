<section class="artikelt">

    <div class="container artikell">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class=" section-judul text-center judul-manfaat"> Artikel </h1>
            </div>
        </div>
        <div class="row ">

            <?php
            foreach ($artikel as $data) :
            ?>
                <div class="col-12 col-lg-4  col-md-4 col-sm-12 content-1">
                    <figure class="">
                        <a href="<?= base_url('artikel/isiartikel/' . $data['id']) ?>" class="text-decoration-none">
                            <img src="<?= base_url('assets/cover_artikel/' . $data['cover_artikel']) ?>" class="img-fluid  gambarartikel" alt="...">

                            <figcaption class="figure-caption capt">
                                <p>Posted : <?= date('d F Y', $data['date_created']); ?></p>

                                <h6><?= $data['judul_artikel'] ?></h6>
                            </figcaption>
                        </a>
                    </figure>
                </div>
            <?php endforeach; ?>

        </div>


    </div>



    <div class="container pagi">
        <div class="row">
            <div class="col-12">
                <?= $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>

    <!-- <div class="container pagi">
        <div class="row">
            <div class="col-12">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item "><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
</section>