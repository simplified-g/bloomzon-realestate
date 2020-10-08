<?php
if(!defined('MyInc')){header('location:../index.php');exit();}
function SendToEmail(){
	
// Change this with your website name and email address
$the_websitename   = 'virgincleanglobal.com'; //Replace this with your website
$the_myemail 	= 'kpenu.bari@virgincleanglobal.com';//replace this with the email u want to use 2 receive d messages from d form

if(isset($_POST['email'])){
		error_reporting(0);	
		$errorC = false;

		$the_name 		= $_POST['name'];
		$the_email 		= $_POST['email'];
		$the_subject 	= "";
		$the_message 	= $_POST['message'];

		//$the_phone 	= $_POST['phone'];
		//$the_fax 		= $_POST['fax'];
		//$the_company 	= $_POST['company'];
		//$the_website 	= $_POST['website'];
		
		# want to add aditional fields? just add them and i will take care of it,
		# you dont have to edit this file
		
		//added fields that are not set explicit like the once above are combined and added before the actual message
		$already_used = array('name','email','the_subject','message','mywebsitename','tempcode','temp_url','ajax');
		$attach = '';

		foreach($_POST as $key => $field)
		{
			if(!in_array($key,$already_used))
			{
				$attach.= $key.": ".$field."<br /> \n";
			}
		}

		$attach.= "<br /> \n";
		
		if(!checkmymail($the_email))
		{

			$errorC = true;
			$the_emailclass = "error";
		}else{
			$the_emailclass = "valid";
			}
		
		if($the_message == "")
		{
			$errorC = true;
			$the_messageclass = "error";
		}else{
			$the_messageclass = "valid";
			}
		if($errorC == false)
		{ 	
			$to      =  $the_myemail;
			$subject = "New Message from " . $the_websitename;
			$header  = 'MIME-Version: 1.0' . "\r\n";
			$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$header .= 'From:'. $the_email  . " \r\n";
		
			$message1 = convert_RN(nl2br($the_message));

			$message = "
			You have a new message! <br/>
			From: $the_name <br>
			Email : $the_email <br>
			$the_subject
			
			<br />
			
			Message: $message1 <br />";
			
			
			if(@mail($to,$subject,$message,$header)) $send = true; else $send = false;

			if ($send){
			return show_notifier("<h3>Your Feedback has been sent!</h3><div class='confirm'>
					<p class='textconfirm'>Thank you for contacting us.<br/>We will get back to you as soon as possible.</p>
				  </div>");
			}
			else
			return show_notifier("<h3>Oops!</h3><div class='confirm'>
					<p class='texterror'>Error, Your form was not submitted, please resubmit it or try later.</p>
				  </div>",2); 


		}
		
	}
}/*End of Function*/
	
	function convert_RN($str){

	//This Function Converts all newlines in string written in \n\r to <br/>
	$order   = array("\\r\\n", "\\r", "\\n","<script","</script>","<?","?>");
	$replace = '';
	// Processes \r\n's first so they aren't converted twice.
	$newstr = str_replace($order, $replace, $str);

	return $newstr;
	}
	
function checkmymail($mailadresse){
	$email_flag=preg_match("!^\w[\w|\.|\-]+@\w[\w|\.|\-]+\.[a-zA-Z]{2,4}$!",$mailadresse);
	return $email_flag;
}

function show_notifier($msg,$mode=1){
		if($mode==1){
		$msg = "    
		<div class='alert alert-success fade in out'>
		<a href='#' class='close' data-dismiss='alert'>Close &times;</a>
        $msg
		</div>";
			}
		else{
		$msg = "<div class='alert alert-danger fade in out'>
		<a href='#' class='close' data-dismiss='alert'>Close &times;</a>
        $msg 
		</div>";

		}
		return $msg;
	}
?>