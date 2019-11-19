<!DOCTYPE html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
        <title>Portal Kabupaten Manggarai Timur</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url('vendor/') ?>images/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>node_modules/summernote/dist/summernote-lite.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>node_modules/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>node_modules/toastr/build/toastr.min.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>node_modules/c3/c3.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>css/style.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>css/style2.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/') ?>css/custom.css">
        <link rel="stylesheet" href="<?php echo base_url('vendor/highslide/')?>highslide.css" type="text/css">
        
<!--        <script src="<?php echo base_url('vendor/') ?>node_modules/jquery/dist/jquery.js"></script>-->
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url('vendor/') ?>node_modules/summernote/dist/summernote-lite.js"></script>
        <script  src="<?php echo base_url('vendor/highslide/')?>highslide-with-gallery.js" type="text/javascript"></script>
    </head>
    <style>
        .logo-white { background: url(vendor/images/icon.png width="50px") no-repeat; position: relative;} 
        .logo { background: url(vendor/images/icon.png) no-repeat; position: relative;}
        .tabbable .nav-tabs {
            overflow-x: auto;
            overflow-y:hidden;
            flex-wrap: nowrap;
        }
        .float{
            position:fixed;
            width:50px;
            height:50px;
            bottom:80px;
            right:20px;
            background-color:#008B8B;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .my-float{
            margin-top:15px;
        }
        .jj_social_text{
            position:fixed;
            width:50px;
            height:50px;
            bottom:20px;
            right:20px;
            background-color:rgb(24, 0, 187);
            color:#FFF;
            border-radius:50px;
            text-align:center;
            box-shadow: 2px 2px 3px #999;
        }

        .jj_sprite jj_facebook{
            margin-top:15px;
        }
        /*.navbar-collapse{
         background-color:  #426edd;
       }*/
    </style>
    <body onload="return daftarBerita(9,'tab-1')">
        <nav class="navbar navbar-expand-xl navbar-light bg-white fixed-top py-2" id="topnav">
            <div class="container">

                <a class="navbar-brand" href="welcome">
                    <img src="<?php echo base_url('vendor/') ?>images/icon.png" style="width: 60px"></a> 

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-lable="Navigasi"><span class="navbar-toggler-icon"></span></button>


                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto nav-bg">
                        <li class="nav-item"><a  href="<?php Echo site_url('beranda') ?>" class="nav-link fixed" style="color:rgb(24, 0, 187)">Home</a></li>

                        <li class="nav-item dropdown">
                            <a href="index.html#" class="nav-link fixed" style="color:rgb(24, 0, 187)" id="navbardrop" data-toggle="dropdown">Profil</a>
                            <div class="dropdown-menu fadeIn animated">


                                <a href="<?php Echo site_url('visi') ?>" class="dropdown-item">Visi dan Misi</a>


                                <a href="<?php Echo site_url('logo') ?>" class="dropdown-item">Lambang dan Identitas</a>


                                <a href="<?php Echo site_url('sejarah') ?>" class="dropdown-item">Sejarah Kota</a>


                                <a href="<?php Echo site_url('peta') ?>" class="dropdown-item">Geografis</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="index.html#" class="nav-link fixed" style="color:rgb(24, 0, 187)" id="navbardrop" data-toggle="dropdown">Profil Pimpinan</a>
                            <div class="dropdown-menu fadeIn animated">


                                <a href="<?php Echo site_url('bupati_baru') ?>" class="dropdown-item">BUPATI 2019-2024</a>


                                <a href="<?php Echo site_url('logo') ?>" class="dropdown-item">WAKIL BUPATI 2019-2024</a>


                                <a href="<?php Echo site_url('sejarah') ?>" class="dropdown-item">BUPATI 2009-2018</a>


                                <a href="<?php Echo site_url('peta') ?>" class="dropdown-item">WAKIL BUPATI 2009-2018</a>
                                <a href="<?php Echo site_url('peta') ?>" class="dropdown-item">SEKRETARIS DAERAH</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="index.html#" class="nav-link fixed" style="color:rgb(24, 0, 187)" id="navbardrop" data-toggle="dropdown">Wisata</a>
                            <div class="dropdown-menu fadeIn animated">


                                <a href="pages/profil-pimpinan-daerah.html" class="dropdown-item">Wisata Alam</a>


                                <a href="pages/struktur-pemerintahan.html" class="dropdown-item">Budaya</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="index.html#" class="nav-link fixed" style="color:rgb(24, 0, 187)" id="navbardrop"  data-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu fadeIn animated">


                                <a href="pages/profil-pimpinan-daerah.html" class="dropdown-item">Produk Unggulan</a>


                                <a href="pages/struktur-pemerintahan.html" class="dropdown-item">Video</a>


                                <a href="<?php Echo site_url('gallery') ?>" class="dropdown-item">Galleri Foto</a>


                                <a href="pages/instansi.html" class="dropdown-item">ILPPD</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="index.html#" class="nav-link fixed" style="color:rgb(24, 0, 187)" id="navbardrop" data-toggle="dropdown">JDIH MATIM</a>
                            <div class="dropdown-menu fadeIn animated">


                                <a href="pages/profil-pimpinan-daerah.html" class="dropdown-item">Berita Manggarai Timur</a>


                                <a href="pages/struktur-pemerintahan.html" class="dropdown-item">Pemerintahan</a>


                                <a href="pages/forum-koordinasi-pimpinan-daerah.html" class="dropdown-item">Kesehatan</a>


                                <a href="pages/instansi.html" class="dropdown-item">Ekonomi</a>
                                <a href="pages/instansi.html" class="dropdown-item">Pendidikan</a>
                            </div>
                        </li>
                       <li class="nav-item dropdown">
                            <a href="index.html#" class="nav-link fixed" style="color:rgb(24, 0, 187)" id="navbardrop" data-toggle="dropdown">ADUAN!</a>
                            <div class="dropdown-menu fadeIn animated">


                                <a href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-manggarai-timur/" target="blank" class="dropdown-item">Tujuan Bupati dan Wakil Bupati</a>


                                <a href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-manggarai-timur/" target="blank" class="dropdown-item">Tujuan Pelayanan Terpadu</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="pages/kontak-kami.html" class="nav-link fixed" style="color:rgb(24, 0, 187)">Kontak</a></li>

                    </ul>
                </div>
            </div>
        </nav>   
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">          
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active"> 
                            <img class="d-block img-fluid w-100" src="<?php echo base_url('vendor/') ?>images/BUPATI.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block img-fluid w-100" src="<?php echo base_url('vendor/') ?>images/bupatiwakil.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item"> 
                            <img class="d-block img-fluid w-100" src="<?php echo base_url('vendor/') ?>images/galerifoto.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block img-fluid w-100" src="<?php echo base_url('vendor/') ?>images/budaya.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block img-fluid w-100" src="<?php echo base_url('vendor/') ?>images/BUPATI.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block img-fluid w-100" src="<?php echo base_url('vendor/') ?>images/BUPATI.jpg">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


