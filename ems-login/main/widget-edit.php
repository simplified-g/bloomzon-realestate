<?php require_once("../commonincs/header_admin.inc.php");
$catid = isset($_REQUEST['catid'])?(int)$_REQUEST['catid']:0;
$reply = $emscms->show_server_msg();
if(isset($_POST['sbmtCatUpdt'])){
$reply = $emscms->update_category_widget(2);
}
if($catid>=0){
	/* Mode ==2 for Widget 1 for Categry */
	$emscms->select_category($catid, $title, $slug, $usedfields, $requiredfields, $fieldlabels,2);
}else{
	$emscms->goto_notify("widget-list.php");
}
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Edit Widget</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item"><a href="widget-list.php">Widgets</a></li>
                        <li class="breadcrumb-item active">Edit Widget</li>
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
							
					<?php echo $reply;?>
                                    <div class="form-group">
                                        <input type="text" name='title' id='title' class="form-control form-control-line" placeholder="Enter Title Here..." value='<?php echo $title;?>'  required> 
									</div>
                                
                                    <div class="form-group">
                                        <input type="text" name='slug' id='slug' class="form-control form-control-line" placeholder="Slugs" value='<?php echo $slug;?>' required> 
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

<?php echo $emscms->choose_categories_edit($usedfields, $requiredfields, $fieldlabels);?>

					
</div>
	</div>
	</div>
	</div>
	<div class="col-lg-3 col-md-12  col-sm-12 col-xs-12">
		<div class="card" style='padding:1em;'>
		Widget Options<hr>
		   <div class="card-body">
					<hr>
			<div class="form-group">
			<input type='hidden' name='sbmtCatUpdt' value='1'>
			<input type='hidden' id='catid' name='catid' value='<?php echo $catid;?>' value='1'>
			<input type='hidden' id='status' name='status' value='1'>
				<button type='submit' class='btn btn-success' onclick='return submitPost(1)'><i class='mdi mdi-publish'></i> Update</button>
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