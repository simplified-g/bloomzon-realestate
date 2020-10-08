<?php require("emslib.inc.php");
/* 

Author: 		Thesent George
Company Name: 	Emiserve Technologies
Purpose:		Emiserve Code Library for Emiserve Admin Control Panel
				Designed as a  content management system for all emiserve web projects.
licence:		All rights reserved, this application may not be copied, used or
 				distributed in full or in part without explicit permission from the author or emiserve technologies.
*/

class admin_lib extends emslib{
var $cat, $title, $intro, $content; var $DB_SERVER;var $DB_USER;var $DB_PWD;var $DB_NAME;var $connection;private $result;var $adminregno; var $user_id; var $myname;
	function __construct(){$this->open_connection(); 
	/* Initialize System */
	$loggeduser = isset($_SESSION[$this->userboid])?$this->remove_chars($_SESSION[$this->userboid],1):"";
	$this->app_name=$this->get_this_data("var_value","app_variables","var_name","APP_NAME");
	$this->app_portal=$this->get_this_data("var_value","app_variables","var_name","APP_PORTAL");
	$this->app_mobile=$this->get_this_data("var_value","app_variables","var_name","APP_MOBILE");
	$this->app_email=$this->get_this_data("var_value","app_variables","var_name","APP_EMAIL");
	$this->official_email=$this->get_this_data("var_value","app_variables","var_name","OFFICIAL_EMAIL");
	$this->contact_address=$this->get_this_data("var_value","app_variables","var_name","CONTACT_ADDRESS");
	$this->facebook=$this->get_this_data("var_value","app_variables","var_name","FACEBOOK");
	$this->youtube=$this->get_this_data("var_value","app_variables","var_name","YOUTUBE");
	//$this->instagram=$this->get_this_data("var_value","app_variables","var_name","INSTAGRAM");
	$this->myname=$this->get_this_data("first_name","users","usuere",$loggeduser);
	$this->myfullname=$this->get_this_data("fullname","users","usuere",$loggeduser);
	$this->myemail=$this->get_this_data("email","users","usuere",$loggeduser);
	$this->cathome = $this->base(0);
	$this->adminregno = '100100';
	}
	
