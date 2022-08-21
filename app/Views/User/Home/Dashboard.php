<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Prestasi Siswa | SMAN 4 Cibinong</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/Assets/Frontend/images/logo-smafour.png" type="image/png" >

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/font-awesome.min.css">
    
    <!--====== flaticon css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/flaticon.css">
    
    <!--====== odometer css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/odometer.min.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/magnific-popup.css">
    
    <!--====== animate css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/animate.min.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/slick.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/style.css">
  
  
</head>

<body>

    <!-- PRELOADER -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- END PRELOADER -->
   
    <!--====== side menu PART START ======-->

    <div class="side-menu__block">
        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">
            <div class="side-menu__top justify-content-end">

                <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="/Assets/Frontend/images/close.png" alt=""></a>
            </div><!-- /.side-menu__top -->

            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
            <div class="side-menu__content">
                <p><b> SMAFOUR MELESAT </b></p>
                <p><a href="https://smanegeri4cibinong.sch.id/">smanegeri4cibinong.sch.id</a> <br> <a href="tel:021-474-836-47">021-474-836-47</a></p>
                <div class="side-menu__social">
                    <a href="https://www.facebook.com/SMAN-4-Cibinong-957071887799163/"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/sman_4cibinong/"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCD-Dzw1rAuO_MYlnTeN8pMQ"><i class="fa fa-youtube-square"></i></a>
                </div>
            </div><!-- /.side-menu__content -->
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!--====== side menu PART ends ======-->

    <!--====== HEADER PART START ======-->
    
    <header id="home" class="header-area header-v1-area">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="#"><img src="/Assets/Frontend/images/logo.png" alt=""></a> <!-- logo -->
                                <span class="side-menu__toggler"><i class="fa fa-bars"></i></span><!-- /.side-menu__toggler -->
                                                                  
                                <div class="collapse navbar-collapse sub-menu-bar main-nav__main-navigation" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto main-nav__navigation-box">
                                        <li class="nav-item active">
                                            <a class="nav-link page-scroll" href="#home">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="#aboutus">Tentang Kami</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="#tutorial">Panduan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="#faq">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="<?= base_url('user/data-prestasi'); ?>">Prestasi</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link page-scroll" href="#"><?= session()->get('ses_namauser');?></a>
                                            <ul class="sub-menu">
                                                <li><a href="<?= base_url('/'); ?>">Logout</a></li>
                                            </ul>
                                        </li>
                                        <!--li class="nav-item">
                                            <a class="nav-link page-scroll" href="https://smanegeri4cibinong.sch.id/">Portal SMAFOUR</a>
                                        </li-->
                                    </ul>
                                </div> <!-- navbar collapse -->
                                <!--div class="navbar-btn d-none d-sm-flex">
                                    <a class="main-btn" href=""> LOGOUT <?= session()->get('ses_namauser');?><span class="caret"></span></a>
                                </div-->
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
                                                                  
    <!--====== BANNER PART START ======-->
    
    <section class="banner-area">
        <div class="container">
            <div class="banner-items">
                <div class="row">
                    <div class="col-lg-6 col-md-7"  style="margin-top:75px; padding:0;">
                        <div class="banner-content">
                            <h1 class="title" style="font-family: Jacques Francois;">SMAFOUR MELESAT</h1>
                            <a class="main-btn" href="<?= base_url('user/data-prestasi'); ?>">Masukkan Prestasi</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="banner-thumb text-right wow fadeInUp" data-wow-duration="1500ms" >
                            <img src="/Assets/Frontend/images/banner-thumb.png" alt="banner"width="368px" height="590px">
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="banner-circle-1"></div>
        <div class="banner-circle-2"></div>
        <div class="banner-circle-3"></div>
        <div class="banner-circle-4"></div>
    </section>
    
    <!--====== BANNER PART ENDS ======-->

    <!--====== ABOUTUS PART START ======-->
    
    <section id="aboutus" class="features-area pt-35">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <span>Kesiswaan</span>
                        <h3 class="title" style="font-family: Jacques Francois">Tentang Kami</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="features-btn">
                        <ul class="nav nav-pills d-flex justify-content-between" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-center" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">
                                    <i class="flaticon-development"><img src="/Assets/Frontend/images/features-shape.png" alt="shape"></i>
                                    <span>Visi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">
                                    <i class="flaticon-development"><img src="/Assets/Frontend/images/features-shape.png" alt="shape"></i>
                                    <span>Misi</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">
                                    <i class="flaticon-seo-and-web"><img src="/Assets/Frontend/images/features-shape.png" alt="shape"></i>
                                    <span>Program <br> Jangka Pendek</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-4-tab" data-toggle="pill" href="#pills-4" role="tab" aria-controls="pills-4" aria-selected="false">
                                    <i class="flaticon-seo-and-web"><img src="/Assets/Frontend/images/features-shape.png" alt="shape"></i>
                                    <span>Program <br> Jangka Panjang</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-5-tab" data-toggle="pill" href="#pills-5" role="tab" aria-controls="pills-5" aria-selected="false">
                                    <i class="flaticon-seo-and-web"><img src="/Assets/Frontend/images/features-shape.png" alt="shape"></i>
                                    <span>Program <br> Unggulan</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <i class="flaticon-development"></i>
                                <h4 class="title">Visi</h4>
                                <p>Mewujudkan sekolah yang berakhlak mulia,mandiri,berprestasi dibidang akademik dan nonakademik,cinta lingkungan dan berwawasan global.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <i class="flaticon-development"></i>
                                <h4 class="title">Misi</h4>
                                <p>
                                    1. Meningkatkan keimanan dan ketakwaan serta kepribadian yang memiliki kecerdasan intelektual, emosional, spiritual dan sosial. <br>
                                    2. Mendorong seluruh elemen sekolah untuk mengenali potensi dirinya.<br>
                                    3. Meningkatkan kualitas sumber daya manusia seluruh warga sekolah.<br>
                                    4. Meningkatkan mutu proses belajar mengajar yang inovatif dan kreatif berdasarkan semangat keunggulan secara efektif dan efisien.<br>
                                    5. Meningkatkan kesadaran dalam pengelolaan dan pelestarian lingkungan hidup.<br>
                                    6. Meningkatkan mutu pengembangan diri melalui kegiatan ekstrakurikuler<br>
                                    7. Meningkatkan pelayanan bimbingan dan konseling kepada peserta didik secara intensif.<br>
                                    8. Meningkatkan kualitas sarana dan prasarana sekolah.<br>
                                    9. Mempersiapkan lulusan yang berkualitas yang memiliki sikap, pengetrahuan dan ketrampilan yang seimbang dan kompetitif.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                <i class="flaticon-seo-and-web"></i>
                                <h4 class="title">Program Jangka Pendek</h4>
                                <p>
                                    1. Pengelolaan penerimaan peserta didik baru secara profesional dengan membuat jaringan informasi berupa situs SMA Negeri 4 Cibinong.<br>
                                    2. Peningkatan disiplin peserta didik dengan menegakkan tata tertib sekolah.<br>
                                    3. Pengenalan kegiatan peserta didik baru dengan kegiatan Masa Pengenalan Lingkungan Sekolah.<br>
                                    4. Membina dan mengarahkan kegiatan ekstrakurikuler yang dipilih anak diarahkan ke kegiatan prestasi.<br>
                                    5. Pembekalan terhadap siswa dan organisasi yang bernaung dalam OSIS tentang kepemimpinan, manajemen dan menumbuhkan Imtaq dan meningkatkan akhlak mulia.<br>
                                    6. Mendorong dan memotivasi siswa dalam ambil bagian dalam Olimpiade Sains, Olimpiade Penelitian Siswa,FLS2N,O2SN,PSN,Galaksi dan Lomba Paduan Suara.<br>
                                    7. Kunjungan dan studi banding yang relevan dalam rangka peningkatan wawasan peserta didik.<br>
                                    8. Memberikan reward dibidang akademik,seni dan budaya serta olahraga kepada peserta didik<br>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab">
                                <i class="flaticon-seo-and-web"></i>
                                <h4 class="title">Program Jangka Panjang</h4>
                                <p>
                                    1. Membangun lingkungan sekolah yang berwawasan disiplin dan patuh terhadap aturan yang berlaku.<br>
                                    2. Mencetak peserta didik yang berprestasi.<br>
                                    3. Mengembangkan kepribadian sesuai dengan tuntutan agama dan kurikulum yang berlaku.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab">
                                <i class="flaticon-seo-and-web"></i>
                                <h4 class="title">Program Unggulan</h4>
                                <p>
                                    <b>1.Program Tahfidzul Qur’an </b><br>
                                    Program hafalan Qur’an ini diikuti oleh peserta didik kelas X dengan target minimal hafal 1 juz bagi peserta didik.<br>
                                    Program ini dilaksanakan dua kali pertemuan dalam satu minggu yaitu pada hari rabu dan kamis pada pukul 10.00 WIB s.d 12.00 WIB.<br>
                                    <b>2. Program MTQ (Musabaqoh Tilawatil Qur’an) </b><br>
                                    Program ini merupakan program bimbingan khusu bagi peserta didik untuk mempersiapkan lomba MTQ.<br>
                                    Program ini dilaksanakan setiap hari sabtu pada pukul 10.00 WIB s.d. 12.00 WIB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== ABOUT US PART ENDS ======-->

    <!--====== BRAND PART START ======-->
    
    <div class="brand-area pt-120 pb-120">
        <div class="container">
            <div class="row brand-active">
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="/Assets/Frontend/images/brand1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="/Assets/Frontend/images/brand1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="/Assets/Frontend/images/brand1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="/Assets/Frontend/images/brand1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="/Assets/Frontend/images/brand1.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="brand-item">
                        <a href="#"><img src="/Assets/Frontend/images/brand1.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== BRAND PART ENDS ======-->

    <!--====== TUTORIAL PART START ======-->
    
    <section id="tutorial" class="customers-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="customers-thumb wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="/Assets/Frontend/images/customers-thumb.jpg" alt="customers" width="528px" height="515px">
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="section-title">
                        <span>Apakah Masih Bingung Dalam Mengkases Web Ini?</span>
                        <h3 class="title" style="font-family: Jacques Francois">Panduan Mengakses Web</h3>
                    </div>
                    <div class="customers-content">
                        <div class="item">
                            <p>Siswa memasukkan <b>prestasi akademik dan non-akademik</b> sesuai ketentuan yang telah ditentukan.</p>
                        </div>
                        <div class="item mt-35">
                            <p>Siswa menunggu hasil persetujuan dari wali kelas dan wakil kepala sekolah bagian kesiswaan terkait <b>prestasi akademik dan non-akademik</b> yang telah dimasukkan.</p>
                            <a class="main-btn mt-50" href="<?= base_url('/Assets/Frontend/doc/PANDUAN AKSES WEB PRESTASI AKADEMIK DAN NON AKADEMIK SISWA.pdf'); ?>" target="_blank">Unduh Dokumen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="customers-shape text-right">
            <img src="/Assets/Frontend/images/customers-shape.png" alt="shape">
        </div>
        <div class="customers-shape-1"></div>
    </section>
    
    <!--====== CUSTOMERS PART ENDS ======-->

    <!--====== VIDEO PLAY PART START ======-->
    
    <div class="video-play-area bg_cover" style="background-image: url(/Assets/Frontend/images/video-play-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-play-item text-center">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=TcDhCqFDYPQ"><i class="fa fa-play"></i></a> <br><br>
                        <h4 class="title" style="font-family: Jacques Francois"> PROFILE SMAN 4 CIBINONG</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== VIDEO PLAY PART ENDS ======-->

    <!--====== TESTIMONIALS PART START >
    
    <section id="testimonials" class="testimonials-area bg_cover pt-120 pb-120" style="background-image: url(/Assets/Frontend/images/testimonials-bg.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-9">
                    <div class="testimonials-user-item">
                        <div class="testimonials-thumb pl-110">
                            <div class="item">
                                <img src="/Assets/Frontend/images/testimonials-user-1.png" alt="">
                            </div>
                            <div class="item">
                                <img src="/Assets/Frontend/images/testimonials-user-2.png" alt="">
                            </div>
                            <div class="item">
                                <img src="/Assets/Frontend/images/testimonials-user-3.png" alt="">
                            </div>
                        </div>
                        <div class="testimonials-user">
                            <div class="item-1">
                                <img src="/Assets/Frontend/images/testimonials/user-1.png" alt="testimonials">
                            </div>
                            <div class="item-2">
                                <img src="/Assets/Frontend/images/testimonials/user-2.png" alt="testimonials">
                            </div>
                            <div class="item-3">
                                <img src="/Assets/Frontend/images/testimonials/user-3.png" alt="testimonials">
                            </div>
                            <div class="item-4">
                                <img src="/Assets/Frontend/images/testimonials/user-4.png" alt="testimonials">
                            </div>
                            <div class="item-5">
                                <img src="/Assets/Frontend/images/testimonials/user-5.png" alt="testimonials">
                            </div>
                            <div class="item-6">
                                <img src="/Assets/Frontend/images/testimonials/user-6.png" alt="testimonials">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials-content-slide">
                        <div class="testimonials-content">
                            <span>Our Testimonials</span>
                            <h3 class="title">What They Are Talking</h3>
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="info">
                                <span>Shirley Smith</span>
                                <p>CEO - Layerdrops</p>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <span>Our Testimonials</span>
                            <h3 class="title">What They Are Talking</h3>
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="info">
                                <span>Shirley Smith</span>
                                <p>CEO - Layerdrops</p>
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <span>Our Testimonials</span>
                            <h3 class="title">What They Are Talking</h3>
                            <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="info">
                                <span>Shirley Smith</span>
                                <p>CEO - Layerdrops</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonials-shape">
            <img src="/Assets/Frontend/images/testimonials-shape.png" alt="">
        </div>
        <div class="testimonials-map">
            <img src="/Assets/Frontend/images/testimonials-map.png" alt="">
        </div>
        <div class="testimonials-circle-1"></div>
        <div class="testimonials-circle-2"></div>
    </section>
    
    <!--====== TESTIMONIALS PART ENDS ======-->

    <!--====== SEREENSHOT PART START ======-->
    
    <section id="screens" class="screenshot-area pb-120 pt-110">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center">
                        <span>Ada kegiatan apa saja di SMAN 4 Cibinong?</span>
                        <h3 class="title" style="font-family: Jacques Francois">Kegiatan SMAN 4 Cibinong</h3>
                    </div>
                </div>
            </div>
            <div class="row screenshot-active">
                <div class="col-lg-3">
                    <div class="screenshot-item">
                        <img src="/Assets/Frontend/images/screenshot-1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="screenshot-item">
                        <img src="/Assets/Frontend/images/screenshot-2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="screenshot-item">
                        <img src="/Assets/Frontend/images/screenshot-3.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="screenshot-item">
                        <img src="/Assets/Frontend/images/screenshot-4.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="screenshot-item">
                        <img src="/Assets/Frontend/images/screenshot-5.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="screenshot-item">
                        <img src="/Assets/Frontend/images/screenshot-2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== SEREENSHOT PART ENDS ======-->

    <!--====== FAQ PART START ======-->
    
    <section id="faq"class="faq-area pb-70 pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-content">
                        <span>Adakah Pertanyaan?</span>
                        <h3 class="title" style="font-family: Jacques Francois">Pertanyaan yang sering diajukan</h3>
                        <p>Yuk disimak pertanyaan-pertanyaan yang sering diajukan</p>
                        <img src="/Assets/Frontend/images/faq-thumb.png" alt="" width="470px" height="358px">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="faq-accordion wow fadeInRight" data-wow-duration="1500ms">
                        <div class="accrodion-grp wow fadeIn" data-wow-duration="1500ms" data-grp-name="faq-accrodion">
                            <div class="accrodion active ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Bagaimana jika tidak bisa login?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Pastikan username (NIS) dan Password yang dimasukan benar, jika tetap gagal silahkan menghubungi bagian kesiswaan dan wali kelas masing-masing.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion  ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Bagaimana jika dokumen gagal upload?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Pastikan dokumen yang diupload sesuai ketentuan seperti ukuran file dengan maksimal 1MB dan juga format dari file yaitu jpg,png,jpeg.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Kapan kami dapat memulai memasukan data prestasi?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Sejak menjadi siswa sampai pada saat lulus.(atau sesuai jadwal yang diumumkan pada website presma ini)</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Prestasi pada saat sekolah sebelumnya apakah dapat dimasukan?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Prestasi akademik dan non-akademik yang di masukan dan dapat diterima adalah yang diperoleh atau dimiliki saat menjadi siswa SMAN 4 Cibinong sampai saat lulus.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                            <div class="accrodion ">
                                <div class="accrodion-inner">
                                    <div class="accrodion-title">
                                        <h4>Bagaimana jika data prestasi ditolak?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Hapus terlebih dahulu data yang sudah masuk, kemudian input ulang dengan memastikan data sudah benar. Jika masih ditolak, melakukan konfirmasi terlebih dahulu kepada wali kelas lalu menghubungi admin. </p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div><!-- /.accrodion-inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== FAQ PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    
    <section class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-download d-block d-lg-flex justify-content-between align-items-center wow fadeInUp" data-wow-duration="1500ms">
                        <div class="item">
                            <h3 class="title">Kunjungi Website Sekolah Kami</h3>
                        </div>
                        <div class="link">
                            <a class="main-btn" href="https://smanegeri4cibinong.sch.id/">SMAFOUR</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-7 col-sm-9">
                    <div class="footer-widget footer-widget-about">
                        <a href="#"><img src="/Assets/Frontend/images/logo.png" alt="logo"></a>
                        <p>Kemudahan dalam Pendataan Prestasi Akademik dan Non-akademik Siswa SMAN 4 Cibinong.</p>
                        <ul>
                        <a href="https://www.facebook.com/SMAN-4-Cibinong-957071887799163/"><i class="fa fa-facebook-square"></i></a>
                        <a href="https://www.instagram.com/sman_4cibinong/"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCD-Dzw1rAuO_MYlnTeN8pMQ"><i class="fa fa-youtube-square"></i></a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget footer-widget-list">
                        <div class="list-item d-flex">
                            <div class="item">
                                <h3 class="title" style="font-family: Jacques Francois">Kontak</h3>
                                <ul>
                                    <li><span><i class="fa fa-phone-square"></i> 021-474-836-47</span></li>
                                    <li><span><i class="fa fa-envelope"></i> info@smanegeri4cibinong.sch.id</span></li>
                                    <li><span><i class="fa fa-map-marker"></i> Jawa Barat, Kab. Bogor, Cibinong, Jl. Bojong Koneng RT 01/01 Kel. Cibinong Kec. Cibinong</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-copyright text-center">
                        <p>© copyright 2020 by Layerdrops.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== GO TO TOP PART START ======-->
    
    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== GO TO TOP PART ENDS ======-->
    
    
    





    <!--====== jquery js ======-->
    <script src="/Assets/Frontend/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/Assets/Frontend/js/vendor/jquery-3.5.0.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/Assets/Frontend/js/popper.min.js"></script>
    <script src="/Assets/Frontend/js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="/Assets/Frontend/js/slick.min.js"></script>
    
    <!--====== wow js ======-->
    <script src="/Assets/Frontend/js/wow.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="/Assets/Frontend/js/scrolling-nav.js"></script>
    <script src="/Assets/Frontend/js/jquery.easing.min.js"></script>
    
    <!--====== odometer js ======-->
    <script src="/Assets/Frontend/js/odometer.min.js"></script>
    <script src="/Assets/Frontend/js/jquery.appear.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="/Assets/Frontend/js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="/Assets/Frontend/js/main.js"></script>

</body>

</html>
