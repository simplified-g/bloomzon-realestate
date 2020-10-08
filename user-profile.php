<?php require("ems-incs/header.inc.php");?>

<?php
	if($current_user!=""){
		$name = $emscms->get_this_data("name", "agents", "email", $current_user);
		$phone = $emscms->get_this_data("phone", "agents", "email", $current_user);
		$email = $emscms->get_this_data("email", "agents", "email", $current_user);
		$avatar = $emscms->get_this_data("avatar", "agents", "email", $current_user);
		$website = $emscms->get_this_data("website", "agents", "email", $current_user);
	}
?>
<?php
	if(isset($_POST['updateUser'])){
		$newName = isset($_POST['fullname'])?$emscms->wordify($_POST['fullname']):$name;
		$newEmail = isset($_POST['email'])?$emscms->wordify($_POST['email']):$email;
		$newPhone = isset($_POST['phone'])?$emscms->wordify($_POST['phone']):$phone;
		$newWebsite = isset($_POST['website'])?$emscms->wordify($_POST['website']):$website;
        
		//$emscms->test_here($file_name,1);
		$email = strtolower($email); 
		//$emscms->test_here($email,1);
        
        $sql = "UPDATE agents SET name=:name, email=:email, phone=:phone, website=:website WHERE email=:email";
            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(':name', $newName, PDO::PARAM_STR);       
                $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);    
                $stmt->bindParam(':phone', $_POST['phone'], PDO::PARAM_STR); 
                $stmt->bindParam(':website', $_POST['website'], PDO::PARAM_STR);   
                $stmt->bindParam(':email', $current_user, PDO::PARAM_STR);   
                $stmt->execute(); 
                $emscms->dugoye($emscms->user_id, "Agents Details Updated Successful");
                $emscms->set_server_msg("Your details are successfully saved",1);
                $emscms->goto_notify("dashboard");
            }else{
                $emscms->dugoye($emscms->user_id, "Error, Agent Updated Failed- $newName","Reason: ".$pdo->error);
                return $emscms->just_notify("Error Updating Agent, Please Check The Log and Try Again",2);
		    }

		
	}
?>
<?php
	if(isset($_POST['updatePass'])){
		$newEmail = isset($_POST['email'])?$emscms->wordify($_POST['email']):$email;
		$newPassword = SHA1($_POST['newpassword']);
        
		//$emscms->test_here($file_name,1);
		$email = strtolower($email); 
		//$emscms->test_here($email,1);
        
        $sql = "UPDATE agents SET password=:password WHERE email=:email";
            if($stmt = $pdo->prepare($sql)){  
                $stmt->bindParam(':password', $newPassword, PDO::PARAM_STR);  
                $stmt->bindParam(':email', $current_user, PDO::PARAM_STR);   
                $stmt->execute(); 
                $emscms->dugoye($emscms->user_id, "Agents Password Updated Successful");
                $emscms->set_server_msg("Your password has been updated!",1);
                $emscms->goto_notify("dashboard");
            }else{
                $emscms->dugoye($emscms->user_id, "Error, Agent Updated Failed","Reason: ".$pdo->error);
                return $emscms->just_notify("Error Updating Agent, Please Check The Log and Try Again",2);
		    }

		
	}
