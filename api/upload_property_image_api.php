<?php

require('../ems-incs/ems_public_lib.inc.php');

$file_name = $file_size = $file_tmp = $file_type = "";
$postid	= isset($_POST['prop_id'])?(int)$_POST['prop_id']:0;
$img = $_POST['img'];

$file_name = @$_FILES['image']['name'];
$file_size = @$_FILES['image']['size'];
$file_tmp = @$_FILES['image']['tmp_name'];
$file_type = @$_FILES['image']['type'];


if($file_size > 2097152){
	$errors[]='File size must be excertly 2 MB';
	echo "Image size must not exceed 2 MB.";
	die();
}

if(empty($errors)==true){
	if ( !is_dir( "../assets/upload/".$postid ) ) {
		mkdir("../assets/upload/".$postid);
	} 
	move_uploaded_file($file_tmp,"../assets/upload/$postid/".$postid."-".$file_name);
}else{
    echo "Error uploading image files, make sure they correspond to the rules.";
	die();
}

$file_name  = $postid."-".$file_name;

$sql = "UPDATE property_info SET {$img}=? WHERE prop_id=?";
if($result = $emscms->connection->prepare($sql)){
    $result->bind_param('si', $file_name, $postid );
    
    $reponse = $result->execute();
    if($reponse);
    {
        echo $file_name;
        die();
    }
    
}
echo "Error Updating Post, Please Check The Log and Try Again";
die();
