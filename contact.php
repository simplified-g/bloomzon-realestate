<?php require("ems-incs/header.inc.php");?>

<?php 
	if(isset($_POST['contact-name'])){
		$emscms->send_contact_msg();
	}
?>

        <!-- Page Title #1
============================================ -->
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Contact</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">Contact</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- Contact #1
============================================= -->
        <section id="contact" class="contact contact-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="heading heading-2 mb-55">
                            <h2 class="heading--title">Get In Touch</h2>
                        </div>
                        <div class="contact-panel">
                            
                        </div>
                        <!-- .contact-panel -->
                        <div class="contact-panel">
                            <h3>Phone:</h3>
                            <p>2349084950302</p>
                        </div>
                        <!-- .contact-panel -->
                        <div class="contact-panel">
                            <h3>Email:</h3>
                            <p>contact@gohome.ng</p>
                        </div>
                        <!-- .contact-panel -->
                    </div>
                    <!-- .col-md-3 end -->

                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 bg-white p-30 bg-white">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7951.649661561061!2d7.010812!3d4.800109000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cc20971c9b03%3A0x9ddccf4820d460e8!2sOgbunabali%20Road%2C%20Ogbunabali%2C%20Port%20Harcourt!5e0!3m2!1sen!2sng!4v1570832711344!5m2!1sen!2sng" width="720" height="370" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <!-- #contact  end -->

        <!-- Contact #2
============================================= -->
        <section id="contact2" class="contact contact-2 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 mb-50">
                            <h2 class="heading--title">Contact Us</h2>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <form action="contact" method="post" class="mb-0">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name*</label>
                                        <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="contact-email">Email Address*</label>
                                        <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="(optional)">
                                    </div>
                                </div>
                                <!-- .col-md-4 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message*</label>
                                        <textarea class="form-control" name="contact-message" id="message" rows="2" required></textarea>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
									<input type='hidden' name='sbmtMsg' value='1'>
                                    <input type="submit" value="Send Message" name="submit" class="btn btn--primary">
                                </div>
                                <!-- .col-md-12 -->
                            </div>
                        </form>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <!-- #contact2  end -->

        <?php require("ems-incs/footer.inc.php"); ?>
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script>
        $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 12,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "assets/images/gmap/marker1.png",
                    iconsize: [52, 75],
                    iconanchor: [52, 75]
                }
            }]
        });

    </script>
    <script src="assets/js/map-custom.js"></script>
</body>

</html>
