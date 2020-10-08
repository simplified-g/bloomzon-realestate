<?php

	$block_attempts = "";
	$blusertry = isset($_COOKIE["usertry"])? $_COOKIE["usertry"] : "NULL";
	
	if($blusertry==5){
	$warn = "<script> alert('Your Session Will be blocked after one More Wrong Attempt');</script>";
	 }
	if($blusertry>=6){
	$block_attempts = "<button class='btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light' type='submit' id='emslogin' disabled>Login Disabled</button>";
	}
if(isset($_GET['paka'])){

	if($_GET['paka'] == "loggedout"){
	$alertmessage = "<font style='color:#4682B4;'><b> You Have been logged out! </b></font>";
	}
	elseif($_GET['paka'] == "retry"){
	$alertmessage = "<font style='color:red;background-color:white'><b> Unable to Login - Contact Administrator! </b></font>";
	}
	elseif($_GET['paka'] == "invalid"){
	$alertmessage = "<font style='color:red'><b> Invalid Username or Password </b></font>";
	}elseif($_GET['paka'] == "ikasiwire"){
	$alertmessage = "<font style='color:red'><b> Account Disabled - Please Contact Admin</b></font>";
	}
	else{
	$alertmessage = "<font color=orange><b> Please Verify Your Account! </b></font>";
	}
}

?>