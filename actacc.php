 <?php require("ems-incs/header.inc.php");?>
    <?php
		if(isset($_POST['email'])){
			$email = isset($_POST['email'])?$emscms->wordify($_POST['email'],1):"";
			$pwd		= $_POST['npassword'];
			$pwd = SHA1($pwd);
			
			$sql = "SELECT * FROM agents WHERE email ='$email' LIMIT 1";
			
			if(!$result = $emscms->connection->query($sql))
			{
				$emscms->dugoye("100100","Unable to Select Agents","Reason: ".$emscms->connection->error);		
				return $emscms->just_notify("Unable to Select Agents".$emscms->connection->error,2);		
			}
			if($result->num_rows != 0){
				$emscms-> update_this_data('agents','password',$pwd,'email',$email);
				$emscms->set_server_msg("Your password has been changed, you can now login with your new password!",1);
			}else{
				$emscms->goto_notify(1,"Sorry your email address is not registered, try and sign up to register");
			}
		}
		
		$message = $emscms->show_server_msg();
	?>
	
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
                                    <h1>Generate New Password</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">Password Renewal</li>
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
	<section id="blog" class="blog blog-grid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
					<div class="signup-form-container text-center">
						<div>
						    <h5>Your account is not activated <br> check your email for activation link.</h5>
						</div>
					</div>
				</div>
				<!-- .col-md-12 end -->
			</div>
			<!-- .row end -->
		</div>
	</section>

  <?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>