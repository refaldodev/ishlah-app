<section class="pendaftaran ">
    <div class="container">

        <div class="row">
            <div class="col-lg-7 gambar d-none d-xl-block d-lg-block">
                <img src="<?= base_url('assets/img/logotulisan.png') ?>" alt="">
            </div>
            <div class="col-lg-5 form-pendaftaran col-sm-12">
                <div class="container-form m-auto">
                    <form action="pendaftaran/tambah_pendaftar" method="POST" class="mt-4">
                        <h1 class="title font-weight-bold">Daftar</h1>
                        <div class="form-group">
                            <input type="text" placeholder="Nama" class="form-link" name="nama" autofocus required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-link" name="email" required>
                        </div>
                        <div class="form-group">
                            <input type="wa" placeholder="No. Wa" class="form-link" name="no_wa" required>
                        </div>
                        <div class="form-group">
                            <select name="jkel" id="" class="form-link" required>
                                <option value="Jenis Kelamin" disabled selected>
                                    Jenis Kelamin
                                </option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="id_fakultas" id="fakultas" class="form-link" required>
                                <option value="Fakultas" disabled selected>
                                    Fakultas </option>

                                <?php
                                foreach ($fakultas as $row_fakultas) :
                                ?>
                                    <option value=" <?= $row_fakultas->id ?>"><?= $row_fakultas->nama_fakultas ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <select name="id_prodi" id="prodi" class="form-link" required>
                                <option value="Prodi" disabled selected>
                                    Program Studi </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Angkatan" class="form-link" name="angkatan" required>
                        </div>
                        <div class="form-group">
                            <label for="">Motivasi bergabung dengan Ishlah?</label>
                            <textarea name="motivasi" id="" cols="30" rows="10" class="form-link" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Kirim" class="form-link  btn-daftar">
                            <a href="<?= base_url() ?>">&#8592; Kembali ke Beranda</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- jQuery -->
<script src="<?= base_url() ?>assets/admin/vendor/jquery/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#fakultas').change(function() {
            var id = $(this).val();
            $.ajax({
                url: "<?php echo site_url('pendaftaran/get_prodi'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    data.forEach(d => {
                        html += `<option value= + ${d.id}  > ${d.nama_prodi}  </option>`;
                    })
                    $('#prodi').html(html);

                }
            });
            return false;
        });

    });
</script>