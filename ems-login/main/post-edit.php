<?php require_once("../commonincs/header_admin.inc.php");
$postid = isset($_GET['postid'])?(int)$_GET['postid']:0;
$islocked=(int)$emscms->get_this_data("islocked","posts","id",$postid);
$readonly = $islocked>0?"readonly":"";
$title = $slug = $catid = $image = $thumb = $image_align = $authorid = $author = $excerpt = $content = $progress = $btn_url = $btn_text = $tags = $date_updated = $addfield1 = $addfield2 = $addfield3 = $addfield4 = $addfield5 = $status ="";
$authorname = $emscms->get_this_data("fullname","users","usuere",$user_id);
$reply = $emscms->show_server_msg();
if(isset($_POST['sbmtPostUpdt'])){
$reply = $emscms->update_post();
}
if($postid>0){
	$emscms->select_post($postid,$title, $slug, $catid, $image, $thumb, $image_align, $authorid, $author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $date_updated, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status,1);
}else{
	$emscms->goto_notify("post-list.php");
}
$catid = isset($_GET['catid'])?(int)$_GET['catid']:$catid;
$authorid = $emscms->get_this_data("id","users","usuere",$user_id);
$cat=strtolower($emscms->get_this_data("title","categories","id",$catid));
$cat = $cat==""?"category":$cat;
$catslug=strtolower($emscms->get_this_data("slug","categories","id",$catid));
$usedfields = $emscms->get_this_data("usedfields","categories","id",$catid);
$reqfields = $emscms->get_this_data("requiredfields","categories","id",$catid);
$fieldlabels = $emscms->get_this_data("fieldlabels","categories","id",$catid);

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
                    <h3 class="text-themecolor">Update Post <a href='post-new' class='btn btn-primary btn-sm'><i class='mdi mdi-plus'></i> Add New</a></h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="post-list.php">Posts</a></li>
                        <li class="breadcrumb-item active">Update Post</li>
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
                                        <input type="text" name='title' id='title' class="form-control form-control-line" placeholder="Enter Title Here..." value='<?php echo $title;?>'  required> 
									</div>
                    <?php endif;?>
  					<?php if(in_array("slug",$usedfields)):;?>                                
                                    <div class="form-group">
                                        <?php $emscms->base();echo"/$catslug" ?>/<input type="text" name='slug' id='slug' class="form-control-line" placeholder="Slug" value='<?php echo $slug;?>' style='border:1px solid silver' required <?php echo $readonly;?>> 
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
  					
                            </div>
                        </div>
 					</div>
                    <div class="col-lg-3 col-md-12  col-sm-12 col-xs-12">
                        <div class="card" style='padding:1em;'>
 				Post Options<hr>
                           <div class="card-body">
                                    <div class="form-group">
									<label>Category:</label>
                                       <select name='category' id='category' class='form-control' required>
									   <option value='s'>Select Category</option>
										<?php echo $emscms->get_all_in_field_inout("id","title","categories",1,"status=1",0,"$catid"); ?>
									   </select>
									</div>
							<div class="form-group">
							<input type='hidden' name='authorid' value='<?php echo $authorid;?>'>
							</div>								
							<?php if(in_array("image",$usedfields)):;?>                                
								 <div class="form-group featured-image">
									<label>Post Image:</label>
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
							<input type='hidden' name='postid' value='<?php echo $postid;?>'>
							<input type='hidden' name='sbmtPostUpdt' value='1'>
								<input type='hidden' id='status' name='status' value='1'>
								<button type='submit' class='btn btn-success' onclick='return submitPost(1)'><i class='mdi mdi-publish'></i> Update</button>
								<button type='submit' class='btn btn-primary btn-sm'  onclick='return submitPost(0)' title='Move To Draft'> Draft</button>
								<p class='text-right' style='margin-top:1em;'><a href='post-list.php' class=''>&laquo;Back To List</a></p>
								<small>NOTE: If you <b>Draft</b> a post, it will be saved but no longer displayed on the website.</small>
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
var islocked = <?php echo $islocked;?>;
var str =  $(this).val();
//str = str.replace(/[^\w\s]/gi, '').toLowerCase();
str = str.replace(/\s+/g, '-').toLowerCase();
str = str.replace(/'/gi, '');
str = str.replace(/[^a-z0-9]/gi, '-');
str = str.replace(/-{2,}/g, '-');
if(islocked<=0){$("#slug").val(str);}
});
$("#title").change(function(event){
var islocked = <?php echo $islocked;?>;
var str =  $(this).val();
//str = str.replace(/[^\w\s]/gi, '').toLowerCase();
str = str.replace(/\s+/g, '-').toLowerCase();
str = str.replace(/'/gi, '');
str = str.replace(/[^a-z0-9]/gi, '-');
str = str.replace(/-{2,}/g, '-');
if(islocked<=0){$("#slug").val(str);}
});

$("#content").change(function(event){
var str =  $(this).val();
alert(str);
});

$("#category").change(function(event){
var catid =  $(this).val();
	if(confirmThisAction("This Page Will Be Reloaded,\nPlease Save Your Work First")){
		window.location = "post-edit?postid=<?php echo $postid;?>&catid="+catid;
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
