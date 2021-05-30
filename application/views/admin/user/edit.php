<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Kelola User</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
        </div>
        <div class="card-body">


            <form action="" method="POST">
                <input type="hidden" class="form-control" placeholder="Full Name" name="id" value="<?= $row['id']  ?>" required id="id">

                <div class="form-group">

                    <label>Full Name</label>
                    <input type="text" class="form-control" placeholder="Full Name" name="name" value="<?= $row['name']  ?>" required id="name">
                    <?= form_error('name'); ?>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" value="<?= $row['username']  ?>" readonly>
                    <?= form_error('username'); ?>
                </div>
                <div class="form-group">
                    <label>Password</label> <small>(Biarkan kosong jika tidak diganti) </small>
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password1" value="<?= $this->input->post('password') ?>">
                    <?= form_error('password'); ?>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password2" id="password2" <?= $this->input->post('password2') ?>>
                    <?= form_error('password2'); ?>
                </div>
                <div class="form-group">
                    <label>Level</label> <br>
                    <input type="radio" name="level" value="1" <?= $row['level'] == 1 ? 'checked' : 'null' ?>>
                    <label for="">Admin</label>
                    <input type="radio" name="level" value="2" <?= $row['level'] == 2 ? 'checked' : 'null' ?>>
                    <label for="">Member</label>
                    <?= form_error('level'); ?>
                </div>

                <a href="<?= base_url('user') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

        </div>


    </div>




</div>
<!-- /.container-fluid -->