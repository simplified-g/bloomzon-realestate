<?php require_once("../commonincs/header_admin.inc.php");
$wsid = isset($_REQUEST['wsid'])?(int)$_REQUEST['wsid']:0;
$title = $slug = $catid = $image = $thumb = $image_align = $authorid = $author = $excerpt = $content = $progress = $btn_url = $btn_text = $tags = $date_updated = $addfield1 = $addfield2 = $addfield3 = $addfield4 = $addfield5 = $status ="";
$authorname = $emscms->get_this_data("fullname","users","usuere",$user_id);
$reply = $emscms->show_server_msg();
if(isset($_POST['sbmtWidUpdt'])){
$reply = $emscms->update_widget_slide();
}
if($wsid>0){
	$emscms->select_post($wsid,$title, $slug, $catid, $image, $thumb, $image_align, $authorid, $author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $date_updated, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status,2);
}else{
	$emscms->goto_notify("widget-slides-list.php");
}
$authorid = $emscms->get_this_data("id","users","usuere",$user_id);
$cat=strtolower($emscms->get_this_data("title","widgets","id",$catid));
$cat = $cat==""?"category":$cat;

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
                    <h3 class="text-themecolor">Update Widget => <b><?php echo $title;?></b> <a href='widget-slides-new?wid=<?php echo $catid;?>' class='btn btn-primary btn-sm'><i class='mdi mdi-plus'></i> Add New</a></h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="widget-slides-list.php?wid=<?php echo $catid;?>">Widgets</a></li>
                        <li class="breadcrumb-item active">Update Widget Slide</li>
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
			<form class="" action='<?php echo $emscms->pagename();?>' method='post'>
               <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
					<?php echo $reply; ?>
 					<?php if(in_array("title",$usedfields)):;?>
                                   <div class="form-group">
                                        <input type="text" name='title' id='title' class="form-control form-control-line" Placeholder="Enter Title Here..." value='<?php echo $title;?>'  required> 
									</div>
                     <?php endif;?>
  					<?php if(in_array("slug",$usedfields)):;?>                                
                                    <div class="form-group">
                                        <input type="text" name='slug' id='slug' class="form-control form-control-line" Placeholder="Slug" value='<?php echo $slug;?>' style='border:1px solid silver' required> 
									</div>
                    <?php endif;?>
  					<?php if(in_array("content",$usedfields)):;?>
								<div class="card-body">
								<textarea name='content' id='content' class="summernote form-control" required> <?php echo $content;?></textarea>
								</div>
                     <?php endif;?>
  					<?php if(in_array("excerpt",$usedfields)):;?>
                               <div class="form-group">
								<textarea id='excerpt' id='excerpt' name='excerpt' class="form-control" title='' rows='5' placeholder='Excerpt Here'  maxlength='700' required> <?php echo $excerpt;?></textarea>
								<span id='remaining' class='bold'>700</span><span id=''> Remaining</span>
								</div>
                    <?php endif;?>
  					<?php if(in_array("tags",$usedfields)):;?>								
								<div class="form-group">
                                        <input type="text" name='tags' id='tags' class="form-control form-control-line" placeholder="Enter Tags, seperated with comma (,)" value='<?php echo $tags;?>'> 
								</div>
								
                    <?php endif;?>
  					<?php if(in_array("progress",$usedfields)):;?>								
								<div class="form-group">
                                        <input type="text" name='progress' id='progress' class="form-control form-control-line" Placeholder="3 Digit Number (optional)" value='<?php echo $progress;?>'> 
								</div>
								
                    <?php endif;?>
  					<?php if(in_array("btn_url",$usedfields)):;?>								
								<div class="form-group">
                                        <input type="text" name='btnurl' id='btnurl' class="form-control form-control-line" Placeholder="Button URL" value='<?php echo $btn_url;?>'> 
								</div>
								
                    <?php endif;?>
  					<?php if(in_array("btn_text",$usedfields)):;?>								
								<div class="form-group">
                                        <input type="text" name='btntext' id='btntext' class="form-control form-control-line" Placeholder="Button Text" value='<?php echo $btn_text;?>'>
								</div>
								
                    <?php endif;?>
  					<?php if(in_array("addfield1",$usedfields)):;?>								
								<div class="form-group">
                                        <input type="text" name='addfield1' id='addfield1' class="form-control form-control-line" Placeholder="Additional Fields 1 (Optional)" value='<?php echo $addfield1;?>'> 
								</div>
                     <?php endif;?>
  					<?php if(in_array("addfield2",$usedfields)):;?>								
 								<div class="form-group">
                                      <input type="text" name='addfield2' id='addfield2' class="form-control form-control-line" Placeholder="Additional Fields 2 (Optional)" value='<?php echo $addfield2;?>'> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("addfield3",$usedfields)):;?>								
								<div class="form-group">
                                        <input type="text" name='addfield3' id='addfield3' class="form-control form-control-line" Placeholder="Additional Fields 3 (Optional)" value='<?php echo $addfield3;?>'> 
								</div>
	                    <?php endif;?>
  					<?php if(in_array("addfield4",$usedfields)):;?>								
							<div class="form-group">
                                        <input type="text" name='addfield4' id='addfield4' class="form-control form-control-line" Placeholder="Additional Fields 4 (Optional)" value='<?php echo $addfield4;?>'> 
								</div>
                    <?php endif;?>
  					<?php if(in_array("addfield5",$usedfields)):;?>								
								<div class="form-group">
                                        <input type="text" name='addfield5' id='addfield5' class="form-control form-control-line" Placeholder="Additional Fields 5 (Optional)" value='<?php echo $addfield5;?>'> 
								</div>
					<?php endif;?>
	
                                </div>
                              </div>
 						</div>
                    <div class="col-lg-3 col-md-12  col-sm-12 col-xs-12">
                        <div class="card" style='padding:1em;'>
 				Widget Options<hr>
                        <div class="card-body">
  					<?php if(in_array("author",$usedfields)):;?>								
								 <div class="form-group">
									<label>Author:</label>
                                       <select name='authorid' class='form-control' required>
									   <option value='<?php echo $authorid;?>'><?php echo $authorname;?></option>
									   </select>
									</div>								
 					<?php endif;?>
  					<?php if(in_array("image",$usedfields)):;?>								
									<div class="form-group featured-image">
									<label>Widget Image:</label>
									<img src='../../gallery/<?php echo $image;?>' id='pageimage' style='height:100%;width:100%' alt='PageImage Not Set'>
									   <input type='text' name='image' id='pageimageurl' class='form-control' value='<?php echo $image;?>'>
									</div>								
							<div class='fields'>
							<label>Image Alignment</label>: &nbsp; 
							<select name='image_align' class='form-control'>
									   <option value='left' <?php echo $image_align=="left"?"selected":""?>>Left</option>
									   <option value='top' <?php echo $image_align=="top"?"selected":""?>>Top</option>
									   <option value='right' <?php echo $image_align=="right"?"selected":""?>>Right</option>
									  
									   </select>
							</div> 
						<?php endif;?>

							<hr>
							<div class="form-group">
							<input type='hidden' name='status' value='<?php echo $status;?>'>
							<input type='hidden' name='postid' value='<?php echo $wsid;?>'>
							<input type='hidden' name='sbmtWidUpdt' value='1'>
								<input type='hidden' id='status' name='status' value='1'>
								<button type='submit' class='btn btn-success' onclick='return submitPost(1)'><i class='mdi mdi-publish'></i> Update</button>
								<button type='submit' class='btn btn-primary btn-sm'  onclick='return submitPost(0)' title='Move To Draft'> Draft</button>
								<p class='text-right' style='margin-top:1em;'><a href='post-list.php' class=''>&laquo;Back To List</a></p>
								<small>NOTE: If you <b>Draft</b> a Widget, it will be saved but no longer displayed on the website.</small>
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
		window.location = "widget-slides-edit?wsid="+wid;
	}
});


$("#pageimageurl").keyup(function(event){
var imgurl =  $(this).val();
$("#pageimage").attr("src",'../../gallery/'+imgurl);
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