?>
<?php
if(isset($_POST['updatePic'])){
		
		$file_name = $file_size = $file_tmp = $file_type = "";
		
		$file_name = $_FILES['user-image']['name'];
		$file_size = $_FILES['user-image']['size'];
		$file_tmp = $_FILES['user-image']['tmp_name'];
		$file_type = $_FILES['user-image']['type'];
		
		$errors= array();
		if($file_size > 2097152){
			$errors[]='File size must be excately 2 MB';
			$this->goto_notify(1, "Image size must not exceed 2 MB.");
		}
        
		if(empty($errors)==true){
            if ( !is_dir( "assets/images/agents/".$email ) ) {
                mkdir("assets/images/agents/".$email);
                
                if (!file_exists('assets/images/agents/$email/"'.$file_name)) {   
                    move_uploaded_file($file_tmp,"assets/images/agents/$email/".$file_name);                       
                }else{
                    $path = $_SERVER['DOCUMENT_ROOT']."assets/images/agents/$email/".$file_name;
                    unlink($path);
                    move_uploaded_file($file_tmp,"assets/images/agents/$email/".$file_name);                    
                }
                
            } else {
                move_uploaded_file($file_tmp,"assets/images/agents/$email/".$file_name);
            }
			
		}else{
			$this->goto_notify(1, "Error uploading image files, make sure they correspond to the rules.");
		}
		
		$sql = "UPDATE agents SET avatar=:avatar WHERE email=:email";
		if($stmt = $pdo->prepare($sql)){
            $stmt->bindParam(':avatar', $file_name, PDO::PARAM_STR);          
            $stmt->bindParam(':email', $current_user, PDO::PARAM_STR);   
            $stmt->execute(); 
            $emscms->dugoye($emscms->user_id, "Agents Details Updated Successful");
            $emscms->set_server_msg("Your details are successfully saved",1);
            $emscms->goto_notify("dashboard");
		}else{
            $emscms->dugoye($emscms->user_id, "Error, Agent Updated Failed- $newName","Reason: ".$emscms->connection->error);
            return $emscms->just_notify("Error Updating Agent, Please Check The Log and Try Again",2);
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
                                    <h1>user Profile</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">user Profile</li>
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

        <!-- #user-profile
============================================= -->
        <section id="user-profile" class="user-profile">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="edit--profile-area" style="padding-bottom: 50px;">
                            <?php
                                if (!file_exists('assets/images/agents/'.strtolower($email)."/".$avatar)) {   
                                    echo '<img src="assets/images/avatar.png" class="output--img">';                        
                                }else{
                                    echo '<img src="assets/images/agents/'.strtolower($email)."/".$avatar.'"class="output--img">';
                                }

                            ?>
                        
                          <div class="card-body text-center">
                            <h5 class="card-title" style="padding-top: 5px;"><?php echo $customername; ?></h5>
                            <p class="card-text" style="margin-top: -20px;"><i class="fa fa-phone"></i> <?php echo $phone; ?></p>
                            <p class="card-text" style="margin-top: -20px;"><i class="fa fa-envelope-o"></i> <?php echo $email; ?></p>
                            <p class="card-text" style="margin-top: -20px;"><i class="fa fa-link"></i> <?php echo $website; ?></p>
                              <div>
                                  <a href="edit-profile" class="btn btn-info" style="margin-left: 10px !important; width: 90px !important; font-size: 12px !important; font-weight: normal !important;" type="button">Edit Profile</a>
                                  <a href="favourite-properties" class="btn btn-primary" style="margin-left: 10px !important; width: 80px !important; font-size: 12px !important; font-weight: normal !important;"  type="button">Favourite</a><br>
                                  <a href="add-property" class="btn btn-success" type="button" style="margin-left: 10px !important; margin-top: 10px !important; width: 100px !important; font-size: 12px !important; font-weight: normal !important;">Add Property</a>
                                  <a href="my-properties" class="btn btn-warning" type="button" style="margin-left: 10px !important;  margin-top: 10px !important;  width: 100px !important; font-size: 12px !important; font-weight: normal !important;">My Properties</a>
                              </div>
                          </div>
                        </div>
                    </div>
                    
                    <!-- .col-md-4 -->
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <h4><?php echo $reply; ?></h4>
                            <div class="form-box">
                                <h4 class="form--title">Personal Details</h4>
								<img src="assets/images/agents/<?php echo strtolower($email)."/".$avatar; ?>" class="output--img" width="250" height="250">
								    <br/><br/>
                                <div class="form-group">
                                    <label for="first-name">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" id="first-name" value="<?php echo $name; ?>" disabled>
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="email-address">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email-address" value="<?php echo $email; ?>" disabled>
                                </div>
                                <!-- .form-group end -->
                                <div class="form-group">
                                    <label for="phone-number">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone-number" value="<?php echo $phone; ?>" disabled>
                                </div>
                                <!-- .form-group end -->
								<div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" class="form-control" name="website" id="phone-number" value="<?php echo $website; ?>" disabled>
                                </div>
                            </div>
                            
                            <!-- .form-box end 
                            <a href="edit-profile" class="btn btn--primary">Edit Info</a>-->
                    </div>
                    <!-- .col-md-8 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
        <!-- #user-profile  end -->
	<?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>
