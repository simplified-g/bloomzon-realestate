 <?php require("ems-incs/header.inc.php");?>
    <?php
		if(isset($_POST['changePwd'])){
			$email = isset($_POST['email'])?$emscms->wordify($_POST['email'],1):"";
			
			$sql = "SELECT * FROM agents WHERE email ='$email' LIMIT 1";
			
			if(!$result = $emscms->connection->query($sql))
			{
				$emscms->dugoye("100100","Unable to Select Agents","Reason: ".$emscms->connection->error);		
				return $emscms->just_notify("Unable to Select Agents".$emscms->connection->error,2);		
			}
			if($result->num_rows != 0){
			    
			    $pwd_reset_code = md5(uniqid($email, true));
			    
			    $updt = "UPDATE agents SET pwd_reset_code = '$pwd_reset_code' WHERE email ='$email' LIMIT 1";
			    
			    $emscms->connection->query($updt);
			    
			    //Sending the user a mail containing password change link
    			$to = $email; $subject = "GoHomeNG Password Reset";
    				
    			$message = "You requested for a change of password.<br> If you did not request for this please secure your account.<br> If you requested for a change of password, please click the 'Reset password'"; 
    			$message .= " link bellow to change your GoHome Agent password.<br><br><br> <a href='https://www.gohome.ng/psdreset?pwd_reset_code=" . $pwd_reset_code . "'>Reset password</a>";
    			
    			$headers  = "MIME-Version: 1.0\r\n";
    			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    			$headers .= "From: GoHomeNG <info@gohome.ng>\r\n";
    			$headers .= "Reply-To: info@gohome.ng\r\n";
    			
    			mail($to, $subject, $message, $headers);
    			
				$emscms->set_server_msg("A password reset message as been sent to your email, it might take some time to arrive",1);
			}else{
				$emscms->goto_notify(1,"Sorry your email address is not registered, try and sign up to register");
				header("Location: /index.php");
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
                                    <h1>Request Password Reset</h1>
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
						<h5>Enter your Email</h5>
						<form action="forgotpwd.php" method="post" class="mb-0">
							<?php if(isset($message)){echo $message;} ?>
							
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="login-email" placeholder="Enter Your Email" required>
							</div>
							
							</div>
							<input type="submit" name='changePwd' class="btn btn--primary btn--block" value="Request Password Reset">
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