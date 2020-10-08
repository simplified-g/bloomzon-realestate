<?php require("ems-incs/header.inc.php");?>

<?php 

		$img1 = $img2 = $img3 = $img4 = $img5 = $img6 = $img7 ="";
		$postid = isset($_GET['prop'])?(int)$_GET['prop']:0;
		//$emscms->test_here($postid,1);
	
		if($current_user!=""){
			$sql = "SELECT * FROM property_info WHERE prop_id='$postid' LIMIT 1";
			if(!$result = $emscms->connection->query($sql))
			{
				$emscms->dugoye($emscms->user_id,"Unable to Select Property ","Reason: ".$emscms->connection->error);		
				return $emscms->just_notify("Unable to Select Property",2);		
			}
			$id =0;$k=0;
			while($row = $result->fetch_assoc()){
				$id = $pid = (int)$row['id'];	
				$prop_id = (int)$row['prop_id'];	
				$user_id = (int)$row['user_id'];	
				$title = $emscms->printify($row['title'],1);
				//$emscms->test_here($title);
				$desc = $emscms->printify($row['description'],1);	
				$type = $emscms->printify($row['type'],1);	
				$status = $emscms->printify($row['status'],1);
				$bedrooms = $emscms->printify($row['bedrooms'],1);
				$bathrooms = $emscms->printify($row['bathrooms'],1);	
				$floors = $emscms->printify($row['floors'],1);	
				$garages = $emscms->printify($row['garages'],1);	
				$price = $emscms->printify($row['price'],1);	
				$size = (int)$row['size'];
				$featured = (int)$row['featured'];
				$video_url = $emscms->printify($row['video_url'],1);
				$features = $emscms->printify($row['features'],1);
				$address = $emscms->printify($row['address'],1);
				$city = $emscms->printify($row['city'],1);
				$state = $emscms->printify($row['state'],1);
				$postal = $emscms->printify($row['postal_code'],1);
				$img1 = $emscms->printify($row['img1'],1);
				$img2 = $emscms->printify($row['img2'],1);
				$img3 = $emscms->printify($row['img3'],1);
				$img4 = $emscms->printify($row['img4'],1);
				$img5 = $emscms->printify($row['img5'],1);
				$img6 = $emscms->printify($row['img6'],1);
				$img7 = $emscms->printify($row['img7'],1);
				$approval = $emscms->printify($row['approved'],1);
				$dateadded = $emscms->date_convert($row['date_added'],"d/m/Y");
				$agent_email = $emscms->printify($row['user_email'],1);
			}
								
			//$emscms->test_here($title,1);
			$reply = $emscms->show_server_msg();
			
			if(isset($_POST['prop_title'])){
				$emscms->update_property($current_user, $desc);
			}
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
                                    <h1>Edit Property</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">Edit Property</li>
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
                        <form action="" method="post" class="mb-0" enctype="multipart/form-data">
                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <h4 class="form--title">Property Details</h4>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
											<label for="property-title">Property Title*</label>
                                            <input type="text" class="form-control" name="prop_title" id="property-title" value="<?php echo $title; ?>" placeholder="Enter Property Title" required>
                                    
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="property-description">Property Description*</label>
                                            <textarea class="form-control" name="prop_description" id="property-description" value="<?php echo $description; ?>" rows="2" required></textarea>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="select-type">Type*</label>
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="select-type" name="prop_type" required>
													<option value="house">House</option>
													<option value="apartment">Apartment</option>
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
                                            <label for="select-status">Status</label>
                                            <div class="select--box">
                                                <i class="fa fa-angle-down"></i>
                                                <select id="select-status" name="prop_status" required>
													<option value="sale">Sale</option>
													<option value="rent">Rent</option>
												</select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Bedrooms">Bedrooms</label>
                                            <input type="text" class="form-control" name="bedrooms" id="Bedrooms" value="<?php echo $bedrooms; ?>" placeholder="How many bedrooms">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Bathrooms">Bathrooms</label>
                                            <input type="text" class="form-control" name="bathrooms" id="Bathrooms" value="<?php echo $bathrooms; ?>" placeholder="How many bathrooms">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Floors">Floors</label>
                                            <input type="text" class="form-control" name="floors" id="Floors" value="<?php echo $floors; ?>" placeholder="How many Storey">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Garages">Garage</label>
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
                                            <label for="Size">Size*</label>
                                            <input type="text" class="form-control" name="prop_size" id="Size" value="<?php echo $size; ?>" placeholder="plots or acres" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Sale-Rent-Price">Sale or Rent Price*</label>
                                            <input type="text" class="form-control" name="prop_price" id="Sale-Rent-Price" value="<?php echo $price; ?>" required placeholder="Enter the Property Cost">
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
                                            <label for="Video-URL">Video URL</label>
                                            <input type="text" class="form-control" name="video-URL" id="Video-URL" value="<?php echo $video_url; ?>" placeholder="Youtube Video of the Property">
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
                                        <h4 class="form--title">Property Features</h4>
										<p><strong>Note:</strong>You have to reselect the features of this property</p>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Center Cooling</span>
                                        <input type="checkbox" name="cooler" value="Center Cooling">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Balcony</span>
                                        <input type="checkbox" name="balcony" value="Balcony">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Pet Friendly</span>
                                        <input type="checkbox" name="pet" value="Pet Friendly">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>                                    
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Fire Alarm</span>
                                        <input type="checkbox" name="fire_alarm" value="Fire Alarm">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Storage</span>
                                        <input type="checkbox" name="storage" value="Storage">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Dryer</span>
                                        <input type="checkbox" name="dryer" value="Dryer">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Heating</span>
                                        <input type="checkbox" name="heating" value="Heating">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Pool</span>
                                        <input type="checkbox" name="pool" value="Pool">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Laundry</span>
                                        <input type="checkbox" name="laundry" value="Laundry">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Sauna</span>
                                        <input type="checkbox" name="sauna" value="Sauna">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Gym</span>
                                        <input type="checkbox" name="gym" value="Gym">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Elevator</span>
                                        <input type="checkbox" name="elevator" value="Elevator">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Dish Washer</span>
                                        <input type="checkbox" name="dish_washer" value="Dish Washer">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Emergency Exit</span>
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
										<p><strong>Note:</strong> You can change any of the pictures below or all of them at once</p>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-12">
                                        <div id="dZUpload" class="dropzone">
											<div><img src="assets/upload/<?php echo $prop_id."/".$img1; ?>" alt="<?php echo $img1; ?>" width="100" height="80"><p><a href="updateImage?id=<?php echo $prop_id; ?>&image=<?php echo $img1; ?>" target="_blank">Change image</a></p></div>
											<div><img src="assets/upload/<?php echo $prop_id."/".$img2; ?>" alt="<?php echo $img2; ?>" width="100" height="80"><p><a href="updateImage?id=<?php echo $prop_id; ?>&image=<?php echo $img2; ?>" target="_blank">Change image</a></p></div>
											<div><img src="assets/upload/<?php echo $prop_id."/".$img3; ?>" alt="<?php echo $img3; ?>" width="100" height="80"><p><a href="updateImage?id=<?php echo $prop_id; ?>&image=<?php echo $img3; ?>" target="_blank">Change image</a></p></div>
											<div><img src="assets/upload/<?php echo $prop_id."/".$img4; ?>" alt="<?php echo $img4; ?>" width="100" height="80"><p><a href="updateImage?id=<?php echo $prop_id; ?>&image=<?php echo $img4; ?>" target="_blank">Change image</a></p></div>
											<div><img src="assets/upload/<?php echo $prop_id."/".$img5; ?>" alt="<?php echo $img5; ?>" width="100" height="80"><p><a href="updateImage?id=<?php echo $prop_id; ?>&image=<?php echo $img5; ?>" target="_blank">Change image</a></p></div>
											<div><img src="assets/upload/<?php echo $prop_id."/".$img6; ?>" alt="<?php echo $img6; ?>" width="100" height="80"><p><a href="updateImage?id=<?php echo $prop_id; ?>&image=<?php echo $img6; ?>" target="_blank">Change image</a></p></div>
											<div><img src="assets/upload/<?php echo $prop_id."/".$img7; ?>" alt="<?php echo $img7; ?>" width="100" height="80"><p><a href="updateImage?id=<?php echo $prop_id; ?>&image=<?php echo $img7; ?>" target="_blank">Change image</a></p></div>
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
                                            <label for="address">Address*</label>
                                            <input type="text" class="form-control" name="address" id="address" value="<?php echo $address; ?>" placeholder="Enter your property address" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="city">City*</label>
                                            <input class="form-control" name="city" id="city" value="<?php echo $city; ?>" required placeholder="Enter the City">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="state">State*</label>
                                            <input type="text" class="form-control" name="state" value="<?php echo $state; ?>" id="state" required placeholder="Enter the State">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Zip/Postal-code">Zip/Postal Code</label>
                                            <input type="text" class="form-control" name="Postal_code" id="Zip/Postal-code" value="<?php echo $postal; ?>" placeholder="Enter the Zip/Postal Code">
                                        </div>
                                    </div>
                                </div>
                                <!-- .row end -->
                            </div>
						
                            <!-- .form-box end -->
							<input type='hidden' name='postid' value='<?php echo $prop_id;?>'>
							
							<input type='hidden' name='sbmtPost' value='1'>
                            <input type="submit" value="Update Property" name="updateProp" class="btn btn--primary">
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
</body>

</html>
