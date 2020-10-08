<?php require_once("../commonincs/header_admin.inc.php");
$uid = isset($_REQUEST['uid'])?(int)$_REQUEST['uid']:0;
$reply = "";
if(isset($_POST['submitupdform'])){
$reply = $emscms->update_user();
}
if($uid>0){
	$emscms->select_user($uid,$username, $firstname, $lastname, $email, $account_type, $active);
}else{
	$emscms->goto_notify("user-list.php");
}

?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Edit User Account</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item"><a href="user-list.php">Users</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
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
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
	<fieldset>
	<span>PERSONAL DETAILS</span><HR>
	<div class='form-group'>
	<label>First Name:</label>
	<input type='text' name='firstname' class='form-control' value='<?php echo $firstname;?>' required>
	</div>
	<div class='form-group'>
	<label>Last Name:</label>
	<input type='text' name='lastname' class='form-control' value='<?php echo $lastname;?>' required>
	</div>
	<div class='form-group'>
	<label>Email Address:</label>
	<input type='text' name='email' class='form-control' value='<?php echo $email;?>' required>
	</div>
	</fieldset>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<fieldset>
	<span>LOGIN DETAILS</span><HR>
	<div class='form-group'>
	<label>Username: <small>(cannot be changed)</small></label>
	<input type='text' name='username' id='username' value='<?php echo $username;?>' class='form-control' readonly >
	</div>
	</fieldset>
	<div class='form-group'>
	<label>Change Password: <small>(Optional)</small></label>
	<input type='password' name='password' id='pass' value='' class='form-control' placeholder='[unchanged]' >
	</div>
	</div>
		<div class='form-group'>&nbsp;</div>

	</div>
	</div>
	</div>
  </div>
<div class="col-lg-4 col-md-12  col-sm-12 col-xs-12">
	<div class="card" style='padding:1em;'>
	Account Options<hr>
	   <div class="card-body">
	<div class='form-group'>
	<label for='acc_type'>Change Account Type </label> 
	<select size='1' name='acc_type' id='acc_type' class='selectpicker form-control' required>
	<option value=''>Select One</option>
<?php echo $emscms->get_all_in_field_inout("id","title","users_accounttypes",1,1,0,"$account_type"); ?>
	</select>
	</div>

<div class="form-group">
<label>Change Status:</label>
<select name='status' id='status' class='form-control' required>
<option value=''>Choose One</option>
<?php echo $emscms->get_all_in_field_inout("id","title","users_statuses",1,1,0,"$active"); ?>
</select>
</div>
<hr>
		<div class="form-group text-center">
	<input name='admin' id='admin' type='hidden' value='<?php echo $user_id;?>' >	
	<input type='hidden' name='submitupdform' value='1'>
	<button type='submit' class='btn btn-success' ><i class='mdi mdi-account-edit'></i> Update User</button>
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

});
</script>   <!-- ============================================================== -->
</body>

</html>
