<?php require("igbe.inc.php"); 
// require("../PhpMailer/PHPMailer.php");
// require("../PhpMailer/SMTP.php");
// require("../PhpMailer/Exception.php");

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

class CONNECT_ONCE{
	var $connection; 
	private $result;
	var $adminregno;
	var $user = "usere";
	function __contstruct(){$this->open_connection();}
	
	public function open_connection(){
		global $DB_SERVER,$DB_USER,$DB_PWD,$DB_NAME;
		$this->connection= $mysqli= new mysqli($DB_SERVER, $DB_USER, $DB_PWD, $DB_NAME);	
		$this->adminregno = '100100';
	}
	
	public function RegisterUser(){
		//$this->test_post();
		$exception = array("register-password","register-email");
			
		//$createdby 	= $this->wordify($_POST['admin'],1);
		$postedregno 	= $this->wordify($_POST['register-email'],1);
		$postedpwd		= $_POST['register-password'];	
		$postedname	= $this->wordify($_POST['full-name']); 
		$altemail		= $this->wordify($_POST['register-email'],1);	
		$phonenumber		= $this->wordify($_POST['register-phone'],1);
		$pattern = '/^0[0-9]{10}/';
		if(!preg_match($pattern,$phonenumber)){
			$this->goto_notify(1,"Please enter a proper phone number");
		}
		//$status			= 1;	
		$postedpwd	= SHA1($postedpwd);
		//$this->startAlpha($postedname,$postedlname);
		$name = $postedname ; 	
		//$this->testshort($postedregno,$name);
		$this->existing_user($postedregno);
		//$this->existing_user($phone);
		// "INSERTING INTO TABLE";
		if($stmt = $this->connection->prepare("INSERT INTO agents(name, email, password, phone, website, activation_code) values(?,?,?,?,?,?)")){
			$stmt->bind_param('ssssss', $fullname,$email,$pwd,$phone,$website,$activation_code);
			
			$regno 		= $postedregno;
			$fullname 	= $name;
			$pwd 		= $postedpwd;
			$email		= $altemail;
			$phone      = $phonenumber;
			$website = "";
			$activation_code = md5(uniqid($altemail, true));
			$stmt->execute();
			$this->dugoye($this->adminregno, "Created New User: $regno");
			$stmt->close(); 
			
			//Sending the user a mail after a successful registration
			$to = $email; $subject = "GoHomeNG Registeration";
// 			$message = "Hi ".$fullname.", Thank you for registering with GoHome NG"."click the activation link to activate your account <br/>". "<a class='btn btn-primary' href='https://gohome.ng/activate?activation_code=" .$activation_code. "'>Activate account</a>";
			
            
            
            
            // //Create instance of PHPMailer
            // 	$mail_boy = new PHPMailer();
            // //Set mailer to use smtp
            // 	$mail_boy->isSMTP();
            // //Define smtp host
            // 	$mail_boy->Host = "smtp.gmail.com";
            // //Enable smtp authentication
            // 	$mail_boy->SMTPAuth = true;
            // //Set smtp encryption type (ssl/tls)
            // 	$mail_boy->SMTPSecure = "tls";
            // //Port to connect smtp
            // 	$mail_boy->Port = "587";
            // //Set gmail username
            // 	$mail_boy->Username = "paulwhiteblogs@gmail.com";
            // //Set gmail password
            // 	$mail_boy->Password = "ejike@200naira";
            // //Email subject
            //     $mail_boy->Subject = 'you got mail';
            // //Set sender email
            // 	$mail_boy->setFrom('paulwhiteblogs@gmail.com');
            // //Enable HTML
            // 	$mail_boy->isHTML(true);
            // //Attachment
            // // 	$mail->addAttachment('img/attachment.png');
            // //Email body
            // 	$mail_boy->Body = '<a href="https://google.com" class="btn btn-primary">Click Me</a>';
            // //Add recipient
            // 	$mail_boy->addAddress('sherikokong$gmail.com');
            // //Finally send email
            // 	if ( $mail_boy->send() ) {
            // // 		echo "Email Sent..!";
            // 	}else{
            // // 		echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
            // 	}
            // //Closing smtp connection
            // 	$mail_boy->smtpClose();
			
			
			$message = '<!doctype html>';
            $message .= '<html lang="en">';
              $message .= '<head>';
                $message .= '<!-- Required meta tags -->';
                $message .= '<meta charset="utf-8">';
                $message .= '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
            
                $message .= '<title>Hello, world!</title>';
                $message .= '<style type="text/css">';
                  $message .= '.contain{';
                    $message .= 'max-width: 80%;';
                    $message .= 'margin: auto;';
                    $message .= 'color: white;';
                  $message .= '}';
                $message .= '</style>';
              $message .= '</head>';
              $message .= '<div style="background-color: rgba(220,220,220, );">';
                $message .= '<div class="contain">';
                  $message .= '<div class="" style="background: #90EE90; padding: 40px 0px ">';
                    $message .= '<img style="display: block; margin: auto;" src="https://www.gohome.ng/assets/images/logo/logo-lights.png">';
                  $message .= '</div>';
                  $message .= '<div style="color: black; padding: 30px 0px;">';
                    $message .= '<div class="" style="text-align: center;">';
                      $message .= '<h2 style="text-align: center;">Your registration is almost complete</h2>';
                      $message .= '<p>Click on the button below to confirm your gohome account. If it is not you that signed up on gohome.ng please ignore this message</p>';
                      $message .= '<br>';
                      $message .= '<a href="https://gohome.ng/activate?activation_code=' . $activation_code . '" style="background-color: #90EE90; color: white; padding: 20px; margin: 30px; border-radius: 5px; font-size: 20px; text-decoration: none">Confirm Email</a>';
                    $message .= '</div>';
                  $message .= '</div>';
            
                  $message .= '<div style="text-align: center; background-color: black; padding: 20px">';
                    $message .= '<img src="https://www.gohome.ng/assets/images/logo/logo-lights.png" width="70px">';
                    $message .= '<p>30 UST Road, Port Harcourt, Rivers State 10005.</p>';
                    $message .= '<p>+2347010383498</p>';
                    $message .= '<p>contact@gohome.ng</p>';
                  $message .= '</div>';
                  
                  
                $message .= '</div>';
              $message .= '</div>';
              $message .= '</body>';
            $message .= '</html>';
			
			
			$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "From: GoHomeNG <info@gohome.ng>\r\n";
			$headers .= "Reply-To: info@gohome.ng\r\n";
			
			mail($to, $subject, $message, $headers);
			
			//Send server messages
			$this->set_server_msg("Your Registration is Successful!<br/>please check your email for activation mail, it might take a few minutes to arrive",1);
			$this->goto_notify(1,"Your Registration is Successful, please check your email for activation mail, it might take a few minutes to arrive.");
			}else{
			$this->dugoye($this->adminregno, "Unable to Create New User: $regno".$this->connection->error);
				$this->goto_notify(1,"Registration failed, try again later!");exit();
			}
			$this->goto_notify(1,"Registration failed, try again later!");
	}
	