	public function mod_list_properties($mode=1){
		$subj = "property";$subjs = "properties";
		$base = $this->base(0);
		$sql = "SELECT * FROM property_info WHERE 1 ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to List $subjs",2);		
		}
		$id = array();$k=0;
		while($row = $result->fetch_assoc()){
		$id[] = $pid = (int)$row['id'];	
		$prop_id[] = (int)$row['prop_id'];	
		$title[]	= $this->printify($row['title'],1);	
		//$address[] = $this->printify($row['address'],1);	
		$city[] = $this->printify($row['city'],1);	
		$state[] = $this->printify($row['state'],1);
		$status[] = $this->printify($row['status'],1);
		//$food_type[] = $this->printify($row['food_type'],1);	
		//$free_delivery_est[] = $this->printify($row['free_delivery_est'],1);	
		$featured[] = (int)$row['featured'];
		$approved[] = $this->printify($row['approved'],1);
		//$status[] = $this->get_this_data("title","posts_statuses","id",(int)$row['status']);
		$datepublished[] = $this->date_convert($row['date_added'],"d/m/Y");	
		$titleurl[] = "<a href='$base/$pid/' target='preview'>{$title[$k]}</a>";	
		$k++;
		}
		$c = count($id);
		if($c<=0){return;}
		for($i=0,$j=1;$i<$c;$i++,$j++){
			$featured[$i] = $featured[$i]== 0?"no":"yes";
			echo "
				<tr>
				<td><input type='checkbox' class='checkbox1'> $j</td>
				<td>{$prop_id[$i]}</td>
				<td>{$title[$i]}</td>
				<td>{$status[$i]}</td>
				<td>{$city[$i]}, {$state[$i]}</td>
				<td>{$featured[$i]}</td>
				<td>{$approved[$i]}</td>
				<td>{$datepublished[$i]}</td>
				<td><a href='property-info.php?property={$prop_id[$i]}' class='btn btn-primary btn-sm'></i>View Property</a></td>	
				<td class='text-center'>
				<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
				</td>		
				</tr>
			  ";
		}
		
	}
	
	public function mod_list_agents(){
		$subj = "Customer"; $subjs = "Customers";
		$base = $this->base(0);
		$sql = "SELECT * FROM agents WHERE 1 ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to List $subjs",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$fname[] = $this->printify($row['name'],1);	
		$email[] = $this->printify($row['email'],1);	
		$phone[] = $this->printify($row['phone'],1);	
		//$lastactive[] = $this->days_elapsed($row['lastactive']);	
		//$active = (int)$row['status'];	
		//$status[] = $this->get_this_data("title","users_statuses","id",$active);	
		}
		$c = count($id);
		if($c<=0){return;}
		for($i=0,$j=1;$i<$c;$i++,$j++){
			echo "
				<tr>
				<td><input type='checkbox' class='checkbox1'> $j</td>
				<td>{$fname[$i]}</td>
				<td>{$email[$i]}</td>
				<td>{$phone[$i]}</td>
				<td class='text-center'>
				<a href='user-edit?uid={$id[$i]}&amp;action=edit' title='Update $subj Account'><i class='fa fa-edit (alias)'></i></a> 
				<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
				</td>		
				</tr>
			  ";
		}
	
	}
	
	public function mod_list_comments(){
		$subj = "Comment"; $subjs = "Comments";
		$base = $this->base(0);
		$sql = "SELECT * FROM post_comments WHERE 1 ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to List $subjs",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$postid[] = (int)$row['post_id'];	
		$fname[] = $this->printify($row['name'],1);	
		$email[] = $this->printify($row['email'],1);	
		$comment[] = $this->printify($row['comments'],1);	
		$date[] = $this->date_convert($row['date_added'],"d/m/Y");	
		//$lastactive[] = $this->days_elapsed($row['lastactive']);	
		//$active = (int)$row['status'];	
		//$status[] = $this->get_this_data("title","users_statuses","id",$active);	
		}
		$c = count($id);
		if($c<=0){return;}
		for($i=0,$j=1;$i<$c;$i++,$j++){
			$post = $this->get_this_data("title","posts","id", $postid[$i]);
			echo "
				<tr>
				<td><input type='checkbox' class='checkbox1'> $j</td>
				<td>{$post}</td>
				<td>{$comment[$i]}</td>
				<td>{$fname[$i]}</td>
				<td>{$date[$i]}</td>
				<td class='text-center'>
				<a href='user-edit?uid={$id[$i]}&amp;action=edit' title='Update $subj Account'><i class='fa fa-edit (alias)'></i></a> 
				<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
				</td>		
				</tr>
			  ";
		}
	
	}
	
	public function mod_list_reports(){
		$subj = "Report"; $subjs = "Reports";
		$base = $this->base(0);
		$sql = "SELECT property_reports.id, property_reports.name, property_reports.phone, property_reports.complains, property_reports.date_reported, property_info.title, property_info.prop_id,
		property_info.user_email FROM property_reports INNER JOIN property_info ON property_reports.prop_id = property_info.prop_id";
		if(!$result = $this->connection->query($sql))
		{
			$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
			return $this->just_notify("Unable to List $subjs",2);		
		}
		//$num = $result->num_rows;
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = (int)$row['id'];	
			$postid[] = (int)$row['prop_id'];	
			$fname[] = $this->printify($row['name'],1);	
			$email[] = $this->printify($row['user_email'],1);	
			$phone[] = $this->printify($row['phone'],1);	
			$complains[] = $this->printify($row['complains'],1);	
			$title[] = $this->printify($row['title'],1);		
			$date[] = $this->date_convert($row['date_reported'],"d/m/Y");	
		}
		$c = count($id);
		if($c<=0){return;}
		for($i=0,$j=1;$i<$c;$i++,$j++){
			$agent = $this->get_this_data("name","agents","email", $email[$i]);
			//$this->test_here($agent,1);
			echo "<tr>
				<td><input type='checkbox' class='checkbox1'> $j</td>
				<td>{$fname[$i]}</td>
				<td>{$phone[$i]}</td>
				<td>{$complains[$i]}</td>
				<td>{$title[$i]}</td>
				<td>{$postid[$i]}</td>
				<td>{$agent}</td>
				<td>{$date[$i]}</td>
				<td class='text-center'>
				 <a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
				</td>		
			</tr>";
		}
	
	}
	
	public function property_details($prop){
		$subj = "selected property"; $subjs = "selected property";
		$base = $this->base(0);
		$sql = "SELECT * FROM property_info WHERE prop_id = '$prop'";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to List $subjs",2);		
		}
		$id = array();$k=0;
		while($row = $result->fetch_assoc()){
		$id[] = $pid = (int)$row['id'];	
		$prop_id[] = (int)$row['prop_id'];	
		$title[]	= $this->printify($row['title'],1);	
		$description[] = $this->printify($row['description'],1);	
		$type[] = $this->printify($row['type'],1);	
		$status[] = $this->printify($row['status'],1);
		$bedrooms[] = $this->printify($row['bedrooms'],1);
		$bathrooms[] = $this->printify($row['bathrooms'],1);	
		$floors[] = $this->printify($row['floors'],1);	
		$garages[] = $this->printify($row['garages'],1);	
		$price[] = $this->printify($row['price'],1);	
		$size[] = (int)$row['size'];
		$featured[] = (int)$row['featured'];
		$video_url[] = $this->printify($row['video_url'],1);
		$features[] = $this->printify($row['features'],1);
		$address[] = $this->printify($row['address'],1);
		$city[] = $this->printify($row['city'],1);
		$state[] = $this->printify($row['state'],1);
		$postal[] = $this->printify($row['postal_code'],1);
		$img1[] = $this->printify($row['img1'],1);
		$img2[] = $this->printify($row['img2'],1);
		$img3[] = $this->printify($row['img3'],1);
		$img4[] = $this->printify($row['img4'],1);
		$img5[] = $this->printify($row['img5'],1);
		$img6[] = $this->printify($row['img6'],1);
		$img7[] = $this->printify($row['img7'],1);
		$approval[] = $this->printify($row['approved'],1);
		$dateadded[] = $this->date_convert($row['date_added'],"d/m/Y");	
		$titleurl[] = "<a href='$base/$pid/' target='preview'>{$title[$k]}</a>";	
		$k++;
		}
		$c = count($id);
		if($c<=0){return;}
		for($i=0,$j=1;$i<$c;$i++,$j++){
			$featured[$i] = $featured[$i]== 0?"no":"yes";
			$features = implode(", ", array_filter(explode(",", $features[$i])));
			$details = str_replace('rn', '<br>', $description[$i]);
			echo "
				<tr><th>Property ID</th><td>{$prop_id[$i]}</td></tr>
				<tr><th>Title</th><td>{$title[$i]}</td></tr>
				<tr><th>Description</th><td>{$details}</td></tr>
				<tr><th>Type</th><td>{$type[$i]}</td></tr>
				<tr><th>Status</th><td>{$status[$i]}</td></tr>
				<tr><th>Bedrooms</th><td>{$bedrooms[$i]}</td></tr>
				<tr><th>Bathrooms</th><td>{$bathrooms[$i]}</td></tr>
				<tr><th>Floors</th><td>{$floors[$i]}</td></tr>
				<tr><th>Garage</th><td>{$garages[$i]}</td></tr>
				<tr><th>Price</th><td>{$price[$i]}</td></tr>
				<tr><th>Size (in plots)</th><td>{$size[$i]}</td></tr>
				<tr><th>Featured</th><td>{$featured[$i]}</td></tr>
				<tr><th>Video Link</th><td>{$video_url[$i]}</td></tr>
				<tr><th>Features</th><td>{$features}</td></tr>
				<tr><th>Address</th><td>{$address[$i]}, {$city[$i]}, {$state[$i]}</td></tr>
				<tr><th>Gallery Images</th>
					<td><img src='../../assets/upload/{$prop_id[$i]}/{$img1[$i]}' width='100px' height='100px'>, 
					<img src='../../assets/upload/{$prop_id[$i]}/{$img2[$i]}' width='100px' height='100px'>, 
					<img src='../../assets/upload/{$prop_id[$i]}/{$img3[$i]}' width='100px' height='100px'>, 
					<img src='../../assets/upload/{$prop_id[$i]}/{$img4[$i]}' width='100px' height='100px'>, 
					<img src='../../assets/upload/{$prop_id[$i]}/{$img5[$i]}' width='100px' height='100px'>, 
					<img src='../../assets/upload/{$prop_id[$i]}/{$img6[$i]}' width='100px' height='100px'>, 
					<img src='../../assets/upload/{$prop_id[$i]}/{$img7[$i]}' width='100px' height='100px'></td>
				</tr>
				<tr><th>Date Added</th><td>{$dateadded[$i]}</td></tr>
				<tr><th>Approval</th><td>{$approval[$i]}</td></tr>
			  ";
		}
	}
	
	public function new_property_notification(){
		$sql = "SELECT * FROM property_info WHERE approved='no'";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to List $subjs",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
			$id[] = (int)$row['id'];
		}
		$c = count($id);
		return $c;
	}
	public function report_notification(){
		$sql = "SELECT * FROM property_reports WHERE attended_to=0";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to List $subjs",2);		
		}
		return $result->num_rows;
	}
	
	public function choose_categories(){
	$subj = "Category";$subjs = "Categories";
	$base = $this->base(0);
	$sql = "SELECT * FROM posts_allfields WHERE 1 ORDER BY id";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to List $subjs to choose from","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to List $subjs",2);		
	}
	$id = array();$k=0;
	while($row = $result->fetch_assoc()){
	$id[] = (int)$row['id'];	
	$title[] = $this->printify($row['title'],1);
	$fieldlabel[] = ucwords($title[$k]);$k++;
	$fieldstate[] = $this->printify($row['fieldstate'],1);
	}
	$c = count($id);
	if($c<=0){return;}

	for($i=0,$j=1;$i<$c;$i++,$j++){
		echo "
		<div class='row borderedb'>		
			<div class='col-lg-4 col-md-12  col-sm-12 col-xs-12'>
			<div class='demo-checkbox'>
			<input type='checkbox' id='usedfield$j' name='usedfields[]' class='filled-in chk-col-teal'  value='{$title[$i]}'  {$fieldstate[$i]}>
			<label for='usedfield$j'>{$title[$i]}</label>
			</div>
			</div>
			<div class='col-lg-4 col-md-12  col-sm-12 col-xs-12'>
			<div class='demo-checkbox'>
			<input type='checkbox' id='reqfield$j' name='reqfields[]' class='filled-in chk-col-red'  value='{$title[$i]}' {$fieldstate[$i]}>
			<label for='reqfield$j'>{$title[$i]}</label>
			</div>
			</div>
			<div class='col-lg-4 col-md-12  col-sm-12 col-xs-12'>
			<div class='demo-checkbox'>
			<input type='text' id='label$j' name='fieldlabels[]' class='form-control'  value='{$fieldlabel[$i]}' placeholder='Enter Label for {$title[$i]}' required title='All Labels are required but can be changed - Press CTRL+Z inside this field to use Default'>
			<input type='hidden' name='hiddenfieldlabels[]' value='{$title[$i]}' required>		
			</div>
			</div>		
		</div>		
		";
	}
		
	}

	public function choose_categories_edit($usedfields, $requiredfields, $fieldlabels){
	$subj = "Category";$subjs = "Categories";
	$base = $this->base(0);
	$sql = "SELECT * FROM posts_allfields WHERE 1 ORDER BY id";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to List $subjs to choose from","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to List $subjs",2);		
	}
	$id = array();$k=0;
	while($row = $result->fetch_assoc()){
	$id[] = (int)$row['id'];	
	$title[] = $this->printify($row['title'],1);
	$fieldlabel[] = ucwords($title[$k]);$k++;
	$fieldstate[] = $this->printify($row['fieldstate'],1);
	}
	$c = count($id);
	if($c<=0){return;}
	$ufieldsarr = explode(", ",$usedfields);
	$reqfieldarr = explode(", ",$requiredfields);
	$fieldlabelsarr = explode(", ",$fieldlabels);
	foreach($fieldlabelsarr as $ff){
		$realllable = explode("=",$ff);
		$flkey[] = $realllable[0];
		$flvalue[] = isset($realllable[1])?$realllable[1]:"";
		$nfl = array_combine($flkey,$flvalue);
	}
	for($i=0;$i<count($title);$i++){
		$newfields[] = in_array($title[$i],$flkey)?$nfl[$title[$i]]:$title[$i];
	}

	for($i=0,$j=1;$i<$c;$i++,$j++){
		$usechecked = in_array($title[$i],$ufieldsarr)?"checked":"";
		$reqchecked = in_array($title[$i],$reqfieldarr)?"checked":"";
		echo "
		<div class='row borderedb'>		
			<div class='col-lg-4 col-md-12  col-sm-12 col-xs-12'>
			<div class='demo-checkbox'>
			<input type='checkbox' id='usedfield$j' name='usedfields[] class='filled-in chk-col-teal'  value='{$title[$i]}'  {$fieldstate[$i]} $usechecked>
			<label for='usedfield$j'>{$title[$i]}</label>
			</div>
			</div>
			<div class='col-lg-4 col-md-12  col-sm-12 col-xs-12'>
			<div class='demo-checkbox'>
			<input type='checkbox' id='reqfield$j' name='reqfields[]' class='filled-in chk-col-red'  value='{$title[$i]}' {$fieldstate[$i]} $reqchecked>
			<label for='reqfield$j'>{$title[$i]}</label>
			</div>
			</div>
			<div class='col-lg-4 col-md-12  col-sm-12 col-xs-12'>
			<div class='demo-checkbox'>
			<input type='text' id='label$j'name='fieldlabels[]' class='form-control'  value='{$newfields[$i]}' placeholder='Enter Label for {$title[$i]}' required title='All Labels are required but can be changed - Press CTRL+Z inside this field to use Default'>
			<input type='hidden' name='hiddenfieldlabels[]' value='{$title[$i]}' required>
			</div>
			</div>		
		</div>		
		";
	}
		
	}

	public function insert_widgets(){
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$ufieldarr  = isset($_POST['usedfields'])?$_POST['usedfields']:array();
		$reqfieldarr  = isset($_POST['reqfields'])?$_POST['reqfields']:array();
		$flabelsarr  = isset($_POST['fieldlabels'])?$_POST['fieldlabels']:array();
		$hiddenflabelsarr  = isset($_POST['hiddenfieldlabels'])?$_POST['hiddenfieldlabels']:array();
		$status  = isset($_POST['status'])?$this->wordify($_POST['status'],1):"0";
		if(empty($ufieldarr)){
		return $this->just_notify("Please Select Fields To Be Used",2);			
		}
		$fulllabelsarr = array();
		foreach( $ufieldarr as $usedfield){
			$key = array_search($usedfield, $hiddenflabelsarr);
			$flb = $flabelsarr[$key];
			$fulllabelsarr[] = $hiddenflabelsarr[$key]."=".$flb;
		}
		$usedfields = implode(", ",$ufieldarr);
		$fieldlabels = implode(", ",$fulllabelsarr);
		$reqfields = implode(", ",$reqfieldarr);
		$slugexists = $this->get_this_data("slug","categories","slug",$slug);
		if($slugexists !=""){
		return $this->just_notify("Possible Duplicate Widget! Please Rephrase The Title/slug if Widget is different",2);
		}
		$last_id = (int)$this->generate_token("widgets","id",1);
	if($stmt = $this->connection->prepare("INSERT INTO widgets(id, title, slug, usedfields, fieldlabels, requiredfields, status) values(?,?,?,?,?,?,?)")){
		$stmt->bind_param('isssssi',$last_id, $title, $slug, $usedfields, $fieldlabels, $reqfields, $status);
		if($stmt->execute()){
		$this->dugoye($this->user_id, "Added a new Widget  - $title");	
		$this->set_server_msg("Widget Successfully Added!",1);
		$this->goto_notify("widget-list");
		}
		}else{
			/* Error */
			$this->dugoye($this->user_id,"Inserting Widget Failed for - $title","FAILED: $last_id, $title, $slug, $usedfields, $reqfields, $fieldlabels, $status. Reason: ".$this->connection->error);	
			return $this->just_notify("Error, Unable to Add Widget, please retry later",2);
			}
		$stmt->close();
	}

	public function insert_categories(){
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$ufieldarr  = isset($_POST['usedfields'])?$_POST['usedfields']:array();
		$reqfieldarr  = isset($_POST['reqfields'])?$_POST['reqfields']:array();
		$flabelsarr  = isset($_POST['fieldlabels'])?$_POST['fieldlabels']:array();
		$hiddenflabelsarr  = isset($_POST['hiddenfieldlabels'])?$_POST['hiddenfieldlabels']:array();
		$status  = isset($_POST['status'])?$this->wordify($_POST['status'],1):"0";
		if(empty($ufieldarr)){
		return $this->just_notify("Please Select Fields To Be Used",2);			
		}
		$fulllabelsarr = array();
		foreach( $ufieldarr as $usedfield){
			$key = array_search($usedfield, $hiddenflabelsarr);
			$flb = $flabelsarr[$key];
			$fulllabelsarr[] = $hiddenflabelsarr[$key]."=".$flb;
		}
		$usedfields = implode(", ",$ufieldarr);
		$fieldlabels = implode(", ",$fulllabelsarr);
		$reqfields = implode(", ",$reqfieldarr);
		$slugexists = $this->get_this_data("slug","categories","slug",$slug);
		if($slugexists !=""){
		return $this->just_notify("Possible Duplicate Category! Please Rephrase The Title/slug if Category is different",2);
		}
		$last_id = (int)$this->generate_token("categories","id",1);
	if($stmt = $this->connection->prepare("INSERT INTO categories(id, title, slug, usedfields, fieldlabels, requiredfields, status) values(?,?,?,?,?,?,?)")){
		$stmt->bind_param('isssssi',$last_id, $title, $slug, $usedfields, $fieldlabels, $reqfields, $status);
		if($stmt->execute()){
		$stmt->close();
		$this->dugoye($this->user_id, "Added a new Category  - $title");	
		$this->set_server_msg("Category Successfully Added!",1);
		$this->goto_notify("category-list");
		}
		}else{
			/* Error */
			$this->dugoye($this->user_id,"Posting Failed for - $title","FAILED: $last_id, $title, $slug, $usedfields, $reqfields, $fieldlabels, $status. Reason: ".$this->connection->error);	
			return $this->just_notify("Error, Unable to Add Category, please retry later",2);
			}
	}
	
	public function update_category_widget($mode=1){
		$table = $mode==1?"categories":"widgets";
		$subj = $mode==1?"category":"widget";
		$catid	= (int)$_POST['catid'];
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$ufieldarr  = isset($_POST['usedfields'])?$_POST['usedfields']:array();
		$reqfieldarr  = isset($_POST['reqfields'])?$_POST['reqfields']:array();
		$flabelsarr  = isset($_POST['fieldlabels'])?$_POST['fieldlabels']:array();
		$hiddenflabelsarr  = isset($_POST['hiddenfieldlabels'])?$_POST['hiddenfieldlabels']:array();
		$status  = isset($_POST['status'])?$this->wordify($_POST['status'],1):"0";
		if(empty($ufieldarr)){
		return $this->just_notify("Please Select Fields To Be Used",2);			
		}
		$fulllabelsarr = array();
		foreach( $ufieldarr as $usedfield){
			$key = array_search($usedfield, $hiddenflabelsarr);
			$flb = $flabelsarr[$key];
			$fulllabelsarr[] = $hiddenflabelsarr[$key]."=".$flb;
		}		
		$usedfields = implode(", ",$ufieldarr);
		$fieldlabels = implode(", ",$fulllabelsarr);
		$requiredfields = implode(", ",$reqfieldarr);
		$rowsaffected = "";
		$sql = "UPDATE $table SET title=?, slug=?, usedfields=?, fieldlabels=?, requiredfields=? WHERE id=?";
		if($result = $this->connection->prepare($sql)){
		$result->bind_param('sssssi', $title, $slug, $usedfields, $fieldlabels, $requiredfields, $catid);
		$result->execute();
		$rowsaffected = $result->affected_rows;
		$this->dugoye($this->user_id, "$subj Updated Successful- $title");
		$this->set_server_msg("$subj Successfully Updated",1);
		$this->goto_notify("$subj-list");
		}else{
		$this->dugoye($this->user_id, "Error, $subj Updated Failed- $title","Reason: ".$this->connection->error);
		return $this->just_notify("Error Updating $subj, Please Check The Log and Try Again",2);
		}	   
	}
	
	public function update_category(){
		$catid	= (int)$_POST['catid'];
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$ufieldarr  = isset($_POST['usedfields'])?$_POST['usedfields']:array();
		$reqfieldarr  = isset($_POST['reqfields'])?$_POST['reqfields']:array();
		$flabelsarr  = isset($_POST['fieldlabels'])?$_POST['fieldlabels']:array();
		$hiddenflabelsarr  = isset($_POST['hiddenfieldlabels'])?$_POST['hiddenfieldlabels']:array();
		$status  = isset($_POST['status'])?$this->wordify($_POST['status'],1):"0";
		if(empty($ufieldarr)){
		return $this->just_notify("Please Select Fields To Be Used",2);			
		}
		$fulllabelsarr = array();
		foreach( $ufieldarr as $usedfield){
			$key = array_search($usedfield, $hiddenflabelsarr);
			$flb = $flabelsarr[$key];
			$fulllabelsarr[] = $hiddenflabelsarr[$key]."=".$flb;
		}		
		$usedfields = implode(", ",$ufieldarr);
		$fieldlabels = implode(", ",$fulllabelsarr);
		$requiredfields = implode(", ",$reqfieldarr);
		$rowsaffected = "";
		$sql = "UPDATE categories SET title=?, slug=?, usedfields=?, fieldlabels=?, requiredfields=? WHERE id=?";
		if($result = $this->connection->prepare($sql)){
		$result->bind_param('sssssi', $title, $slug, $usedfields, $fieldlabels, $requiredfields, $catid);
		$result->execute();
		$rowsaffected = $result->affected_rows;
		$this->dugoye($this->user_id, "Category Updated Successful- $title");
		$this->set_server_msg("Category Successfully Updated",1);
		$this->goto_notify("category-list");
		}else{
		$this->dugoye($this->user_id, "Error, Category Updated Failed- $title","Reason: ".$this->connection->error);
		return $this->just_notify("Error Updating Category, Please Check The Log and Try Again",2);
		}	   
	}
	
	public function list_categories(){
	$subj = "category";$subjs = "categories";
	$base = $this->base(0);
	$sql = "SELECT * FROM $subjs WHERE 1 ORDER BY id";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to List $subjs",2);		
	}
	$id = array();
	while($row = $result->fetch_assoc()){
	$id[] = (int)$row['id'];	
	$title[] = $this->printify($row['title'],1);	
	$slug[] = $this->printify($row['slug'],1);	
	$usedfields[] = $this->printify($row['usedfields'],1);	
	$fieldlabels[] = $this->printify($row['fieldlabels'],1);	
	$requiredfields[] = $this->printify($row['requiredfields'],1);	
	$status[] = $this->get_this_data("title","posts_statuses","id",(int)$row['status']);	
	}
	$c = count($id);
	if($c<=0){return;}
	for($i=0,$j=1;$i<$c;$i++,$j++){
		echo "
			<tr>
			<td><input type='checkbox' class='checkbox1'> $j</td>
			<td>{$title[$i]} ({$id[$i]})</td>
			<td>{$usedfields[$i]}</td>
			<td>{$requiredfields[$i]}</td>
			<td>{$status[$i]}</td>
			<td class='text-center'>
			<a href='category-edit.php?catid={$id[$i]}&amp;action=edit' title='Edit $subj'><i class='fa fa-edit (alias)'></i></a> 
			<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
			</td>		
			</tr>
		  ";
	}
	
}
	
	public function list_widgets(){
	$subj = "widget";$subjs = "widgets";
	$base = $this->base(0);
	$sql = "SELECT * FROM $subjs WHERE 1 ORDER BY id";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to List $subjs",2);		
	}
	$id = array();$k=0;
	while($row = $result->fetch_assoc()){
	$id[] = $wid = (int)$row['id'];	
	$title[] = $this->printify($row['title'],1);	
	$slug[] = $this->printify($row['slug'],1);	
	$usedfields[] = $this->printify($row['usedfields'],1);	
	$fieldlabels[] = $this->printify($row['fieldlabels'],1);	
	$requiredfields[] = $this->printify($row['requiredfields'],1);	
	$status[] = $this->get_this_data("title","posts_statuses","id",(int)$row['status']);	
	$sl_count = (int)$this->count_recs("widget_slides","widgid",$id[$k]);	
	$slidecount[]  = "<a href='widget-slides-list?wid=$wid' class='btn btn-sm btn-success' title='Click To List Slides'>$sl_count</a>";
	$listwidslide[] = "<a href='widget-slides-new?wid=$wid' class='btn btn-primary btn-sm' title='Add Slide To this Widget'><i class='mdi mdi-plus'></i> Add Slides</a>";
	$k++;
	}
	$c = count($id);
	if($c<=0){return;}
	for($i=0,$j=1;$i<$c;$i++,$j++){
		echo "
			<tr>
			<td><input type='checkbox' class='checkbox1'> $j</td>
			<td>{$title[$i]} ({$id[$i]})</td>
			<td>{$slidecount[$i]}</td>
			<td>{$listwidslide[$i]}</td>
			<td>{$status[$i]}</td>
			<td class='text-center'>
			<a href='widget-edit?catid={$id[$i]}&action=edit' title='Edit $subj'><i class='fa fa-edit (alias)'></i></a> 
			<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
			</td>		
			</tr>
		  ";
	}
	
}

	public function insert_widget_slides(){
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$widgid  = isset($_POST['category'])?(int)$_POST['category']:0;
		$image	= isset($_POST['image'])?$this->wordify($_POST['image'],1):"";
		$thumb	= isset($_POST['thumb'])?$this->wordify($_POST['thumb'],1):"";
		$image_align  = isset($_POST['image_align'])?$this->wordify($_POST['image_align'],1):"";
		$authorid	= isset($_POST['authorid'])?(int)$_POST['authorid']:"0";
		$author	= $this->get_this_data("fullname","users","id",$authorid);
		$excerpt = isset($_POST['excerpt'])?$this->convert_RN($this->wordify($_POST['excerpt'],1)):"";
		$content = isset($_POST['content'])?$this->convert_RN($this->wordify($_POST['content'],1)):"";
		$progress	= isset($_POST['progress'])?$this->wordify($_POST['progress']):"";
		$btn_url	= isset($_POST['btnurl'])?$this->wordify($_POST['btnurl']):"";
		$btn_text	= isset($_POST['btntext'])?strtolower($this->wordify($_POST['btntext'])):"";
		$tags 		= isset($_POST['tags'])?$this->wordify($_POST['tags'],1):"";
		$addfield1	= isset($_POST['addfield1'])?$this->wordify($_POST['addfield1'],1):"";
		$addfield2  = isset($_POST['addfield2'])?$this->wordify($_POST['addfield2'],1):"";
		$addfield3  = isset($_POST['addfield3'])?$this->wordify($_POST['addfield3'],1):"";
		$addfield4  = isset($_POST['addfield4'])?$this->wordify($_POST['addfield4'],1):"";
		$addfield5  = isset($_POST['addfield5'])?$this->wordify($_POST['addfield5'],1):"";
		$status  = isset($_POST['status'])?$this->wordify($_POST['status'],1):"0";
		$files = isset($_POST['files'])?$this->wordify($_POST['files'],1):"";
		$slugexists = $this->get_this_data("slug","widget_slides","slug",$slug);
	if($slugexists !=""){
		return $this->just_notify("Possible Duplicate Slide! Please Rephrase The Title/slug if Slide is different",2);
	}
	$last_id = (int)$this->generate_token("widget_slides","id",1);
	$cat=strtolower($this->get_this_data("title","widgets","id",$widgid));

	$posturl = $this->base(0)."/$cat/$last_id/$slug";
	$posturl = "<a href='$posturl'>View Slide</a>";
	if($stmt = $this->connection->prepare("INSERT INTO widget_slides(id, title, slug, widgid, image, thumb, image_align, author, excerpt, content, progress, btn_url, btn_text, tags, addfield1, addfield2, addfield3, addfield4, addfield5, status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")){
		$stmt->bind_param('ississssssissssssssi',$last_id, $title, $slug, $widgid, $image, $thumb, $image_align, $author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status);
		if($stmt->execute()){
		$stmt->close();
		$this->dugoye($this->user_id, "Added a new Widget Slide  - $title");	
		$this->set_server_msg("Slide Successfully Added!",1);
		$this->goto_notify("widget-slides-edit?wsid=$last_id&action=edit");
		}
		}else{
			/* Error */
			$this->dugoye($this->user_id,"Adding Widget Slide Failed for - $title","FAILED: $title, $slug, $widgid, $image, $thumb, $image_align, $author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status. Reason: ".$this->connection->error);	
			return $this->just_notify("Error, Unable to Add  Widget Slide, please retry later",2);
			}
	}

	public function insert_posts(){
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$catid  = isset($_POST['category'])?(int)$_POST['category']:0;
		$image	= isset($_POST['image'])?$this->wordify($_POST['image'],1):"";
		//$fullimage	= isset($_POST['fullimage'])?$this->wordify($_POST['fullimage'],1):"";
		$thumb	= isset($_POST['thumb'])?$this->wordify($_POST['thumb'],1):"";
		$image_align  = isset($_POST['image_align'])?$this->wordify($_POST['image_align'],1):"";
		$authorid	= isset($_POST['authorid'])?(int)$_POST['authorid']:"0";
		$author	= $this->get_this_data("fullname","users","id",$authorid);
		$excerpt = isset($_POST['excerpt'])?$this->convert_RN($this->wordify($_POST['excerpt'],1)):"";
		$content = isset($_POST['content'])?$this->convert_RN($this->wordify($_POST['content'],1)):"";
		$progress	= isset($_POST['progress'])?$this->wordify($_POST['progress']):"";
		$btn_url	= isset($_POST['btnurl'])?$this->wordify($_POST['btnurl'],1):"";
		$btn_text	= isset($_POST['btntext'])?strtolower($this->wordify($_POST['btntext'])):"";
		$tags 		= isset($_POST['tags'])?$this->wordify($_POST['tags'],1):"";
		$addfield1	= isset($_POST['addfield1'])?$this->wordify($_POST['addfield1'],1):"";
		$addfield2  = isset($_POST['addfield2'])?$this->wordify($_POST['addfield2'],1):"";
		$addfield3  = isset($_POST['addfield3'])?$this->wordify($_POST['addfield3'],1):"";
		$addfield4  = isset($_POST['addfield4'])?$this->wordify($_POST['addfield4'],1):"";
		$addfield5  = isset($_POST['addfield5'])?$this->wordify($_POST['addfield5'],1):"";
		$status  = isset($_POST['status'])?$this->wordify($_POST['status'],1):"0";
		$files = isset($_POST['files'])?$this->wordify($_POST['files'],1):"";
		$slugexists = $this->get_this_data("slug","posts","slug",$slug);
		if($slugexists !=""){
			return $this->just_notify("Possible Duplicate Post! Please Rephrase The Title/slug if Post is different",2);
		}
		$last_id = (int)$this->generate_token("posts","id",1);
		$catslug=strtolower($this->get_this_data("slug","categories","id",$catid));

		$posturl = $this->base(0)."/$catslug/$last_id/$slug";
		$posturl = "<a href='$posturl'>View Post</a>";
		if($stmt = $this->connection->prepare("INSERT INTO posts(id, title, slug, catid, image, thumb, image_align, author, excerpt, content, progress, btn_url, btn_text, tags, addfield1, addfield2, addfield3, addfield4, addfield5, status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")){
			$stmt->bind_param('ississssssissssssssi',$last_id, $title, $slug, $catid, $image, $thumb, $image_align, $author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status);
			if($stmt->execute()){
			$stmt->close();
			$this->dugoye($this->user_id, "Added a new Post  - $title");	
			$this->set_server_msg("Post Successfully Added! $posturl",1);
			$this->goto_notify("post-edit?postid=$last_id&action=edit");
			}
			}else{
				/* Error */
				$this->dugoye($this->user_id,"Posting Failed for - $title","FAILED: $title, $slug, $catid, $image, $thumb, $image_align, $author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status. Reason: ".$this->connection->error);	
				return $this->just_notify("Error, Unable to Add Post, please retry later",2);
				}
	}
	
	public function list_posts($mode=1){
	$lockpost = $mode==2?1:0;
	$subj = "post";$subjs = "posts";
	$base = $this->base(0);
	$sql = "SELECT * FROM $subjs WHERE 1 ORDER BY id DESC";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to List $subjs",2);		
	}
	$id = array();$k=0;
	while($row = $result->fetch_assoc()){
	$id[] = $pid = (int)$row['id'];	
	$title[]	= $this->printify($row['title'],1);	
	$slug = $this->printify($row['slug'],1);	
	$author[] = $this->printify($row['author'],1);	
	$catid[] = (int)$row['catid'];
	$islocked[] = (int)$row['islocked'];
	$lockedstate[] = $islocked[$k]==1?"<span class='red'>Locked</span>":"Unlocked";
	$lockaction[] = $islocked[$k]==1?"<a href='?lockid=$pid&action=0'  onclick='return confirmAction()'><i class='mdi mdi-lock-open-outline'></i>Unlock</a>":"<a href='?lockid=$pid&action=1' onclick='return confirmAction()'><i class='mdi mdi-lock'></i>lock</a>";
	$cat = $this->get_this_data("title","categories","id",$catid[$k]);
	$category[] = ucwords($this->get_this_data("title","categories","id",(int)$row['catid']));	
	$status[] = $this->get_this_data("title","posts_statuses","id",(int)$row['status']);	
	$datepublished[] = $this->date_convert($row['date_updated'],"Y/m/d");	
	$titleurl[] = "<a href='$base/$cat/$pid/$slug' target='preview'>{$title[$k]}</a>";	
	$k++;
	}
	$c = count($id);
	if($c<=0){return;}
	for($i=0,$j=1;$i<$c;$i++,$j++){
		echo "
			<tr>
			<td><input type='checkbox' class='checkbox1'> $j</td>
			<td>{$titleurl[$i]} - {$id[$i]}</td>
			<td>{$author[$i]}</td>
			<td>{$category[$i]}</td>";
		echo $lockpost==1?"<td>{$lockedstate[$i]}</td><td>{$lockaction[$i]}</td>":"<td>{$status[$i]}</td>
			<td>{$datepublished[$i]}</td>
			<td class='text-center'>
			<a href='post-edit.php?postid={$id[$i]}&amp;action=edit' title='Edit $subj'><i class='fa fa-edit (alias)'></i></a> 
			<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
			</td>		
			</tr>
		  ";
	}
	
}
	
	public function list_widget_slides($wid){
		$wid = (int)$wid;
	$subj = "widget slides";$subjs = "widget slide";
	$base = $this->base(0);
	$sql = $wid==0?"SELECT * FROM widget_slides WHERE 1 ORDER BY id DESC":"SELECT * FROM widget_slides WHERE widgid='$wid' ORDER BY id DESC";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to List $subjs",2);		
	}
	$id = array();
	while($row = $result->fetch_assoc()){
	$id[] = (int)$row['id'];	
	$title[] = $this->printify($row['title'],1);	
	$author[] = $this->printify($row['author'],1);	
	$widgid[] = (int)$row['widgid'];	
	$widget[] = ucwords($this->get_this_data("title","widgets","id",(int)$row['widgid']));	
	$status[] = $this->get_this_data("title","posts_statuses","id",(int)$row['status']);	
	$datepublished[] = $this->date_convert($row['date_updated'],"Y/m/d");	
	}
	$c = count($id);
	if($c<=0){return;}
	for($i=0,$j=1;$i<$c;$i++,$j++){
		echo "
			<tr>
			<td><input type='checkbox' class='checkbox1'> $j</td>
			<td>{$title[$i]}</td>
	<td><a href='widget-slides-list?wid={$widgid[$i]}'>{$widget[$i]}</a></td>
			<td>{$status[$i]}</td>
			<td class='text-center'>
			<a href='widget-slides-edit?wsid={$id[$i]}&amp;action=edit' title='Edit $subj'><i class='fa fa-edit (alias)'></i></a> 
			<a href='?wid={$widgid[$i]}&delid={$id[$i]}&action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
			</td>		
			</tr>
		  ";
	}
	
}
	
	public function list_users(){
			$subj = "User";$subjs = "Users";
		$base = $this->base(0);
		$sql = "SELECT * FROM $subjs WHERE 1 ORDER BY id DESC";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to List $subjs",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id[] = (int)$row['id'];	
		$username[] = $this->printify($row['usuere'],1);	
		$fullname[] = $this->printify($row['fullname'],1);	
		$email[] = $this->printify($row['email'],1);	
		$lastactive[] = $this->days_elapsed($row['lastactive']);	
		$active = (int)$row['active'];	
		$status[] = $this->get_this_data("title","users_statuses","id",$active);	
		$typeid = (int)$row['account_type'];	
		$account_type[] = $this->get_this_data("title","users_accounttypes","id",$typeid);	
		}
		$c = count($id);
		if($c<=0){return;}
		for($i=0,$j=1;$i<$c;$i++,$j++){
			echo "
				<tr>
				<td><input type='checkbox' class='checkbox1'> $j</td>
				<td>{$username[$i]}</td>
				<td>{$fullname[$i]}</td>
				<td>{$account_type[$i]}</td>
				<td>{$email[$i]}</td>
				<td>{$lastactive[$i]}</td>
				<td>{$status[$i]}</td>
				<td class='text-center'>
				<a href='user-edit.php?uid={$id[$i]}&amp;action=edit' title='Update $subj Account'><i class='fa fa-edit (alias)'></i></a> 
				<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
				</td>		
				</tr>
			  ";
		}
		
	}

	public function select_post($pid,&$title, &$slug, &$catid, &$image, &$thumb, &$image_align, &$authorid, &$author, &$excerpt, &$content, &$progress, &$btn_url, &$btn_text, &$tags, &$date_updated, &$addfield1, &$addfield2, &$addfield3, &$addfield4, &$addfield5, &$status,$mode){
		$table = $mode==1?"posts":"widget_slides";
		$subj = $mode==1?"post":"widget slide";
		$cwfield = $mode==1?"catid":"widgid";
		$base = $this->base(0);
		$pid = (int)$pid;
	$sql = "SELECT * FROM $table WHERE id='$pid' ORDER BY id DESC";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to Select $subj For Updating ","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to Select $subj",2);		
	}
	$id = array();
	while($row = $result->fetch_assoc()){
	$id = (int)$row['id'];	
	$title = $this->printify($row['title'],1);	
	$slug = $this->printify($row['slug'],1);	
	$catid = $this->printify($row[$cwfield],1);	
	$author = $this->printify($row['author'],1);	
	$image = $this->printify($row['image'],1);	
	//$image = $this->printify($row['fullimage'],1);	
	$thumb = $this->printify($row['thumb'],1);	
	$excerpt = $this->convert_RN($this->printify($row['excerpt'],1));	
	$content = $this->convert_RN($this->printify($row['content'],1));	
	$image_align = $this->printify($row['image_align'],1);	
	//$image_align = $this->printify($row['fullimage_align'],1);	
	$progress = (int)$row['progress'];	
	$btn_url = $this->printify($row['btn_url'],1);	
	$tags = $this->printify($row['tags'],1);	
	$btn_text = $this->printify($row['btn_text'],1);	
	$date_updated = $this->printify($row['date_updated'],1);	
	$addfield1 = $this->printify($row['addfield1'],1);	
	$addfield2 = $this->printify($row['addfield2'],1);	
	$addfield3 = $this->printify($row['addfield3'],1);	
	$addfield4 = $this->printify($row['addfield4'],1);	
	$addfield5 = $this->printify($row['addfield5'],1);
	$authorid = $this->get_this_data("id","users","fullname",$author);	
	}
	return;
	}

	public function select_user($uid,&$username, &$firstname, &$lastname, &$email, &$account_type, &$active){
		$base = $this->base(0);
		$uid = (int)$uid;
	$sql = "SELECT * FROM users WHERE id='$uid' ORDER BY id LIMIT 1";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to Select User ","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to Select User",2);		
	}
	$id = array();
	while($row = $result->fetch_assoc()){
	$id = (int)$row['id'];	
	$username = $this->printify($row['usuere'],1);	
	$firstname = $this->printify($row['first_name'],1);	
	$lastname = $this->printify($row['last_name'],1);	
	$email = $this->printify($row['email'],1);	
	$account_type = $this->printify($row['account_type'],1);	
	$active = (int)$row['active'];	

	}
	return;
	}

	public function select_category($catid, &$title, &$slug, &$usedfields, &$requiredfields, &$fieldlabels,$mode='1'){
		$table = $mode == 1?"categories":"Widgets";
		$subj = $mode == 1?"Category":"Widget";
		$base = $this->base(0);
		$catid = (int)$catid;
		$sql = "SELECT * FROM $table WHERE id='$catid' ORDER BY id LIMIT 1";
		if(!$result = $this->connection->query($sql))
		{
		$this->dugoye($this->user_id,"Unable to Select $subj ","Reason: ".$this->connection->error);		
		return $this->just_notify("Unable to Select $subj",2);		
		}
		$id = array();
		while($row = $result->fetch_assoc()){
		$id = (int)$row['id'];	
		$title = $this->printify($row['title'],1);	
		$slug = $this->printify($row['slug'],1);	
		$usedfields = $this->printify($row['usedfields'],1);	
		$requiredfields = $this->printify($row['requiredfields'],1);	
		$fieldlabels = $this->printify($row['fieldlabels'],1);	
		}
		return;
	}
	
	public function update_post(){	
		$postid	= isset($_POST['postid'])?(int)$_POST['postid']:0;
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$catid  = isset($_POST['category'])?(int)$_POST['category']:0;
		$image	= isset($_POST['image'])?$this->wordify($_POST['image'],1):"";
		//$fullimage	= isset($_POST['fullimage'])?$this->wordify($_POST['fullimage'],1):"";
		$thumb	= isset($_POST['thumb'])?$this->wordify($_POST['thumb'],1):"";
		$image_align  = isset($_POST['image_align'])?$this->wordify($_POST['image_align'],1):"";
		//$fullimage_align  = isset($_POST['fullimage_align'])?$this->wordify($_POST['fullimage_align'],1):"";
		$authorid	= isset($_POST['authorid'])?(int)$_POST['authorid']:"0";
		$author	= $this->get_this_data("fullname","users","id",$authorid);
		$excerpt = isset($_POST['excerpt'])?$this->convert_RN($this->wordify($_POST['excerpt'],1)):"";
		$content = isset($_POST['content'])?$this->convert_RN($this->wordify($_POST['content'],1)):"";
		$progress	= isset($_POST['progress'])?$this->wordify($_POST['progress']):"";
		$btn_url	= isset($_POST['btnurl'])?$this->wordify($_POST['btnurl'],1):"";
		$btn_text	= isset($_POST['btntext'])?strtolower($this->wordify($_POST['btntext'])):"";
		$tags 		= isset($_POST['tags'])?$this->wordify($_POST['tags'],1):"";
		$addfield1	= isset($_POST['addfield1'])?$this->wordify($_POST['addfield1'],1):"";
		$addfield2  = isset($_POST['addfield2'])?$this->wordify($_POST['addfield2'],1):"";
		$addfield3  = isset($_POST['addfield3'])?$this->wordify($_POST['addfield3'],1):"";
		$addfield4  = isset($_POST['addfield4'])?$this->wordify($_POST['addfield4'],1):"";
		$addfield5  = isset($_POST['addfield5'])?$this->wordify($_POST['addfield5'],1):"";
		$status  = isset($_POST['status'])?(int)$_POST['status']:0;
		$rowsaffected = "";
		$sql = "UPDATE posts SET title=?, slug=?, catid=?, image=?, thumb=?, image_align=?, author=?, excerpt=?, content=?, progress=?, btn_url=?, btn_text=?, tags=?, date_updated=?, addfield1=?, addfield2=?, addfield3=?, addfield4=?, addfield5=?, status=? WHERE id=?";
		if($result = $this->connection->prepare($sql)){
		$result->bind_param('ssissssssissssssssssi', $title, $slug, $catid, $image, $thumb, $image_align, $author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $date_updated, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status,$postid);
		$result->execute();
		$rowsaffected = $result->affected_rows;
		$this->dugoye($this->user_id, "Post Updated Successful- $title");
		$this->set_server_msg("Post Successfully Updated!",1);
		$this->goto_notify("post-edit?postid=$postid&action=edit");
		}else{
		$this->dugoye($this->user_id, "Error, Post Updated Failed- $title","Reason: ".$this->connection->error);
		$this->set_server_msg("Error Updating Post, Please Check The Log and Try Again",2);
		$this->goto_notify("post-edit?postid=$postid&action=edit");
		}	   
	}

	public function update_widget_slide(){	
	//NEEDS WORK
		$postid	= isset($_POST['postid'])?(int)$_POST['postid']:0;
		$title	= isset($_POST['title'])?$this->wordify($_POST['title'],1):"";
		$slug 	= isset($_POST['slug'])?$this->wordify($_POST['slug'],1):"";
		$catid  = isset($_POST['category'])?(int)$_POST['category']:0;
		$image	= isset($_POST['image'])?$this->wordify($_POST['image'],1):"";
		$thumb	= isset($_POST['thumb'])?$this->wordify($_POST['thumb'],1):"";
		$image_align  = isset($_POST['image_align'])?$this->wordify($_POST['image_align'],1):"";
		$authorid	= isset($_POST['authorid'])?(int)$_POST['authorid']:"0";
		$author	= $this->get_this_data("fullname","users","id",$authorid);
		$excerpt = isset($_POST['excerpt'])?$this->convert_RN($this->wordify($_POST['excerpt'],1)):"";
		$content = isset($_POST['content'])?$this->convert_RN($this->wordify($_POST['content'],1)):"";
		$progress	= isset($_POST['progress'])?$this->wordify($_POST['progress']):"";
		$btn_url	= isset($_POST['btnurl'])?$this->wordify($_POST['btnurl']):"";
		$btn_text	= isset($_POST['btntext'])?strtolower($this->wordify($_POST['btntext'])):"";
		$tags 		= isset($_POST['tags'])?$this->wordify($_POST['tags'],1):"";
		$addfield1	= isset($_POST['addfield1'])?$this->wordify($_POST['addfield1'],1):"";
		$addfield2  = isset($_POST['addfield2'])?$this->wordify($_POST['addfield2'],1):"";
		$addfield3  = isset($_POST['addfield3'])?$this->wordify($_POST['addfield3'],1):"";
		$addfield4  = isset($_POST['addfield4'])?$this->wordify($_POST['addfield4'],1):"";
		$addfield5  = isset($_POST['addfield5'])?$this->wordify($_POST['addfield5'],1):"";
		$status  = isset($_POST['status'])?(int)$_POST['status']:0;
		$rowsaffected = "";
		$sql = "UPDATE widget_slides SET title=?, slug=?, image=?, thumb=?, image_align=?, author=?, excerpt=?, content=?, progress=?, btn_url=?, btn_text=?, tags=?, date_updated=?, addfield1=?, addfield2=?, addfield3=?, addfield4=?, addfield5=?, status=? WHERE id=?";
		if($result = $this->connection->prepare($sql)){
		$result->bind_param('ssssssssissssssssssi', $title, $slug, $image, $thumb, $image_align,$author, $excerpt, $content, $progress, $btn_url, $btn_text, $tags, $date_updated, $addfield1, $addfield2, $addfield3, $addfield4, $addfield5, $status,$postid);
		$result->execute();
		$rowsaffected = $result->affected_rows;
		$this->dugoye($this->user_id, "Widget Updated Successful- $title");
		$this->set_server_msg("Widget Successfully Updated",1);
		$this->goto_notify("?wsid=$postid&action=edit");
		
		}else{
		$this->dugoye($this->user_id, "Error, Widget Updated Failed- $title","Reason: ".$this->connection->error);
		return $this->just_notify("Error Updating Widget, Please Check The Log and Try Again",2);
		}	   
	}
	
	public function insert_media(){
		$title		=$this->wordify($_POST['title'],1);
		$slug	=  $filename	=$this->wordify($_POST['slug'],1);
		$tags	=  $this->wordify($_POST['tags'],1);
		$mwidth 		= (int)$_POST['mwidth'];
		$mheight 		= (int)$_POST['mheight'];
		$filesize 		= $_FILES['attachment']['size'];
		$filetype 		= $_FILES['attachment']['type'];
//		$this->test_here("$mwidth x $mheight = $filesize - $filetype",1);
		$file = "";
			$filename .= "-".substr(time(),-5);
		if(isset($_FILES['attachment'])){
			$path = "../../gallery/";
			if($_FILES['attachment']['size'] > 0){
			$file = $this->att_manager($filename,$path,$ftype=1,$errorpage=1); 
				if($mwidth>0 && $mheight>0 && $filetype =='image/jpeg')
				$file = $this->make_thumb($file,$mwidth,$mheight,$path,1);
				}
			}
			$fileurl = "../../gallery/$file";
	/* "INSERTING INTO TABLE";*/
	if($stmt = $this->connection->prepare("INSERT INTO medias(title, filename, filetype, filesize, mwidth, mheight, tags) values(?,?,?,?,?,?,?)")){
		$stmt->bind_param('sssiiis', $title, $file, $filetype, $filesize, $mwidth, $mheight, $tags);
		if($stmt->execute()){
		$stmt->close(); 
		$this->dugoye($this->user_id, "Uploaded File $file");		
		return $this->just_notify("File Uploaded - $file ! <a href='$fileurl' class='btn btn-success btn-sm' target='_blank'>View &raquo;</a>",1);
		}else{
		return $this->just_notify("Upload Failed, Please try again later! ",2);
		}
		}else{
			/* Error */
		return $this->just_notify("Upload Failed, Please try again later! ",2);

			}
		return $this->just_notify("Upload Failed, Please try again later! ",2);
	
	}
	
	public function insert_dimension(){
		$title		= $this->wordify($_POST['title'],1);
		$width		= (int)$_POST['mwidth'];
		$height	= (int)$_POST['mheight'];

	/* "INSERTING INTO TABLE";*/
	if($stmt = $this->connection->prepare("INSERT INTO media_presets(title, width, height) values(?,?,?)")){
		$stmt->bind_param('sii', $title, $width, $height);
		if($stmt->execute()){
		$stmt->close(); 
		$this->dugoye($this->user_id, "Added a Media Dimension: $title");		
		return $this->just_notify("Media Preset Dimension Added",1);
		}else{
		return $this->just_notify("Error, Unable to add Dimension, Please try again later! ",2);
		}
		}else{
			/* Error */
		return $this->just_notify("Error, Unable to add Dimension, Please try again later! ",2);

			}
		return $this->just_notify("Error, Unable to add Dimension, Please try again later! ",2);
	
	}

	public function media_thumb($file){
		$filebase = $this->base(0)."/gallery";
		$shorturl = "../../gallery/$file";
		$fileurl = $filebase."/$file";
		$picExts = array("jpg","jpeg","png","gif");
		$otherExts = array("mp3","doc","docx","pdf");
		$thumb ="";
		 if($file != "" && file_exists($shorturl)){
			$ext = strtolower(pathinfo($fileurl, PATHINFO_EXTENSION));
			if(in_array($ext,$picExts)){
				$thumb  = "<img src='$fileurl' class='media-thumb'>";
			}elseif(in_array($ext,$otherExts)){
				$thumb = "<img src='$filebase/_media-thumb_$ext.jpg' class='img-responsive'>";
			}else{
				$thumb = "<img src='$filebase/_media-thumb_$ext.jpg' class='img-responsive'>";
			}
		 }else{
				$thumb = "<img src='$filebase/_media-thumb_missing.jpg' class='img-responsive'>";			 
		 }
		 return $thumb;		
	}
	
	public function show_media_gallery(){
	$filebase = $this->base(0)."/gallery";
	$subj = "media";$subjs = "medias";
	$base = $this->base(0);
	$sql = "SELECT * FROM $subjs WHERE 1 ORDER BY id DESC";
	if(!$result = $this->connection->query($sql))
	{
	$this->dugoye($this->user_id,"Unable to List $subjs ","Reason: ".$this->connection->error);		
	return $this->just_notify("Unable to List $subjs",2);		
	}
	$id = array();$k=0;
	while($row = $result->fetch_assoc()){
	$id[] = $pid = (int)$row['id'];
	$title[]	= $this->printify($row['title'],1);
	$filename[] = $file = $this->printify($row['filename'],1);
	$fileurl[] = $filebase."/$file";
	$filetype[] = $this->printify($row['filetype'],1);
	$fileth = $this->media_thumb($file);
	$filethumb[] = "<div class='media-thumb_box'>$fileth
	<div class='input-group'><input id='copy$pid' type='text' class='form-control' readonly  value='{$filename[$k]}'><div class='input-group-append'><button class='btn btn-success btn-sm copyimg' type='button' onclick='return copyImg($pid)'>Copy Image</button></div></div>
	</div>";
	
	$filetype[] = $this->printify($row['filetype'],1);
	$tags[] = $this->printify($row['tags'],1);
	$mwidth[] = (int)$row['mwidth'];
	$mheight[] = (int)$row['mheight'];
	$date_uploaded[] = $this->date_convert($row['date_uploaded'],"Y/m/d");
	$k++;
	}
	$c = count($id);
	if($c<=0){return;}
	for($i=0,$j=1;$i<$c;$i++,$j++){
		echo "
			<tr>
			<td><input type='checkbox' class='checkbox1'> $j</td>
			<td>{$filethumb[$i]}</td>
			<td class='valign'>{$title[$i]}<br><input style='width:0px;border:none' type='text' id='fullimg$j' value='{$fileurl[$i]}'><button class='btn btn-default btn-sm copyimg' type='button' onclick='return copyFullImg($j)' >Copy Full URL</button></td>
			<td class='valign'>{$mwidth[$i]} x {$mheight[$i]}</td>
			<td class='valign'>{$date_uploaded[$i]}</td>
			<td class='text-center valign'>
			<a href='post-edit.php?postid={$id[$i]}&amp;action=edit' title='Edit $subj'><i class='fa fa-edit (alias)'></i></a> 
			<a href='?delid={$id[$i]}action=delete' title='Delete $subj' onclick='return confirmThisAction(\"Are You Sure You Want To Delete This $subj?\")'><i class='fa fa-times (alias)'></i></a>
			</td>		
			</tr>
		  ";
	}
	
}

	
}/*End of admin_lib class*/
$emscms = new admin_lib;

$emscms->begin_session();
if(!isset($_SESSION[$emscms->user]) || !isset($_SESSION['ikasiye'])){
$emscms->goto_notify('../login?login=false');
exit();
}

$emscms = new admin_lib;

//	$emscms->test_array($_SESSION);

$emscms->user_id = $regno = $user_id = isset($_SESSION[$emscms->userboid])?$emscms->remove_chars($_SESSION[$emscms->userboid],1):"";
$lactive = isset($_SESSION['expsession'])?$_SESSION['expsession']:0;
$emscms->acc_type = $acctype = $emscms->remove_chars($_SESSION['acc_type'],1);
$acctypemin = substr($acctype,-3);
$now = time();
$expired = ($now - $lactive);
if(isset($_GET['paka']) || $expired>1800)
{
$emscms->goto_notify("session/ALPHA_igbedigi.php?paka=1");
}else{
$_SESSION['expsession'] = time();
}
?>