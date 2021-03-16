<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Edit Galeri</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Galeri</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="<?= base_url('galeri_admin/updatedata') ?>" enctype="multipart/form-data">
                <!-- ID -->
                <input type="hidden" name="id" value="<?= $id ?>">

                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul" value="<?= $result[0]['judul'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" class="form-control" name="file">
                    <input type="hidden" name="filelama" value="">
                    <img src="<?= base_url('assets/galeri/' . $result[0]['image_galeri']) ?>" alt="" width="100"><br>
                    <span class="text-danger"><small class="text-danger">
                            Format yang diizinkan : jpg | png | jpeg | gif <p>
                                Max Size : 2MB</p>
                        </small></span>
                </div>



                <a href="<?= base_url('galeri_admin/index') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>

    </div>



</div>
<!-- /.container-fluid -->