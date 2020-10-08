<?php require("ems-incs/header.inc.php");?>

<?php
	if($current_user!=""){
		$id = $emscms->get_this_data("id", "agents", "email", $current_user);
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
		$newPassword = SHA1($_POST['newpassword']);
		
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
		//$emscms->test_here($file_name,1);
		$email = strtolower($email); 
		//$emscms->test_here($email,1);
		if(empty($errors)==true){
			mkdir("assets/images/agents/".$email);
			move_uploaded_file($file_tmp,"assets/images/agents/$email/".$file_name);
		}else{
			$this->goto_notify(1, "Error uploading image files, make sure they correspond to the rules.");
		}
		
		$sql = "UPDATE agents SET name=?, email=?, password=?, phone=?, avatar=?, website=? WHERE email=?";
		if($result = $emscms->connection->prepare($sql)){
		$result->bind_param('sssssss', $newName, $newEmail, $newPassword, $newPhone, $file_name, $newWebsite, $current_user);
		$result->execute();
		$rowsaffected = $result->affected_rows;
		$emscms->dugoye($emscms->user_id, "Agents Details Updated Successful- $newName");
		$emscms->set_server_msg("Your details are successfully saved",1);
		$emscms->goto_notify("user-profile");
		}else{
		$emscms->dugoye($emscms->user_id, "Error, Agent Updated Failed- $newName","Reason: ".$emscms->connection->error);
		return $emscms->just_notify("Error Updating Agent, Please Check The Log and Try Again",2);
		}
	}
?>

<?php
	if(isset($_POST['prop_title'])){
		$emscms->insert_property($user_id, $user_email);
}
	$reply = $emscms->show_server_msg();
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
    <div class="container-fluid">
        <div class="row">
            <?php require_once 'ems-incs/dashboard-sidebar.php'; ?>

            <!-- .col-md-4 -->
            <div class="col-xs-12 col-sm-12 col-md-9">
                <h4><?php echo $reply; ?></h4>
                <form class="mb-0" action="user-profile" method="post" enctype="multipart/form-data">
                    <div class="form-box">
                        <h4 class="form--title">Profile Picture</h4>
                        <div class="upload--img-area">
                            <div class="preview--img">
                                <img src="assets/images/agents/<?php echo strtolower($email)."/".$avatar; ?>"
                                    id="output--img" class="output--img">
                            </div>
                            <a class="btn btn--secondary btn-file ml-30"
                                style="font-size: 10px !important; width: 100px !important;">choose picture
                                <input type="file" name="user-image" hidden>
                                <input type="file" accept="image/*" name="user-image" onchange="loadFile(event)">
                            </a>
                            <a href="#" class="btn delete--img"><i class="fa fa-times"></i>Delete</a>
                            <script>
                            var loadFile = function(event) {
                                var reader = new FileReader();
                                reader.onload = function() {
                                    var output = document.getElementById('output--img');
                                    output.src = reader.result;
                                };
                                reader.readAsDataURL(event.target.files[0]);
                            };
                            </script>
                        </div>
                        <input type='hidden' name='updatePic' value='1'>
                        <input type="submit" value="Update Picture" name="submit" class="btn btn--primary pull-right"
                            style="top: -20px !important;">
                    </div>
                </form>
                <form class="mb-0" action="user-profile" method="post" enctype="multipart/form-data">
                    <div class="form-box">
                        <h4 class="form--title">Personal Details</h4>
                        <div class="form-group">
                            <label for="first-name">Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="first-name"
                                value="<?php echo $name; ?>">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="email-address">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email-address"
                                value="<?php echo $email; ?>" disabled>
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="phone-number">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone-number"
                                value="<?php echo $phone; ?>">
                        </div>
                        <!-- .form-group end -->
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" name="website" id="phone-number"
                                value="<?php echo $website; ?>">
                        </div>
                        <input type='hidden' name='updateUser' value='1'>
                        <input type="submit" value="Save Edits" name="submit" class="btn btn--primary">
                    </div>
                </form>
                <form class="mb-0" action="user-profile" method="post" enctype="multipart/form-data">
                    <!-- .form-box end -->
                    <div class="form-box">
                        <h4 class="form--title">Change Password</h4>
                        <div class="form-group">
                            <label for="confirm-password">New Password</label>
                            <input type="password" class="form-control" name="newpassword" id="confirm-password">
                        </div>
                        <input type='hidden' name='updatePass' value='1'>
                        <input type="submit" value="Update Password" name="submit" class="btn btn--primary">
                        <!-- .form-group end -->
                    </div>
                    <!-- .form-box end -->
                </form>
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