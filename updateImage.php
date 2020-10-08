<?php require("ems-incs/header.inc.php");?>

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
								<h1>Edit Image</h1>
							</div>
							<ol class="breadcrumb">
								<li><a href="<?php $emscms->base()?>">Home</a></li>
								<li class="active">Edit Image</li>
							</ol>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
    </section>
        <!-- #page-title end -->
	
	<?php 
		$pid = isset($_GET['id'])?(int)$_GET['id']:"0";
		$image = isset($_GET['image'])?$_GET['image']:"";
		
		//echo $pid."/".$image;
		
		if(isset($_POST['sbmtPost'])){
			$file_name = $image;
			//$file_name = $_FILES[$file[0]]['name'];
			$file_size = $_FILES['image1']['size'];
			$file_tmp = $_FILES['image1']['tmp_name'];
			//$file_type = $_FILES['image1']['type'];
			
			if($file_size > 2097152){
				$emscms->goto_notify(1, "Image size must not exceed 2 MB.");
			}
			if(empty($errors)==true){
				move_uploaded_file($file_tmp,"assets/upload/$pid/".$file_name);
				$emscms->goto_notify(1, "Image successfully changed.");
			}else{
				$emscms->goto_notify(1, "Error uploading image files, make sure they correspond to the rules.");
			}
		}
		
	
	?>

	<section id="user-profile" class="user-profile">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8">
					<form action="" method="post" class="mb-0" enctype="multipart/form-data">
						<div class="form-box">
							<h4 class="form--title">Upload new image</h4>
							<div class="upload--img-area">
								<input type="file" accept="image/*" name="image1" onchange="loadFile(event)" required>
                            </div>
							<br/>
							<div style="text-align:right;">
							<input type='hidden' name='sbmtPost' value='1'>
                            <input type="submit" value="Change Image" name="submit" class="btn btn--primary">
							</div>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php require("ems-incs/footer.inc.php"); ?>        
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script>
        $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 12,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "assets/images/gmap/marker1.png",
                    iconsize: [52, 75],
                    iconanchor: [52, 75]
                }
            }]
        });

    </script>
    <script src="assets/js/map-custom.js"></script>
</body>

</html>
