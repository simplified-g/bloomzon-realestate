<?php require_once("../commonincs/header_admin.inc.php");

$reply = "";
if(isset($_POST['uploadMedia'])){
	
	$reply = $emscms->insert_media();
}
?>
        <div class='page-wrapper'>
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class='row page-titles'>
                <div class='col-md-5 align-self-center'>
                    <h3 class='text-themecolor'>Media Gallery</h3>
					<?php echo $reply;?>
                </div>
                <div class='col-md-7 align-self-center'>
                    <ol class='breadcrumb'>
                        <li class='breadcrumb-item'><a href='index'>Home</a></li>
                        <li class='breadcrumb-item active'>Media</li>
                    </ol>
                </div>
                <div class=''>
                    <button class='right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10'><i class='ti-settings text-white'></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
           <div class='container-fluid'>
 				<form action='' method='post' enctype='multipart/form-data' >
                <div class='row'>
                    
                    <div class='col-lg-6 col-md-6'>
                        <div class='card'>
                            <div class='card-body'>
                                <h4 class='card-title'>Media Options</h4>
                                   <div class='form-group'>
                                        <input type='text' name='title' id='title' class='form-control form-control-line' placeholder='File Title' value=''  required> 
									</div>
								  <div class='form-group'>
									<label>IMAGE DIMENSION (Optional, For Image Uploads Only):</label>
                                       <select name='category' id='presets' class='form-control' >
									   <option value='preset'>Select From Preset (optional)</option>
										<?php echo $emscms->get_all_in_field_inout("id","title","media_presets",1,1,1); ?>
									   </select>
									</div>
									<div id='loadpresets'>
									   <div class='form-group'>
											<input type='number' name='mwidth' id='mwidth' class='form-control form-control-line' min='1' max='3000' placeholder='Width' value='' title='Width'> 
										</div>
										<div class='form-group'>
											<input type='number' name='mheight' id='mheight' class='form-control form-control-line' min='1' max='3000' placeholder='Height' value='' title='Height'> 
										</div>
									</div>
								 <div class='form-group'>
                                        <input type='text' name='tags' id='tags' class='form-control form-control-line' placeholder='Tags' value=''> 
								</div>
							<div class='form-group' style='display:none'>
							<input type='text' name='slug' id='slug' class='form-control form-control-line' placeholder='file-name' title='file-name' style='border:1px solid silver' readonly> 
							</div>								
                            </div>
                        </div>
                    </div>
					<div class='col-lg-6 col-md-6'>
                        <div class='card'>
                            <div class='card-body'>
                                <h4 class='card-title'>Upload Media</h4>
                                <label for='input-file-now-custom-2'>Preview</label>
                                <input type='file' name='attachment' id='input-file-now-custom-2' class='dropify' data-height='300' data-max-file-size='2M' />
								<input type='hidden' name='uploadname' value='attachment'>
							
                            </div>
                        </div>
                    </div>
                <div class='col-lg-12 col-md-12 text-center'>
                        <div class='card'>
                            <div class='card-body'>
							<input type='hidden' value='1' name='uploadMedia'>
							<button type='submit' class='btn btn-success'><i class='mdi mdi-publish'></i> Upload</button>

                            </div>
                        </div>
                    </div>
                </div>
				</form>
<?php require_once("../commonincs/footer_admin.inc.php");?>
<script src='../resources/plugins/dropify/dist/js/dropify.js'></script>
	<script>
$(document).ready(function() {
	// Basic
	$('.dropify').dropify();

	// Translated
	$('.dropify-fr').dropify({
		messages: {
			default: 'Glissez-déposez un fichier ici ou cliquez',
			replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
			remove: 'Supprimer',
			error: 'Désolé, le fichier trop volumineux'
		}
	});

	// Used events
	var drEvent = $('#input-file-events').dropify();

	drEvent.on('dropify.beforeClear', function(event, element) {
		return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
	});

	drEvent.on('dropify.afterClear', function(event, element) {
		alert('File deleted');
	});

	drEvent.on('dropify.errors', function(event, element) {
		console.log('Has Errors');
	});

	var drDestroy = $('#input-file-to-destroy').dropify();
	drDestroy = drDestroy.data('dropify')
	$('#toggleDropify').on('click', function(e) {
		e.preventDefault();
		if (drDestroy.isDropified()) {
			drDestroy.destroy();
		} else {
			drDestroy.init();
		}
	})

	$('#title').change(function(event){
	var str =  $(this).val();
	//str = str.replace(/[^\w\s]/gi, '').toLowerCase();
	str = str.replace(/\s+/g, '-').toLowerCase();
	str = str.replace(/'/gi, '');
	str = str.replace(/[^a-z0-9]/gi, '-');
	str = str.replace(/-{2,}/g, '-');
	$('#slug').val(str);
	});

$('#presets').change(function(e){
		var mpid = $(this).val();
		if(mpid==''){
			$('#loadpresets').html("<div class='form-group'><input type='number' name='mwidth' id='mwidth' class='form-control form-control-line' min='1' max='3000' placeholder='Width' value='' title='Width'></div><div class='form-group'><input type='number' name='mheight' id='mheight' class='form-control form-control-line' min='1' max='3000' placeholder='Height' value=''   title='Height'></div>");
		}else{
		var cusid = parseInt($('#custid').val());
		$('#loadpresets').load('../commonincs/ajaxlib.php',{'mpid':mpid,'f':'load_media_presets'});		
		}
	})
});



</script>

</body>
</html>