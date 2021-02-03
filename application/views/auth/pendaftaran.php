<section class="pendaftaran ">
    <div class="container">

        <div class="row">
            <div class="col-lg-6 gambar">
                <img src="<?= base_url('assets/img/logotulisan.png') ?>" alt="">
            </div>
            <div class="col-lg-4">

                <form action="" class="mt-4">
                    <select name="" id="">
                        <option value="">Pilih</option>

                        <?php foreach ($jpakaian as $data) : ?>
                            <option value=""> <?= $data; ?></option>
                        <?php endforeach; ?>



                    </select>
                    <select name="" id="">
                        <?php foreach ($pakaian as $row) : ?>

                            <?php if ($jpakaian == 'Pakaian Wanita') : ?>
                                <option value="">
                                    <?= $row ?>
                                    kontol
                                </option>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select>
                </form>
            </div>
        </div>
    </div>

</section>