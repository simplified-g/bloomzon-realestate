<?php require("ems-incs/header.inc.php");?>

<!-- Hero Search
============================================= -->
<section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                <div class="slider--content">
                    <div class="row text-center">
                        <div class="col-md-4 col-xs-4"><button type="submit" name="submit"
                                class="btn btn--primary--dark btn--block">For Sale</button><br>
                            <i class="arrow-down" id="sale-arrow"></i>
                        </div>
                        <div class="col-md-4 col-xs-4"><button type="submit" name="submit"
                                class="btn btn--primary--dark btn--block">For Rent</button><br>
                            <i class="arrow-down hidden" id='rent-arrow'></i>
                        </div>
                        <div class="col-md-4 col-xs-4"><button type="submit" name="submit"
                                class="btn btn--primary--dark btn--block">Land</button><br>
                            <i class="arrow-down hidden" id="land-arrow"></i>
                        </div>
                    </div>
                    <!--<form action="search-result.php" method="GET" class="mb-0">-->
                    <form action="properties-list.php" method="GET" class="mb-0">
                        <div class="search-properties">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-state" id="select-location"
                                                onchange="populate(this.id,'select-lga')">
                                                <option value="">Any State</option>
                                                <option value="abuja">Abuja (FCT)</option>
                                                <option value="lagos">Lagos State</option>
                                                <option value="rivers">Rivers State</option>
                                                <option value="abia">Abia State</option>
                                                <option value="adamawa">Adamawa State</option>
                                                <option value="akwa ibom">Akwa Ibom State</option>
                                                <option value="anambra">Anambra State</option>
                                                <option value="bauchi">Bauchi State</option>
                                                <option value="bayelsa">Bayelsa State</option>
                                                <option value="benue">Benue State</option>
                                                <option value="borno">Borno State</option>
                                                <option value="cross rivers">Cross Rivers State</option>
                                                <option value="delta">Delta State</option>
                                                <option value="ebonyi">Ebonyi State</option>
                                                <option value="enugu">Enugu State</option>
                                                <option value="edo">Edo State</option>
                                                <option value="ekiti">Ekiti State</option>
                                                <option value="gombe">Gombe State</option>
                                                <option value="imo">Imo State</option>
                                                <option value="jigawa">Jigawa State</option>
                                                <option value="kaduna">Kaduna State</option>
                                                <option value="kano">Kano State</option>
                                                <option value="katsina">Katsina State</option>
                                                <option value="kebbi">Kebbi State</option>
                                                <option value="kogi">Kogi State</option>
                                                <option value="kwara">Kwara State</option>
                                                <option value="nasarawa">Nasarawa State</option>
                                                <option value="niger">Niger State</option>
                                                <option value="ogun">Ogun State</option>
                                                <option value="ondo">Ondo State</option>
                                                <option value="osun">Osun State</option>
                                                <option value="oyo">Oyo State</option>
                                                <option value="plateau">Plateau State</option>
                                                <option value="sokoto">Sokoto State</option>
                                                <option value="taraba">Taraba State</option>
                                                <option value="yobe">Yobe State</option>
                                                <option value="zamfara">Zamfara State</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-lga" id="select-lga">
                                                <option value="">Any Region</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-type" id="select-type">
                                                <option value="">Any Type</option>
                                                <option value="land">Land</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="house">House</option>
                                                <option value="office">Office</option>
                                                <option value="store">Store</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-status" id="select-status">
                                                <option value="">Any Status</option>
                                                <option value="rent">For Rent</option>
                                                <option value="sale">For Sale</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <!--<div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="submit" class="btn btn--primary btn--block">
                                        </div>-->
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-beds" id="select-beds">
                                                <option value="">Bedrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="select-baths" id="select-baths">
                                                <option value="">Bathrooms</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-6 col-md-4 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="min" id="select-baths">
                                                <option value="1">Min Amount</option>
                                                <option value="1000">₦1,000</option>
                                                <option value="10000">₦10,000</option>
                                                <option value="100000">₦100,000</option>
                                                <option value="1000000">₦1,000,000</option>
                                                <option value="10000000">₦10,000,000</option>
                                                <option value="100000000">₦100,000,000</option>
                                                <option value="1000000000">₦1,000,000,000</option>
                                                <option value="10000000000">₦10,000,000,000</option>
                                            </select>
                                            <!--<input id="amount" type="text" class="amount" name="amount" readonly>-->
                                            <!--<div class="slider-range"></div>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 option-hide">
                                    <div class="form-group">
                                        <div class="select--box">
                                            <i class="fa fa-angle-down"></i>
                                            <select name="max" id="select-baths">
                                                <option value="100000000000">Max Amount</option>
                                                <option value="1000">₦1,000</option>
                                                <option value="10000">₦10,000</option>
                                                <option value="100000">₦100,000</option>
                                                <option value="1000000">₦1,000,000</option>
                                                <option value="10000000">₦10,000,000</option>
                                                <option value="100000000">₦100,000,000</option>
                                                <option value="1000000000">₦1,000,000,000</option>
                                                <option value="10000000000">₦10,000,000,000</option>
                                            </select>
                                            <!--<input id="amount" type="text" class="amount" name="amount" readonly>-->
                                            <!--<div class="slider-range"></div>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- .col-md-3 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12" style="margin-bottom: 10px;">
                                    <a href="#" class="less--options">Advance Search</a>
                                </div>
                                <br /><br />
                                <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4" style="margin-bottom:-20px">
                                    <input type="submit" value="Search" name="submit"
                                        class="btn btn--primary btn--block">
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .form-box end -->
                    </form>
                </div>
            </div>
            <!-- .container  end -->
        </div>
        <!-- .slider-text end -->
    </div>
    <div class="carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false"
        data-space="0" data-loop="true" data-speed="800">
        <!-- Slide #1 -->
        <!-- .slide-item end -->
        <!-- Slide #2 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="assets/images/slider/slide-bg/1.jpg" alt="background">
            </div>
        </div>
        <!-- Slide #1 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="assets/images/slider/slide-bg/3.jpg" alt="background">
            </div>
        </div>
        <!-- .slide-item end -->
        <!-- Slide #1 -->
        <div class="slide--item bg-overlay bg-overlay-dark3">
            <div class="bg-section">
                <img src="assets/images/slider/slide-bg/5.jpg" alt="background">
            </div>
        </div>
    </div>
