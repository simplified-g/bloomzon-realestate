<?php require("ems-incs/header.inc.php");?>

<?php
		$prop = isset($_GET['prop'])?(int)$_GET['prop']:"0";
		
	    $sql = "SELECT * FROM property_info WHERE prop_id = '$prop' LIMIT 1";
		if(!$result = $emscms->connection->query($sql))
		{
		$emscms->dugoye($emscms->user_id,"Unable to List Property ","Reason: ".$emscms->connection->error);		
		return $emscms->just_notify("Unable to List Property",2);		
		}
		$id =0;$k=0;
		while($row = $result->fetch_assoc()){
			$id = $pid = (int)$row['id'];	
			$prop_id = (int)$row['prop_id'];	
			$user_id = (int)$row['user_id'];	
			$title = $emscms->printify($row['title'],1);	
			$details = str_replace('\r\n', '<br>', $row['description']);
			$description = $emscms->printify($details,1);
			//$description = nl2br($details);
			$type = $emscms->printify($row['type'],1);	
			$status = $emscms->printify($row['status'],1);
			$bedrooms = $emscms->printify($row['bedrooms'],1);
			$bathrooms = $emscms->printify($row['bathrooms'],1);	
			$floors = $emscms->printify($row['floors'],1);	
			$garages = $emscms->printify($row['garages'],1);	
			$price = $emscms->printify($row['price'],1);
			$period = $emscms->printify($row['period'],1);
			$size = (int)$row['size'];
			$featured = (int)$row['featured'];
			$video_url = $emscms->printify($row['video_url'],1);
			$features = $emscms->printify($row['features'],1);
			$address = $emscms->printify($row['address'],1);
			$city = $emscms->printify($row['region'],1);
			$state = $emscms->printify($row['state'],1);
			$postal = $emscms->printify($row['postal_code'],1);
			$img1 = $emscms->printify($row['img1'],1);
			$img2 = $emscms->printify($row['img2'],1);
			$img3 = $emscms->printify($row['img3'],1);
			$img4 = $emscms->printify($row['img4'],1);
			$img5 = $emscms->printify($row['img5'],1);
			$img6 = $emscms->printify($row['img6'],1);
			$img7 = $emscms->printify($row['img7'],1);
			$img8 = @$emscms->printify($row['img8'],1);
			$img9 = @$emscms->printify($row['img9'],1);
			$img10 = @$emscms->printify($row['img10'],1);
			$img11 = @$emscms->printify($row['img11'],1);
			$img12 = @$emscms->printify($row['img12'],1);
			$img13 = @$emscms->printify($row['img13'],1);
			$img14 = @$emscms->printify($row['img14'],1);
			$img15 = @$emscms->printify($row['img15'],1);
			$approval = $emscms->printify($row['approved'],1);
			$dateadded = $emscms->date_convert($row['date_added'],"d/m/Y");
			
			$agent_email = $emscms->printify($row['user_email'],1);
		}
		
		if($user_id > 0){
			$sql = "SELECT * FROM agents WHERE email = '$agent_email' LIMIT 1";
			if(!$result = $emscms->connection->query($sql))
			{
			$emscms->dugoye($emscms->user_id,"Unable to List Property ","Reason: ".$emscms->connection->error);		
			return $emscms->just_notify("Unable to List Property",2);		
			}
			$id =0;$k=0; $website="";
			while($row = $result->fetch_assoc()){
				$name = $emscms->printify($row['name'],1);	
				$phone = $emscms->printify($row['phone'],1);
				$email = $emscms->printify($row['email'],1);
				//$agent_email = $emscms->printify($row['user_email'],1);
			}
		}else{
			$sql = "SELECT * FROM guest_agents WHERE email = '$agent_email' LIMIT 1";
			if(!$result = $emscms->connection->query($sql))
			{
			$emscms->dugoye($emscms->user_id,"Unable to List Property ","Reason: ".$emscms->connection->error);		
			return $emscms->just_notify("Unable to List Property",2);		
			}
			$id =0;$k=0; $website="";
			while($row = $result->fetch_assoc()){
				$name = $emscms->printify($row['name'],1);	
				$phone = $emscms->printify($row['phone'],1);
				$email = $emscms->printify($row['email'],1);
				$website = $emscms->printify($row['website'],1);	
				//$agent_email = $emscms->printify($row['user_email'],1);
			}
		}
		
		$issue_type = $status=="Rent"?"<span class='time' style='font-size:18px;'>/{$period}</span>":"";
		
		
