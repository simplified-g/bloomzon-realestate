<?php require_once("../commonincs/header_admin.inc.php");
$catid = isset($_REQUEST['wid'])?(int)$_REQUEST['wid']:"";
$cat=strtolower($emscms->get_this_data("title","widgets","id",$catid));
$catslug=strtolower($emscms->get_this_data("slug","widgets","id",$catid));
$cat = $cat==""?"category":$cat;
$reply = "";
$authorid = $emscms->get_this_data("id","users","usuere",$user_id);
$authorname = $emscms->get_this_data("fullname","users","usuere",$user_id);
if(isset($_POST['sbmtWidSlides'])){
	$reply = $emscms->insert_widget_slides();
}
$usedfields = $emscms->get_this_data("usedfields","widgets","id",$catid);
$reqfields = $emscms->get_this_data("requiredfields","widgets","id",$catid);
$fieldlabels = $emscms->get_this_data("fieldlabels","widgets","id",$catid);

$usedfields = $usedfields==""?array():explode(", ",$usedfields);
$reqfields = $reqfields==""?array():explode(", ",$reqfields);
$fieldlabels = $fieldlabels==""?array():explode(", ",$fieldlabels);

	foreach($fieldlabels as $ff){
		$realllable = explode("=",$ff);
		$flkey[] = $realllable[0];
		$flvalue[] = isset($realllable[1])?$realllable[1]:"";
		$nfl = array_combine($flkey,$flvalue);
	}


	function showlabel($label,$default=""){
		global $nfl;
		$default = $default==""?$label:$default;
		$label = array_key_exists("$label",$nfl)?$nfl["$label"]:"$default";
		return $label;
	}
	
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Add Slide to: <?php echo strtoupper($cat);?> </h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item"><a href="widget-list.php">Widgets</a></li>
                        <li class="breadcrumb-item active">Add New WSlide</li>
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
				<form id='postform' class="" action='<?php echo $emscms->pagename();?>' method='post'>
               <div class='row'>
                    <div class='col-lg-9 col-md-12 col-sm-12 col-xs-12'>
                        <div class='card'>
                            <div class='card-body'>
					<?php echo $reply;
					
					
					?>
					<?php if(in_array("title",$usedfields)):;?>
                                    <div class='form-group'>
                                        <input type='text' name='title' id='title' class='form-control form-control-line' placeholder='<?php echo showlabel('title','Enter Title Here');?>' <?php echo in_array("title",$reqfields)?"required":"";?>> 
									</div>
                    <?php endif;?>
  					<?php if(in_array("slug",$usedfields)):;?>
                                  <div class='form-group'>
                                        <input type='text' name='slug' id='slug' class='form-control form-control-line' placeholder='<?php echo showlabel('slug','Slug');?>' style='border:1px solid silver'  <?php echo in_array("slug",$reqfields)?"required":"";?>> 
									</div>
                    <?php endif;?>
  					<?php if(in_array("content",$usedfields)):;?>
									<div class='card-body'>
                                <textarea name='content' id='content' class='summernote form-control'  <?php echo in_array("content",$reqfields)?"required":"";?> placeholder='<?php echo showlabel('content','Enter Post Content Here');?>'></textarea>
                            </div>
                     <?php endif;?>
  					<?php if(in_array("excerpt",$usedfields)):;?>
                               <div class='form-group'>
								<textarea id='excerpt' id='excerpt' name='excerpt' class='form-control' title='' rows='5' placeholder='<?php echo showlabel('excerpt','Enter Excerpt Here');?>'  maxlength='700'  <?php echo in_array("excerpt",$reqfields)?"required":"";?>></textarea>
								<span id='remaining' class='bold'>700</span><span id=''> Remaining</span>
								</div>
                    <?php endif;?>
  					<?php if(in_array("tags",$usedfields)):;?>							
								<div class='form-group'>
                                        <input type='text' name='tags' id='tags' class='form-control form-control-line' placeholder='Enter Tags, seperated with comma (,)' <?php echo in_array("tags",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("progress",$usedfields)):;?>								
								<div class='form-group'>
                                        <input type='text' name='progress' id='progress' class='form-control form-control-line' placeholder='<?php echo showlabel('progress','Enter a number less than 100');?>' <?php echo in_array("progress",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("btn_url",$usedfields)):;?>								
								<div class='form-group'>
                                        <input type='text' name='btnurl' id='btnurl' class='form-control form-control-line' placeholder='<?php echo showlabel('btn_url','Button URL');?>' <?php echo in_array("btn_url",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("btn_text",$usedfields)):;?>								
								<div class='form-group'>
                                        <input type='text' name='btntext' id='btntext' class='form-control form-control-line' placeholder='<?php echo showlabel('btn_text','Button Text');?>' <?php echo in_array("btn_text",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("addfield1",$usedfields)):;?>								
								<div class='form-group'>
                                        <input type='text' name='addfield1' id='addfield1' class='form-control form-control-line' placeholder='<?php echo showlabel('addfield1','Enter Title Here');?>' <?php echo in_array("addfield1",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("addfield2",$usedfields)):;?>
								<div class='form-group'>
                                        <input type='text' name='addfield2' id='addfield2' class='form-control form-control-line' placeholder='<?php echo showlabel('addfield2','Additional Field2');?>' <?php echo in_array("addfield2",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("addfield3",$usedfields)):;?>
								<div class='form-group'>
                                        <input type='text' name='addfield3' id='addfield3' class='form-control form-control-line' placeholder='<?php echo showlabel('addfield3','Additional Field3');?>' <?php echo in_array("addfield3",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("addfield4",$usedfields)):;?>
								<div class='form-group'>
                                        <input type='text' name='addfield4' id='addfield4' class='form-control form-control-line' placeholder='<?php echo showlabel('addfield4','Additional Field4');?>' <?php echo in_array("addfield4",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("addfield5",$usedfields)):;?>
								<div class='form-group'>
                                        <input type='text' name='addfield5' id='addfield5' class='form-control form-control-line' placeholder='<?php echo showlabel('addfield5','Additional Field5');?>' <?php echo in_array("addfield5",$reqfields)?"required":"";?>> 
								</div>
                    <?php endif;?>
								
                                </div>
                              </div>
 						</div>
                    <div class='col-lg-3 col-md-12  col-sm-12 col-xs-12'>
                        <div class='card' style='padding:1em;'>
						Post Options<hr>
                           <div class='card-body'>
                                    <div class='form-group'>
									<label>Category:</label>
                                       <select name='category' id='category' class='form-control' required>
									   <option value=''>Select Category</option>
										<?php echo $emscms->get_all_in_field_inout('id','title','widgets',1,'status=1',0,"$catid"); ?>
									   </select>
									</div>
								 <div class='form-group'>
  					<?php if(in_array("author",$usedfields)):;?>
									<label>Author:</label>
                                       <select name='authorid' class='form-control' <?php echo in_array("addfield5",$reqfields)?"required":"";?>>
									   <option value='<?php echo $authorid;?>'><?php echo $authorname;?></option>
									   </select>
									</div>								
                     <?php endif;?>
  					<?php if(in_array("image",$usedfields)):;?>                               
								<div class='form-group-apend featured-image'>
									<label>Widget Image:</label>
									<img src='' id='pageimage' style='height:100%;width:100%' alt='PageImage Not Set'>
									   <input type='text' name='image' id='pageimageurl' class='form-control'><a href='media-list' class='btn btn-success btn-sm fullwidth' type='button' target='_blank'>Browse Image</a>
									</div>								


									
                    <?php endif;?>
  					<?php if(in_array("image_align",$usedfields)):;?>
							<div class='fields'>
							<label>Image Alignment</label>: &nbsp; 
							<select name='image_align' class='form-control'>
									   <option value='left'>Left</option>
									   <option value='left'>Top</option>
									   <option value='left'>Right</option>
									  
									   </select>
							</div> 
                    <?php endif;?>							
							<hr>
							<div class='form-group'>
							<input type='hidden' name='sbmtWidSlides' value='1'>
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

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        $('.inline-editor').summernote({
            airMode: true
        });

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

$("#content").change(function(event){
var str =  $(this).val();
alert(str);
});

$("#category").change(function(event){
var wid =  $(this).val();
	if(confirmThisAction("This Page Will Be Reloaded,\nPlease Save Your Work First")){
		window.location = "widget-slides-new?wid="+wid;
	}
});

$("#pageimageurl").change(function(event){
var imgurl =  $(this).val();
$("#pageimage").attr("src",'../../gallery/'+imgurl);
}); 


});

var $remaining = $('#remaining'),
    $messages = $remaining.next();
var maxl = 700;
$('#excerpt').keyup(function(){
    var chars = this.value.length,
        messages = Math.ceil(chars / maxl),
        remaining = messages * maxl - (chars % (messages * maxl) || messages * maxl);

    $remaining.text(remaining);
});
</script>   <!-- ============================================================== -->
</body>
</html>