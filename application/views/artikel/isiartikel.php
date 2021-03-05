<section class="isiartikel">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto col-sm-12">

                <h1 class=" section-judul judul-manfaat ">"<?= $detail->judul_artikel ?>"</h1>
                <p class="tanggalpost">Posted : <?= date('d F Y', $detail->date_created); ?></p>
                <p class="namaeditor"><?= $detail->post_by ?> - Ldk Ishlah</p>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto col-sm-12">
                <img src="<?= base_url('assets/cover_artikel/' . $detail->cover_artikel) ?>" alt="">
                <p class="isitulisan ">
                    <?= $detail->isi_artikel ?>
                </p>
            </div>

        </div>

        <div class="row komentar mt-2">
            <div class="col-lg-8 m-auto col-sm-12">
                <div id="disqus_thread"></div>
                <script>
                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document,
                            s = d.createElement('script');
                        s.src = 'https://ishlah-app.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>

        </div>

    </div>

    <!-- artikel terbaru -->
    <section class="artikelt pembatas">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <h1 class="section-judul text-center  mb-5">Artikel Terbaru </h1>
                </div>
            </div>
            <div class="row ">
                <?php
                foreach ($new_artikel as $data) {
                ?>
                    <div class="col-12 col-lg-4  col-md-4 col-sm-12 content-1">
                        <figure class="">
                            <a href="<?= base_url('artikel/isiartikel/' . $data->id) ?>" class="text-decoration-none">
                                <img src="<?= base_url('assets/cover_artikel/' . $data->cover_artikel) ?>" class="img-fluid rounded gambarartikel" alt="...">

                                <figcaption class="figure-caption capt">
                                    <p>Posted : <?= date('d F Y', $data->date_created); ?></p>

                                    <h6><?= $data->judul_artikel ?></h6>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                <?php } ?>

            </div>
            <div class="row text-center buttonl ">
                <div class="col-12 ">
                    <a href=" <?= base_url('artikel') ?>" class="btn button-warna   text-uppercase text-center pt-2 pb-2  justify-content-center lihat pr-3 pl-3 ">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end artikel terbaru -->
</section>