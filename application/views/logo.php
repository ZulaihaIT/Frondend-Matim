<?php $this->load->view('headefoot/header'); ?>  
<div class="intro-news-filter d-flex justify-content-between">

</div>
<div class="container  bg-white pt-4">
    <div class="row mb-2">
        <div class="col-md-8">
            <div class='mag-breadcrumb py-2'><nav aria-label='breadcrumb'><ol class='breadcrumb'><li class='breadcrumb-item'><a href=<?php Echo site_url('beranda')?>><i class='fa fa-home' aria-hidden='true'></i> Home</a></li><li class="breadcrumb-item" aria-current="page"><a href="<?php Echo site_url('logo')?>">Page</a></li><li class="breadcrumb-item active">Lambang dan Identitas &nbsp;</li></ol></nav></div>
            <div id="outer-box">
                <p>
                    <strong>Lambang dan Identitas Kabupaten Manggarai Timur</strong>
                </p>
                <center>
                    <a href="#" style="height: 340px;">
                        <img alt="" src="<?php echo base_url() ?>vendor/images/icon.png" class="bg-news">
                    </a>
                </center>
                <br>
                <p>
                    <b>Logo daerah dibuat dalam bentuk lukisan yang melambangkan jiwa dan semangat dan cita-cita masyarakat Manggarai Timur yang mudah dimengerti, yang dilukiskan dalam bentuk Perisai, Rumah Adat, Setangkai Padi dan Kopi, Burung Lawe Lujang dan Kebun Komunian/ Lodok.
                    </b></p>
                <ol>
                    <li><b>Perisai Bersisi Lima melambangkan:</b>
                        <ol type="a">
                            <li>Pancasila sebagai Dasar Negara</li>
                            <li>Benteng pertahanan dan perlindungan seluruh rakyat</li>
                        </ol>
                    </li>
                    <li><b>Rumah Adat:</b><br>Pada bubungan terdapat 3 (tiga) simbol utama, yaitu:
                        <ol type="a">
                            <li>Tanduk Kerbau sebagai simbol prinsip kemanusiaan dan suka bekerja keras</li>
                            <li>Tali ijuk yang melilit/melingkar tiang penopang tanduk kerbau melambangkan persatuan dan kesatuan orang Manggarai Timur yang kukuh kuat tidak terpisahkan</li>
                            <li>Periuk persembahan : simbol keyakinan orang Manggarai Timur sekaligus penghormatan dan penyembahan pada Tuhan yang menjadikan.</li>
                        </ol>
                    </li>
                    <li><b>Bagian dalam rumah adat terdapat 3 (tiga) simbol utama, yaitu:</b>
                        <ol type="a">
                            <li>Kuda-kuda atap (kinang) yang menuju satu titik puncak. Ini melambangkan perwakilan/utusan dari setiap kelompok/golongan yang ada di Kabupaten Manggarai Timur. Antar kuda kuda diikat oleh tali ijuk melambangkan satu kesatuan dalam perwakilan dan lambang solidaritas sosial dalam permusyawaratan, nilai tenggang rasa terungkap lewat simbol ini.</li>
                            <li>Ujung kuda-kuda menuju titik puncak bubungan rumah adat melambangkan loyalitas orang Manggarai Timur kepada puncak pimpinan kesatuan komando termasuk kepatuhan terhadap Tuhan Yang Maha Esa</li>
                            <li>Burung Lawe Lujang melambangkan cita-cita, visi dan citra masyarakat Manggarai Timur serta kecintaan masyarakat Manggarai Timur kepada alam lingkungan hidup.</li>
                            <li>Setangkai Padi dan Kopi melambangkan kesuburan dan kesejaterahan dan pada tangkai padi terdapat 23 (dua puluh tiga ) bulir padi dan pada tangkai kopi terdapat  11 (sebelas) biji kopi melambangkan peristiwa bersejarah bagi Kabupaten Manggarai Timur yakni peresmian Kabupaten Manggarai Timur tanggal 23 November 2007.</li>
                            <li>Kebun Komunal/Lodok melambangkan masyarakat agraris dan simbol persatuan walaupun berbeda.</li>
                        </ol>
                    </li>
                </ol>
                <p>
                    <strong>Makna Warna Logo Daerah:</strong>    
                </p>

                <ol type="a">
                    <li>Merah pada kopi dan pita melambangkan semangat keberanian, perjuangan serta pengorbanan.</li>
                    <li>Kuning pada padi, sisi logo dan kebun komunal melambangkan keluhuran, keagungan dan kejayaan.</li>
                    <li>Putih pada dinding rumah adat dan burung lawe  lujang melambangkan ketulusan dan kejujuran.</li>
                    <li>Hijau pada kopi dan logo melambangkan cita-cita dan harapan masa depan masyarakat Kabupaten Manggarai Timur atas dasar potensi yang ada.</li>
                    <li> Hitam pada bingkai dan atap rumah adat melambangkan teguh dalam sikap dan prinsip dalam pendirian.</li>
                    <li> Biru pada bagian dalam logo melambangkan ketenangan dan kedamaian serta potensi alam Kabupaten Manggarai Timur.</li>
                </ol>
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