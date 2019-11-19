<?php $this->load->view('headefoot/header'); ?>  
<div class="container" id="berita">
    <div class="row justify-content-center py-4">
        <div class="col-12 col-xl-9" >
            <section class="top-news-area section-padding-30-0 mb-30">
                <div class="">
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="trending-now-posts mb-30">
                                <div id="sub">
                                    <h4 id="titleborder"><span>INFO</span></h4>
                                </div> 
                                <div class="col-md-12 mx-2">
                                    <?php
                                    foreach ($sub as $d) {
                                        ?>
                                        <div class="row mb-2" onclick="window.open(`<?php echo site_url('welcome/detail_berita/' . $d->sub_seo) ?>`)" style="cursor: pointer">
                                            <div class="p-0 col-lg-3 order-2 order-lg-1"> 
                                                <img class="img-thumbnail" src="http://localhost/Admin_matim/assets/sub/<?php echo $d->gambar ?>" > 
                                            </div>
                                            <div class="d-flex flex-column justify-content-center pl-3 col-lg-9 order-1 order-lg-2">
                                                <p class="lead font-weight-bold"><?php echo $d->nama_sub ?> <br>
                                                    <small><i class="fa fa-calendar"></i>
                                                        <?php
                                                        $dateDb = strtotime($d->tgl_add);
                                                        $day = date("w", $dateDb);
                                                        //yang ini buat ambil index hari //
                                                        echo $this->etc->hariIndonesia($day) . " " . date_format(date_create($d->tgl_add), "d/m/Y H:i:s");
                                                        ?>
                                                    </small>
                                                <p class="font-weight-bold">
                                                    <small class="teal"><?php echo $d->nama_kategori ?></small>&nbsp;
                                                            <!--<small><i class="fa fa-clock-o"></i> <?php echo $this->etc->date_diff($d->tgl_add) ?></small>-->
                                                </p>
                                                </p>
                                                <p class="text-justify"><?php
                                                    $string = strip_tags($d->keterangan);
                                                    if (strlen($string) > 400) {

                                                        // truncate string
                                                        $stringCut = substr($string, 0, 400);
                                                        $endPoint = strrpos($stringCut, ' ');

                                                        //if the string doesn't contain any space then it will cut without word basis.
                                                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                        $string .= '... <a class="badge badge-warning">Selengkapnya</a>';
                                                    }
                                                    echo $string;
                                                    ?></p>

                                            </div>
                                        </div>
                                    <?php } ?>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="sub">
                                        <h4 class="title1 text-center" id="titleborder"><span>BERITA</span></h4>
                                    </div>     
                                </div>
                            </div>

                        </div>
                    </div>  
                    <!-- Berita Row 2-->
                    <div class="col-12 col-lg-12">
                        <?php $this->load->view('headefoot/berita'); ?>  
                    </div>

                    <!-- Hotspot Jogja -->
                    <div class="col-lg-12">
                        <?php $this->load->view('headefoot/galeri'); ?>
                    </div> 
                </div>
            </section>
        </div>
        <div class="col-xl-3 py-2">
            <div class="sidebar-area mb-3" style="max-width: 350px;">
                <div class="news-widget">
                    <!-- Download App -->
                    <div class="single-widget-area py-3">
                        <div class="jss-app">
                            <a target="_blank" href="https://www.manggaraitimurkab.go.id/profil/profil-pimpinan-pemerintah/profil-bupati-2019-2024.html">
                                <img alt="" src="<?php echo base_url('vendor/') ?>images/BUPATI.jpg" width="100%" >
                            </a>                    
                        </div>
                    </div>
                    <!-- Jogja Video Youtube-->
                    <div class="single-widget-area py-3">
                        <div id="sub">
                            <h4 class="" id="titleborder"><span>MATIM VIDEO</span></h4>
                        </div>
                        <div class="youtube-slides owl-carousel">
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/mI93RTE93IA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/H1Oyi69eQcw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="100%" height="180" src="https://www.youtube.com/embed/APV_EQf6mIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="single-sidebar-widget py-2">
                        <div class="gpr">
                            <div class="widget" id="video_gpr">
                                <script type="text/javascript"
                                src="../widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                                <div id="gpr-kominfo-widget-container"></div>
                            </div>                    </div>
                    </div>
                    <div class="banneritem">
                        <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
                        <div id="gpr-kominfo-widget-container"><div id="gpr-kominfo-widget-header"></div><div id="gpr-kominfo-widget-body"><ul id="gpr-kominfo-widget-list"><li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-artikel-berita-gpr"><small class="gpr-kominfo-align-left"><b>ARTIKEL</b></small><small class="gpr-kominfo-align-right gpr-small-date">02-11-2019 15:57</small><br><a href="https://kominfo.go.id/index.php/content/detail/22508/teknologi-industri-dan-pangan-menuju-indonesia-lumbung-pangan-dunia-2045/0/artikel_gpr" target="_blank">Teknologi Industri dan Pangan Menuju Indonesia Lumbung Pangan Dunia 2045</a><br><small class="gpr-kominfo-align-right">Tim GPR Kominfo</small><div class="gpr-kominfo-clear-fix"></div></li><li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-artikel-berita-gpr"><small class="gpr-kominfo-align-left"><b>ARTIKEL</b></small><small class="gpr-kominfo-align-right gpr-small-date">31-10-2019 14:08</small><br><a href="https://kominfo.go.id/index.php/content/detail/22483/investasi-indonesia-kembali-menggeliat-pada-triwulan-iii-tahun-2019/0/artikel_gpr" target="_blank">Investasi Indonesia Kembali Menggeliat pada Triwulan III Tahun 2019</a><br><small class="gpr-kominfo-align-right">Tim GPR Kominfo</small><div class="gpr-kominfo-clear-fix"></div></li><li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-artikel-berita-gpr"><small class="gpr-kominfo-align-left"><b>ARTIKEL</b></small><small class="gpr-kominfo-align-right gpr-small-date">28-10-2019 16:18</small><br><a href="https://kominfo.go.id/index.php/content/detail/22449/pemuda-indonesia-bersatu-untuk-indonesia-maju/0/artikel_gpr" target="_blank">Pemuda Indonesia Bersatu Untuk Indonesia Maju</a><br><small class="gpr-kominfo-align-right">Tim GPR Kominfo</small><div class="gpr-kominfo-clear-fix"></div></li><li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-artikel-berita-gpr"><small class="gpr-kominfo-align-left"><b>ARTIKEL</b></small><small class="gpr-kominfo-align-right gpr-small-date">22-10-2019 18:29</small><br><a href="https://kominfo.go.id/index.php/content/detail/22315/tentang-indonesia-science-expo-2019/0/artikel_gpr" target="_blank">Tentang Indonesia Science Expo 2019</a><br><small class="gpr-kominfo-align-right">Tim GPR Kominfo</small><div class="gpr-kominfo-clear-fix"></div></li><li class="gpr-kominfo-widget-list-item gpr-kominfo-widget-icon-artikel-berita-gpr"><small class="gpr-kominfo-align-left"><b>ARTIKEL</b></small><small class="gpr-kominfo-align-right gpr-small-date">17-10-2019 09:58</small><br><a href="https://kominfo.go.id/index.php/content/detail/22211/digitalisasi-sekolah-percepat-perluasan-akses-pendidikan-berkualitas-di-daerah-3t/0/artikel_gpr" target="_blank">Digitalisasi Sekolah Percepat Perluasan Akses Pendidikan Berkualitas di Daerah 3T </a><br><small class="gpr-kominfo-align-right">Tim GPR Kominfo</small><div class="gpr-kominfo-clear-fix"></div></li></ul></div><div id="gpr-kominfo-widget-footer"></div></div>				<div class="clr"></div>
                    </div>

                    <!-- Download App -->

                    <!-- Jogja Video Youtube-->


                </div>
            </div>        
        </div>
    </div>
</div>
<?php $this->load->view('headefoot/footer'); ?>  
<script>
                                            function daftarBerita(idKategori, idTab) {
                                                var url = "<?php echo site_url('welcome/daftar_berita/') ?>" + idKategori;
                                                //http://localhost/CodeIgniter/manggaraitimur/index.php/welcome/daftar_berita/id_kategori
                                                $("#" + idTab).removeClass('active').addClass('active');
                                                $("#daftar-berita").load(url);
                                            }
</script>