	public function loginUser(){
		$count=0;
		session_start();
		//Check Already Logged???
		if(isset($_SESSION[$this->user])){
			$_SESSION = array();
			if(isset($_COOKIE[session_name()]))
			{
			setcookie(session_name(),'',time()-60*60*24*365,'/');
			}
			session_destroy();
			header('Location: ../index.php?paka=jk45j345gj34g5j3g5345gkj4s');
		}
		if(!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = $this->wordify(stripslashes($_POST['username']),1);
			$username = strtolower($username);
			$password = $this->SHA($_POST['password']);

			$sql = "SELECT * FROM agents WHERE email='$username' AND password='$password' LIMIT 1";
			//$see = $this->get_this_datas("email","agents","email='$username' AND password='$password'");

		if(!$this->result = $this->connection->query($sql))
			{
			header('Location: ../index.php?yesiwire');
			}
			 //$this->test_here("$sql",1);
		//Fetch Details of valid user
		while($row= $this->result->fetch_assoc()){
		    $is_activated = $row['is_activated'];
			$usrid 		= $row['email'];
			$usrname    = $row['name'];
			$pwd 		= SHA1($row['password']);
			//$emcactive 	= $row['status'];
			$inreason 	= "";//$row['res_inactive'];
			//$acc_type 	= $row['account_type'];
			//$last_log	= $row['lastactive'];
			$count+=1;
			}

		if ($count>=1){
		    if($is_activated == 1) {
    			/**if($emcactive < 1){
    			$_SESSION['inreason'] = $reason;
    			header('location: ../index.php?paka=ikasiwire');exit();
    			} **/
    					
    			if (isset($_POST['rememberme'])) {
    				//COMBINE SESSION WITH COOKIE
    			} else {
                /* Session expires after browser is closed */
    				$_SESSION[$this->user] = $usrid;
    				$_SESSION['myname'] = $usrname;
    				$_SESSION['password'] = md5($pwd);
    				//$_SESSION['emcactive'] = $emcactive;
    				//$_SESSION['acc_type'] = $acc_type;
    				//$_SESSION['last_access'] = $last_log;
    				$_SESSION['expsession'] = time();
    				if(isset($_COOKIE["usertry"]))setcookie("usertry",$_COOKIE["usertry"], time()-60*60*24*356);
    				}
    			//Indicate Online Status	
    			$online_user = "UPDATE agents SET online = 1, lastactive = now() WHERE email='$usrid'";
    			$this->dugoye($usrid, "Logged In");
    			$this->connection->query($online_user);
    			header('Location: ../dashboard.php');
		    } else {
		        header('Location: ../actacc.php');
		    }
        
		} else{
				$_COOKIE["usertry"]++; 
				setcookie("usertry",$_COOKIE["usertry"], time()+60*60*1); /*cookie that will block user from guessing password; will expire only after 1hour*/
				header('location: ../index.php?paka=invalid');
		}
		}else{
			header('Location: ../index.php?paka=jk45j345gj34g5j3g5345gkj4s');
			}
	}
	
