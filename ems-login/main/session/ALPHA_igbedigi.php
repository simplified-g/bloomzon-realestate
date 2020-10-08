<?php require("../../../ems-incs/igbe.inc.php"); 
class SESSION_CONNECT{
//DO NOT TOUCH THIS POINT
	var $connection; private $result;var $user ='EMS_usere';var $userboid ='EMS_usueboid';var $adminregno;
	function __contstruct(){$this->open_connection();}
	
	public function open_connection(){
	global $DB_SERVER,$DB_USER,$DB_PWD,$DB_NAME;
	$this->connection= $mysqli= new mysqli($DB_SERVER, $DB_USER, $DB_PWD, $DB_NAME);	
	$this->adminregno = '100100';
	}

	public function login(){
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
		header('Location: ../login.php?paka=jk45j345gj34g5j3g5345gkj4s');
		}

		if(!empty($_POST['username']) && !empty($_POST['password'])) {
			$username = $this->wordify(stripslashes($_POST['username']),1);
			$username = strtolower($username);
			$password = $this->SHA($_POST['password']);

			$sql = "SELECT * FROM users WHERE usuere='$username' AND ikasiye='$password' LIMIT 1";
			$see = $this->get_this_datas("email","users","usuere='$username' AND ikasiye='$password'");

		if(!$this->result = $this->connection->query($sql))
			{
			header('Location: ../login.php?yesiwire');
			}
			 //$this->test_here("$sql",1);
		//Fetch Details of valid user
		while($row= $this->result->fetch_assoc()){
			$usrid 		= $row['usuere'];
			$pwd 		= SHA1($row['ikasiye']);
			$emcactive 	= $row['active'];
			$inreason 	= "";//$row['res_inactive'];
			$acc_type 	= $row['account_type'];
			$last_log	= $row['lastactive'];
			$count+=1;
			}

		if ($count>=1){
			if($emcactive < 1){
			$_SESSION['inreason'] = $reason;
			header('location: ../login.php?paka=ikasiwire');exit();
			}
					
			if (isset($_POST['rememberme'])) {
				//COMBINE SESSION WITH COOKIE
			} else {
            /* Session expires after browser is closed */
				$_SESSION[$this->userboid] = $usrid;
				$_SESSION[$this->user] = $usrid;
				$_SESSION['ikasiye'] = md5($pwd);
				$_SESSION['emcactive'] = $emcactive;
				$_SESSION['acc_type'] = $acc_type;
				$_SESSION['last_access'] = $last_log;
				$_SESSION['expsession'] = time();
				if(isset($_COOKIE["usertry"]))setcookie("usertry",$_COOKIE["usertry"], time()-60*60*24*356);
				}
			//Indicate Online Status	
			$online_user = "UPDATE users SET online = 1, lastactive = now() WHERE usuere='$usrid'";
			$this->dugoye($usrid, "Logged In");
			$this->connection->query($online_user);
			header('Location: ../index.php');
        
		} else{
				$_COOKIE["usertry"]++; 
				setcookie("usertry",$_COOKIE["usertry"], time()+60*60*1); /*cookie that will block user from guessing password; will expire only after 1hour*/
				header('location: ../login.php?paka=invalid');
				}
		}else{
			header('Location: ../login.php?paka=jk45j345gj34g5j3g5345gkj4s');
			}
	}
	
	public function CreateNewUser(){
	$exception = array("password","password2","email");		
	if($_POST['password'] != $_POST['password2']){
		$this->goto_notify(1,"Password Inconsistency");
	}	
		
	$createdby 	= $this->wordify($_POST['admin'],1);
	$postedregno 	= $this->wordify($_POST['username'],1);
	$postedpwd		= $_POST['password'];	
	$postedpwd2		= $_POST['password2'];	
	$postedacctype	=(int)$_POST['acc_type'];	
	$postedfname	= $this->wordify($_POST['firstname']); 
	$postedlname	= $this->wordify($_POST['lastname']);
	$altemail		= $this->wordify($_POST['email'],1);	
	$status			= (int)$_POST['status'];	
	$postedpwd	= $this->SHA($postedpwd);
	$this->startAlpha($postedfname,$postedlname);
	$name = $postedfname.$postedlname ; 	
	$this->testshort($postedregno,$name);
	$this->existing_user($postedregno);
	// "INSERTING INTO TABLE";
	if($stmt = $this->connection->prepare("INSERT INTO users(usuere, first_name, last_name, fullname, ikasiye, account_type, email, active) values(?,?,?,?,?,?,?,?)")){
		$stmt->bind_param('sssssssi', $regno, $firstname, $lastname,$fullname,$pwd, $acctype, $email, $status);
		
		$regno 		= $postedregno;
		$firstname	= $postedfname;
		$lastname 	= $postedlname;
		$fullname	= "$firstname $lastname";
		$pwd 		= $postedpwd;
		$acctype	= $postedacctype;
		$email		= $altemail;
		$stmt->execute();
		$this->dugoye($this->adminregno, "$createdby Created New User: $regno");
		$stmt->close(); 
		$this->goto_notify("../user-list.php","USER CREATED!");
		}else{
			/* Error */
			echo "Prepared Statement Error: ";
			}
			echo "unknown Error";exit();
	}//End of Create_NewUser
	
	
	public function UpdateUser(){
	$updater 	= $this->wordify($_POST['admin'],1);
	$postedregno 	= $this->wordify($_POST['username'],1);
	$islocked = $this->get_this_data("lock_account","users","usuere",$postedregno);
	$oldpass = $this->get_this_data("ikasiye","users","usuere",$postedregno);
	if($updater!=$postedregno AND $islocked>='1'){
		$this->goto_notify("../user-list.php","Access Denied! System Admin Account Cannot be Modified");
	die();
	}
	$new_password		= $_POST['password'];
	if($new_password !=""){
	$new_password = $this->SHA($new_password);

	$this->change_user_password($updater,$postedregno,$new_password,$alert=0);	
	}

	$last_name		= $this->wordify($_POST['lastname']);
	$first_name		= $this->wordify($_POST['firstname']); 
	$fullname = "$first_name $last_name";
	$account_type = (int)$_POST['acc_type'];
	$email		= $this->wordify($_POST['email'],1);
	$active			= (int)$_POST['status'];
	$this->startAlpha($first_name,$last_name);
	$name = $first_name.$last_name ; 	
	$this->testshort($postedregno,$name);

	if($stmt = $this->connection->prepare("UPDATE users SET last_name=?, first_name=?, fullname=?, account_type=?, email=?, active=? WHERE usuere=?")){
	$stmt->bind_param('sssisis', $last_name, $first_name, $fullname, $account_type, $email, $active, $postedregno);
	if($stmt->execute()){
	$this->dugoye($this->adminregno, "$updater Updated $postedregno's Account");
	//$stmt->close();
	$this->goto_notify("../user-list.php","Account Successfully Updated");

	}else{
	$this->dugoye($this->adminregno, "Error while $updater was updating $postedregno's Account. Reason: ".$this->connection->error);
		$this->goto_notify(1,"Error!, Please Try Again Later (More Details in Log)");
	}
}
	}//End of UpdateUser
	
	public function startAlpha($postedfname,$postedlname){
		if(((int)$postedfname !=0 ) || ((int)$postedlname !=0)){
		$this->goto_notify(1,"Entered Name is Not Acceptable");
		}
	}
	
	public function change_password($user_id,$oldpwd,$new_password){
		$verify_pwd_sql = "SELECT ikasiye FROM users  WHERE usuere = '$user_id' AND ikasiye = '$oldpwd'  LIMIT 1";
		if(!$this->result = $this->connection->query($verify_pwd_sql)){
		$this->goto_notify(1,'Encountered error While Updating Your Last Records\nPlease Try again Later');
		}
		$i=0;
		while($row = $this->result->fetch_assoc()){
		$oldpwd_bak  = $row['ikasiye']; 
		$i++;
		}
			if($i>0){
			$read_sql = "update users SET ikasiye = '$new_password', old_passwd = '$oldpwd_bak' WHERE usuere='$user_id'";
			if($this->connection->query($read_sql)){
			$this->dugoye($user_id, "Changed Password");
			$this->goto_notify("?paka=1","Password Successfully Changed!");
			}else{
			$this->goto_notify(1,"Error! ");
				}
			}else{
			$this->goto_notify(1,"Specified Current Password is Invalid!");
			}
		}
	
	public function change_user_password($adminid,$usersid,$new_password,$alert=1){
		$islocked = $this->is_account_locked("usuere","$usersid");
		if($islocked >=1){
		$this->dugoye($this->adminregno, "$adminid Attempted To Change System Admin($usersid) Password");
		$this->goto_notify(1,'ACCESS DENIED!');
		}
		$verify_user_sql = "SELECT ikasiye FROM users  WHERE usuere = '$usersid'  LIMIT 1";
		if(!$this->result = $this->connection->query($verify_user_sql)){
		$this->goto_notify(1,'Encountered error While Verifying UserID');
		}
		$i=0;
		while($row = $this->result->fetch_assoc()){
		$oldpwd_bak  = $row['ikasiye']; 
		$i++;
		}

		if($i>0){
		$read_sql = "UPDATE users SET ikasiye = '$new_password', old_passwd = '$oldpwd_bak' WHERE usuere='$usersid'";
		if($this->connection->query($read_sql)){
		$this->dugoye($this->adminregno, "$adminid Changed Password for $usersid");		
			if($alert==0)return 1;
			$this->goto_notify(1,"Password Successfully Changed!");
		}else{
			$this->dugoye($this->adminregno,"Failed to Change Password, Reason: ".$this->connection->error);		
			$this->goto_notify(1,"Error! Unable to Change Password, Please Try Again Later");
			}
		}else{
		$this->goto_notify(1,"The Specified UserID '$usersid' Could Not Be Found!");
		}
		}
		
	public function wordify($word,$type=0){
		if($type==0) return $this->connection->real_escape_string(htmlspecialchars(trim(ucwords(strtolower($word)))));
		else return $this->connection->real_escape_string(htmlspecialchars(trim($word)));
	}

	public function printify($word,$type=0){
	$order = array('&lt;br /&gt;\r\n','&lt;br /&gt;');
	$word = str_replace($order,"<br>",$word);
	if($word=="") return;
	if(is_array($word)) $this->goto_notify(1,"Error! Wrong Datatype Recieved, Please Try Again");
	if($type==0){
	$word = strtolower($word);
	$wrdarr = explode("-",$word);
	$wordlist=array_map(function($wrdarr){ return ucwords($wrdarr);}, $wrdarr);
	$word = implode("-",$wordlist);
	return trim(stripslashes($word));
	}
	else return trim(stripslashes($word));
	}
	
	public function get_this_data($targetfield,$fromtable,$sourcefield,$keyword, $orderby = ""){
	$data = "";
	$sql = "SELECT $targetfield FROM $fromtable WHERE $sourcefield = '$keyword' $orderby LIMIT 1";
	if(!$result = $this->connection->query($sql))
	{
	$this->goto_notify(1,'Encounteredsss error fetching data '.$this->connection->error);
	}
	while($row = $result->fetch_assoc()){
	$data = $this->printify($row[$targetfield],1);	
	}
	return $data;
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

	public function is_account_locked($usrnamefield,$user_tocheck){
		$lockstate = (int)$this->get_this_data("lock_account","users","$usrnamefield",$user_tocheck);
		return $lockstate;
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

	$chk_existin_sql = "SELECT usuere FROM users  WHERE usuere = '$username' LIMIT 1";
			if(!$this->result = $this->connection->query($chk_existin_sql))
			{
			$this->goto_notify(1,"Encountered error While Checking Existing Records");
			}
		$i=0;
		while($row = $this->result->fetch_assoc()){ 
			$i++;
		}
		if($i>0){
		$this->goto_notify(1,"The Username '$username' Already Exists");
		}
	}
	
	public function testshort($UserID,$Name){
			$seeshort = compact("UserID","Name");
			foreach($seeshort as $k => $v){
				if(strlen($v) <3 ){ 
				$this->goto_notify(1,'$k is too short to be Valid');
				}
			}
	}//End of Testshort Function
		
	public function SHA($pd){
		$pd = SHA1(substr($_POST['username'],-3).$pd);	return $pd;
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
		$online_user = "UPDATE users SET online = 0 WHERE usuere='$usrid'";
		$this->dugoye($usrid, "Logged Out");
		$this->connection->query($online_user);
		if($logout==1){
		header("location:../login.php?paka=loggedout");
		exit();
		}else{header('Location: login.php?paka=jgjrtydxr');}
		exit();		
	}
	
	public function test_here($txt="", $mode=0){
			if($mode!=0){
			echo "
			<script>
			alert(\"$txt\");
			</script>
			";
			}
			else{ echo "$txt"; }
			exit();
	}
	
	public function dugoye($wh,$dw,$why=""){
	$wh=$this->wordify($wh,1);$dw=$this->wordify($dw,1);$why=$this->wordify($why);
	if($stmt = $this->connection->prepare("INSERT INTO yemedugo(who,didwhat,why) values(?,?,?)")){$stmt->bind_param('iss', $wh, $dw, $why);
	$stmt->execute();$stmt->close(); return 1;
	}else{return 0;}
	}
	
	public function close_connection(){
	if(isset($this->connection)){
	$this->connection->close();
	unset($this->connection);}
	}

}//END of CLASS
$SESSCON = new SESSION_CONNECT;
$SESSCON->open_connection();

	
	if(isset($_POST['loginForm'])){
		if(!empty($_POST['username']) && !empty($_POST['password'])){
		$SESSCON->login();
		$SESSCON->close_connection();
		exit("whats?");
		}else{
		header('location: ../login.php?paka=invalid');
		}
	}
	elseif(isset($_POST['submitregform']))
		{
		$SESSCON->CreateNewUser();
		}	
		elseif(isset($_POST['submitupdform']))
		{
		$SESSCON->UpdateUser();
		}
	elseif(isset($_GET['paka']))
		{
		$SESSCON->logout();
		}
	elseif(!defined('MyInc')){
		$SESSCON->goto_notify("?paka=1",""); 
		}
?>