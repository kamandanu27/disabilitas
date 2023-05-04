<!doctype html>
<html lang="en">

<head>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-105594540-4');
  </script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="https://sippn.menpan.go.id/asset/img/favicon-cariyanlik.png">

  <!-- meta fb og start -->
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Sistem Informasi Pelayanan Publik" />
  <meta property="og:site_name" content="SIPP" />
  <meta property="og:description" content="Sistem Informasi Pelayanan Publik" />
  <!-- meta fb og end -->
  <!-- meta twitter og start -->
  <meta content="Sistem Informasi Pelayanan Publik" data-page-subject="true" name="twitter:title" />
  <meta content="Sistem Informasi Pelayanan Publik" data-page-subject="true" name="twitter:description" />
  <meta content="@' . TWITTER_PAGE . '" data-page-subject="true" name="twitter:creator" />
  <meta content="photo" data-page-subject="true" name="twitter:card" />
  <meta content="560" data-page-subject="true" name="twitter:image:width" />
  <meta content="750" data-page-subject="true" name="twitter:image:height" />
  <!-- meta twitter og end -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://sippn.menpan.go.id/asset/css/bootstrap.min.css?ver=2.0.2">
  <link rel="stylesheet" href="https://sippn.menpan.go.id/asset/css/owl.carousel.min.css?ver=2.0.2">
  <link rel="stylesheet" href="https://sippn.menpan.go.id/asset/css/owl.theme.default.min.css?ver=2.0.2">
  <link rel="stylesheet" href="https://sippn.menpan.go.id/asset/css/select2.min.css?ver=2.0.2">
  <link rel="stylesheet" href="https://sippn.menpan.go.id/asset/css/style.css?ver=2.0.2">
  <link rel="stylesheet" href="https://sippn.menpan.go.id/asset/css/responsive.css?ver=2.0.2">
  <link rel="stylesheet" href="https://sippn.menpan.go.id/asset/css/custom.css?ver=2.0.2">

  <script src="https://unpkg.com/feather-icons"></script>

  <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LeZe8IbAAAAALCleXp9LsfXqfEIBpvV9i3erwcN"></script> -->

  <title>Pengajuan alat bantu disabilitas (kursi roda) - Dinas Sosial, Pengendalian Penduduk, Keluarga Berencana,
    Pemberdayaan Perempuan dan Perlindungan Anak</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
  <!-- BOTTOM NAV -->
  <div class="sticky-top">
            <nav class="navbar navbar-expand-lg">
            <div class="container">
              
                <div class="nav-mobile">
                    <label for="nav_mobile"><img src="<?= base_url() ?>public/image/bars.svg" alt=""></label>
                </div>
                <input type="checkbox" id="nav_mobile">
                <div class="nav-menu-mobile">
                    <div class="head-navm">
                      <a class="navbar-brand logo" href=""><img src="<?= base_url() ?>public/image/logogarut.png" alt=""><span>Dinsos Kab. Garut</span></a>
                        
                    </div>
                    <div class="body-navm">
                        <a class="nav-login" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a>
                        <a class="nav-login" href="#" data-bs-toggle="modal" data-bs-target="#DaftarModal">DAFTAR</a>
                    </div>
                </div>
            </div>
        </nav>
    <div class="nav-bottom">
      <div class="container">
        <div class="d-flex">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="navbar-brand logo" href="" style="color:white"><img
            src="<?= base_url() ?>public/image/logogarut.png" alt="" height="100px">Dinas Sosial Kabupaten Garut</a>
            </li>
          </ul>
          <ul class="navbar-nav bg-red-ligh"> 
            <li class="nav-item">
              <a class="nav-link nav-login" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">LOGIN</a>
                
            </li>

            <li class="nav-item">
              <a class="nav-link nav-login" href="#" data-bs-toggle="modal" data-bs-target="#DaftarModal">DAFTAR</a>
                
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <section class="pt-0 pt-md-3">
    <div class="container c-banner-pi">
       <?php
							echo validation_errors('<div class="alert alert-danger alert-dismissible">','</div>');
							if ($this->session->flashdata('danger'))
							{
								echo '<div class="alert alert-danger alert-dismissible " role="alert">';
								echo $this->session->flashdata('danger');
								echo '</div>';
							}
							if ($this->session->flashdata('error'))
							{
								echo '<div class="alert alert-danger alert-dismissible " role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
              if ($this->session->flashdata('success'))
							{
								echo '<div class="alert alert-success alert-dismissible " role="alert">';
								echo $this->session->flashdata('success');
								echo '</div>';
							}
							?>
              
      <div class="banner-detail">
        <div>
          <img src="<?= base_url() ?>public/image/banner.jpg" alt="" class="w-100">
        </div>
        <div class="card">
          <div class="card-body">
            <div class="thumb"><img src="https://sippn.menpan.go.id/images/article/large/no_image.png" alt=""></div>
            <div>
              <h4>Dinas Sosial Kabupaten Garut
              </h4>
              <div class="d-flex mb-2">
                <i data-feather="map-pin" class="me-2 text-red"></i> Jl. Patriot No.33, Tarogong, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="title-list-ps border-0 mb-3 text-red">
        <span class="border-0 font-weight-600">
          <strong>Pengajuan alat bantu disabilitas</strong>
        </span>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="accordion acc-pi acc-pi-pl" id="produkLayanan">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button d-flex " type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i data-feather="file-text" class="me-3"></i>
                  <span>Persyaratan</span>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                data-bs-parent="#produkLayanan">
                <div class="accordion-body px-md-5">
                  <ul class="mb-0">
                    <li>a. Merupakan penyandang disabilitas</li>
                    <li>b. Mengumpulkan fotocopy KTP dan Kartu Keluarg</li>
                    <li>c. Foto Full Badan</li>
                    <li>d. Mingisi formulir permohonan lewat website Dinsos Kab. Garut</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button d-flex" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i data-feather="git-pull-request" class="me-3"></i>
                  <span>Sistem, Mekanisme dan Prosedur</span>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                data-bs-parent="#produkLayanan">
                <div class="accordion-body px-md-5">
                  <li>Menyerahkan persyaratan yang sudah lengkap kepada Seksi Rehabilitasi Sosial.</li>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button d-flex" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <i data-feather="clock" class="me-3"></i>
                  <span>Waktu Penyelesaian</span>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                data-bs-parent="#produkLayanan">
                <div class="accordion-body px-md-5">
                  <p>6 Bulan</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button d-flex" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <i data-feather="info" class="me-3"></i>
                  <span>Biaya / Tarif</span>
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingFive"
                data-bs-parent="#produkLayanan">
                <div class="accordion-body px-md-5">
                  <p>Tidak dipungut biaya</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button d-flex" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <i data-feather="tag" class="me-3"></i>
                  <span>Produk Pelayanan</span>
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix"
                data-bs-parent="#produkLayanan">
                <div class="accordion-body px-md-5">
                  <p>Bantuan Kursi Roda bagi Penyandang Disabilitas, Alat Bantu Dengar</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button d-flex" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  <i data-feather="phone" class="me-3"></i>
                  <span>Pengaduan Pelayanan</span>
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven"
                data-bs-parent="#produkLayanan">
                <div class="accordion-body px-md-5">
                  <p><span><span><span><span lang="en-us" xml:lang="en-us"><span><span>Dinas Sosial Kabupaten Garut
                                </span></span></span></span></span></span></p>

                  <p><span lang="pt-br" xml:lang="pt-br"><span><span>Jl. Patriot No.33, Tarogong, Kec. Tarogong Kidul, Kabupaten Garut, Jawa Barat 44151
                        </span></span></span><span lang="en-us" xml:lang="en-us"><span><span>(0262) 232727</span></span></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    const lat = "";
    const lng = "";
  </script>
  <footer>
    <div class="container">
      <div class="row">
        <div class="footer-bottom">
          © 2023 Dinas Sosial Kabupaten Garut, Jawabarat -  Indonesia
        </div>
      </div>
    </div>
  </footer>


  <div class="modal fade acs-modal" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-body p-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="row m-0">
            <div class="col-md-6 d-flex align-items-center justify-content-center desc py-5">
              <div class="text-center">
                <h1>SISTEM INFORMASI <br>PELAYANAN PUBLIK <br> NASIONAL</h1>
                <img src="<?= base_url() ?>public/image/login-img.png" alt="" class="mw-100">
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center py-5">
              <div class="text-center w-100 px-1 px-sm-3">
                <h4 class="mb-4">Login</h4>
                <div id="login-message" class="alert alert-danger in m-b-15 hidden"><b></b></div>
                <form action="<?= base_url()?>login/login" method="post"
                  class="margin-bottom-0">
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="email"><i data-feather="user"></i></span>
                    <input type="text" class="form-control" placeholder="Masukkan Userame" aria-label="Email"
                      aria-describedby="email" name="username">
                      <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="password"><i data-feather="lock"></i></span>
                    <input type="password" name="password" class="form-control"
                      placeholder="Masukkan Kata Sandi" aria-label="Password" aria-describedby="password" readonly
                      onfocus="this.removeAttribute('readonly');">
                  </div>
                  <div class="d-block">
                    <button type="submit" class="btn btn-red w-100 mb-2">Masuk</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade acs-modal" id="DaftarModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-body p-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <form action="<?php echo base_url() ?>pemohon/insert" method="post" enctype="multipart/form-data">
           <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
          <div class="row m-0">
              <div class="col-md-12 d-flex align-items-center justify-content-center py-2">
                  <h4>Daftar Akun Pemohon</h4>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-center py-2">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="nik_pemohon" name="nik_pemohon" placeholder="NIK Pemohon" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="nama_pemohon" name="nama_pemohon" placeholder="Nama Pemohon" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" placeholder="Alamat Pemohon" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-select" name="id_kecamatan" id="id_kecamatan" required>
                          <option value="">- Pilih Kecamatan-</option>
                          <?php foreach($kecamatan as $row){ ?>
                          <option value="<?= $row->id_kecamatan ?>"><?= $row->nama_kecamatan ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-select" id="id_kelurahan" name="id_kelurahan" required>
                          <option value="">- Pilih Kelurahan -</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="notlp_pemohon" name="notlp_pemohon" placeholder="No. Telp Pemohon" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-control" id="jeniskelamin_pemohon" name="jeniskelamin_pemohon" required>
                          <option value="">Pilih Jenis Kelamin</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="tempatlahir_pemohon" name="tempatlahir_pemohon" placeholder="Tempat Lahir Pemohon" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="date" class="form-control" id="tgllahir_pemohon" name="tgllahir_pemohon" placeholder="Tanggal Lahir Pemohon" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" id="email_pemohon" name="email_pemohon" placeholder="Email Pemohon" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="password_pemohon" name="password_pemohon" placeholder="Password" required>
                    </div>
                </div>
              </div>
              <div class="col-md-6 align-items-center py-2">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <input type="file" class="form-control" id="foto_pemohon" name="foto_pemohon" placeholder="Foto Pemohon" required>
                        <span style="color: red;">Foto Full Badan Pemohon</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="nik_pendamping" name="nik_pendamping" placeholder="NIK Pendamping" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="nama_pendamping" name="nama_pendamping" placeholder="Nama Pendamping" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="hubungan_pendamping" name="hubungan_pendamping"" placeholder="Hubungan Pendamping" required>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-red w-100" value="Daftar">
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://sippn.menpan.go.id/asset/js/bootstrap.bundle.min.js?ver=2.0.2"></script>
  <script src="https://sippn.menpan.go.id/asset/js/owl.carousel.min.js?ver=2.0.2"></script>
  <script src="https://sippn.menpan.go.id/asset/js/wow.min.js?ver=2.0.2"></script>
  <script src="https://sippn.menpan.go.id/asset/js/select2.min.js?ver=2.0.2"></script>
  <script src="https://sippn.menpan.go.id/asset/js/app.js?ver=2.0.2"></script>
  <script type="text/javascript">
    $(".alert").delay(2000).slideUp('slow');
  </script>

  <script>
      $("#id_kecamatan").change(function(){ 
         var id = $(this).val();
         $.ajax({
            type: "post",
            url: "<?= base_url() ?>kelurahan/getkelurahan/",
            data: "id="+ id,
            success: function(data){
               $("#id_kelurahan").html(data);
            }
         });
      });
   </script>

</body>

</html>