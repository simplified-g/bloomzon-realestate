<?php require("ems-incs/header.inc.php");?>
<!-- map
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
    <div class="bg-section">
        <img src="assets/images/slider/slide-bg/3.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                <div class="title title-1 text-center">
                    <div class="title--content">
                        <div class="title--heading">
                            <h1>Properties List</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php $emscms->base()?>">Home</a></li>
                            <li class="active">Properties</li>
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

<!-- properties-list
============================================= -->
<section id="properties-list" class="pb-50">
    <div class="container-fluid" style="padding-right: 80px; padding-left: 80px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <!-- widget property type
=============================-->
                <div class="widget widget-property">
                    <div class="widget--title">
                        <h5>Property Type</h5>
                    </div>
                    <div class="widget--content">
                        <ul class="list-unstyled mb-0">
                            <?php $emscms->count_properties_by_type(); ?>
                        </ul>
                    </div>
                </div>
                <!-- . widget property type end -->

                <!-- widget property status
============================= -->
                <div class="widget widget-property">
                    <div class="widget--title">
                        <h5>Filter Property Type<span>
                                <?php 
                                if(isset($_GET['type'])){ 
                                    echo ' - '.$_GET['type'];
                                    }; 
                                ?></span></h5>
                    </div>
                    <form action="properties-list.php" method="GET" class="mb-0">
                        <div class="widget--content">
                            <ul class="list-unstyled mb-0">
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
                                <div class="form-group">
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="select-lga" id="select-lga">
                                            <option value="">Any Region</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" name="type" id="select-type" value="<?php 
                                if(isset($_GET['type'])){ 
                                    echo $_GET['type'];
                                    }; 
                                ?>" />
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
                                <button type="submit" class="btn btn--primary">Apply Filter</button>
                            </ul>
                        </div>
                    </form>
                </div>
                <!-- . widget property status end -->


                <!-- widget property city
=============================
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property By State</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <?php $emscms->count_properties_by_status(); ?>
									<?php $emscms->count_properties_by_city(); ?>
                                </ul>
                            </div>
                        </div>  widget property city end -->
            </div>
            <!-- .col-md-4 end -->
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="properties-filter clearfix">
                            <!--<div class="select--box pull-left">
                                        <label>Sort by:</label>
                                        <i class="fa fa-angle-up"></i>
                                        <i class="fa fa-angle-down"></i>
                                        <select>
								<option selected="" value="Default">Default Sorting</option>
								<option value="Larger">Newest Items</option>
								<option value="Larger">oldest Items</option>
								<option value="Small">Highest Price</option>
								<option value="Medium">Lowest Price</option>
							</select>
                                    </div>-->
                            <!-- .select-box 
                                    <div class="view--type pull-right">
                                        <a id="switch-list" href="#" class="active"><i class="fa fa-th-list"></i></a>
                                        <a id="switch-grid" href="#" class=""><i class="fa fa-th-large"></i></a>
                                    </div>-->
                        </div>
                    </div>
                    <div class="properties row">
                        <?php
                                    if(isset($_GET['select-state']) && isset($_GET['select-lga']) && isset($_GET['type']) && isset($_GET['select-status']) && isset($_GET['select-beds']) && isset($_GET['select-baths']) && isset($_GET['min']) && isset($_GET['max'])){
                                        $emscms->post_properties_search();
                                    }else{
                                        if(isset($_GET['type'])){
                                            $selecttype = $emscms->wordify($_GET['type'],1);
                                            $emscms->post_properties($selecttype);
                                        }else{
                                            $emscms->post_properties_all();
                                        }
                                        
                                    }									
								?>
                    </div>

                    <!--<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                                <ul class="pagination">
									<li>
										<a href="#" aria-label="Next">
										<span aria-hidden="true"><i class="fa fa-angle-double-left"></i> Prev</span>
										</a>
									</li>
									<li>
										<a href="#" aria-label="Next">
										<span aria-hidden="true">Next <i class="fa fa-angle-double-right"></i></span>
										</a>
									</li>
                                </ul>
                            </div>-->
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row -->
            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-list  end  -->

<?php require("ems-incs/footer.inc.php"); ?>
<script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
<script src="assets/js/plugins/jquery.gmap.min.js"></script>
<script src="assets/js/map-addresses.js"></script>
<script src="assets/js/map-custom.js"></script>
</body>

</html>