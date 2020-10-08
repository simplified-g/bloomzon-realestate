<?php require_once("../commonincs/header_admin.inc.php");
$reply = "";
if(isset($_POST['sbmtDims'])){
	$reply = $emscms->insert_dimension();
}

?>
        <div class='page-wrapper'>
            <div class='row page-titles'>
                <div class='col-md-5 align-self-center'>
                    <h3 class='text-themecolor'>Add New Dimension</h3>
                </div>
                <div class='col-md-7 align-self-center'>
                    <ol class='breadcrumb'>
                        <li class='breadcrumb-item'><a href='index'>Home</a></li>
                        <li class='breadcrumb-item'><a href='media-list'>Media</a></li>
                        <li class='breadcrumb-item active'>Add New Dimension</li>
                    </ol>
                </div>
                <div class=''>
                    <button class='right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10'><i class='ti-settings text-white'></i></button>
                </div>
            </div>
            <div class='container-fluid'>
				<form id='postform' class='' action='<?php echo $emscms->pagename();?>' method='post'>
               <div class='row'>
                    <div class='col-lg-9 col-md-12 col-sm-12 col-xs-12'>
                        <div class='card'>
                            <div class='card-body'>
					<?php echo $reply;
					
					
					?>
                                    <div class='form-group'>
                                        <input type='text' name='title' id='title' class='form-control form-control-line' placeholder='Enter Title Here'> 
									</div>
  					
									<div id='loadpresets'>
									   <div class='form-group'>
											<input type='number' name='mwidth' id='mwidth' class='form-control form-control-line' min='1' max='3000' placeholder='Width' value='' title='Width' required> 
										</div>
										<div class='form-group'>
											<input type='number' name='mheight' id='mheight' class='form-control form-control-line' min='1' max='3000' placeholder='Height' value='' title='Height' required> 
										</div>
									</div>
								
                                </div>
                              </div>
 						</div>
                    <div class='col-lg-3 col-md-12  col-sm-12 col-xs-12'>
                        <div class='card' style='padding:1em;'>
						Dimension Options<hr>
                           <div class='card-body'>
							<hr>
							<div class='form-group'>
							<input type='hidden' name='sbmtDims' value='1'>
								<button type='submit' class='btn btn-success fullwidth'><i class='mdi mdi-content-save'></i> Save</button>
								</div>
								</div>
                              </div>				
							</div>
			</div>
			</form>
			</div>
 <?php require_once('../commonincs/footer_admin.inc.php');?>
   <script src='../resources/plugins/summernote/dist/summernote.min.js'></script>
    <script>


</script>   <!-- ============================================================== -->
</body>
</html>