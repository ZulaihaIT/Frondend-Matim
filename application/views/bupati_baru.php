<?php $this->load->view('headefoot/header'); ?>  
<div class="intro-news-filter d-flex justify-content-between">

</div>
<div class="container  bg-white pt-4">
    <div class="row mb-2">
        <div class="col-md-8">
            <div class='mag-breadcrumb py-2'><nav aria-label='breadcrumb'><ol class='breadcrumb'><li class='breadcrumb-item'><a href=../index.html><i class='fa fa-home' aria-hidden='true'></i> Home</a></li><li class="breadcrumb-item" aria-current="page"><a href="../index.html">Page</a></li><li class="breadcrumb-item active">Visi Dan Misi&nbsp;</li></ol></nav></div>
            <div id="outer-box">
                <p>
                    <strong>DAFTAR RIWAYAT HIDUP BUPATI KABUPATEN MANGGARAI TIMUR</strong>
                </p>
                <center>
                    <a href="#" style="height: 340px;">
                        <img alt="" src="<?php echo base_url() ?>vendor/images/bupati2019.jpg" class="bg-news">
                    </a>
                </center>
                <br>

                <ol type="A">
                    <li><b>IDENTITAS DIRI/KELUARGA</b></li>
                    Nama Lengkap                : Agas Andreas, SH., M.Hum <br>

                    Tempat/Tgl Lahir             : Lambaleda, 01 September 1959 <br>

                    Jenis Kelamin                : Laki-laki<br>

                    Agama                        : Katolik<br>

                    Pendidikan Terakhir        : Magister Humaniora Universitas Airlangga<br>

                    Pekerjaan                       : Bupati Manggarai Timur<br>

                    Alamat Rumah/no.HP     : RT 002/RW 001 Desa Nanga Labang, Kecamatan

                    Borong, Kabupaten Manggarai Timur/  <br>                                    

                    Alamt Kantor/no. telp      : Kantor Wakil Bupati Manggarai Timur di Lehong,

                    Desa Gurung Liwut<br>

                    Status Perkawinan          : Kawin<br>

                    Nama Suami/Istri            : Dra. Theresia Wisang<br>

                    Jumlah Anak                   : 2 orang anak <br>
                    <li> <b>RIWAYAT PENDIDIKAN</b></li>
                    SD  : SDK Lewe, Berijazah tahun 1973<br>

                    SLTP/SMP : STPK Ruteng, Berijazah tahun 1976<br>

                    SLTA/SMA                       : SMA Muhammadyah Ende, Berijazah tahun 1980<br>

                    PT                                   : Sarjana Hukum Undana, Berijazah tahun 1987<br>

                    Pasca Sarjana/S2            : Magister Humaniora Universitas Airlangga, Berijazah tahun 1995<br>

                </ol>
                <p>

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