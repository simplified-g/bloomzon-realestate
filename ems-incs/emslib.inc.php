<?php date_default_timezone_set("Africa/Lagos");
require("igbe.inc.php");
require("class.phpmailer.php");

/*
Author: 		Thesent George
Company Name: 	Emiserve Technologies
Purpose:		Emiserve Code Library for Emiserve Admin Control Panel
				Designed as a  content management system for all emiserve web projects.
licence:		All rights reserved, this application may not be copied, used or
 				distributed in full or in part without explicit permission from the author or emiserve technologies.
*/

class emslib{
var $DB_SERVER;var $DB_USER;var $DB_PWD;var $DB_NAME;var $connection;private $result;
var $user_id; var $acc_type;var $cathome; var $user ='usere';var $userboid ='usueboid';var $myname;
var $domain = "http://www.emiserve.com/apps/emscms_new/";
var $basepath = "g-project/bloomzon-estate";//CHANGE THIS WHEN DEPLOYING ONLINE
var $longpath = "https://www.bloomzon-properties.com"; 
var $app_mobile; var $app_portal ="";
	public function open_connection(){
	global $DB_SERVER,$DB_USER,$DB_PWD,$DB_NAME, $basepathg;
	$this->basepath = $basepathg;
	date_default_timezone_set("Africa/Lagos");
	$this->connection= $mysqli= new mysqli($DB_SERVER, $DB_USER, $DB_PWD, $DB_NAME);	
	if($mysqli->connect_error){  echo "Failed to connect to Database:";	}
	}
		
	static function modsuwa($tiye){
	if($tiye != ""){
	if(file_exists("incs/$tiye"))
		{
		include("incs/$tiye"); 
		return true;
		}
	else
		{
		echo "<h4>Unable To Load All Required Modules!</h4>";	
		}
	}
	}/*End of modsuwa*/	
	
	public function fill_series($strt=0,$end=0,$printMode=0){
		if($printMode==1){
			for ($i=$strt; $i<=$end; $i++)
			{
			printf("<option value='%02d'>%02d</option>", $i,$i);
			}
		}elseif($printMode=="r"){
			for ($i=$strt; $i>=$end; $i--)
			{
			echo "<option value='$i' >$i</option>\n";
			}
		}else{
			for ($i=$strt; $i<=$end; $i++)
			{
			echo "<option value='$i' >$i</option>\n";
			}
		}
	}
	
	public function get_all_in_field_checkbox($infield="id",$outfield="surname",$table="std_details",$sort=1,$where=1){
		if($sort==0){
		$sql = "SELECT DISTINCT $infield, $outfield FROM $table WHERE $where";
		}else{
		$sql = "SELECT $infield, $outfield FROM $table WHERE $where GROUP BY $outfield ORDER BY $outfield";
		}
		if(!$result = $this->connection->query($sql)){
		die('Encountered Error [' . $this->connection->error . ']');}
		$thisfield = "";$k=0;
		while($row = $result->fetch_assoc()){
		if($row["$outfield"]=="")continue;
		$thisfield .= "<input type='checkbox'  name='{$infield}[]' value='{$row["$infield"]}' checked>{$row["$outfield"]}<br>";
		$k++;
		}
		return $thisfield;
	}

	public function get_all_in_field_inout($infield="id",$outfield="title",$table="",$sort=1,$where=1,$blank=1,$toselect=""){
		if($sort==1){
		$sql = "SELECT DISTINCT $infield, $outfield FROM $table WHERE $where ORDER BY $outfield";
		}elseif($sort==12){
		$sql = "SELECT DISTINCT $infield, $outfield FROM $table WHERE $where ORDER BY $outfield DESC";
		}elseif($sort==2){
		$sql = "SELECT DISTINCT $infield, $outfield FROM $table WHERE $where ORDER BY $infield";
		}elseif($sort==22){
		$sql = "SELECT DISTINCT $infield, $outfield FROM $table WHERE $where ORDER BY $infield DESC";
		}elseif($sort==3){
		$sql = "SELECT DISTINCT $infield, $outfield, job_type FROM $table WHERE $where ORDER BY $outfield ";
		}else{
		$sql = "SELECT DISTINCT $infield, $outfield FROM $table WHERE $where";
		}

		if(!$result = $this->connection->query($sql)){
		die('Encountered Error [' . $this->connection->error . ']');}
		$thisfield = ($blank==0)?"":"<option value='' > </option>";
		while($row = $result->fetch_assoc()){
			$selected = $toselect == $row["$infield"]?"selected":"";
			if($sort==3){
		$thisfield .= "<option value='{$row["$infield"]}__{$row["$outfield"]}__{$row["job_type"]}' $selected>{$row["$outfield"]}</option>";
		}else{
		$thisfield .= "<option value='{$row["$infield"]}__{$row["$outfield"]}' $selected>{$row["$outfield"]}</option>";
		}
		}
	return $thisfield;	
	}/*End of get_all_in_field_inout function*/
	
