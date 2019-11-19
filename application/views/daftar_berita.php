<?php foreach ($berita as $b) { ?>
    <div class="col-12 col-sm-12">
        <div class="single-post-list d-flex align-items-center mb-2">
            <div class="post-list-thumbnail bg-news">
                <img src="http://localhost/Admin_matim/assets/sub/<?php echo $b->gambar ?>" alt="">
                <div class='social-btn'>
                    <a href='https://www.facebook.com/sharer.php?u=https://www.facebook.com/manggaraitimurkab.go.id/' target='_blank'>                                                                 <i class='fa fa-facebook' aria-hidden='true'></i></a><a href='https://twitter.com/share?url=https://www.jogjakota.go.id/link.php?id=11237&amp;a=https://warta.jogjakota.go.id/detail/index/8432' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i>
                    </a>
                    <a href='whatsapp://send?text=https://www.jogjakota.go.id/link.php?id=11237&a=https://warta.jogjakota.go.id/detail/index/8432' target='_blank'><i class='fa fa-whatsapp' aria-hidden='true'></i></a>
                </div>                                                         
            </div>
            <div class="post-list-content">
                <span><i class="fa fa-calendar"></i>
                   
                <?php $dateDb = strtotime($b->tgl_add);
                
                $day = date("w", $dateDb);
                //yang ini buat ambil index hari //
                echo $this->etc->hariIndonesia($day)." ".date_format(date_create($b->tgl_add), "d/m/Y H:i:s");
                ?>
                </span>
                <a href="<?php echo site_url('welcome/detail_berita/' . $b->sub_seo) ?>" target='_blank'><?php echo $b->nama_sub ?></a>
                <span></a></span> 
            </div>
        </div>
    </div>
<?php } ?>
