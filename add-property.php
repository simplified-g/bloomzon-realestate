<?php
ob_start();
ob_flush();

require("ems-incs/header.inc.php");
?>

<?php 
	if($current_user!=""){
		$user_id = $emscms->get_this_data("id","agents","email",$current_user);
		$user_email = $emscms->get_this_data("email","agents","email",$current_user);
	}else{
		$user_id = 0;
		$user_email="";
	}
?>

<?php
	if(isset($_POST['prop_title'])){
		$emscms->insert_property($user_id, $user_email);
}
    $reply = $emscms->show_server_msg();
    
    if (!empty($reply)) {
        $_SESSION['message'] = 'Your property has been uploaded and will be approved in the next few minutes by a gohome admin.';

        header('Location: proadded.php');
        exit;
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
                            <h1>Add Property</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php $emscms->base()?>">Home</a></li>
                            <li class="active">Add Property</li>
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

<!-- #Add Property
============================================= -->
<section id="add-property" class="add-property">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4><?php echo $reply; ?></h4>
                <form action="add-property.php" method="post" class="mb-0" enctype="multipart/form-data">
                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Property Description</h4>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="property-title" class="text-white">Property Title*</label>
                                    <input type="text" class="form-control" name="prop_title" id="property-title"
                                        placeholder="Enter Property Title" required>

                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="property-description" class="text-white">Property Description*</label>
                                    <textarea class="form-control" name="prop_description" id="property-description"
                                        rows="2" required></textarea>
                                </div>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-type" class="text-white">Type*</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-type" name="prop_type" required>
                                            <option value="house">House</option>
                                            <option value="office">Office</option>
                                            <option value="store">Store</option>
                                            <option value="land">Land</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="select-status" class="text-white">Status</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-status" name="prop_status" onchange="myFunction()" required>
                                            <option value="rent">Rent</option>
                                            <option value="sale">Sale</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Bedrooms" class="text-white">Bedrooms</label>
                                    <input type="text" class="form-control" name="bedrooms" id="Bedrooms"
                                        placeholder="How many bedrooms">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Bathrooms" class="text-white">Bathrooms</label>
                                    <input type="text" class="form-control" name="bathrooms" id="Bathrooms"
                                        placeholder="How many bathrooms">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Floors" class="text-white">Floors</label>
                                    <input type="text" class="form-control" name="floors" id="Floors"
                                        placeholder="How many Storey">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Garages" class="text-white">Garage</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-status" name="garage">
                                            <option value="no">No</option>
                                            <option value="yes">Yes</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Size" class="text-white">Size*</label>
                                    <input type="text" class="form-control" name="prop_size" id="Size"
                                        placeholder="plots or acres" required>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Sale-Rent-Price" class="text-white">Sale or Rent Price*</label>
                                    <input type="text" class="form-control" name="prop_price" id="Sale-Rent-Price"
                                        required placeholder="Enter the Property Cost">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4" id="perioddiv">
                                <div class="form-group">
                                    <label for="Period" class="text-white">Period</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-period" name="period">
                                            <option value="daily">Per Day</option>
                                            <option value="monthly">Per Month</option>
                                            <option value="yearly">Per Year</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <!--<div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Property-ID">Property ID*</label>
                                            <input type="text" class="form-control" name="Property-ID" id="Property-ID">
                                        </div>
                                    </div>-->
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Video-URL" class="text-white">Video URL</label>
                                    <input type="text" class="form-control" name="video-URL" id="Video-URL"
                                        placeholder="Youtube Video of the Property">
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->
                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title" class="text-white">Property Features</h4>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Center Cooling</span>
                                        <input type="checkbox" name="cooler" value="Center Cooling">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Balcony</span>
                                        <input type="checkbox" name="balcony" value="Balcony">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Pet Friendly</span>
                                        <input type="checkbox" name="pet" value="Pet Friendly">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Fire Alarm</span>
                                        <input type="checkbox" name="fire_alarm" value="Fire Alarm">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Storage</span>
                                        <input type="checkbox" name="storage" value="Storage">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Dryer</span>
                                        <input type="checkbox" name="dryer" value="Dryer">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Heating</span>
                                        <input type="checkbox" name="heating" value="Heating">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Pool</span>
                                        <input type="checkbox" name="pool" value="Pool">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Laundry</span>
                                        <input type="checkbox" name="laundry" value="Laundry">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Sauna</span>
                                        <input type="checkbox" name="sauna" value="Sauna">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Gym</span>
                                        <input type="checkbox" name="gym" value="Gym">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Elevator</span>
                                        <input type="checkbox" name="elevator" value="Elevator">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Dish Washer</span>
                                        <input type="checkbox" name="dish_washer" value="Dish Washer">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="input-checkbox">
                                    <label class="label-checkbox">
                                        <span class="text-white">Emergency Exit</span>
                                        <input type="checkbox" name="emergency_exit" value="Emergency">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->

                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Property Gallery</h4>
                                <p class="text-white"><strong>Note:</strong> Each image should not exceed 2 MB in size
                                </p>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-4 col-md-12">
                                <div id="dZUpload" class="dropzone">
                                    <input type="file" accept="image/*" name="image1" onchange="loadFile(event)"
                                        required>
                                    <input type="file" accept="image/*" name="image2" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image3" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image4" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image5" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image6" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image7" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image8" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image9" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image10" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image11" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image12" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image13" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image14" onchange="loadFile(event)">
                                    <input type="file" accept="image/*" name="image15" onchange="loadFile(event)">
                                </div>
                            </div>
                            <!-- .col-md-12 end -->

                        </div>
                        <!-- .row end -->
                    </div>
                    <!-- .form-box end -->

                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title">Property Location</h4>
                            </div>
                            <!-- .col-md-12 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="address" class="text-white">Address*</label>
                                    <input type="text" class="form-control" name="address" id="address"
                                        placeholder="Enter your property address" required>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="states" class="text-white">State</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select id="select-location" name="state"
                                            onchange="populate(this.id,'select-lga')">
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
                                            <option value="lagos">Lagos State</option>
                                            <option value="nasarawa">Nasarawa State</option>
                                            <option value="niger">Niger State</option>
                                            <option value="ogun">Ogun State</option>
                                            <option value="ondo">Ondo State</option>
                                            <option value="osun">Osun State</option>
                                            <option value="oyo">Oyo State</option>
                                            <option value="plateau">Plateau State</option>
                                            <option value="rivers">Rivers State</option>
                                            <option value="sokoto">Sokoto State</option>
                                            <option value="taraba">Taraba State</option>
                                            <option value="yobe">Yobe State</option>
                                            <option value="zamfara">Zamfara State</option>
                                            <option value="abuja">Abuja (FCT)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="lga" class="text-white">LGA*</label>
                                    <div class="select--box">
                                        <i class="fa fa-angle-down"></i>
                                        <select name="region" id="select-lga">
                                            <option value="">Any Region</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-4 end -->
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Zip/Postal-code" class="text-white">Zip/Postal Code</label>
                                    <input type="text" class="form-control" name="Postal_code" id="Zip/Postal-code"
                                        placeholder="Enter the Zip/Postal Code">
                                </div>
                            </div>
                        </div>
                        <!-- .row end -->
                    </div>

                    <!-- The Agent's Details -->
                    <?php if($current_user ==""){ ?>
                    <div class="form-box">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <h4 class="form--title" class="text-white">Agent's Information</h4>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="name" class="text-white">Name*</label>
                                    <input type="text" class="form-control" name="name" id="address"
                                        placeholder="Enter your Name" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="city" class="text-white">Phone*</label>
                                    <input class="form-control" name="phone" id="city"
                                        placeholder="Enter your Phone number" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="state" class="text-white">Email</label>
                                    <input type="email" class="form-control" name="email" id="state"
                                        placeholder="Enter your Email address">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label for="Zip/Postal-code" class="text-white">Website</label>
                                    <input type="text" class="form-control" name="website" id="Zip/Postal-code"
                                        placeholder="Enter your Website URL">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- .form-box end -->
                    <input type='hidden' name='sbmtPost' value='1'>
                    <input type="submit" value="Add Property" name="submit" class="btn btn--primary">
                </form>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
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
<script>
function myFunction() {
    var x = document.getElementById("perioddiv");
    var y = document.getElementById("select-status");
    if (y.value === "sale") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
</script>
</body>

</html>