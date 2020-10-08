<?php require("ems-incs/header.inc.php");?>

<?php
		$agent_idd = isset($_GET['agent_id'])?(int)$_GET['agent_id']:"0";

		$sql = "SELECT * FROM agents WHERE id = '$agent_idd' LIMIT 1";
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
            $avatar = $emscms->printify($row['avatar'],1);
        }	
		
?>

<section id="page-title" class="page-title bg-overlay bg-overlay-dark2" style="background-image: url(assets/images/page-titles/3.jpg)">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
            <div class="title title-1 text-center">
                <div class="title--content">
                    <div class="title--heading">
                        <h1>Agent's Profile</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="<?php $emscms->base()?>">Home</a></li>
                        <li class="active">Properties</li>
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


<!-- agent-profile 
============================================= -->
<section id="agent-profile" class="agent-profile bg-white">
    <div class="container">
        <div class="row mb-20">
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="agent--profile-img" style="width: 400px; height: 450px; overflow: hidden;">
                    <?php
                        if (!file_exists('assets/images/agents/'.strtolower($email)."/".$avatar)) {   
                            echo '<img src="assets/images/avatar.png" class="output--img">';                        
                        }else{
                            echo '<img src="assets/images/agents/'.strtolower($email)."/".$avatar.'"class="output--img">';
                        }

                    ?>
                </div>
            </div>
            <!-- .col-md-5 end -->
            <div class="col-xs-12 col-sm-6 col-md-5 col-md-offset-1">
                <div class="agent--profile-content">
                    <div class="agent--info">
                        <h5 class="agent--title"><?php echo $name; ?></h5>
                        <p class="agent--position">Agent</p>
                    </div>
                    <!-- .agent-profile-details end -->
                    <div class="">
                        <ul class="list-unstyled mb-20 ">
                            <li class="mb-10"><span>Phone:</span> <?php echo $phone; ?></li>
                            <li class="mb-10"><span>Email:</span> <?php echo $email; ?></li>
                            <li class="mb-10"><span>Website:</span> <?php echo $website; ?></li>
                        </ul>
                    </div>
                    <!-- .agent-profile-contact end -->
                    <div class="agent--social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                    <!-- .agent-social-links end -->
                </div>
            </div>
            <!-- .col-md-5 end -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h4 class="form--title">My Properties</h4>
                <div class="carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="25" data-loop="true" data-speed="800">

                        <?php 
                            $uid = $_GET['agent_id'];
                            $emscms->post_user_properties_dash_2($uid);
                        ?>
                </div>
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- #properties-carousel  end  -->


<?php require("ems-incs/footer.inc.php"); ?>
<script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
<script src="assets/js/plugins/jquery.gmap.js"></script>
<script>
    $('#googleMap').gMap();

</script>
<script src="assets/js/map-custom.js"></script>
</body>

</html>
