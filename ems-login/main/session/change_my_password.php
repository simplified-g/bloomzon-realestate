<?php 
define('MyInc', TRUE);
include "ALPHA_igbedigi.php";
session_start();
	$user_id = isset($_SESSION['not_usueboid'])? $SESSCON->connection->real_escape_string($_SESSION['not_usueboid']) : NULL;
	if(isset($_POST['changepassword'])){

		$oldpwd = $SESSCON->SHA($_POST['current_pwd']);
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		
		if(!$password == $password2){
		$SESSCON->goto_notify(1,'Passwords Must Match');
		}else{
		$new_password = $SESSCON->SHA($password);
		//Changing The password
		$SESSCON->change_password($user_id,$oldpwd,$new_password);
		}
				

	}else{
	$SESSCON->goto_notify(1);
	}
?>

<script>


</script>