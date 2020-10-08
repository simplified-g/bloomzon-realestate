<?php
require('../ems-incs/ems_public_lib.inc.php');


$user_email = $_POST['email'];
$user_id = $_POST['user_id'];
$id	= isset($_POST['id'])?(int)$_POST['id']:0;


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

$features = ($_POST['features'])?$emscms->wordify($_POST['features'],1):"";

//$files = isset($_POST['files'])?$emscms->wordify($_POST['files'],1):"";
$address  = isset($_POST['address'])?$emscms->wordify($_POST['address'],1):"";
$state  = isset($_POST['state'])?$emscms->wordify($_POST['state'],1):"";
$Postal_code  = isset($_POST['Postal_code'])?$emscms->wordify($_POST['Postal_code'],1):"";

$dsn = 'mysql: host=localhost; dbname=gohomeng_web_db';
try{
	$pdo = new PDO($dsn, 'gohomeng_db_user', '4T5RxsDOX1PeOX!f4a%8');		
	$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
	catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
	die();
}

$queryer = "UPDATE property_info SET  title=:title ,description=:description ,
            type=:type, status=:status , bedrooms=:bedrooms,
            bathrooms=:bathrooms, floors=:floors, garages=:garages,
            size=:size, price=:price, features =:features, address=:address,
            state=:state, postal_code=:postal_code WHERE id=:id";
if($stmt = $pdo->prepare($queryer)){
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
    $stmt->bindParam(':features', $features, PDO::PARAM_STR);  
    $stmt->bindParam(':address', $address, PDO::PARAM_STR);    
    $stmt->bindParam(':state', $state, PDO::PARAM_STR);  
    $stmt->bindParam(':postal_code', $Postal_code, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
}
if($stmt->execute()){
    echo "Property Updated!";
} else {
    echo "Unable to Update Property, please retry later";
}