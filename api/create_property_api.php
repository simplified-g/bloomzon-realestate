<?php

require('../ems-incs/ems_public_lib.inc.php');


$user_email = $_POST['email'];
$user_id = $_POST['user_id'];
$last_id = (int)$emscms->generate_token("property_info","prop_id",10000);


$file_name1 = $file_size1 = $file_tmp1 = $file_type1 = "";
if(isset($_FILES['img1'])){
    $file_name1 = @$_FILES['img1']['name'];
    $file_size1 = @$_FILES['img1']['size'];
    $file_tmp1 = @$_FILES['img1']['tmp_name'];
    $file_type1 = @$_FILES['img1']['type'];
}
$file_name2 = $file_size2 = $file_tmp2 = $file_type2 = "";
if(isset($_FILES['img2'])){
    $file_name2 = @$_FILES['img2']['name'];
    $file_size2 = @$_FILES['img2']['size'];
    $file_tmp2 = @$_FILES['img2']['tmp_name'];
    $file_type2 = @$_FILES['img2']['type'];
}
if($file_size1 > 2097152 || $file_size2 > 2097152 ){
	$errors[]='File size must be excertly 2 MB';
	echo "Image size must not exceed 2 MB.";
	die();
}

if(empty($errors)==true){
	if ( !is_dir( "../assets/upload/".$last_id ) ) {
		mkdir("../assets/upload/".$last_id);
	} 
	if(isset($_FILES['img1'])){
	    move_uploaded_file($file_tmp1,"../assets/upload/$last_id/".$last_id."-".$file_name1);
	    $file_name1  = $last_id."-".$file_name1;
	}
	if(isset($_FILES['img2'])){
	    move_uploaded_file($file_tmp2,"../assets/upload/$last_id/".$last_id."-".$file_name2);
	    $file_name2  = $last_id."-".$file_name2;
	}
}else{
    echo "Error uploading image files, make sure they correspond to the rules.";
	die();
}

$title	= isset($_POST['prop_title'])?$emscms->wordify($_POST['prop_title'],1):"";
$description	= isset($_POST['prop_description'])?$emscms->wordify($_POST['prop_description'],1):"";
$type = isset($_POST['prop_type'])?$emscms->wordify($_POST['prop_type'],1):"";
$status	= isset($_POST['prop_status'])?$emscms->wordify($_POST['prop_status']):"";
$bedrooms	= isset($_POST['bedrooms'])?(int)$_POST['bedrooms']:"0";
$bathrooms  = isset($_POST['bathrooms'])?(int)$_POST['bathrooms']:"0";
$floors  = isset($_POST['floors'])?(int)$_POST['floors']:"0";
$garage  = isset($_POST['garage'])?$emscms->wordify($_POST['garage'],1):"";
$prop_size  = isset($_POST['prop_size'])?(int)$_POST['prop_size']:"0";
$prop_price  = isset($_POST['prop_price'])?(int)$_POST['prop_price']:"0";
$video_url  = isset($_POST['video-URL'])?$emscms->wordify($_POST['video-URL'],1):"";

$features = ($_POST['features'])?$emscms->wordify($_POST['features'],1):"";

//$files = isset($_POST['files'])?$emscms->wordify($_POST['files'],1):"";
$address  = isset($_POST['address'])?$emscms->wordify($_POST['address'],1):"";
$city  = isset($_POST['region'])?$emscms->wordify($_POST['region'],1):"";
$state  = isset($_POST['state'])?$emscms->wordify($_POST['state'],1):"";
$Postal_code  = isset($_POST['Postal_code'])?$emscms->wordify($_POST['Postal_code'],1):"";

$name  = isset($_POST['name'])?$emscms->wordify($_POST['name'],1):"";
$phone  = isset($_POST['phone'])?$emscms->wordify($_POST['phone'],1):"";
$email  = isset($_POST['email'])?$emscms->wordify($_POST['email'],1):"";
$website  = isset($_POST['website'])?$emscms->wordify($_POST['website'],1):"";

$agent_email  = isset($_POST['email'])?$emscms->wordify($_POST['email'],1):$user_email;

$featured = 0;
$approved = "no";
$offered = 0;

