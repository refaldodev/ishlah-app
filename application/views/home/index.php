<body>

    <!-- Manfaat gabung Ishlah -->
    <section class="visi">
        <div class="container">
            <div class="row row-manfaat">
                <div class="col text-center">
                    <h1 class=" section-judul judul-manfaat ">Visi Ishlah </h1>
                    <h4>"Terbentuk dan terwujudnya mahasiswa, karyawan dan segenap civitas akademika LPT YAI yang memiliki kenggulan, moralitas islam, intelektualitas, humanitas dan profesionalitas sehingga terwujudnya peradaban islam."</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="manfaat">
        <div class="container">
            <div class="row row-manfaat" data-aos="fade-in">
                <div class="col text-center">
                    <h1 class=" section-judul judul-manfaat "> Manfaat Bergabung Ishlah? </h1>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-4  text-center submanfaat" data-aos="fade-in">
                    <img src="<?= base_url('assets/img/atmospherew.png') ?>" alt="">
                    <h6 class="font-weight-bold mt-2 sub-judul ">Ilmu Yang Bermanfaat</h6>
                    <p>Bergabung bersama ishlah akan membuat
                        kamu mendapat banyak ilmu yang
                        bermanfaatbaik ilmu dunia dan ilmu akhirat</p>
                </div>
                <div class="col-md-4 text-center animate__animated submanfaat2" data-aos="fade-in" data-aos-delay="100">
                    <img src="<?= base_url('assets/img/male.png') ?>" alt="">
                    <h6 class="font-weight-bold mt-2 sub-judul">Teman yang Baik</h6>
                    <p>Bergabung bersama ishlah kamu akan
                        mendapat teman yang baik InsyaAllah</p>
                </div>
                <div class="col-md-4  text-center animate__animated submanfaat3" data-aos="fade-in" data-aos-delay="200">
                    <img src="<?= base_url('assets/img/think.png') ?>" alt="">
                    <h6 class="font-weight-bold mt-2 sub-judul">Wawasan yang luas</h6>
                    <p>Bergabung bersama ishlah membuat kamu memiliki pengetahuan yang luas </p>
                </div>
            </div>
        </div>

    </section>


    <!-- PROKER -->
    <section class="proker  ">
        <div class="container ">
            <div class="row" data-aos="fade-in">
                <div class="col">
                    <h1 class="text-center section-judul animate__animated  judulprogram">Program Kami</h1>
                </div>
            </div>

            <div class="divproker  " data-aos="fade-up">
                <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active font-weight-bold" id="pills-home-tab" data-toggle="pill" href="#pills-semua" role="tab" aria-controls="pills-semua" aria-selected="true">SEMUA</a>
                    </li>
                    <?php
                    foreach ($row as $data) {
                    ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link font-weight-bold" id="pills-bph-tab" data-toggle="pill" href="#pills-<?= $data->nama_divisi ?>" role="tab" aria-controls="pills-<?= $data->nama_divisi ?>" aria-selected="false"><?= $data->nama_divisi ?></a>
                        </li>
                    <?php } ?>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-semua" role="tabpanel" aria-labelledby="pills-semua-tab">
                        <div class="row mb-3">
                            <?php
                            foreach ($row2 as $data) {
                            ?>
                                <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                    <div class="card program-kerja mb-3">
                                        <a href="<?= base_url('home/programkami/' . $data->post_slug) ?>" class="text-decoration-none ">
                                            <img src="<?= base_url('assets/image/proker/' . $data->cover_proker) ?>" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <p class="card-text section-items"><?= $data->judul_proker ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                    </div>
                    <?php
                    foreach ($row as $data) {
                        // var_dump($data)
                    ?>
                        <div class="tab-pane fade" id="pills-<?= $data->nama_divisi ?>" role="tabpanel" aria-labelledby="pills-<?= $data->nama_divisi ?>-tab">
                            <div class="row mb-3">
                                <?php
                                foreach ($row2 as $data2) {
                                    if ($data2->id_divisi_proker == $data->id) {
                                ?>
                                        <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                            <div class="card program-kerja mb-3">
                                                <a href="<?= base_url('home/programkami/' . $data2->post_slug) ?>" class="text-decoration-none ">
                                                    <img src="<?= base_url('assets/image/proker/' . $data2->cover_proker) ?>" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text section-items"><?= $data2->judul_proker ?></p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                <?php
                                    }
                                } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- <div class="tab-pane fade" id="pills-8" role="tabpanel" aria-labelledby="pills-8-tab">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6 col-sm-6">
                                <div class="card program-kerja mb-3">
                                    <a href="" class="text-decoration-none ">

                                        test
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>


    </section>


    <!-- testimoni -->
    <section class="testimoni">
        <h1 class="text-center judul judultesti section-judul " data-aos="fade-in">Apa Kata Mereka?</h1>
        <div class="owl-carousel animate__animated card-testi owl-theme container" data-aos="fade-up">


            <div class="item " id="content">
                <div class="item-testi">
                    <p class=" text-left ">
                        MasyaAllah banyak belajar banget di Ishlah, temenya asik-asik dan seru banget. recomend buat kalian yang
                        ingin mendalami ilmu agama dan umum, karena anak2nya Pinter-pinter banget
                        lorem100
                    </p>
                    <hr>
                    <div class="isi">
                        <img src=" <?= base_url('assets/img/testimonial/gambar2.png') ?>" alt="">
                        <div class="teks text-left mt-4">
                            <p class="font-weight-bold nama"> Annisa Zahra</p>
                            <br>
                            <p class="jabatan">
                                Ketua Ishlah 2020
                            </p>

                            <br>


                        </div>
                    </div>
                </div>
            </div>


            <div class="item" id="content">
                <div class="item-testi">
                    <p class="text-left ">
                        MasyaAllah banyak belajar banget di Ishlah, temenya asik-asik dan seru banget. recomend buat kalian yang
                        ingin mendalami ilmu agama dan umum, karena anak2nya Pinter-pinter banget

                    </p>
                    <hr>
                    <div class="isi">
                        <img src="<?= base_url('assets/img/testimonial/gambar1.png') ?>" alt="">
                        <div class="teks text-left mt-4">
                            <p class="font-weight-bold nama"> Annisa Zahra</p>
                            <br>
                            <p class="jabatan">
                                Ketua Ishlah 2020
                            </p>

                            <br>


                        </div>
                    </div>
                </div>

            </div>
            <div class="item" id=" content">
                <div class="item-testi">
                    <p class="text-left ">
                        MasyaAllah banyak belajar banget di Ishlah, temenya asik-asik dan seru banget. recomend buat kalian yang
                        ingin mendalami ilmu agama dan umum, karena anak2nya Pinter-pinter banget

                    </p>
                    <hr>
                    <div class="isi">
                        <img src="<?= base_url('assets/img/testimonial/gambar1.png') ?>" alt="">
                        <div class="teks text-left mt-4">
                            <p class="font-weight-bold nama"> Annisa Zahra</p>
                            <br>
                            <p class="jabatan">
                                Ketua Ishlah 2020
                            </p>

                            <br>


                        </div>
                    </div>
                </div>

            </div>
            <div class="item" id=" content">
                <div class="item-testi">
                    <p class="text-left">
                        MasyaAllah banyak belajar banget di Ishlah, temenya asik-asik dan seru banget. recomend buat kalian yang
                        ingin mendalami ilmu agama dan umum, karena anak2nya Pinter-pinter banget

                    </p>
                    <hr>
                    <div class="isi">
                        <img src="<?= base_url('assets/img/testimonial/gambar1.png') ?>" alt="">
                        <div class="teks text-left mt-4">
                            <p class="font-weight-bold nama"> Annisa Zahra</p>
                            <br>
                            <p class="jabatan">
                                Ketua Ishlah 2020
                            </p>

                            <br>


                        </div>
                    </div>
                </div>

            </div>
            <div class="item " id="content">
                <div class="item-testi">
                    <p class="text-left ">
                        MasyaAllah banyak belajar banget di Ishlah, temenya asik-asik dan seru banget. recomend buat kalian yang
                        ingin mendalami ilmu agama dan umum, karena anak2nya Pinter-pinter banget

                    </p>
                    <hr>
                    <div class="isi">
                        <img src="<?= base_url('assets/img/testimonial/gambar1.png') ?>" alt="">
                        <div class="teks text-left mt-4">
                            <p class="font-weight-bold nama"> Annisa Zahra</p>
                            <br>
                            <p class="jabatan">
                                Ketua Ishlah 2020
                            </p>

                            <br>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir testimoni -->

    <!-- artikel terbaru -->
    <section class="artikelt">
        <div class="container">
            <div class="row " data-aos="zoom-in">
                <div class="col-12">
                    <h1 class=" section-judul animate__animated text-center judul-manfaat judul-artikel">Artikel Terbaru </h1>
                </div>
            </div>
            <div class="row content-artikel " data-aos="fade-up">
                <?php
                foreach ($new_artikel as $data) {
                ?>
                    <div class="col-12 col-lg-4  col-md-4 col-sm-12 content-1 content-artikel article">
                        <figure class="">
                            <a href="<?= base_url('artikel/isiartikel/' . $data->post_slug) ?>" class="text-decoration-none">
                                <img src="<?= base_url('assets/image/artikel/' . $data->cover_artikel) ?>" class="img-fluid  gambarartikel" alt="...">

                                <figcaption class="figure-caption capt">
                                    <h6><?= $data->judul_artikel ?></h6>
                                    <p>Posted : <?= date('d F Y', $data->date_created); ?></p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                <?php } ?>

            </div>
            <div class="row text-center buttonl ">
                <div class="col-12 ">
                    <a href=" <?= base_url('artikel') ?>" class="btn button-warna  lihats text-uppercase text-center pt-2 pb-2 animate__animated justify-content-center lihat pr-3 pl-3 " data-aos="fade-up">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end artikel terbaru -->


    <!--tentang -->
    <section class="tentang" id="tentang">
        <div class="container ">
            <div class="row justify-content-center  isi-kiri">
                <div class="col-lg-6 col-md-6 col-sm-12  text animate__animated kiri">
                    <h1 class="text-center section-judul">Tentang Ishlah Y.A.I</h1>
                    <p class="text-justify">UKM Ishlah LPT YAI merupakan lembaga dakwah kampus yang digerakkan para mahasiswa Islam. Dalam perjuangannya mewujudkan masyarakat Islami, khususnya di kampus YAI harus memiliki perencanaan yang SMART (Spesific, Measureable, Acure, Realistic & Time frame) serta mempunyai arah yang jelas dalam melaksanakan program kerja secara nyata.</p>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12   isi-kanan animate__animated ">

                    <h1 class="text-center section-judul">Video</h1>
                    <div class="embed-responsive embed-responsive-16by9 border-radius">
                        <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe> -->

                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/pkw0riCnzXo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>