<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <!-- font awesome -->
  <!-- <link rel="stylesheet" href="<?= base_url('assets/js/all.css'); ?>"> -->
  <!-- owl carousel css -->
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/owlcarousel/dist/assets/owl.carousel.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/owlcarousel/dist/assets/owl.theme.default.min.css"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= base_url('assets/owlcarousel/dist/assets/owl.carousel.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/owlcarousel/dist/assets/owl.theme.default.min.css') ?>">
  <!-- animate css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  <!-- mycss -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/mycss.css">
  <!-- xzoom -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/xzoom/xzoom.css">
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">

  <title><?= $judul; ?></title>
  <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">

</head>

<body>

  <!-- bouncing balls -->
  <section class="loader">
    <div class="bouncer m-auto">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </section>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="navbar">
    <div class="container d-flex align-items-center">

      <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url(); ?>assets/img/logoNav.png" alt="" data-toggle="tooltip" data-placement="right" title="Logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item  ">
            <a class="nav-link nav-hover mr-3 <?php if ($this->uri->segment('1') == '') {
                                                echo "aktif";
                                              } ?>" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-hover drop mr-3" href="<?= base_url(); ?>profil" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item 
              <?php if ($this->uri->segment('2') == 'index') {
                echo "aktif";
              } ?>" href="<?= base_url('profil/index') ?>">Sejarah</a>
              <a class="dropdown-item <?php if ($this->uri->segment('2') == 'visi') {
                                        echo "aktif";
                                      } ?>" href="<?= base_url('profil/visi') ?>">Visi & Misi</a>
              <a class="dropdown-item 
              <?php if ($this->uri->segment('2') == 'struktur') {
                echo "aktif";
              } ?>" href="<?= base_url('profil/struktur') ?>">Struktur Pengurus</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover mr-3 
            <?php if ($this->uri->segment('1') == 'artikel') {
              echo "aktif";
            } ?>" href="<?= base_url('artikel') ?>">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-hover mr-3 
            <?php if ($this->uri->segment('1') == 'galeri') {
              echo "aktif";
            } ?>" href="<?= base_url('galeri'); ?>">Galeri</a>
          </li>

          <li class="nav-item ">
            <a class="nav-link nav-hover mr-3
             <?php if ($this->uri->segment('1') == 'jadwalkegiatan') {
                echo "aktif";
              } ?>" href="<?= base_url('jadwalkegiatan'); ?>">Jadwal Kegiatan</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- carousel -->
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol> -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url(); ?>assets/img/carousel/carousel1.jpg" class="d-block w-100" alt="First slide">
        <div class="carousel-caption mb-5">
          <h5>SELAMAT DATANG</h5>
          <p>Di Website LDK ISHLAH Y.A.I</p>
          <a href="<?= base_url('pendaftaran'); ?>" class="btn button-warna ">Gabung</a>

        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>assets/img/carousel/carousel5.jpg" class="d-block w-100" alt="Second slide">
        <div class="carousel-caption mb-5">
          <h5>TOGETHER BE BETTER</h5>
          <p>Mari bersama-sama menjadi manusia yang lebih baik lagi.</p>
          <a href="<?= base_url('auth/pendaftaran'); ?>" class="btn button-warna">Gabung</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= base_url(); ?>assets/img/carousel/carousel6.jpg" class="d-block w-100" alt="Third slide">
        <div class="carousel-caption mb-5">
          <h5>MARI SEBARKAN KEBAIKAN</h5>
          <p>Karena kebaikan tidak cukup hanya sampai dikamu, mari sebarkan.</p>
          <a href="<?= base_url('pendaftaran'); ?>" class="btn button-warna">Gabung</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Pre`vious</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- toTopButton -->
  <button id="topBtn" class=" waves-effect waves-teal"><img src="<?= base_url('assets/img/top.png') ?>" alt="" width="15"></button>