</section>
<!-- #property-single-slider end -->

<section id="city-property" class="city-property text-center pb-50">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Top Cities</h2>
                    <p class="heading--desc">Search properties by city by clicking on each of the cities below</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- City #2 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="search-result?city=abuja">
                            <img src="assets/images/properties/city/1.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Abuja</h5>
                                    <p class="property--numbers"><?php echo $emscms->count_city_properties("Abuja"); ?>
                                        Properties</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- City #1 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="search-result?city=lagos">
                            <img src="assets/images/properties/city/2.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Lagos</h5>
                                    <p class="property--numbers"><?php echo $emscms->count_city_properties("Lagos"); ?>
                                        Properties</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->


            <!-- City #3 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="search-result?city=rivers state">
                            <img src="assets/images/properties/city/3.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Port Harcourt</h5>
                                    <p class="property--numbers">
                                        <?php echo $emscms->count_city_properties("Rivers State"); ?> Properties</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #4 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="search-result?city=imo state">
                            <img src="assets/images/properties/city/4.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Enugu</h5>
                                    <p class="property--numbers">
                                        <?php echo $emscms->count_city_properties("Enugu State"); ?> Properties</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="search-result?city=akwa ibom">
                            <img src="assets/images/properties/city/5.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Uyo</h5>
                                    <p class="property--numbers">
                                        <?php echo $emscms->count_city_properties("akwa ibom"); ?> Properties</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
            <!-- .col-md-8 end -->
            <!-- City #4 -->
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="property-city-item">
                    <div class="property--city-img">
                        <a href="search-result?city=imo state">
                            <img src="assets/images/properties/city/6.jpg" alt="city" class="img-responsive">
                            <div class="property--city-overlay">
                                <div class="property--item-content">
                                    <h5 class="property--title">Owerri</h5>
                                    <p class="property--numbers">
                                        <?php echo $emscms->count_city_properties("Imo State"); ?> Properties</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- .property-city-img end -->
                </div>
                <!-- . property-city-item end -->
            </div>
        </div>
    </div>
</section>

<!-- properties-sale
        ============================================= -->
<section id="properties-carousel" class="properties-carousel pt-90 pb-90"
    style="padding-top:40px !important; background-color: #000 !important; padding-bottom: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title text-white">Featured Properties for Sale</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <?php $emscms->post_featured_properties_sale(); ?>
        </div>
        <div class="row">
            <?php $emscms->post_featured_properties_sale(); ?>
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-sale end  -->

<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark4 pt-90 pb-50" style="margin-top: 50px;">
    <div class="bg-section"><img src="assets/images/slider/slide-bg/3.jpg" alt="Background"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 text-center">
                <h3 class="text-white text-center">Home has never been more important</h3>
                <div class="form-group form-inline text-center">
                    <input class="form-control col-10" placeholder="Address, neightborhood, city...">
                    <button class="btn btn--primary col-2"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <!-- .col-md-6 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>

<!-- properties-rent
        ============================================= -->
