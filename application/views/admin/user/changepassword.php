<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
                <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
            </div>
            <?= $this->session->flashdata('message') ?>
            <!-- Content Row -->
            <div class="row">
                <div class="col-lg-8">
                    <form action="<?= base_url('profile/changepassword') ?>" method="post">
                        <div class="row mb-3">
                            <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="current_password" name="current_password">
                                <?= form_error('current_password'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="new_password1" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="new_password1" name="new_password1">
                                <?= form_error('new_password1'); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="new_password2" class="col-sm-2 col-form-label">Repeat Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="new_password2" name="new_password2">
                                <?= form_error('new_password2'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>