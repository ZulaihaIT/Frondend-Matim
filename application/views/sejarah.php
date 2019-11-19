<?php $this->load->view('headefoot/header'); ?>  
<div class="intro-news-filter d-flex justify-content-between">

</div>
<div class="container  bg-white pt-4">
    <div class="row mb-2">
        <div class="col-md-8">
            <div class='mag-breadcrumb py-2'><nav aria-label='breadcrumb'><ol class='breadcrumb'><li class='breadcrumb-item'><a href=<?php Echo site_url('beranda')?>><i class='fa fa-home' aria-hidden='true'></i> Home</a></li><li class="breadcrumb-item" aria-current="page"><a href="<?php Echo site_url('sejarah')?>">Page</a></li><li class="breadcrumb-item active">Sejarah Kabupaten Manggarai Timur&nbsp;</li></ol></nav></div>
            <div id="outer-box">
                <p>
                    <strong>Sejarah Kabupaten Manggarai Timur</strong>
                </p>
                <center>
                    <a href="#" style="height: 340px;">
                        <img alt="" src="<?php echo base_url() ?>vendor/images/icon.png" class="bg-news">
                    </a>
                </center>
                <br>
                <p>
                    Kabupaten Manggarai timur lahir dari kesadaran dan cita-cita. Kesadaran akan fakta pembangunan yang belum maksimal dan cita-cita untuk mengubah keadaan, mendekatkan pelayanan kepada masyarakat serta pemerataan pembangunan.

                    Kesadaran dan cita-cita itu menjadi aspirasi. Aspirasi menjadi wacana. Wacana menjadi gerakan bersama: perjuangan untuk membentuk Kabupaten Manggarai Timur.



                    Dalam rekam peristiwa, wacana pembentukkan Kabupaten Manggarai Timur telah digullirkan sejak 1986. Berbagai elemen masyarakat berjuang agar Kabupaten Manggarai dibagi menjadi tiga yakni Manggarai Barat, Manggarai Tengah dan Manggarai Timur. Wacana ini lahir dari kesadaran bahwa wilayah Manggarai terlalu luas. Jika dimekarkan, kualitas pelayanan publik akan lebih baik dan tepat sasaran.

                    Wacana Pembentukan Kabupaten Manggarai Timur terus diperjuangkan dan disuarakan, namun belum menjadi arus utama. Antara akhir dekade 1980-an hingga akhir dekade 1990-an, wacana itu seperti kehilangan momentum. Ada namun belum melonjak ke permukaan.

                    Sekitar tahun 2000 wacana pembentukan Kabupaten Manggarai Timur kembali bergulir. Tonggaknya adalah pernyataan dukungan dari DPRD Kabupaten Manggarai terhadap usulan pemekaran Kabupaten Manggarai menjadi tiga kabupaten. Dukungan itu tertuang dalam pernyataan Nomor 1/Perny.DPRD/2000 tanggal 29 Mei 2000. Dukungan tersebut ditindaklanjuti melalui keputusan politik lembaga DPRD Manggarai Nomor 06/DPRD/2002 tanggal 10 Agustus 2002. Selama lima tahun, aspirasi ini timbul-tenggelam-mengendap namun hidup dalam hati masyarakat.

                    Sejak tahun 2005, dukungan terhadap pembentukan Manggarai Timur mendapatkan angin segar. Dimulai dengan surat usulan Bupati Manggarai Nomor Pem. 135/22/I/2006, Keputusan DPRD Kabupaten Manggarai Nomor 03/DPRD/2006 tanggal 4 Februari 2006, Keputusan Nomor 04/DPRD/2006 tanggal tanggal 15 Februari 2006 dan Keputusan Nomor 05/ DPRD/2006, tanggal 17 Februari 2006. Usulan Gubernur NTT Nomor Pem. 135/04/2006 tanggal 27 Januari 2006 dan Keputusan DPRD Provinsi NTT Nomor 4/PIMP.DPRD/2006 tanggal 1 Februari 2006.

                    Dengan melihat kebutuhan masyarakat serta dukungan pemerintah, optimisme melingkupi semua elemen yang berjuang untuk membentuk Kabupaten Manggarai Timur. Gerakan bersama untuk memekarkan dan membentuk daerah otonom baru mulai dilaksanakan dengan teratur dan terencana. Jalur politis dan jalur budaya ditempuh. Pendekatan demi pendekatan gencar dilakukan. Puncak dari perjuangan ini adalah lahirnya Undang Undang Nomor 36 Tahun 2007 tentang Pembentukan Kabupaten Manggarai Timur di Provinsi Nusa Tenggara Timur yang disahkan pada tanggal 17 Juli 2007.
                </p>

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