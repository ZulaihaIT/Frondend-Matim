
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <a href="index.html" class="foo-logo"><img src="<?php echo base_url('vendor/') ?>images/budaya.jpg"style="width:250px" alt=""></a>
                    <p class="text-white">Kabupaten Manggarai timur lahir dari kesadaran dan cita-cita. Kesadaran akan fakta pembangunan yang belum maksimal dan cita-cita untuk mengubah keadaan, mendekatkan <br> pelayanan kepada masyarakat serta pemerataan pembangunan.

                        Kesadaran dan cita-cita itu menjadi aspirasi. Aspirasi menjadi wacana. Wacana menjadi gerakan bersama: perjuangan untuk membentuk Kabupaten Manggarai Timur.</p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Maps Manggarai Timur</h6>
                    <nav class="footer-widget-nav">
                        <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d63246.435391604435!2d110.391445!3d-7.800177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0xdf31bbd5127287a6!2sYogyakarta+City+Hall!5e0!3m2!1sen!2sid!4v1556768133200!5m2!1sen!2sid" width="100%" height="190" frameborder="0"  allowfullscreen></iframe>                                            </nav>-->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7886.82043651717!2d120.61316848735596!3d-8.747417142773642!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15436e0675e49f52!2sKantor%20Bupati%20Manggarai%20Timur!5e0!3m2!1sen!2sid!4v1572939711264!5m2!1sen!2sid" width="100%" height="190" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Kontak Kami</h6>
                    <ul class="addresss-info"> 
                        <li class="text-white mb-2">
                            <i class="fa fa-map-marker"></i>
                            <span><p class="text-white d-flex mb-0">Jl. D. I. Panjaitan, Lehong - Borong, Rana Loba, Borong, Kabupaten Manggarai Timur, Nusa Tenggara Tim.</p></span>
                        </li>
                        <li class="text-white mb-2"><i class="fa fa-phone"></i><span>+62274 514448, +62274 515865, +62274 515866</span></li>
                        <li class="text-white mb-2"><i class="fa fa-envelope-o"></i>kominfo@matim.go.id</li>
                    </ul>
                </div>
            </div>
            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="footer-widget">
                    <h6 class="widget-title">Statistik Pengunjung</h6>
                    <table class="text-white">
                        <tr>
                            <td>Online</td>
                            <td>&nbsp;: </td>
                            <td>&nbsp;80</td>
                        </tr>
                        <tr>
                            <td>Today visitors</td>
                            <td>&nbsp;: </td>
                            <td>&nbsp;2161</td>
                        </tr>
                        <tr>
                            <td>Visitors</td>
                            <td>&nbsp;: </td>
                            <td>&nbsp;1,012,239</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="dashed">
            <p class="lead text-center text-light">Kabupaten Manggarai Timur &copy; <?php echo date("Y") ?></p>
        </div>
        <a id="back-to-top" class="float" style="cursor: pointer">
            <i class="fa fa-arrow-up my-float text-light"></i>
        </a>
        
        <a href="https://www.facebook.com/manggaraitimurkab.go.id/" class="jj_social_text" target="_blank" >
            <i class="fa fa-facebook my-float text-light"></i>
        </a>
    </div>

</footer>

<script src="<?php echo base_url('vendor/') ?>node_modules/popper.js/dist/umd/popper.js"></script>
<script src="<?php echo base_url('vendor/') ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('vendor/') ?>node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="<?php echo base_url('vendor/') ?>node_modules/d3/dist/d3.min.js"></script>
<script src="<?php echo base_url('vendor/') ?>node_modules/c3/c3.min.js"></script>
<script src="<?php echo base_url('vendor/') ?>node_modules/toastr/build/toastr.min.js"></script>
<script src="<?php echo base_url('vendor/') ?>js/active.js"></script>
 <script type="text/javascript">
        hs.graphicsDir = "<?php echo base_url() ?>" + 'vendor/highslide/graphics/';
        hs.align = 'center';
        hs.transitions = ['expand', 'crossfade'];
        hs.outlineType = 'rounded-white';
        hs.fadeInOut = true;
        hs.dimmingOpacity = 0.75;
        if (hs.addSlideshow)
            hs.addSlideshow({
                interval: 5000,
                repeat: false,
                useControls: false,
                fixedControls: 'fit',
                overlayOptions: {
                    opacity: .75,
                    position: 'bottom center',
                    hideOnMouseOut: true
                }
            });
    </script>

<script type="text/javascript">
    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-bottom-right",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "0",
            "timeOut": "15000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        $('#toast-container').addClass("jello animated");
    });
</script> 
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        $('#back-to-top').tooltip('show');

    });

</script>       
</body>

<!-- Mirrored from www.jogjakota.go.id/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 02:17:07 GMT -->
</html>