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
                            <h1>favourite properties</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="<?php $emscms->base()?>">Home</a></li>
                            <li class="active">favourite properties</li>
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

<!-- #favourite properties
============================================= -->
<section id="my-properties" class="my-properties">
    <div class="container-fluid">
        <div class="row">
            <?php require_once 'ems-incs/dashboard-sidebar.php'; ?>
            <!-- .col-md-4 -->
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="row">
                    <?php
                            $sql4= $conn->query("SELECT * FROM favourites WHERE Userid ='$current_user'");
                            while($row4 = mysqli_fetch_array($sql4)){
                                $prop_id =  $row4['PropID'];
                                $emscms->post_fav_properties($prop_id);
                            }
                        
                        ?>
                </div>

            </div>
            <!-- .col-md-8 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #favourite properties  end -->

<?php require("ems-incs/footer.inc.php"); ?>
</body>

</html>