?>
       <style>
           /* no-gutters Class Rules */
            .row.no-gutters {
               margin-right: 5px;
               margin-left: 5px;
            }
            .row.no-gutters > [class^="col-"],
            .row.no-gutters > [class*=" col-"] {
               padding-right: 5px;
               padding-left: 5px;
            }
       </style>
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
                                    <h1><?php echo $title; ?></h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">Property Details</li>
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

        <!-- property single gallery
============================================= -->
        <section id="property-single-gallery" class="property-single-gallery">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="property-single-gallery-info">
                            <div class="property--info clearfix">
                                <div class="col-sm-6 col-md-8">
                                    <h5 class="property--title"><?php echo $title; ?></h5>
                                    <p class="property--location"><i class="fa fa-map-marker"></i><?php echo $address.', '.$city.', '.$state.' - '.$postal; ?></p>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <span class="property--status">For <?php echo $status; ?></span>
                                    <p class="property--price">₦<?php echo number_format($price); ?><?php echo $issue_type; ?></p>
                                </div>
                            </div>
                            <!-- .property-info end -->
                            <div class="property--meta clearfix">
                                <div class="pull-left">
                                    <ul class="list-unstyled list-inline mb-0">
                                        <li>
                                            Property ID: <span class="value"><?php echo $prop_id; ?></span>
                                        </li>
                                        <input type="hidden" id="propID" value="<?php echo $prop_id; ?>" />
                                        <input type="hidden" id="usrID" value="<?php echo $current_user; ?>" />
                                        <?php
                                            if($current_user!=""){
                                                $sql= $conn->query("SELECT * FROM favourites WHERE Userid='$current_user' AND PropID='$prop_id'");
                                                if($sql->num_rows < 1){
                                                    $butt = '<span class="value"> <i class="fa fa-heart-o"></i></span>';
                                                }else{                                                    
                                                    $butt = '<span class="value"> <i class="fa fa-heart"></i></span>';
                                                }
                                            }
                                            else {
                                                
                                                    $mycookievalue = $_COOKIE[$prop_id];
                                                    $butt = '<span class="value"> <i class="fa fa-heart-o"></i></span>';
                                              
                                            }
                                            
                                        ?>
                                        <a class="favourite" style="cursor: pointer;">Add to favorites: <?php echo $butt; ?></a>
                                    </ul>
                                </div>
                                <div class="pull-right">
                                    <div class="property--meta-share">
                                        <span class="share--title">share</span>
                                        <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                                        <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                                    </div>-->
                                        <!--<div class="fb-share-button" 
                                        data-href="https://www.gohome.ng/property-details?prop=<?php echo $prop_id; ?>" 
                                        data-layout="button_count">
                                      </div>
                                    </div>-->
                                    
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <div class="addthis_inline_share_toolbox"></div>
                                    
                                    <!--<div class="fb-share-button" 
                                    data-href="https://www.gohome.ng<?php echo $_SERVER['PHP_SELF']; ?>" 
                                    data-layout="button_count">
                                    </div>-->
            
                                    <!-- .property-meta-share end -->
                                </div>
                            </div>
                            <!-- .property-info end -->
                        </div>
                    </div>
                </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="property-single-carousel inner-box1">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Gallery</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <?php 
                                    
                                if($img1=='' || $img1==$prop_id.'-'){
                                        $dis1 = "style='display: none;'";
                                }
                                if($img2=='' || $img2==$prop_id.'-'){
                                        $dis2 = "style='display: none;'";                                     
                                    }
                                if($img3=='' || $img3==$prop_id.'-'){
                                        $dis3 = "style='display: none;'";                                     
                                    }
                                if($img4=='' || $img4==$prop_id.'-'){
                                        $dis4 = "style='display: none;'";                                   
                                    }
                                if($img5=='' || $img5==$prop_id.'-'){
                                        $dis5 = "style='display: none;'";                                   
                                    }
                                if($img6=='' || $img6==$prop_id.'-'){
                                        $dis6 = "style='display: none;'";                                    
                                    }
                                if($img7=='' || $img7==$prop_id.'-'){
                                        $dis7 = "style='display: none;'";                                      
                                    }
                                if($img8=='' || $img8==$prop_id.'-'){
                                        $dis8 = "style='display: none;'";                                    
                                    }
                                if($img9=='' || $img9==$prop_id.'-'){
                                        $dis9 = "style='display: none;'";                                 
                                    }
                                if($img10=='' || $img10==$prop_id.'-'){
                                        $dis10 = "style='display: none;'";                                     
                                    }
                                if($img11=='' || $img11==$prop_id.'-'){
                                        $dis11 = "style='display: none;'";                                    
                                    }
                                if($img12=='' || $img12==$prop_id.'-'){
                                        $dis12 = "style='display: none;'";                                     
                                    }
                                if($img13=='' || $img13==$prop_id.'-'){
                                        $dis13 = "style='display: none;'";                                  
                                    }
                                if($img14=='' || $img14==$prop_id.'-'){
                                        $dis14 = "style='display: none;'";
                                    }
                                if($img15=='' || $img15==$prop_id.'-'){
                                        $dis15 = "style='display: none;'";                                 
                                    }                               
                                ?>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property-single-carousel-content">
                                        <div class="carousel carousel-thumbs slider-navs" data-slide="1" data-slide-res="1" data-autoplay="true" data-thumbs="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="800" data-slider-id="1">
                                            <?php
                                                if($img1!='' && $img1!=$prop_id.'-') {
                                            ?>
                                                <div>
                                                    <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img1; ?>" alt="Property Image" width="690" height="600">
                                                    <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                        <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                    </div>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img2!='' && $img2!=$prop_id.'-') {
                                            ?>
                                                <div>
                                                    <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img2; ?>" alt="Property Image" width="690" height="600">
                                                    <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                        <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                    </div>
                                                </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img3!='' && $img3!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img3; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img4!='' && $img4!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img4; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img5!='' && $img5!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img5; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img6!='' && $img6!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img6; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img7!='' && $img7!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img7; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img8!='' && $img8!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img8; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img9!='' && $img9!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @@$img9; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img10!='' && $img10!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img10; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img11!='' && $img11!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img11; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img12!='' && $img12!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img12; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img13!='' && $img13!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img13; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img14!='' && $img14!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img14; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                            
                                            <?php
                                                if($img15!='' && $img15!=$prop_id.'-') {
                                            ?>
                                            <div>
                                                <img src="assets/upload/<?php echo @$prop_id; ?>/<?php echo @$img15; ?>" alt="Property Image" width="690" height="600">
                                                <div style='position:relative; left: -20px; top: -20px; float:right; margin-top: -20px;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                        </div>
                                        <!-- .carousel end -->
                                        <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                                            <button class="owl-thumb-item" <?php echo @$dis1; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img1; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis2; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img2; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
										   </button>
											<button class="owl-thumb-item" <?php echo @$dis3; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img3; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis4; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img4; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis5; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img5; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis6; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img6; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis7; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img7; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis8; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img8; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis9; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img9; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis10; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img10; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis11; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img11; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis12; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img12; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis13; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img13; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
											<button class="owl-thumb-item" <?php echo @$dis14; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img14; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
                                            <button class="owl-thumb-item" <?php echo @$dis15; ?> >
												<img src="assets/upload/<?php echo $prop_id; ?>/<?php echo $img15; ?>" alt="Property Image thumb" width="88" height="85">
                                                <div style='position:relative; left: -20px; top: -20px; float:right;'>
                                                    <img src='assets/images/logo/logo-light.png' width='50' height: 10px;>
                                                </div>
											</button>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                </div>
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-desc end -->
                        <div class="property-single-desc inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Description</h2>
                                    </div>
                                </div>
                                <!-- feature-panel #1 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/1.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Area:</h5>
                                            <p><?php echo $size; ?> sqm</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #2 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/2.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Beds:</h5>
                                            <p><?php echo $bedrooms; ?> Bedrooms</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #3 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/3.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Baths:</h5>
                                            <p><?php echo $bathrooms; ?> Bathrooms</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #5 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/5.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Floors:</h5>
                                            <p><?php echo $floors; ?> Floor(s)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <!-- feature-panel #6 -->
                                <div class="col-xs-6 col-sm-4 col-md-4">
                                    <div class="feature-panel">
                                        <div class="feature--img">
                                            <img src="assets/images/property-single/features/6.png" alt="icon">
                                        </div>
                                        <div class="feature--content">
                                            <h5>Garage:</h5>
                                            <p><?php echo ucfirst($garages); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- feature-panel end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="property--details">
                                        <?php echo $description; ?>
                                    </div>
                                    <!-- .property-details end -->
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-desc end -->

                        
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <!-- widget property agent
=============================-->
                        <div class="widget widget-property-agent">
                            <div class="widget--title">
                                <h5>Agent Contacts:</h5>
                            </div>
                            <div class="widget--content">
                                <a href="#">
                                    <!--<div class="agent--img">
                                        <img src="assets/images/agents/grid/7.jpg" alt="agent" class="img-responsive">
                                    </div>-->                                    
                                    <div class="agent--info">
                                        <a href="agent_profile?agent_id=<?php echo $user_id; ?>"><h5 class="agent--title"><?php echo $name; ?></h5></a>
                                    </div>
                                </a>
                                <!-- .agent-profile-details end -->
                                <div class="agent--contact">
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-phone"></i><?php echo $phone; ?></li>
                                        <li><i class="fa fa-envelope-o"></i><?php echo $email; ?></li>
                                        <li><i class="fa fa-link"></i><?php echo $website; ?></li>
                                    </ul>
                                </div>
                                <!-- .agent-contact end
                                <div class="agent--social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                </div> agent-social-links -->
                            </div>
                        </div>
                        <!-- . widget property agent end -->

                        <!-- widget request
=============================-->
                        <div class="widget widget-request">
                            <div class="widget--title">
                                <h5>Request a Showing</h5>
                            </div>
                            <div class="widget--content">
                                <form class="mb-0">
                                    <div class="form-group">
                                        <label for="contact-name">Your Name*</label>
                                        <input type="text" class="form-control" name="contact-name" id="contact-name" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-email">Email Address*</label>
                                        <input type="email" class="form-control" name="contact-email" id="contact-email" required>
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="contact-phone">Phone Number</label>
                                        <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="(optional)">
                                    </div>
                                    <!-- .form-group end -->
                                    <div class="form-group">
                                        <label for="message">Message*</label>
                                        <textarea class="form-control" name="contact-message" id="message" rows="2" placeholder="(optional)"></textarea>
                                    </div>
                                    <!-- .form-group end -->
                                    <input type="submit" value="Send Request" name="submit" class="btn btn--primary btn--block">
                                </form>
                            </div>
                        </div>
                        <!-- . widget request end -->
                    </div>
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="property-single-features inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Features</h2>
                                    </div>
                                </div>
                                <!-- feature-item #12 -->
								<?php 
									$features = explode(",", $features); 
									foreach($features as $feature){
									if($feature === ""){
										continue;
									}
								?>
									<div class="col-xs-6 col-sm-4 col-md-4">
										<div class="feature-item">
											<p><?php echo $feature; ?></p>
										</div>
									</div>
								<?php } ?>
                                <!-- feature-item end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-features end -->

                        <div class="property-single-location inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Location</h2>
                                    </div>
                                </div>
                                <!-- .col-md-12 end -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <ul class="list-unstyled mb-20">
                                        <li><span>Address:</span><?php echo $address; ?></li>
                                        <li><span>City:</span><?php echo ucfirst($city); ?></li>
                                        <li><span>State:</span><?php echo ucfirst($state); ?></li>
                                        <li><span>Country:</span>Nigeria</li>
                                        <li><span>Zip/Postal code:</span><?php echo $postal; ?></li>
                                    </ul>
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                        </div>
                        <div class="property-single-location inner-box">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="heading">
                                        <h2 class="heading--title">Nearby Places</h2>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input type="hidden" id="fullAdd" value="<?php echo $address.' '.$city.' '.$state.' '.'Nigeria'; ?>" />
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="mapouter">
                                        <div class="gmap_canvas">
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item active" style="width: auto !important; font-size: 12px !important; border-radius: 5px !important; color: #ffffff !important;">
                                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="assets/images/property.png" width="110px" height="auto" class="img img-fluid" />
                                                    <p style="font-size: 16px; text-weight: bold;" class="text-center text-black">Property<br>Location</p></a>
                                                    
                                                </li>
                                                <li class="nav-item" style="width: auto !important; font-size: 12px !important; border-radius: 5px !important; color: #ffffff !important;">
                                                    <a class="nav-link" id="pills-school-tab" data-toggle="pill" href="#pills-school" role="tab" aria-controls="pills-school" aria-selected="false"><img src="assets/images/school.png" width="110px" height="auto" class="img img-fluid" />
                                                    <p style="font-size: 16px; text-weight: bold;" class="text-center text-black">Schools</p></a>
                                                </li>
                                                <li class="nav-item" style="width: auto !important; font-size: 12px !important; border-radius: 5px !important; color: #ffffff !important;">
                                                    <a class="nav-link" id="pills-moore-tab" data-toggle="pill" href="#pills-moore" role="tab" aria-controls="pills-moore" aria-selected="false"><img src="assets/images/mall.png" width="110px" height="auto" class="img img-fluid" />
                                                    <p style="font-size: 16px; text-weight: bold;" class="text-center text-black">Malls</p></a>
                                                </li>
                                                <li class="nav-item" style="width: auto !important; font-size: 12px !important; border-radius: 5px !important; color: #ffffff !important;">
                                                    <a class="nav-link" id="pills-gym-tab" data-toggle="pill" href="#pills-gym" role="tab" aria-controls="pills-gym" aria-selected="false"><img src="assets/images/gym.png" width="110px" height="auto" class="img img-fluid" />
                                                    <p style="font-size: 16px; text-weight: bold;" class="text-center text-black">Gym</p></a>
                                                </li>
                                                <li class="nav-item" style="width: auto !important; font-size: 12px !important; border-radius: 5px !important; color: #ffffff !important;">
                                                    <a class="nav-link" id="pills-restaurant-tab" data-toggle="pill" href="#pills-restaurant" role="tab" aria-controls="pills-restaurant" aria-selected="false"><img src="assets/images/eatery.png" width="auto" height="110px" class="img img-fluid" />
                                                    <p style="font-size: 16px; text-weight: bold;" class="text-center text-black">Restaurants</p></a>
                                                </li>
                                                <li class="nav-item" style="width: auto !important; font-size: 12px !important; border-radius: 5px !important; color: #ffffff !important;">
                                                    <a class="nav-link" id="pills-hospital-tab" data-toggle="pill" href="#pills-hospital" role="tab" aria-controls="pills-hospital" aria-selected="false"><img src="assets/images/hospital.png" width="auto" height="110px" class="img img-fluid" />
                                                    <p style="font-size: 16px; text-weight: bold;" class="text-center text-black">Hospitals</p></a>
                                                </li>
                                                <li class="nav-item" style="width: auto !important; font-size: 12px !important; border-radius: 5px !important; color: #ffffff !important;">
                                                    <a class="nav-link" id="pills-hotels-tab" data-toggle="pill" href="#pills-hotels" role="tab" aria-controls="pills-hotels" aria-selected="false"><img src="assets/images/hotel.png" width="110px" height="auto" class="img img-fluid" />
                                                    <p style="font-size: 16px; text-weight: bold;" class="text-center text-black">Hotels</p></a>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <?php $locater = $address.', '.$city.', '.$state.', Nigeria'; ?>
                                                <div class="tab-pane active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                    <iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?q=30schools+in+<?php echo $locater; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                                <div class="tab-pane fade" id="pills-school" role="tabpanel" aria-labelledby="pills-school-tab">
                                                    <iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?q=schools%20in%20<?php echo $locater; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                                <div class="tab-pane fade" id="pills-moore" role="tabpanel" aria-labelledby="pills-moore-tab">
                                                    <iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?q=malls%20in%2032%20<?php echo $locater; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                                <div class="tab-pane fade" id="pills-gym" role="tabpanel" aria-labelledby="pills-gym-tab">
                                                    <iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?q=gyms%20in%2032%20<?php echo $locater; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                                <div class="tab-pane fade" id="pills-restaurant" role="tabpanel" aria-labelledby="pills-restaurant-tab">
                                                    <iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?q=eatery%20in%2032%20<?php echo $locater; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                                <div class="tab-pane fade" id="pills-hospital" role="tabpanel" aria-labelledby="pills-hospital-tab">
                                                    <iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?q=hospital%20in%2032%20<?php echo $locater; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                                <div class="tab-pane fade" id="pills-hotels" role="tabpanel" aria-labelledby="pills-hotels-tab">
                                                    <iframe width="100%" height="550px" id="gmap_canvas" src="https://maps.google.com/maps?q=hotels%20in%2032%20<?php echo $locater; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                                </div>
                                            </div>            
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <!-- .col-md-12 end -->
                            </div>
                            <!-- .row end -->
                        </div>
                        <!-- .property-single-location end -->

                    </div>
                    <!-- .col-md-8 -->
                    
                </div>
                <!-- .row -->
                </div>
            <!-- .container -->
        </section>
        <!-- #property-single end -->
        
        <!-- properties-carousel
============================================= -->
<?php 
if($current_user!=""){ 
    $tit = '';
    $ttt = 'style="background-color: #fdfff5; padding-top: 20px !important;"';
    $tti = 'style="padding-top: 20px !important;"';
}else{
    $tit = 'hide';
    $ttt = '';
    $tti = 'style="background-color: #fdfff5; padding-top: 20px !important;"';
}
?>
        <section id="properties-carousel" <?php echo $ttt; ?>  class="properties-carousel <?php echo $tit; ?>" >
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2  mb-20">
                            <h2 class="heading--title">Favourite Properties</h2>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="false" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <?php
                                $sql4= $conn->query("SELECT * FROM favourites WHERE Userid ='$current_user'");
                                while($row4 = mysqli_fetch_array($sql4)){
                                    $prop_id =  $row4['PropID'];
                                    $emscms->post_fav_properties($prop_id);
                                }

                            ?>
                        </div>
                        <!-- .carousel end -->
                    </div>
                    <!-- .col-md-12 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-carousel  end  -->


        <!-- properties-carousel
============================================= -->
        <section id="properties-carousel" class="properties-carousel" <?php echo $tti; ?> >
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2  mb-20">
                            <h2 class="heading--title">Similar Properties</h2>
                        </div>
                        <!-- .heading-title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                            <?php $emscms->post_similar_properties($type, $prop_id); ?>
                        </div>
                        <!-- .carousel end -->
                    </div>
                    <!-- .col-md-12 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- #properties-carousel  end  -->

       <?php require("ems-incs/footer.inc.php"); ?>
    
    <script>
        $(document).ready(function() {
            $('.favourite').on('click', null, function() {
                var fav = {
                    usrID : $('#usrID').val(),
                    propID : $('#propID').val()
                }
                //alert(fav.usrID + ' ' + fav.propID);
                //return;
                $.ajax({
                    url: 'add.php',
                    method: 'POST',
                    data: fav,
                    cache: false,
                    success: function(informer){
                        alert(informer);
                    },
                    dataType: 'text'
                });
                
            });
        });
    </script>

    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.js"></script>
    <script>
        $('#googleMap').gMap();

    </script>
    <script src="assets/js/map-custom.js"></script>
</body>

</html>
