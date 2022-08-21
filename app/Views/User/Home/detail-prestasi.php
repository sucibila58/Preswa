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
    <link rel="shortcut icon" href="/Assets/Frontend/images/logo-smafour.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/Assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Assets/Frontend/css/bootstrap-table.css">
    <link rel="stylesheet" href="/Assets/Frontend/css/sweetalert2.min.css" >
    <link rel="stylesheet" href="/Assets/Frontend/css/sweetalert2.min.css">
    
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
  
    <script type="text/javascript">
        function getkey(e)
        {
            if (window.event)
            return window.event.keyCode;
            else if (e)
            return e.which;
            else
            return null;
        }
        function goodchars(e, goods, field)
        {
            var key, keychar;
            key = getkey(e);
            if (key == null) return true;

            keychar = String.fromCharCode(key);
            keychar = keychar.toLowerCase();
            goods = goods.toLowerCase();

            // check goodkeys
            if (goods.indexOf(keychar) != -1)
            return true;
            // control keys
            if ( key==null || key==0 || key==8 || key==9 || key==27 )
            return true;

            if (key == 13) {
            var i;
            for (i = 0; i < field.form.elements.length; i++)
            if (field == field.form.elements[i])
            break;
            i = (i + 1) % field.form.elements.length;
            field.form.elements[i].focus();
            return false;
            };
            // else return false
            return false;
        }
    </script>
  
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
   
    <!--====== HEADER PART START ======-->
    
    <header id="home" class="header-area header-v1-area">
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navigation">
                            <nav class="navbar navbar-expand-lg navbar-light ">
                                <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="/Assets/Frontend/images/logo.png" alt=""></a> <!-- logo -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                    <span class="toggler-icon"></span>
                                </button> <!-- navbar toggler -->
                                                                  
                                <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                    <ul class="navbar-nav m-auto">
                                    <li class="nav-item active">
                                            <a class="nav-link page-scroll" href="<?= base_url('/'); ?>">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="<?= base_url('user/dashboard/#aboutus'); ?>">Tentang Kami</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="<?= base_url('user/dashboard/#tutorial'); ?>">Panduan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link page-scroll" href="<?= base_url('user/dashboard/#faq'); ?>">FAQ</a>
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
                                    <a class="main-btn" href="<?= base_url('/'); ?>">Logout</a>
                                </div-->
                            </nav>
                        </div> <!-- navigation -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
                                                                  
    <!--====== PAGE TITLE PART START ======-->
    
    <div class="page-title-area bg_cover" style="background-image: url(/Assets/Frontend/images/page-bg.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-item text-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url('user/dashboard'); ?>">Beranda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Prestasi</li>
                            </ol>
                        </nav>
                        <h3 class="title">Detail Prestasi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--====== PAGE TITLE PART ENDS ======-->

    <!--====== BLOG PART START ======-->
    <section id="news" class="blog-area blog-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
			        <div class="panel panel-default">
				        <div class="panel-body">
                            <div class="col-lg-6">
                                <div class="form-group col-md-12">
                                    <label>Kelas</label><br />
                                    <?= $dataPrestasi['nama_kelas']; ?>
                                </div>
                                <div style="clear:both;"></div>
                                <div class="form-group col-md-12">
                                    <label>Jenis Prestasi</label><br />
                                    <?= $dataPrestasi['jenis_prestasi']; ?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Tingkat</label><br />
                                    <?= $dataPrestasi['nama_tingkat']; ?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Bidang</label><br />
                                    <?= $dataPrestasi['nama_bidang']; ?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Gelar</label><br />
                                    <?= $dataPrestasi['nama_gelar']; ?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Nama Pembina</label><br />
                                    <?= $dataPrestasi['nama_pembina'];?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Ekstrakurrikuler</label><br />
                                    <?= $dataPrestasi['nama_ekskul']; ?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Nama Kegiatan</label><br />
                                    <?= $dataPrestasi['nama_kegiatan'];?>
                                </div>
                                <div style="clear:both;"></div>
                                
                                <div class="form-group col-md-12">
                                    <label>Tempat</label><br />
                                    <?= $dataPrestasi['tempat'];?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Provinsi</label><br />
                                    <?= $dataPrestasi['nama_provinsi']; ?>
                                </div>
                                <div style="clear:both;"></div>
                                
                                <div class="form-group col-md-12">
                                    <label>Kota</label><br />
                                    <?= $dataPrestasi['nama_kota']; ?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Penyelenggara</label><br />
                                    <?= $dataPrestasi['penyelenggara'];?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Jumlah Sekolah</label><br />
                                    <?= $dataPrestasi['jumlah_sekolah'];?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Jumlah Peserta</label><br />
                                    <?= $dataPrestasi['jumlah_peserta'];?>
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Waktu Pelaksanaan</label><br />
                                    <?= $dataPrestasi['waktu_pelaksanaan'];?>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group col-md-12">
                                    <label>Bukti Sertifikat</label>
                                    <img src="/Assets/Sertifikat_Prestasi/<?php echo $dataPrestasi['bukti_sertif'];?>" width="100%" height="250px">
                                </div>
                                <div style="clear:both;"></div>

                                <div class="form-group col-md-12">
                                    <label>Bukti Kegiatan</label>
                                    <img src="/Assets/Kegiatan_Prestasi/<?php echo $dataPrestasi['bukti_kegiatan'];?>" width="100%">
                                </div>
                                <div style="clear:both;"></div>

                                <?php
                                if(session()->get('ses_level')=="2"){
                                    $postAct = "update-prestasi-wakasek";
                                }
                                elseif(session()->get('ses_level')=="3"){
                                    $postAct = "update-prestasi-walikelas";
                                }
                                ?> 

                                <div class="form-group col-md-12">
                                    <a href="<?php echo base_url('user/data-prestasi');?>"><button type="button" class="btn btn-danger"><span class="fa fa-chevron-left"></span></button></a>
                                </div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--====== BLOG PART ENDS ======-->

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
    <script src="/Assets/Frontend/js/bootstrap-table.js"></script>
    
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

    <!--====== Tambahan js =====-->
    <script src="/Assets/Frontend/js/chart.min.js"></script>
	<script src="/Assets/Frontend/js/chart-data.js"></script>
	<script src="/Assets/Frontend/js/easypiechart.js"></script>
	<script src="/Assets/Frontend/js/easypiechart-data.js"></script>
	<script src="/Assets/Frontend/js/bootstrap-datepicker.js"></script>
    <script src="/Assets/Frontend/js/sweetalert2.min.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
    <script type="application/javascript">  
     /** After windod Load */  
     $(window).bind("load", function() {  
       window.setTimeout(function() {  
         $(".alert").fadeTo(700, 0).slideUp(700, function() {  
           $(this).remove();  
         });  
       }, 3000);  
     });  
    </script>

	<?php if (session()->getFlashdata('success')) : ?>
    	<script type="text/javascript">
    		$(document).ready(function() {
    			swal("Success!", "<?php echo $_SESSION['success'] ?>", "success");
    		});
    	</script>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
    	<script type="text/javascript">
    		$(document).ready(function() {
    			swal("Sorry!", "<?php echo $_SESSION['error'] ?>", "error");
    		});
    	</script>
    <?php endif; ?>
    <?php if (session()->getFlashdata('warning')) : ?>
    	<script type="text/javascript">
    		$(document).ready(function() {
    			swal("Warning!", "<?php echo $_SESSION['warning'] ?>", "warning");
    		});
    	</script>
    <?php endif; ?>
    <?php if (session()->getFlashdata('info')) : ?>
    	<script type="text/javascript">
    		$(document).ready(function() {
    			swal("Info!", "<?php echo $_SESSION['info'] ?>", "info");
    		});
    	</script>
    <?php endif; ?>
</body>

</html>
