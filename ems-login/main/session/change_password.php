<?php 
define('MyInc', TRUE);
include "ALPHA_igbedigi.php";
session_start();
	$user_id = isset($_SESSION['not_usueboid'])? $SESSCON->connection->real_escape_string($_SESSION['not_usueboid']) : NULL;
	if(isset($_POST['changed'])){

		$oldpwd = $SESSCON->SHA($_POST['current_pwd']);
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		if(!$password == $password2){
		echo "<script>
		alert('Passwords Must Match');
		</script>";
		}else{
		$new_password = $SESSCON->SHA($password);
		//Changing The password
		$SESSCON->change_password($user_id,$oldpwd,$new_password);
		}
				

	}
?>

<!DOCTYPE HTML>
<head>
<TITLE>EMS - Change Password</TITLE>	 
<meta charset='UTF-8' >
<META content="IE=10.000" http-equiv="X-UA-Compatible">
<script type='text/javascript' src='../resources/jquery.js'></script>
<script type='text/javascript' src='../resources/functions.js'></script>
<link rel='stylesheet' type='text/css' href='../resources/style.css'>
<link href="screen_forms.css" rel="stylesheet" type="text/css">
<script typ='text/javascript' language='javascript'>
$(document).ready(function(){
$("#hometop").hide(1);
$("#hometop").slideDown("normal");
$("#homebottom").hide(1);
$("#homebottom").slideDown("normal");
/* $("#modules img").addClass("animated");*/
});
</script>	 
</head>
<body>
<div id=hometop>
[EMISERVE SCHOOLS MANAGEMENT SYSTEM V1.0.3]
</div>

<div id='modules'>
<div style="position:absolute;">
<BUTTON id="submit-go" type="button" onclick="javascript:history.back(1)" >Back</BUTTON>
</div>
<DIV id="formbox">
	<H2 style="margin:auto auto;text-align:center;width:450px;">Change Password</H2>
	<FORM action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validForm()">
	<P>Please complete the form below.</P>
	<FIELDSET class="login"><LEGEND>Login Details</LEGEND>			 
	<DIV>
	<LABEL for="current_pwd">Current Password*</LABEL> 
	<INPUT name="current_pwd" id="current_pwd" type="password" value="" required>			 
	</DIV>
	<DIV>
	<LABEL for="password">New Password*</LABEL> 
	<INPUT name="password" id="password" type="password" value="" required>			 
	</DIV>
	<div>
	<LABEL for="password2">Retype Password*</LABEL> 
	<INPUT name="password2" id="password2" type="password" value="" required>	
	<INPUT name="username" id="username" type="hidden" value="<?php echo $user_id; ?>">	
	</div>
	
	</FIELDSET>

	<DIV>
	<BUTTON id="submit-go" type="submit" name="changed" >CHANGE PASSWORD</BUTTON>
	</DIV>
	</FORM>
</DIV>


</div>

<div id=homebottom>
<a href=?paka=1><img src='../resources/logoutbtn.png' class='logoutbtn' title='LOG OUT'></a>
[EMISERVE SCHOOLS MANAGEMENT SYSTEM V1.0.3]
</div>


</body>
<script>
function validForm(){
	var cpwd = document.getElementById("current_pwd").value;
	var pwd = document.getElementById("password").value;
	var pwd2 = document.getElementById("password2").value;

	if((cpwd == "") || (pwd == "") || (pwd == "")){
	alert("All Fields Must Be filled Out");
	return false;
	}else if(pwd != pwd2){
	alert("New Password Fields Must Match");
	return false;
	}else if(cpwd == pwd){
	alert("Specify A New/different Password");
	return false;}
	else if(pwd.length<6){
	alert("New Password Should Be at least 6 characters Long");
	return false;
	}
	else{
	return true;
	}
}

<!--
document.forms[0].elements[1].focus();
//-->
</script>