	public function startAlpha($postedfname,$postedlname){
		if(((int)$postedfname !=0 ) || ((int)$postedlname !=0)){
		$this->goto_notify(1,"Entered Name is Not Acceptable");
		}
	}
	
	public function wordify($word,$type=0){
		if($type==0) return $this->connection->real_escape_string(htmlspecialchars(trim(ucwords(strtolower($word)))));
		else return $this->connection->real_escape_string(htmlspecialchars(trim($word)));
	}
	
	public function get_this_datas($targetfield,$fromtable,$where=1,$extra=""){
	$data = "";
	$sql = "SELECT $targetfield FROM $fromtable WHERE $where $extra ";
	if(!$result = $this->connection->query($sql))
	{
	$this->goto_notify(1,'Encountered error fetching data '.$this->connection->error);
	}
	while($row = $result->fetch_assoc()){
	$data = $this->wordify($row[$targetfield],1);	
	}
	return $data;
	}

	
	public function logout(){
		$logout = (int)$_GET['paka'];
		session_start();
		$usrid = isset($_SESSION[$this->user])? stripslashes($_SESSION[$this->user]) : 0;
		$_SESSION = array();
		if(isset($_COOKIE[session_name()]))
		{
		setcookie(session_name(),'',time()-60*60*24*365,'/');
		}
		session_destroy();
		//$online_user = "UPDATE users SET online = 0 WHERE usuere='$usrid'";
		$this->dugoye($usrid, "Logged Out");
		$this->connection->query($online_user);
		if($logout==1){
		header("location: login.php?paka=loggedout");
		exit();
		}else{header("Location: login.php?paka=hhdfhjiuukk=12df&hragder=chr&ggrtejdj=100028366r&hgedt=78776");}
		exit();		
	}

	public function BEGIN_SESSION(){
		if (session_status() == PHP_SESSION_NONE) {
		session_start();
		}
	}
	
	public function set_server_msg($msg,$mode=1){
		$this->begin_session();
		$_SESSION['server_msg'] = isset($_SESSION['server_msg'])?$_SESSION['server_msg']."$msg": "<p>$msg</p>";
		$_SESSION['msgtype'] = $mode;
	}

	public function dugoye($wh,$dw,$why=""){
	$wh=$this->wordify($wh,1);$dw=$this->wordify($dw,1);$why=$this->wordify($why);
	if($stmt = $this->connection->prepare("INSERT INTO yemedugo(who,didwhat,why) values(?,?,?)")){$stmt->bind_param('iss', $wh, $dw, $why);
	$stmt->execute();$stmt->close(); return 1;
	}else{return 0;}
	}

	public function goto_notify($addr="", $msg=""){
		if($addr!="" && $msg !=""){
		$addr = ($addr==1)? "javascript:history.back(1)":$addr;
		echo "
		<script>
		alert(\"$msg\");
		window.location = \"$addr\";
		</script>
		";
		}elseif($addr!=""){
		$addr = ($addr==1)? "javascript:history.back(1)":$addr;
		echo "
		<script>
		window.location = \"$addr\";
		</script>
		";
		}
		else{
		echo "
		<script>
		alert(\"$msg\");
		</script>
		";
		}
		exit();
	}

	public function existing_user($username){

		$chk_existin_sql = "SELECT email FROM agents WHERE email = '$username' LIMIT 1";
			if(!$this->result = $this->connection->query($chk_existin_sql))
			{
			$this->goto_notify(1,"Encountered error While Checking Existing Records");
			}
		$i=0;
		while($row = $this->result->fetch_assoc()){ 
			$i++;
		}
		if($i>0){
		$this->goto_notify(1,"The Email '$username' Already Exists");
		}
	}

	public function SHA($pd){
		$pd = SHA1(substr($_POST['register-email'],-3).$pd);	
		return $pd;
	}

	public function test_post($exit=1){
		foreach($_POST as $k => $v){
		if(is_array($v)){
			foreach($v as $i => $j){
			echo "$k=> $i  =  $j <br>";
			}
		}else{
		echo "$k  =  $v <br>";
		}
		}
		if($exit==1)exit();
	}
	public function close_connection(){
		if(isset($this->connection)){
		$this->connection->close();
		unset($this->connection);}
	}
	
}
	$SESSCON = new CONNECT_ONCE;
	$SESSCON->open_connection();
	
	if(isset($_POST['loginForm'])){
		if(!empty($_POST['username']) && !empty($_POST['password'])){
		$SESSCON->loginUser();
		$SESSCON->close_connection();
		exit("whats?");
		}else{
		header('location: ../index.php?paka=invalid');
		}
	}
	elseif(isset($_POST['registerUser'])){
		$SESSCON->RegisterUser();
	}	
	elseif(isset($_POST['submitupdform'])){
		$SESSCON->UpdateUser();
	}
	elseif(isset($_GET['paka'])){
		$SESSCON->logout();
	}
	elseif(!defined('MyInc')){
		$SESSCON->goto_notify("?paka=1",""); 
	}

?>