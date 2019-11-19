<?php $this->load->view('headefoot/header'); ?>  
<div class="intro-news-filter d-flex justify-content-between">

</div>
<div class="container  bg-white pt-4">
    <div class="row mb-2">
        <div class="col-md-8">
            <div class='mag-breadcrumb py-2'><nav aria-label='breadcrumb'><ol class='breadcrumb'><li class='breadcrumb-item'><a href=<?php Echo site_url('beranda')?>><i class='fa fa-home' aria-hidden='true'></i> Home</a></li><li class="breadcrumb-item" aria-current="page"><a href="<?php Echo site_url('peta')?>">Page</a></li><li class="breadcrumb-item active">PETA Kabupaten Manggarai Timur&nbsp;</li></ol></nav></div>
            <div id="outer-box">
                <p>
                    <strong>PETA Kabupaten Manggarai Timur</strong>
                </p>
                <center>
                    <a href="#" style="height: 340px;">
                        <img alt="" src="<?php echo base_url() ?>vendor/images/peta.jpg" class="bg-news">
                    </a>
                </center>
                <br>
                <center>
                    <a href="#" style="height: 100px; width:200px">
                        <img  alt="" src="<?php echo base_url() ?>vendor/images/ADMINISTRATIF.jpg" class="bg-news">
                    </a>
                </center>
                <br>
               
            </div>
        </div>
        <div class="col-md-4">
            <?php $this->load->view('headefoot/berita'); ?> 
        </div>
    </div>
    <!--   <div class="row mb-4">
            </div>-->
    <div class="row py-2">
        <div class="col-md-12">
            <div class="intro-news-filter d-flex justify-content-between">

            </div>
          <?php $this->load->view('headefoot/galeri'); ?> 

        </div>
    </div>
    <div class="intro-news-filter d-flex justify-content-between">

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