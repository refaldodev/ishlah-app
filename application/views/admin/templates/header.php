<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>

    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/admin/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/admin/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url('assets/admin/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- CK EDITOR -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">Ishlah admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= isset($is_dashboard) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <?php if ($this->session->userdata('level') == 1) { ?>

                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    Admin
                </div>

                <!-- Nav Item - Pages Collapse Menu -->

                <li class="nav-item <?= isset($is_user) ? "active" : "" ?>">
                    <a class="nav-link" href="<?= base_url('user') ?>">
                        <i class="fas fa-fw fa-user"></i>
                        <span>User</span></a>
                </li>
            <?php } ?>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= isset($is_artikel) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('artikel_admin') ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Artikel</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= isset($is_galeri) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('galeri_admin') ?>">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Galeri</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= isset($is_struktur) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('struktur') ?>">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Struktur Organisasi</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= isset($is_pendaftar) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('pendaftaran_admin') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Pendaftar</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= isset($is_jadwal) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('JadwalKegiatan_admin') ?>">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>Jadwal Kegiatan</span></a>
            </li>

            <li class="nav-item <?= isset($is_proker) ? "active" : "" ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#prokerPages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-lightbulb"></i>
                    <span>Proker</span>
                </a>
                <div id="prokerPages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item <?= isset($is_divisi) ? "active" : "" ?>" href="<?= base_url('divisi_proker/index_divisi') ?>">Divisi Proker</a>
                        <a class="collapse-item <?= isset($is_isi) ? "active" : "" ?>" href="<?= base_url('divisi_proker/index_proker') ?>">Isi Proker</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profle
            </div>
            <li class="nav-item <?= isset($is_myprofile) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('profile') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>
            <li class="nav-item <?= isset($is_profile) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('profile/edit') ?>">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profile</span></a>
            </li>
            <li class="nav-item <?= isset($is_changepassword) ? "active" : "" ?>">
                <a class="nav-link" href="<?= base_url('profile/changepassword') ?>">
                    <i class="fas fa-fw fa-key"></i>
                    <span>Change Password</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">