	public function get_all_in_field($field="surname",$table="std_details",$sort=1){
		if($sort==0){
		$sql = "SELECT DISTINCT $field FROM $table";
		}else{
		$sql = "SELECT DISTINCT $field FROM $table ORDER BY $field";
		}
		if(!$result = $this->connection->query($sql)){
		die('Encountered Error [' . $this->connection->error . ']');}
		$thisfield = "<option value='' > </option>";
		while($row = $result->fetch_assoc()){
		$thisfield .= "<option value='{$row["$field"]}' >{$row["$field"]}</option>";
		}
	return $thisfield;	
	}//End of get_all_in_field function
	
	public function get_all_into_array($field="regno",$table="std_details",$where=1,$sort=1,$distinct=0){
	if($distinct==0){$sql = "SELECT ";
		}else{
		$sql = "SELECT DISTINCT ";
		}
		if($sort==0){
		$sql .= "$field FROM $table WHERE $where";
		}else{
		$sql .= "$field FROM $table WHERE $where ORDER BY $field";
		}
		
		if(!$result = $this->connection->query($sql)){
		die('Encountered Error [' . $this->connection->error . ']');}
		$thislist = array();
		while($row = $result->fetch_assoc()){
		$thislist[] = $row["$field"];
		}
	return $thislist;	
	}//End of get_all_into_array function
	
	public function get_all_into_assocarray($field="regno",$table="std_details",$extras=""){
		
		$sql = "SELECT id, $field FROM $table $extras";
		if(!$result = $this->connection->query($sql)){
		die('Encountered Error [' . $this->connection->error . ']');}
		$thislist = array();
		while($row = $result->fetch_assoc()){
		$thislist[$row['id']] = $row["$field"];
		}
	return $thislist;	
	}//End of get_all_into_array function
		
	public function get_reg_record($field1="surname",$field2="othernames",$table="staff_details",$where="1",$sort="surname"){		
	$sql = "SELECT regno, $field1, $field2 FROM $table WHERE $where ORDER BY $field1";
	if($table=='customers'){
	$sql = "SELECT regno, $field1, $field2 FROM $table WHERE $where ORDER BY fullname";
	}
	
	if(!$result = $this->connection->query($sql)){
    $this->goto_notify(1,'Error [' . $this->connection->error . ']');}
	$thisfield = "<option value='' ></option>";
	while($row = $result->fetch_assoc()){	
	$thisfield .= "<option value='{$row["regno"]}' title='{$row['regno']}' data-subtext='{$row["regno"]}'>" . $this->wordify($row["$field1"]) . " " .$this->wordify($row["$field2"]) .  "</option>";
	}
	return $thisfield;	
	}/* End of get_reg_record function */

	public function regno_to_name($regno,$table="staff_details"){
		$sql = $thisname = "";
		if($table != ""){
		$field1 = "surname"; $field2="othernames";
		$sql = "SELECT surname,othernames FROM $table WHERE regno='$regno' LIMIT 1";
		}
		$notstaff = 0;
		if($table != "staff_details"){
			$notstaff = 1;
		$field1 = "fullname";
		$sql = "SELECT fullname FROM $table WHERE regno='$regno' LIMIT 1";
		}
		
		if($sql != ""){
			if(!$result = $this->connection->query($sql)){
			die('Encountered Error'.$this->connection->error);}
			while($row = $result->fetch_assoc()){
				if($notstaff==1){
				$thisname = $row["$field1"];			
				}else{
				$thisname = $row["$field1"]." ".$row["$field2"];
				}
			}
		}
		return $this->printify($thisname);
	}
	
	public function get_this_data($targetfield,$fromtable,$sourcefield,$keyword, $orderby = ""){
	$data = "";
	/* orderby needs to have the keyword 'ORDER BY' */
	$sql = "SELECT $targetfield FROM $fromtable WHERE $sourcefield = '$keyword' $orderby LIMIT 1";
	if(!$result = $this->connection->query($sql))
	{
	$this->goto_notify(1,'Encounteredsss error fetching data '.$this->connection->error);
	}
	while($row = $result->fetch_assoc()){
	$data = $this->printifyhtml($row[$targetfield],1);	
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
	$data = $this->printify($row[$targetfield],1);	
	}
	return $data;
	}
	
	public function update_this_data($targettable,$targetfield,$value,$searchfield,$keyword){
		$data = "";
		$sql = "UPDATE $targettable SET $targetfield = '$value' WHERE $searchfield = '$keyword' LIMIT 1";
		if(!$result = $this->connection->query($sql))
		{
		$this->goto_notify(1,'Encountered error, Please Try later');
		}else{
		return 1;
		}
	}
	
	public function count_recs($table="",$field="",$value=-1){
	$result="";
	if($value==-1){
	$sql = "SELECT COUNT(*) FROM $table WHERE 1";
	$result = $this->connection->query($sql);
	}else{
	$sql = "SELECT COUNT(*) FROM $table WHERE $field = '$value'";
	if($result = $this->connection->query($sql)){
	}
	}
		if($result !=""){
		$row = $result->fetch_array();
		return array_shift($row);
		}
	return -1;
	}
		
