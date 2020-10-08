<?php require_once("../commonincs/header_admin.inc.php");
$reply = "";
$account_type = $emscms->get_this_data("account_type","users","usuere",$user_id);
if($account_type!=1){
	$emscms->set_server_msg("Access Denied!, You do not have sufficient privilege to create accounts",2);
	$emscms->goto_notify(1);
}
?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Add New User</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="user-list.php">Users</a></li>
                        <li class="breadcrumb-item active">Add New User</li>
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
		<form action='session/ALPHA_igbedigi.php' method='POST' enctype='multipart/form-data' onsubmit='return checkForm()'>
               <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
 					<?php echo $reply;?>
                           <div class="card-body">
               <div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<fieldset>
	<span>LOGIN DETAILS</span><HR>
		<div class='form-group'>
	<label>Username: *</label>
	<input type='text' name='username' id='regno' class='form-control' required>
	</div>
	<div class='form-group'>
	<label>Password: *</label>
	<input type='password' name='password' id='pass' value='' class='form-control' required>
	</div>
	<div class='form-group'>
	<label>Retype Password: *</label>
	<input type='password' name='password2' id='pass2' class='form-control' required>
	</div>
	</fieldset>
	</div>
	<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	<fieldset>
	<span>PERSONAL DETAILS</span><HR>
	<div class='form-group'>
	<label>First Name: *</label>
	<input type='text' name='firstname' class='form-control' required>
	</div>
	<div class='form-group'>
	<label>Last Name: *</label>
	<input type='text' name='lastname' class='form-control' required>
	</div>
	<div class='form-group'>	
	<label>Email Address: *</label>
	<input type='email' name='email' class='form-control' required>
	</div>
	</fieldset>
	</div>
	<div class='form-group'>&nbsp;</div>

	</div>
	</div>
	</div>
  </div>
<div class="col-lg-4 col-md-12  col-sm-12 col-xs-12">
	<div class="card" style='padding:1em;'>
	ACCOUNT OPTIONS<hr>
	   <div class="card-body">
	<div class='form-group'>
	<label for='acc_type'>Account Type </label> 
	<select size='1' name='acc_type' id='acc_type' class='selectpicker form-control' required>
	<option value=''>Select One</option>
<?php echo $emscms->get_all_in_field_inout("id","title","users_accounttypes",4,"id>='$account_type' ORDER BY id DESC",0,""); ?>
	</select>
	</div>

<div class="form-group">
<label>Set Status:</label>
<select name='status' id='status' class='form-control' required>
<option value=''>Choose One</option>
<?php echo $emscms->get_all_in_field_inout("id","title","users_statuses",1,1,0,""); ?>
</select>
</div>
<hr>
		<div class="form-group text-center">
	<input name='admin' id='admin' type='hidden' value='<?php echo $user_id;?>' >	
	<input type='hidden' name='submitregform' value='1'>
	<button type='submit' class='btn btn-success'><i class='mdi mdi-account-plus'></i> Create User</button>
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
