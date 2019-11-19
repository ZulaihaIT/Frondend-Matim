<?php $this->load->view('headefoot/header'); ?>  
<div class="intro-news-filter d-flex justify-content-between">

</div>
<div class="container  bg-white pt-4">
    <div class="row mb-2">
        <div class="col-md-8">
            <div class='mag-breadcrumb py-2'>
                <nav aria-label='breadcrumb'>
                    <ol class='breadcrumb'>
                        <li class='breadcrumb-item'>
                            <a href=<?php Echo site_url('beranda') ?>>
                                <i class='fa fa-home' aria-hidden='true'>

                                </i> Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="<?php Echo site_url('logo') ?>">Page</a>
                        </li><li class="breadcrumb-item active">Lambang dan Identitas &nbsp;</li></ol></nav></div>
            <div id="outer-box">
                <div>
                    <?php
                    foreach ($data as $d) {
                        ?>
                        <div class="row px-3">
                            <p class="lead font-weight-bold text-center"><?php echo $d->nama_sub ?></p>
                        </div>
                        <div class="p-0 col-lg-4 order-2 order-lg-1 text-center">
                            <img class="img-fluid d-block my-2 "  src="http://localhost/Admin_matim/assets/sub/<?php echo $d->gambar ?>" alt="gambar berita">
                        </div>
                        <div class="p-3 col-lg-12 order-1 order-lg-2 "><p class="text-justify"><?php echo $d->keterangan ?></p>
                        </div>


                    <?php } ?>

                </div>
            </div>
        </div>
        <div class="col-md-4">
                <?php $this->load->view('headefoot/berita'); ?> 
        </div>
    </div>
    <!--   <div class="row mb-4">
            </div>-->
    <div class="col-lg-12">
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