 <?php require("ems-incs/header.inc.php");?>
 <?php
		$property_ID = isset($_GET['pid'])?(int)($_GET['pid']):"";
		$data = $emscms->get_this_data("id","property_info","prop_id",$property_ID);
		
		if(isset($_POST['name'])){
			$name = isset($_POST['name'])?$emscms->wordify($_POST['name'],1):"";
			$email = isset($_POST['email'])?$emscms->wordify($_POST['email'],1):"";
			$phone = isset($_POST['phone'])?$emscms->wordify($_POST['phone'],1):"";
			$complains = isset($_POST['complains'])?$emscms->wordify($_POST['complains'],1):"";
			$post_id = isset($_POST['propertyid'])?(int)$_POST['propertyid']:"0";
			
			if($stmt = $emscms->connection->prepare("INSERT INTO property_reports(prop_id, name, email, phone, complains) values(?,?,?,?,?)")){
			$stmt->bind_param('issss',$post_id, $name, $email, $phone, $complains);
				if($stmt->execute()){
					$stmt->close();
					$emscms->dugoye($emscms->user_id, "User's report sent  - $name");	
					$emscms->set_server_msg("Your report for this property has been recieved. Thanks!",1);
					$emscms->goto_notify("report-property?pid=$post_id");
				}else{
					/* Error */
					$emscms->dugoye($emscms->user_id,"Posting Failed for - user report","FAILED: $name, $email, $phone, $complains. Reason: ".$this->connection->error);	
					return $emscms->just_notify("Error, Unable to Sent Report, please retry later",2);
				}
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
                                    <h1>Report Property</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="<?php $emscms->base()?>">Home</a></li>
                                    <li class="active">Report</li>
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
						<?php if(isset($message)){echo $message;} ?>
						<h5>Property ID: <?php echo $property_ID; ?></h5>
						<h5>Why are you reporting this property?</h5>
						<form action="report-property" method="post" class="mb-0">
							<div class="form-group">
								<input type="text" class="form-control" name="name" id="login-email" placeholder="Enter Your Name" required>
							</div>
							<!-- .form-group end -->
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="login-email" placeholder="Enter Your Email Address">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="phone" id="login-email" placeholder="Enter Your Phone Number">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="complains" id="property-complains" rows="2" placeholder="Enter Your Complains" required></textarea>
							</div>
							<!-- .form-group end -->
							
							</div>
							<input type='hidden' name='changePwd'>
							<input type='hidden' name='propertyid' value="<?php echo $property_ID; ?>">
							<input type="submit" class="btn btn--primary btn--block" value="Send Report">
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