<section id="properties-carousel" class="properties-carousel pt-90 pb-90"
    style="padding-top:40px !important; background-color: #fff !important;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-2 text-center mb-70">
                    <h2 class="heading--title">Featured Properties for Rent</h2>
                </div>
                <!-- .heading-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <div class="row">
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
                    data-nav="false" data-dots="false" data-space="25" data-loop="true" data-speed="800"> -->
            <?php $emscms->post_featured_properties_rent(); ?>
            <!-- </div>
    </div> -->
        </div>
        <div class="row">
            <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
                    data-nav="false" data-dots="false" data-space="25" data-loop="true" data-speed="800"> -->
            <?php $emscms->post_featured_properties_rent(); ?>
            <!-- </div>
    </div> -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-rent end  -->

<!-- properties-offer
============================================= -->
<!--        <section id="properties-carousel" class="properties-carousel pt-90 pb-90" style="background-color: #fdfff5; padding-bottom: 20px; padding-top: 40px;">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-xs-12 col-sm-12 col-md-12">-->
<!--                        <div class="heading heading-2 text-center mb-70">-->
<!--                            <h2 class="heading--title">Special Offers</h2>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    --><?php //$emscms->post_offered_properties(); ?>
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!-- #properties-offer end  -->


<!-- #agents end 
		
		<section id="properties-carousel" class="properties-carousel pt-90 pb-90" style="padding-top:0px !important;">
            <div class="container">
              .row end
                <div class="row">
                             .property item end
					<div class="col-xs-12 col-sm-12 col-md-6">
						 .property-item #5
						<div class="property-item h5">
							<h5>About Nigeria</h5>
							<div class="property--img">
								<a href="about-nigeria">
						<img src="assets/images/about/about-nig.jpg" alt="property image" class="img-responsive"></a>
							</div>
							<div class="property--content">
								<div class="property--info">
									<p class="property--location" style="font-size:14px;">Nigeria is the ideal location for your new home, weather you are a local, foreigner or an offshore investor. Nigeria is the ideal location for your new home, weather you are a local, foreigner or an offshore investor. Read more to find out why...</p>
									<h5 class="property--title"><a href="about-nigeria"><span style="font-size:14px; padding:5px 7px;">Read More</span></a></h5>
								</div>
								 .property-features end
							</div>
						</div>
					</div>
                             .property item end
					<div class="col-xs-12 col-sm-12 col-md-6">
						 .property-item #5
						<div class="property-item h5">
							<h5>List Your Property</h5>
							<div class="property--img">
								<a href="add-property">
						<img src="assets/images/properties/3.jpg" alt="property image" class="img-responsive"></a>
							</div>
							<div class="property--content">
								<div class="property--info">
									<p class="property--location" style="font-size:14px;">Have a property for sale or rent? List your property here to feature your property in our site and have our agents find you the right buyer/tenant in no time.</p>
									<h5 class="property--title"><a href="add-property"><span style="font-size:14px; padding:5px 7px;">Submit Property</span></a></h5>
								</div>
								 .property-features end
							</div>
						</div>
					</div>
                         .carousel end
                     .col-md-12
                </div>
                 .row
            </div>
             .container
        </section> -->
<?php
if($current_user!=""){
    $rrr = "hide";
}else{
    $rrr = '';
}
?>
<section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90 pb-50 <?php echo $rrr; ?>">
    <div style="background-color: rgba(0, 0, 0, 30%);"></div>
    <div class="bg-section"><img src="assets/images/slider/slide-bg/10.jpg" alt="Background"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-1 text-center">
                <h3 class="text-white text-center">Post a property for sale or for rent</h3>
                <!-- <p class="text-white">Join our professional team & agents to start selling your house</p> -->
                <!-- <a href="contact" class="btn btn--primary" data-toggle="modal" data-target="#signupModule">Add -->
                <!-- Property</a> -->
                <?php if($current_user!=""){ ?>
                <a href="<?php $emscms->base()?>add-property.php" class="btn btn--primary"><i class="fa fa-plus"></i>
                    add
                    property</a>
                <?php }else{?>
                <a class="btn btn--primary" data-toggle="modal" data-target="#signupModule"><i class="fa fa-plus"></i>
                    add
                    property</a>
                <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-2 text-center">
                <h3 class="text-white text-center">Signup if you don't have an account</h3>
                <!-- <p class="text-white">Join our professional team & agents to start selling your house</p> -->
                <a href="contact" class="btn btn--primary" data-toggle="modal" data-target="#signupModule"><i
                        class="fa fa-sign-in"></i> Sign Up</a>
            </div>
            <!-- .col-md-6 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #cta1 end -->


<?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>