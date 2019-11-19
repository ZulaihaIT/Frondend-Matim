<?php $this->load->view('headefoot/header'); ?>  
<div class="container">
    <div class="text-light pt-2">
        <div class="row">
            <div class="col-md-12">
                <div id="gallery">
                    <h2 class="title1" id="titleborder"><span>Project Portoflio</span></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
                <div class="col-md-12">
                     <div class="tab-content mt-2">
                        <div class="tab-pane fade active show" id="all" role="tabpanel">
                            <div class="container-fluid">
                                <div class="row">
                                   <?php  foreach ($gambar as $d) { ?>
                                        <div class="px-2 mb-3 col-md-4 col-12 col-sm-12 btn-menu">
                                            <div class="wrapper-block">
                                                <div class="highslide-gallery">
                                                    <div class="hover text-center p-1">
                                                        <p style="color: #FFF; font-size: 15px; padding-bottom: 2px" class="text-uppercase"><?php echo $d->nama_gambar ?></p>
                                                    </div>
                                                    <a href="http://localhost/Admin_matim/assets/gambar/<?php echo $d->gambar ?>" class="highslide text-center" onclick="return hs.expand(this)">
                                                        <img style="height: 200px; width: 100%" src="http://localhost/Admin_matim/assets/gambar/<?php echo $d->gambar ?>" class="img-thumbnail" alt="<?php echo $d->gambar ?>" title="Klik Untuk Memperbesar" 
                                                             />
                                                    </a>
                                                    
                                                    <div class="highslide-caption text-uppercase">
                                                       <?php echo date_format(date_create($d->tgl_add), "d-m-Y H:i:s") ?> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                      
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('headefoot/footer'); ?>  
    