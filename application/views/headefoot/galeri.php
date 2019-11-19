<div class="trending-now-posts">
    <div id="sub">
        <h4 class="" id="titleborder"><span>GALLERY FOTO</span></h4>
    </div>
    <div class="trending-post-slides owl-carousel">
        <?php
        foreach ($gambar as $d) {
            ?>
            <div class="single-trending-post">
                <a href="http://localhost/Admin_matim/assets/gambar/<?php echo $d->gambar ?>s" style="height: 340px;">
                    <img alt="" src="http://localhost/Admin_matim/assets/gambar/<?php echo $d->gambar ?>" class="bg-news">
                </a>
                <div class="post-content">
                    <div class="text-white"><?php echo date_format(date_create($d->tgl_add), "d-m-Y H:i:s") ?> 
                    </div>
                    <div class="text-white"><?php echo $d->nama_gambar ?> 
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>