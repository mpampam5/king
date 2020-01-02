<!doctype html>
<html lang="en">


<head>
    <title>JPKP - JARINGAN PENDAMPING KEBIJAKAN PEMBANGUNAN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="JPKP PUSAT - JARINGAN PENDAMPING KEBIJAKAN PEMBANGUNAN">
    <meta name="keywords" content="JPKP, JPKP PUSAT, INDONESIA, SOSIAL">

    <link rel="shortcut icon" href="<?=base_url()?>_template/favicon.png" />

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>_template/landing/css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="<?=base_url()?>_template/landing/css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="<?=base_url()?>_template/landing/css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="<?=base_url()?>_template/landing/css/style.css" rel="stylesheet">

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <!-- <a class="navbar-brand" href="index.html">
                          <img src="<?=base_url()?>_template/landing/images/logo.png" class="img-fluid" alt="logo">
                        </a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#tentang">TENTANG JPKP</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">KONTAK</a> </li>
                                <li class="nav-item"><a href="#download" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>JPKP</h1>
            <p class="tagline">JARINGAN PENDAMPING KEBIJAKAN PEMBANGUNAN</p>
        </div>
        <div class="img-holder mt-3"><img src="<?=base_url()?>_template/landing/images/iphonex.png" alt="phone" class="img-fluid"></div>
    </header>



    <div class="section" id="tentang">

        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center">
                    <div class="text-center">
                        <h2>TENTANG JPKP</h2>
                        <p class="mb-4">
                          <?=setting_system("dashboard_tentang")?>
                          </p>
                      </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->


    <div class="section light-bg">

        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center">
                    <ul class="list-unstyled ui-steps">
                        <li class="media">
                            <div class="media-body">
                                <h5>VISI & MISI</h5>
                                <p  style="color:#444444!important">
                                  <?php $visi =  $this->db->get_where("tentang",["slug"=>"visi-misi"])->row();?>

                                  <?php echo $visi->keterangan ?>
                                </p>
                            </div>
                        </li>
                        <li class="media my-4">
                            <div class="media-body">
                                <h5>Tujuan</h5>
                                <p>
                                  <?php $tujuan =  $this->db->get_where("tentang",["slug"=>"tujuan"])->row();?>

                                  <?php echo $tujuan->keterangan ?>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>

        </div>

    </div>
    <!-- // end .section -->





    <div class="section light-bg" id="gallery">
        <div class="container">
            <div class="section-title">
                <small>GALLERY</small>
                <h3>App Screenshots</h3>
            </div>

            <div class="img-gallery owl-carousel owl-theme">
                <img src="<?=base_url()?>_template/landing/images/screen/5.png" alt="image">
                <img src="<?=base_url()?>_template/landing/images/screen/6.png" alt="image">
                <img src="<?=base_url()?>_template/landing/images/screen/4.png" alt="image">
                <img src="<?=base_url()?>_template/landing/images/screen/1.png" alt="image">
                <img src="<?=base_url()?>_template/landing/images/screen/2.png" alt="image">
                <img src="<?=base_url()?>_template/landing/images/screen/3.png" alt="image">
            </div>

        </div>

    </div>
    <!-- // end .section -->











    <div class="section bg-gradient" id="download">
        <div class="container">
            <div class="call-to-action">

                <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                <h2>Download JPKP Apps</h2>
                <p class="tagline">Dengan Memanfaatkan teknologi berbasis mobile dapat memudahkan para Relawan JPKP mengetahui informasi seputar kegiatan, bantuan, dll.</p>
                <div class="my-4">

                    <a href="#" class="btn btn-light"><img src="<?=base_url()?>_template/landing/images/playicon.png" alt="icon"> Google play</a>
                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="light-bg py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <span class="ti-location-pin mr-2"></span> <?=setting_system("alamat")?></p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <span class="ti-email mr-2"></span> <a class="mr-4" href="mailto:<?=setting_system("email")?>"><?=setting_system("email")?></a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0">
                            <span class="ti-headphone-alt mr-2"></span> <a href="tel:51836362800"><?=setting_system("telepon_kantor")?></a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="<?=setting_system("facebook")?>" target="_blank"><span class="ti-facebook"></span></a>
                        <a href="<?=setting_system("twitter")?>" target="_blank"><span class="ti-twitter-alt"></span></a>
                        <a href="<?=setting_system("instagram")?>" target="_blank"><span class="ti-instagram"></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center">
        <!-- Copyright removal is not prohibited! -->
        <p class="mb-2"><small>COPYRIGHT © <?=date("Y")?>. ALL RIGHTS RESERVED.<a href="https://ideadigitalindonesia.com"> IDEA DIGITAL INDONESIA</a></small></p>
    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="<?=base_url()?>_template/landing/js/jquery-3.2.1.min.js"></script>
    <script src="<?=base_url()?>_template/landing/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="<?=base_url()?>_template/landing/js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="<?=base_url()?>_template/landing/js/script.js"></script>

</body>

</html>