	public function delete_this_data($table="",$field="",$value=0){
	$sql="";
	$table = $this->wordify($table,1);
	$field = $this->wordify($field);
	$value = $this->wordify($value);
	$sql="DELETE FROM $table WHERE $field = $value";
	if($table!="" && $field!=""){
	if($result = $this->connection->prepare($sql)){
		$result->execute();
		$result->close();
		return $this->connection->affected_rows;
		}else{
		return $this->my_notifier("Unable to Delete Selected Item, Please try again later!".$this->connection->error,2);	
		}
		}	
	}
	
	public function return_this_query($sql){
	$result="";
	$type = substr($sql,0,6);
	if($result = $this->connection->query($sql)){
	}
		if($result !=""){
		if($type=="UPDATE" || $type=="DELETE") return 1;
		$row = $result->fetch_array();
		if(is_array($row)){return array_shift($row);}
		else{ 		
		$this->dugoye((int)$_SESSION['ems_usueboid'], "Query Failed! ($sql), Reason: ".$this->connection->error);
		return -1;
		}
		}
		$this->dugoye((int)$_SESSION['ems_usueboid'], "Query Failed! $sql, Reason: ".$this->connection->error);
	return -1;
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
	
	public function my_notifier($msg,$mode=1,$close=0){
		return $this->just_notify($msg,$mode,$close);
	}
	
	public function just_notify($msg,$mode=1,$close=1){
		$closebtn=$close==1?"<a href='#' class='close' data-dismiss='alert'>&times;</a>":"";
		$style = $this->bootstyle($mode);
		$msg = "<div class='alert alert-$style'>
		$closebtn
        $msg
		</div>";
		return $msg;
	}

	public function bootstyle($mode){
		switch($mode){
			case 1:return "success";
			case 2:return "danger"; 
			case 'success':return "success";
			case 'danger':return "danger"; 
			case "primary":return "primary"; 
			case 'info':return "info"; 
			case 'warning':return "warning"; 
			case 'dark':return "dark"; 
			case 'light':return "light"; 
			case 'secondary':return "secondary"; 
			case 'default':return "default"; 
			default:return "success"; 
		}
	}

	public function set_server_msg($msg,$mode=1){
		$this->begin_session();
		$_SESSION['server_msg'] = isset($_SESSION['server_msg'])?$_SESSION['server_msg']."$msg": "<p>$msg</p>";
		$_SESSION['msgtype'] = $mode;
	}
	
	public function show_server_msg(){
		$this->begin_session();
		$msg	=	isset($_SESSION['server_msg'])?$this->printify($_SESSION['server_msg'],1):"";
		$mode 	= isset($_SESSION['msgtype'])?(int)$_SESSION['msgtype']:0;
		$_SESSION['server_msg'] = null;
		$_SESSION['msgtype'] = null;
		return $msg==""?"":$this->just_notify($msg,$mode,1);
	}
	
	public function wordify($word,$type=0){
		if($type==0){
		$word = strtolower($word);
		$wrdarr = explode("-",$word);
		$wordlist=array_map(function($wrdarr){ return ucwords($wrdarr);}, $wrdarr);
		$word = implode("-",$wordlist);
		return $this->connection->real_escape_string(htmlspecialchars(trim($word)));
	}
		else return $this->connection->real_escape_string(htmlspecialchars(trim($word)));
	}
	
	public function int_array($items,$z=1){
		$newarray = array();
		$format = "%0".$z."d";
		foreach($items as $item){
		$num = (int)$item;
		$newarray[] = sprintf($format,$num);
		}
		return $newarray;
	}
	
	public function wordify_array($arrwords,$type=0){
		foreach($arrwords as $word){
			$newwords[] = $this->wordify($word,$type);
		}
		return $newwords;
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
	
	public function printifyhtml($word,$type=0){
		if($type==0) return ucwords(stripslashes(strtolower($this->convert_RN(htmlspecialchars_decode(trim($word))))));
		else return stripslashes($this->convert_RN(htmlspecialchars_decode(trim($word))));
	}
	
	public function convert_RN($str){
	$str = nl2br($str);
	//This Function Converts all newlines in string written in \n\r to <br/>
	$order   = array("\\r\\n", "\\r", "\\n","<script","</script>","<?","?>");
$replace = "";
// Processes \r\n's first so they aren't converted twice.
$newstr = str_replace($order, $replace, $str);
return $newstr;
}

public function callname($name,$minlen=15){
$name = trim($name);
if(strlen($name)<=$minlen){ return $this->printify($name,1);
    }else{
    $namearr = explode(" ",$name);
    for($i=0;$i<count($namearr)-1;$i++){ array_pop($namearr); $name=implode(" ",$namearr);
				if(strlen($name)<=$minlen){
			return $this->printify($name,1);
				}
			}
			$name = substr($name,0,13);
			return $this->printify($name,1);
		}
	}
	
	public function id_to_title($id,$table=" case_types"){ $sql=$thistitle="" ; if($table=="case_types" ){ $field="title"
        ; $sql="SELECT $field FROM $table WHERE id='$id' LIMIT 1" ; }elseif($table=="fixed_options" ){ $field="foptions"
        ; $sql="SELECT $field FROM $table WHERE id='$id' LIMIT 1" ; } if($sql !="" ){ if(!$result=$this->
        connection->query($sql)){
        die('Encountered Error [' . $this->connection->error . ']');}
        while($row = $result->fetch_assoc()){
        $thistitle = $row["$field"];
        }
        }
        return $thistitle;
        }

        public function send_sms($receiver,$msg){
        $portal=strtolower($this->get_this_data("var_value","app_variables","var_name","APP_PORTAL"));
        if($portal=='-1' || $portal==""){
        return "0: Unable To Send Message: Portal URL not Defined!";
        }
        $sender=$this->get_this_data("var_value","app_variables","var_name","APP_SHORTCODE");
        if($sender=='-1' || $sender==""){
        return "0: Unable To Send Message: Sender Not Defined!";
        }
        $owneremail = $this->get_this_data("var_value","app_variables","var_name","APP_SMSEMAIL");
        $subacct = $this->get_this_data("var_value","app_variables","var_name","APP_SMSAPI");
        $subacctpwd = $this->get_this_data("var_value","app_variables","var_name","APP_SMSPWD");
        if($this->test_this_mobile($receiver) !=1){return "0: Invalid Phone Number";}
        $sender = $this->get_this_data("var_value","app_variables","var_name","APP_SMSNAME");
        $url = "http://www.smslive247.com/http/index.aspx?"
        . "cmd=sendquickmsg"
        . "&owneremail=" . UrlEncode($owneremail)
        . "&subacct=" . UrlEncode($subacct)
        . "&subacctpwd=" . UrlEncode($subacctpwd)
        . "&message=" . UrlEncode($msg)
        . "&sender=" . UrlEncode($sender)
        . "&sendto=" . UrlEncode($receiver)
        . "&msgtype=0";
        /* call the URL */
        if ($f = @fopen($url, "r"))
        {
        $answer = fgets($f, 255);
        if (substr($answer, 0, 2) == "OK")
        { $status = 1;
        return 1;
        }
        else{
        return "0: $answer";
        }
        }
        else{
        return "404: No internet Connectivity";
        }
        }

        public function send_gmail($recemail,$recname,$msgsubject,$msgcontent){
        $mail = new PHPMailer(true);
        if($this->test_this_email($recemail) !=1){return "0: Invalid Email ($recemail)";}

        //Send mail using gmail
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
        $mail->Port = 465; // set the SMTP port for the GMAIL server
        $mail->Username = $sender = $this->get_this_data("var_value","app_variables","var_name","APP_EMAIL");
        $sendername = $this->get_this_data("var_value","app_variables","var_name","APP_SMSNAME");
        $mail->Password = $this->get_this_data("var_value","app_variables","var_name","APP_EMAILPWD");

        //Typical mail data
        $mail->AddAddress($recemail, $recname);
        $mail->SetFrom($sender, $sendername);
        $mail->Subject = $msgsubject;
        $mail->Body = $msgcontent;

        try{
        $mail->Send();
        return 1;
        }
        catch(Exception $e){
        //Something went bad
        return "0 $e";
        }
        }

        public function SHA($regno,$pd){
        $pd = SHA1(substr($regno,-3).$pd);
        return $pd;
        }

        public function generate_token($table,$tokenfield = "token",$startserial="1000"){
        $table = $this->wordify($table,1);
        $lasttoken = (int)$this->get_this_datas($tokenfield,"$table","1","ORDER BY `$tokenfield` DESC LIMIT 1");

        $newtoken = ($lasttoken > 0)?$lasttoken+1:$startserial;
        return $newtoken;
        }

        public function test_token($table,$token,$tokenfield = "token"){
        $table = $this->wordify($table,1);
        $tokenexists = (int)$this->get_this_data($tokenfield,"$table",$tokenfield,$token);
        return $tokenexists;
        }

        public function test_here($txt="", $mode=0,$exit=1){
        if($mode!=0){
        echo "
        <script>
        alert(\"$txt\");
        </script>
        ";
        }
        else{ echo "$txt"; }
        if($exit==1)exit();
        }

        public function test_array($assoc_array,$exit=1){
        if(!(is_array($assoc_array)))$this->test_here("$assoc_array - Is Not An Array");
        if(count($assoc_array)<=0)$this->test_here("Array Is Empty",1);
            foreach($assoc_array as $k => $v){
            if(is_array($v)){
            foreach($v as $i => $j){
            echo "$k=> $i = $j <br>";
            }
            }else{
            echo "$k = $v <br>";
            }
            }
            if($exit==1)exit();
            }

            public function test_post($exit=1){
            foreach($_POST as $k => $v){
            if(is_array($v)){
            foreach($v as $i => $j){
            echo "$k=> $i = $j <br>";
            }
            }else{
            echo "$k = $v <br>";
            }
            }
            if($exit==1)exit();
            }

            public function test_form($strict=0){
            $exception = array("qualific","submit_reg","address","submit");
            $pattern = ($strict==1)?"/[^A-Za-z0-9\ \_]/":"/[^A-Za-z0-9\ \.\,\_\-\+\'\&\@]/";
            foreach($_POST as $k => $v){
            if(in_array($k,$exception)){continue;}
            if(is_array($v)){
            foreach($v as $i => $j){
            if(preg_match($pattern, $j)){
            $this->goto_notify(1,"$j Contains Invalid Characters");
            }
            }
            }
            else{
            if(preg_match($pattern, $v)){
            $this->goto_notify(1,"$k Contains Invalid Characters");
            }
            }
            }
            }

            public function test_this_mobile($mobile){
            /*Test Mobile number if valid or not*/
            $invalidmobers = array();
            $mobile = str_replace("+","",$mobile);
            $mobile = str_replace(";",",",$mobile);
            if($mobile == "")return 0;
            $multimobile = explode(",",$mobile);
            foreach($multimobile as $number){
            if(preg_match("/^(234)[7-9?]\d{9}$/", $number) OR preg_match("/^0{1}[7-9?]\d{9}/",
            $number)){}else{$invalidmobers[] = $number;}
            }
            if(count($invalidmobers)>0){
            $invalidset = implode(",",$invalidmobers);
            return $invalidset;
            }else{return 1;}
            }

            public function test_this_email($email,$mode=0){
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){return 0;}return 1;
            }

            public function test_form_isblank(){
            $exception =
            array("othernames","religion","thirdchoice","parent_email","parent_address","other_qualifications","issponsor","addi_info","submit_reg","tokenno","submit");
            foreach($_POST as $k => $v){
            if(in_array($k,$exception)){continue;}
            if(is_array($v)){
            foreach($v as $i => $j){
            if(empty($j)){
            $this->goto_notify(1,"$j Cannot Be Blank");
            }
            }
            }
            else{
            if(empty($v)){
            $this->goto_notify(1,"$k Cannot Be Blank");
            }
            }
            }
            }

            public function get_age($dob){
            if($dob!=""){$dobarr = explode("-",$dob);
            $yob = $dobarr[0];
            $mob = $dobarr[1];
            $ddob = $dobarr[2];

            $cy = date("Y");
            $cm = date("m");
            $cd = date("j");
            $age = $cy - $yob;
            if(($cm<$mob) OR ($cm==$mob && $cd<$ddob)){$age-=1;} return $age; } else return 0; } public function
                start_alpha($name){ if((int)$name !=0 ){ $this->goto_notify(1,"Entered Name is Not Acceptable");
                }
                }/* end of start_alpha */

                public function currencify($amount,$curr="N"){
                if($amount=="") return $amount;
                return $curr . number_format($amount);
                }

                public function date_convert($date,$format="D, jS M, Y"){
                $thday = strtotime($date);
                $thisdate = date($format,$thday);
                return $thisdate;
                }

                public function days_elapsed($datefrom, $dateto="", $difformat='%a'){
                if($datefrom=="0000-00-00 00:00:00")return "Never";
                $dateto = ($dateto=="")?date('Y-m-d'):$dateto;
                $from = date_create($datefrom);
                $to = date_create($dateto);
                $interval = date_diff($from, $to);
                $result = $interval->format($difformat);
                $days = $result!="1"?" Days":"day";

                return $result . "$days Ago";
                }

                public function days_in_month($month, $year){
                // returns number of days in a month, bettr than the one in eschools
                return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7
                % 2 ? 30 : 31);
                }

                public function _IS_WHO($regno, $who="staff"){
                $who = strtolower($who);
                if($who == ""){
                return 0;
                }
                if($who == "staff"){
                return $this->count_recs("staff_details","regno",$regno)>=1?1:0;
                }
                if($who == "customers"){
                return $this->count_recs("customers","regno",$regno)>=1?1:0;
                }
                if($who == "admin"){
                $adminrole = (int)$this->get_this_datas("role_id","yeayi_assigned","regno='$regno' AND role_id<=2");
                    if($adminrole>=1) return 1; else return 0;

                    }
                    return 0;
                    }

                    public function dugoye($wh,$dw,$why=""){
                    $wh=(int)$wh;$dw=$this->wordify($dw,1);$why=$this->wordify($why);
                    if($stmt = $this->connection->prepare("INSERT INTO yemedugo(who,didwhat,why)
                    values(?,?,?)")){$stmt->bind_param('iss', $wh, $dw, $why);
                    $stmt->execute();$stmt->close(); return 1;
                    }else{return 0;}
                    }

                    public function view_my_logs($viewer,$perPage=100,$is_recent=0){
                    $isadmin = $this->_IS_WHO($viewer,"admin");
                    $where = $isadmin==0?"WHERE who = '$viewer'":"";
                    //============paginator =============
                    $thesql = "FROM yemedugo $where";
                    $this->paginator_create($thesql,$total,$numofPages,$perPage,$startAt,$pageNo,$prev,$next);
                    //!============paginator =============

                    $sql = "SELECT who,didwhat,why,DATE_FORMAT(wen, '%a %D, %b %Y - %h:%m:%s') FROM yemedugo $where
                    ORDER BY wen DESC LIMIT $perPage OFFSET $startAt";
                    if(!$result = $this->connection->query($sql)){
                    return $this->my_notifier('Error [' . $this->connection->error . ']',2);}
                    $who=$didwhat = $when = array();
                    $k=0;
                    while($row = $result->fetch_assoc()){
                    $who[] = (int)($row['who']);
                    $whoname[$k] =
                    ($this->regno_to_name($who[$k],"customers")=="")?$this->regno_to_name($who[$k],"staff_details"):$this->regno_to_name($who[$k],"customers");
                    $didwhat[] = $this->printify($row['didwhat']);
                    $when[] = $this->wordify($row["DATE_FORMAT(wen, '%a %D, %b %Y - %h:%m:%s')"]);
                    $k++;
                    }
                    $action=$is_recent==1?"<a href='view_logs.php' class='btn btn-info'>View All Activities</a>":"";
                    /*
                    Use this button when you can set only Superadmin role to clear log
                    <input type='submit' name='e' value='Clear System Logs' class='btn btn-danger btn-lg'>
                    */
                    $c = count($who);
                    $Records = $c==1?"Log":"Logs";
                    if($c<1){ return $this->my_notifier("Log Is Empty",2);
                        }
                        else{
                        $boxtitle = $isadmin==1?"Recent Activities":"Your Recent Activities";

                        echo"<div class='box box-info'>
                            <div class='box-header with-border'>
                                <h3 class='box-title'>$boxtitle</h3>
                                <div class='box-tools pull-right'>
                                    <button class='btn btn-box-tool' data-widget='collapse'><i
                                            class='fa fa-minus'></i></button>
                                    <div class='btn-group'>
                                        <button class='btn btn-box-tool dropdown-toggle' data-toggle='dropdown'><i
                                                class='fa fa-random'></i></button>
                                        <ul class='dropdown-menu' role='menu'>
                                            <li><a href='#'>Action</a></li>
                                            <li><a href='#'>Another action</a></li>
                                            <li><a href='#'>Something else here</a></li>
                                            <li class='divider'></li>
                                            <li><a href='#'>Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- /.box-header -->
                            <div class='box-body'>
                                <div class='table-responsive'>
                                    <table class='table no-margin'>
                                        <thead>
                                            <tr>
                                                <th scope='col'>S/N</th>
                                                <th scope='col'>Name</th>
                                                <th scope='col' style='width:50%'>Action</th>
                                                <th scope='col'>Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";

                                            for($i=0,$j=1;$i<$c; $i++,$j++){ echo "<tr>
			  <td>$j</td>
			  <td>{$whoname[$i]} ({$who[$i]})</td>
			  <td>{$didwhat[$i]}</td>
			  <td>{$when[$i]}</td>
			  </tr>" ; } echo " </tbody>
				<tfoot>
				<tr>
				<td colspan='4' class='text-center'>
				<form action='' method='POST' onsubmit='return confirmAction()'>
				$action
				</form>
				</td>
				</tr>
				</tfoot>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class='box-footer clearfix'>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
			  " ; } echo $is_recent==1?"":$this->show_pagination($thesql,$total,$numofPages,$perPage,$startAt,$pageNo,$prev,$next);
                                                }

                                                public function
                                                paginator_create($thesql,&$total,&$numofPages,&$perPage,&$startAt,&$pageNo,&$prev,&$next,&$sortby='id',&$sortmode=1){
                                                $total = (int)$this->count_sql($thesql);
                                                $total = ($total<=0)?1:$total; $perPage=(isset($_GET['q']) &&
                                                    $perPage==NULL)?(int)$_GET['q']:$perPage;
                                                    $perPage=($perPage<1)?2:$perPage; // use default 3 perPage
                                                    $perPage=isset($_GET['all'])?$total:$perPage;
                                                    $pageNo=isset($_GET['p'])?(int)$_GET['p']:1; $prev=$pageNo-1;
                                                    $next=$pageNo+1; $numofPages=ceil($total/$perPage);
                                                    $startAt=$perPage*($pageNo-1); if($pageNo < 1){ $startAt=0;
                                                    $pageNo=1; }elseif($pageNo> $numofPages){
                                                    $pageNo = $startAt = $numofPages;
                                                    }

                                                    $sortby = isset($_GET['sb'])?$this->printify($_GET['sb'],1):"id";
                                                    $sortmode = isset($_GET['sm'])?(int)$_GET['sm']:1;
                                                    if(!isset($_GET['p'])){
                                                    $sortmode = ($sortmode==1)?0:1;
                                                    }

                                                    }/*End of paginator_create*/

                                                    public function
                                                    paginator_show($thesql,$total,$numofPages,$perPage,$startAt,$pageNo,$prev,$next,$sortby='id',$sortmode=1){
                                                    echo " <div class='text-center'>
                                                        <ul class='pagination pagination-lg'>";
                                                            echo "
                                                            <li><a href='?p=1&q=$perPage&all=1&sb=$sortby&sm=$sortmode'>Show
                                                                    All</a></li>
                                                            ";
                                                            if($pageNo > 1){
                                                            echo "
                                                            <li>
                                                                <a href='?p=$prev&q=$perPage&sb=$sortby&sm=$sortmode'
                                                                    aria-label='Previous'>
                                                                    <span aria-hidden='true'>&laquo; Prev</span>
                                                                </a>
                                                            </li>
                                                            <li><a
                                                                    href='?p=1&q=$perPage&sb=$sortby&sm=$sortmode'>First</a>
                                                            </li>
                                                            ";
                                                            }
                                                            $i = ($pageNo-5>0)?$pageNo-5:1;

                                                            for(;$i<$numofPages;$i++){ if($i < ($pageNo+10) && $i <
                                                                ($pageNo+5)){ if($i==$pageNo){
                                                                echo "<li class='active'><a href='javascript:;'>$i</a></li>"
                                                                ; }else{
                                                                echo "<li><a href='?p=$i&q=$perPage&sb=$sortby&sm=$sortmode'>$i</a></li>"
                                                                ; } } if($i> ($pageNo+10) && $i < ($pageNo+20)){ echo ""
                                                                    ; } else{echo "" ;} } if($pageNo==$numofPages){
                                                                    echo "<li class='active'><a href='?p=$i&sb=$sortby&sm=$sortmode'>$i</a></li>"
                                                                    ; } elseif($pageNo < $numofPages){ echo "<li ><a href='?p=$numofPages&q=$perPage&sb=$sortby&sm=$sortmode'>$numofPages</a></li>
		<li><a href='?p=$numofPages&q=$perPage&sb=$sortby&sm=$sortmode'>Last</a></li>
		<li>
		<a href='?p=$next&q=$perPage&sb=$sortby&sm=$sortmode' aria-label='Next'>
        <span aria-hidden='true'>Next &raquo;</span>
      </a>
    </li>	
		" ; } echo " </ul></div>" ; }/*End of paginator_show Function*/ public function count_this_records($field=""
                                                                    ,$table="" ,$where=1){ $result="" ; if($where==1){
                                                                    $sql="SELECT COUNT(*) FROM $table WHERE 1" ;
                                                                    $result=$this->connection->query($sql);
                                                                    }else{
                                                                    $sql = "SELECT COUNT(*) FROM $table WHERE $where";
                                                                    if(!$result = $this->connection->query($sql)){
                                                                    /* error */
                                                                    }
                                                                    }
                                                                    if($result !=""){
                                                                    $row = $result->fetch_array();
                                                                    return array_shift($row);
                                                                    }
                                                                    return -1;
                                                                    }

                                                                    public function count_sql($sqltocount){
                                                                    $result="";
                                                                    if($sqltocount != ""){
                                                                    $sql = "SELECT COUNT(*) " . $sqltocount;
                                                                    $result = $this->connection->query($sql);
                                                                    $row = $result->fetch_array();
                                                                    return array_shift($row);
                                                                    }
                                                                    }

                                                                    public function get_http_referer($ct=0,$mode=0){
                                                                    $ref =
                                                                    isset($_SERVER['HTTP_REFERER'])?$this->printify(basename($_SERVER['HTTP_REFERER']),1):"javascript:history.back(1)";
                                                                    if($mode==1){
                                                                    $ct =
                                                                    isset($_REQUEST['ct'])?(int)$_REQUEST['ct']:$ct;
                                                                    $ref = preg_replace('/\?.*/', '',$ref)."?ct=$ct";
                                                                    }
                                                                    return $ref;
                                                                    }

                                                                    public function dates_between_dates($begin,$end){
                                                                    $begin = new DateTime($begin);
                                                                    $end = new DateTime($end);
                                                                    $end = $end->modify( '+1 day' );
                                                                    $interval = new DateInterval('P1D');
                                                                    $daterange = new DatePeriod($begin, $interval
                                                                    ,$end);
                                                                    $mydates = array();

                                                                    foreach($daterange as $date){
                                                                    $mydates[] = $date->format("Y-m-d");
                                                                    }
                                                                    return $mydates;
                                                                    }

                                                                    public function
                                                                    att_manager($newfilename,$targetpath="",$ftype=0,$errorpage=1,$successpage=""){
                                                                    //MOST RECENT AND MORE PREFERED TO UPLOAD_MANAGER
                                                                    $targetpath = $targetpath ==
                                                                    ""?"attachments/":$targetpath;
                                                                    /*
                                                                    insert this unto the form
                                                                    <input type="hidden" name="uploadname"
                                                                        value="attachment">
                                                                    */
                                                                    $uploadname =
                                                                    isset($_REQUEST['uploadname'])?$this->wordify($_REQUEST['uploadname'],1):"attachment";
                                                                    $ext = pathinfo($_FILES["$uploadname"]["name"],
                                                                    PATHINFO_EXTENSION);
                                                                    $ext = strtolower($ext);
                                                                    $att_reply = ""; $att_error = 0;
                                                                    if($ftype==1){
                                                                    $allowedExts =
                                                                    array("jpg","jpeg","png","doc","docx","pdf","xls","xlsx","ppt","pptx","xps","xpsx");
                                                                    }else{
                                                                    $allowedExts = array("jpg","jpeg","png");
                                                                    }
                                                                    $target = $targetpath . basename(
                                                                    $_FILES["$uploadname"]["name"]) ;
                                                                    $filename = basename(
                                                                    $_FILES["$uploadname"]["name"]);
                                                                    $file_size = $_FILES["$uploadname"]["size"];
                                                                    $file_type =
                                                                    strtolower($_FILES["$uploadname"]["type"]);
                                                                    if(!in_array($ext,$allowedExts)){
                                                                    $att_error = 2;
                                                                    $this->goto_notify($errorpage,"$file_type is Not
                                                                    Acceptable");
                                                                    }

                                                                    if($_FILES["$uploadname"]["size"] > 5124000)
                                                                    {$att_error = 3;
                                                                    $this->goto_notify($errorpage,'File is Too Large,
                                                                    Try Reducing or Use JPG');
                                                                    }

                                                                    if($att_error != 0){
                                                                    return ;
                                                                    }

                                                                    if(move_uploaded_file($_FILES["$uploadname"]["tmp_name"],
                                                                    $target)){
                                                                    $newname = $targetpath . $newfilename . ".".$ext;
                                                                    if(file_exists($newname)){
                                                                    unlink($newname);
                                                                    //$att_error = 4;
                                                                    //$this->goto_notify($errorpage,'Sorry There was An
                                                                    // Error With The Attachment, Please Try
                                                                    // re-attaching
                                                                    // it');
                                                                    }
                                                                    if(!rename($target,$newname)){$att_error = 5;
                                                                    $this->goto_notify($errorpage,'Could Not Attach File
                                                                    Try Later');
                                                                    }
                                                                    else{
                                                                    if($att_error == 0){
                                                                    $att_reply = $newfilename . ".".$ext;
                                                                    if($successpage==""){return $att_reply;}
                                                                    else{$this->goto_notify($successpage,'Upload
                                                                    Successful');}
                                                                    }
                                                                    }
                                                                    }
                                                                    }

                                                                    public function
                                                                    make_thumb($uploaded_time,$x=230,$y=100,$path="",$replace=0){
                                                                    $targetpath = ($path=="")?"../ascends/":$path;
                                                                    $orig = $uploaded_time;
                                                                    $imgt = "ImageJPEG";
                                                                    $fulpath = $targetpath.$orig ;
                                                                    if(!file_exists($fulpath)) return "";
                                                                    $src = ImageCreateFromJPEG("$fulpath");
                                                                    $width = ImageSx($src);
                                                                    $height = ImageSy($src);
                                                                    $dst = ImageCreateTrueColor($x,$y);
                                                                    ImageCopyResampled($dst,$src,0,0,0,0,$x,$y,$width,$height);
                                                                    if($replace==0){
                                                                    $thumbpath = $targetpath."th_".$orig;
                                                                    $thumbname = "th_".$orig;
                                                                    if(!file_exists($thumbpath)){$imgt($dst,
                                                                    $thumbpath);}
                                                                    }else{
                                                                    $thumbpath = $targetpath."1".$orig;
                                                                    $thumbname = "1".$orig;
                                                                    if(!file_exists($thumbpath)){$imgt($dst,
                                                                    $thumbpath);}
                                                                    if(file_exists($targetpath.$orig))unlink($targetpath.$orig);
                                                                    rename($thumbpath,$targetpath.$orig);
                                                                    $thumbname = $orig;
                                                                    }
                                                                    return $thumbname;
                                                                    }

                                                                    public function remove_file($file,$type=1){
                                                                    /* Type1 = Passport, Type2=Certificates */
                                                                    $file =
                                                                    ($type==1)?"../ascends/"+$file:"../ascended_certs/"+$file;
                                                                    if(file_exists($file)){
                                                                    unlink($file);
                                                                    $prm_reply = "File Successfully Removed!";
                                                                    }
                                                                    }


                                                                    public function BEGIN_SESSION(){
                                                                    if (session_status() == PHP_SESSION_NONE) {
                                                                    session_start();
                                                                    }
                                                                    }

                                                                    public function pagename(){
                                                                    return
                                                                    htmlspecialchars(basename($_SERVER['PHP_SELF']));
                                                                    }

                                                                    public function base($outp = 1){
                                                                    $base = 'http://' . $_SERVER['HTTP_HOST'] ."/".
                                                                    $this->basepath;
                                                                    if($outp==1){echo $base;}else return $base;
                                                                    }

                                                                    public function tagify($tt,$class=''){
                                                                    if($tt=="")return "";
                                                                    //"<span class='fhint'>No Tags</span>";
                                                                    $tags = explode(", ",$tt);
                                                                    $tagurl = "";
                                                                    $baseurl = $this->base(0);
                                                                    foreach ($tags as $t){
                                                                    $tagurl .= "<a href='$baseurl/search/$t'
                                                                        class='$class'>$t</a> ";
                                                                    }
                                                                    return $tagurl;
                                                                    }

                                                                    public function remove_chars($char,$type=0){
                                                                    if($type==0){return preg_replace("/[^A-Za-z0-9\.\-\
                                                                    ]/", "", $char);}
                                                                    else {return preg_replace("/[^A-Za-z0-9\.\-]/", "",
                                                                    $char);}
                                                                    }

                                                                    public function close_connection(){
                                                                    if(isset($this->connection)){
                                                                    $this->connection->close();
                                                                    unset($this->connection);}
                                                                    }

                                                                    }/*End of emslib class*/

                                                                    ?>