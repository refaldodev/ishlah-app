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
                <p class="isitulisan">
                    <?= $detail->isi_artikel ?>
                </p>
            </div>

        </div>

        <div class="row komentar">
            <div class="col-lg-8 col-md-8 col-sm-12 m-auto">
                <h1 class="section-komentar">Komentar</h1>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 m-auto">
                <div class="row isi-komentar  inikomentar">
                    <div class="col-12 d-flex ">
                        <img src="<?= base_url('assets/img/komen.png') ?>" alt="" class="rounded-circle">

                        <p class="nama-user">Refaldo</p>
                        <p class="isi-komentar ">Sangat bermanfaaat sekali, Terimakasih lorem100</p>


                    </div>

                    <div class="col-12 d-flex balasan">
                        <img src="<?= base_url('assets/img/koment2.png') ?>" alt="" class="rounded-circle">

                        <p class="nama-user">Admin</p>
                        <p class="isi-komentar ">Terimakasih kak Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis perspiciatis error sed incidunt esse eius optio, provident quibusdam, enim repudiandae ullam consectetur inventore aspernatur nihil voluptates dignissimos commodi </p>


                    </div>
                    <div class="col-12 d-flex balasan">
                        <img src="<?= base_url('assets/img/koment2.png') ?>" alt="" class="rounded-circle">

                        <p class="nama-user">Admin</p>
                        <p class="isi-komentar ">Terimakasih kak Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis perspiciatis error sed incidunt esse eius optio, provident quibusdam, enim repudiandae ullam consectetur inventore aspernatur nihil voluptates dignissimos commodi </p>


                    </div>

                </div>
                <div class="row isi-komentar  inikomentar">
                    <div class="col-12 d-flex ">
                        <img src="<?= base_url('assets/img/koment2.png') ?>" alt="">

                        <p class="nama-user">Fani</p>
                        <p class="isi-komentar ">Sangat bermanfaaat sekali, Terimakasih lorem1</p>


                    </div>


                </div>
                <div class="row isi-komentar  inikomentar">
                    <div class="col-12 d-flex ">
                        <img src="<?= base_url('assets/img/gambar4.png') ?>" alt="" class="rounded-circle">

                        <p class="nama-user">Akhi</p>
                        <p class="isi-komentar ">Sangat bermanfaaat sekali, Terimakasih lorem110</p>


                    </div>


                </div>

            </div>

        </div>
        <div class="row ">
            <div class="col-lg-8 m-auto col-sm-12  mt-3">
                <div class="alert alert-success alert-dismissible fade show alertt" role="alert">
                    <strong>Terimakasih,</strong> tanggapan anda telah kami terima, tanggapan anda akan melalui proses validasi terlebih dahulu !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" class="inputkomentar">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Komentar *</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nama *</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email *</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Website *</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1">

                    </div>
                    </textarea>
                    <p>Alamat email Anda tidak akan dipublikasikan. Ruas yang wajib ditandai *</p>
                    <button type="submit" class="btn button-warna pt-3 pb-3 pr-5 pl-5">
                        Kirim

                    </button>
                </form>
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
