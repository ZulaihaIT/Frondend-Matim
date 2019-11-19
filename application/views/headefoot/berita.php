
                                <div class="intro-news-tab py-2">
                                   
                                        <nav class="">
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <?php
                                                $no = 1;
                                                foreach ($kategori as $kt) {
                                                    ?>
                                                    <a class="nav-item nav-link" id="tab-<?php echo $no ?>" href="javascript:void(0)" role="tab" 
                                                       onclick="return daftarBerita('<?php echo $kt->id_kategori ?>', 'tab-<?php echo $no ?>')">
                                                           <?php echo $kt->nama_kategori ?>
                                                    </a>
                                                    <?php
                                                    $no++;
                                                }
                                                ?>
                                            </div>
                                        </nav>
                                   
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav1">
                                            <div class="row mt-4 pt-4" id="daftar-berita">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            