//$posturl = $emscms->base(0)."/$last_id/$slug";
$dsn = 'mysql: host=localhost; dbname=gohomeng_web_db';
try{
	$pdo = new PDO($dsn, 'gohomeng_db_user', '4T5RxsDOX1PeOX!f4a%8');		
	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
	catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
	die();
}
$queryer = "INSERT INTO property_info(prop_id,user_id,user_email,title,description,type,status,bedrooms,bathrooms,floors,garages,size,price,video_url,features,address,region,state,postal_code,featured,offered,img1,img2,approved) values(:prop_id,:user_id,:user_email,:title,:description,:type,:status,:bedrooms,:bathrooms,:floors,:garages,:size,:price,:video_url,:features,:address,:region,:state,:postal_code,:featured,:offered,:img1,:img2,:approved)";
if($stmt = $pdo->prepare($queryer)){
	$stmt->bindParam(':prop_id', $last_id, PDO::PARAM_STR);  
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_STR);  
    $stmt->bindParam(':user_email', $user_email, PDO::PARAM_STR);  
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);  
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);  
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);  
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);  
    $stmt->bindParam(':bedrooms', $bedrooms, PDO::PARAM_STR);   
    $stmt->bindParam(':bathrooms', $bathrooms, PDO::PARAM_STR);  
    $stmt->bindParam(':floors', $floors, PDO::PARAM_STR);  
    $stmt->bindParam(':garages', $garage, PDO::PARAM_STR);  
    $stmt->bindParam(':size', $prop_size, PDO::PARAM_STR);  
    $stmt->bindParam(':price', $prop_price, PDO::PARAM_STR);  
    $stmt->bindParam(':video_url', $video_url, PDO::PARAM_STR);  
    $stmt->bindParam(':features', $features, PDO::PARAM_STR);  
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);  
    $stmt->bindParam(':region', $city, PDO::PARAM_STR);  
    $stmt->bindParam(':state', $state, PDO::PARAM_STR);  
    $stmt->bindParam(':postal_code', $Postal_code, PDO::PARAM_STR);  
    $stmt->bindParam(':featured', $featured, PDO::PARAM_STR);  
	$stmt->bindParam(':offered', $offered, PDO::PARAM_STR); 
	$stmt->bindParam(':img1', $file_name1, PDO::PARAM_STR);
	$stmt->bindParam(':img2', $file_name2, PDO::PARAM_STR);
    $stmt->bindParam(':approved', $approved, PDO::PARAM_STR);  
	if($stmt->execute()){
	    
	    $to = $user_email; 
		$subject = "GoHomeNG";
		$message = "Your property as been uploaded, Admin will activate it as soon as possible";
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: GoHomeNG <info@gohome.ng>\r\n";
		$headers .= "Reply-To: info@gohome.ng\r\n";
		mail($to, $subject, $message, $headers);
		
		//$emscms->dugoye($emscms->user_id, "Added a new Property  - $title");
// 		$emscms->dugoye($emscms->user_id, "A New Property Has Been Added.");
        echo "New Property Added!";
	    die();
// 		$emscms->goto_notify("add-property.php");	
// 		$stmt->close();
		//$stmt->$emscms = null;
		//$emscms->set_server_msg("Property Successfully Added!",1);
		//$emscms->goto_notify("add-property");
	
	}
}else{
	/* Error */
	$emscms->dugoye($emscms->user_id,"Posting Failed for - $title","FAILED: $last_id, $user_id, $agent_email, $title, $description, $type, $status, $bedrooms, $bathrooms, $floors, $garage, $prop_size, $prop_price, $video_url, $features, $address, $city, $state, $Postal_code, $featured, $file_name1, $file_name2, $file_name3, $file_name4, $file_name5, $file_name6, $file_name7, $file_name8, $file_name9, $file_name10, $file_name11, $file_name12, $file_name13, $file_name14, $file_name15. Reason: ".$emscms->connection->error);	
	echo "Error, Unable to Add Post, please retry later";
}

if(!empty($name)){
	if($stmt = $emscms->connection->prepare("INSERT INTO guest_agents(name, phone, email, website) values(?,?,?,?)")){
		$stmt->bind_param('ssss',$name, $phone, $email, $website);
		if($stmt->execute()){
    // 		$stmt->close();
    // 		$emscms->dugoye($emscms->user_id, "Added a new guest  - $name");	
    		echo "Property Successfully Added!";
	        die();
    // 		$emscms->goto_notify("add-property");
		}
	}else{
		/* Error */
		$emscms->dugoye($emscms->user_id,"Posting Failed for - $name","FAILED: $name, $phone, $email, $website. Reason: ".$emscms->connection->error);	
		echo "Error, Unable to Add Post, please retry later";
	    die();
	}
}