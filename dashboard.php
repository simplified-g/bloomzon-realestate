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
                            <h1>Dashboard</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php $emscms->base()?>">Home</a></li>
                            <li class="active">Dashboard</li>
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
                <div class="row" style="margin-left: 5px; margin-right: 5px;">
                    <h4 class="form--title" style="color: #000 !important;">Top Featured Properties</h4>
                    <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
                        data-nav="false" data-dots="false" data-space="25" data-loop="true" data-speed="800">
                        <?php $emscms->post_offered_properties_dash(); ?>
                    </div>
                </div>
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