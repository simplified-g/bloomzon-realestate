<?php require_once("../commonincs/header_admin.inc.php");
$reply = "";
if(isset($_POST['sbmtCat'])){
$reply = $emscms->insert_categories();
}
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Add New Categories</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item"><a href="category-list.php">Categories</a></li>
                        <li class="breadcrumb-item active">Add New Category</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
 							<form id='post' class="" action='<?php echo $emscms->pagename();?>' method='post'>
               <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
							
					<?php echo $reply;

					
					
					?>
                                    <div class="form-group">
                                        <input type="text" name='title' id='title' class="form-control form-control-line" Placeholder="Enter Title Here..."  required> 
									</div>
                                
                                    <div class="form-group">
                                        <input type="text" name='slug' id='slug' class="form-control form-control-line" Placeholder="Slugs" required> 
									</div>
									
<div class="form-group">
<div class='row'>
<div class="col-lg-4 col-md-12  col-sm-12 col-xs-12">
<h5>FIELDS TO BE USED</h5>
</div>
<div class="col-lg-4 col-md-12  col-sm-12 col-xs-12">
<h5>REQUIRED FIELDS</h5>
</div>
<div class="col-lg-4 col-md-12  col-sm-12 col-xs-12">
<h5>LABELS</h5>
<small>label to be shown for this field</small>
</div>
</div>					

<?php echo $emscms->choose_categories();?>

					
</div>
	</div>
	</div>
	</div>
	<div class="col-lg-3 col-md-12  col-sm-12 col-xs-12">
		<div class="card" style='padding:1em;'>
		Category Options<hr>
		   <div class="card-body">
					<hr>
			<div class="form-group">
			<input type='hidden' name='sbmtCat' value='1'>
			<input type='hidden' id='status' name='status' value='1'>
				<button type='submit' class='btn btn-success' onclick='return submitPost(1)'>Publish</button>
				<button type='submit' class='btn btn-primary'  onclick='return submitPost(0)'>Save</button>
				</div>
				</div>
			  </div>				
			</div>
			</div>
			</form>
               </div>
 <?php require_once("../commonincs/footer_admin.inc.php");?>
   <script src="../assets/plugins/summernote/dist/summernote.min.js"></script>
    <script>
    jQuery(document).ready(function() {

$("#title").keyup(function(event){
var str =  $(this).val();
//str = str.replace(/[^\w\s]/gi, '').toLowerCase();
str = str.replace(/\s+/g, '-').toLowerCase();
str = str.replace(/'/gi, '');
str = str.replace(/[^a-z0-9]/gi, '-');
str = str.replace(/-{2,}/g, '-');
$("#slug").val(str);
});

$("#title").change(function(event){
var str =  $(this).val();
//str = str.replace(/[^\w\s]/gi, '').toLowerCase();
str = str.replace(/\s+/g, '-').toLowerCase();
str = str.replace(/'/gi, '');
str = str.replace(/[^a-z0-9]/gi, '-');
str = str.replace(/-{2,}/g, '-');
$("#slug").val(str);
});

});

</script>   <!-- ============================================================== -->
</body>
</html>