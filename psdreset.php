 <?php require("ems-incs/header.inc.php");?>
    <?php
		if(isset($_POST['changePwd']) && isset($_GET['pwd_reset_code'])){
		    
		    $pwd_reset_code = $_GET['pwd_reset_code'];
			$pwd		= $_POST['npassword'];
			$pwd = SHA1($pwd);
			
			$sql = "SELECT * FROM agents WHERE pwd_reset_code ='$pwd_reset_code' LIMIT 1";
			
			if(!$result = $emscms->connection->query($sql))
			{
				$emscms->dugoye("100100","Invalide password reset code","Reason: ".$emscms->connection->error);		
				return $emscms->just_notify("Invalide password reset code".$emscms->connection->error,2);		
			}
			if($result->num_rows != 0){
			    $updt = "UPDATE agents SET password = '$pwd', pwd_reset_code = NULL WHERE pwd_reset_code = '$pwd_reset_code' LIMIT 1";
			    
			    $emscms->connection->query($updt);
			    
				$emscms->set_server_msg("Your password has been changed, you can now login with your new password!",1);
			}else{
				$emscms->goto_notify(1,"Invalide password reset code");
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
						<h5>Enter your Email and a new Password</h5>
						<form action="" method="post" class="mb-0">
							<?php if(isset($message)){echo $message;} ?>
							
							<!-- .form-group end -->
							<div class="form-group">
								<input type="password" class="form-control" name="npassword" id="login-password" placeholder="Enter A New Password" required>
							</div>
							<!-- .form-group end -->
							
							</div>
							<input type="submit" name='changePwd' class="btn btn--primary btn--block" value="Change Password">
						</form>
						<!-- form  end -->
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