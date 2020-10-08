<?php
$arr = array();
$favs_arr = array();
	header("Content-Type:application/json");
		 include('../db.php');
		 
		 function getUser($con, $id){
		     $result = mysqli_query($con, "SELECT name, phone FROM `agents` WHERE id = '$id';");
		     $row = mysqli_fetch_row($result);
		     return $row;
		 }
		 
		 function getUserId($con, $email){
		    $result = mysqli_query($con, "SELECT id FROM `agents` WHERE `email` = '$email';");
		    $row = mysqli_fetch_row($result);
		    return $row;   
		 }
		 
		 
		 if (isset($_GET['userId']) && $_GET['userId'] != "" ) {
		  $user_id = $_GET["userId"];
		  
		  $first_query = mysqli_query($con, "SELECT * FROM `favourites` WHERE `Userid` = '$user_id';");
		 
		 while($row_first = mysqli_fetch_assoc($first_query)){
		  
		 $propId = $row_first["PropID"];
		 $fav_email = $row_first["Userid"];
		 
		 $favs_info = array();
		 
		 array_push($favs_info, $propId, $fav_email);
		 
		 array_push($favs_arr, $favs_info);
		 
		 }
		 
// 		 var_dump($favs_arr);
		
		foreach($favs_arr as $fav){
		    $query = $result = mysqli_query($con, "SELECT * FROM `property_info` WHERE `prop_id` = '$fav[0]' ORDER BY id DESC;");
		    
		    if(mysqli_num_rows($query)>0){
    		    while($row = mysqli_fetch_assoc($query)){
    			$id = $row['id'];
    			$amount = $row['price'];
    			$prop_type = $row['type'];
    			$bedrooms = $row['bedrooms'];
    			$bathrooms = $row['bathrooms'];
    			$prop_id = $row['prop_id'];
    			$user_id = $row['user_id'];
    			$email = $row['user_email'];
    			$username = getUser($con, $user_id)[0];
    			$phone = getUser($con, $user_id)[1];
    			$address = $row['address'];
    			$region = $row['region'];
    			$state = $row['state'];
    			$title = $row['title'];
    			$description = $row['description'];
    			$features = $row['features'];
    			$img1 = $row['img1'];
    			$img2 = $row['img2'];
    			$img3 = $row['img3'];
                $img4 = $row['img4'];
                $img5 = $row['img5'];
                $img6 = $row['img6'];
                $img7 = $row['img7'];
                $img8 = $row['img8'];
                $img9 = $row['img9'];
                $img10 = $row['img10'];
                $img11= $row['img11'];
                $img12= $row['img12'];
                $img13 = $row['img13'];
                $img14 = $row['img14'];
                $img15 = $row['img15'];
    			$status = $row['status'];
    			
    			
    			$response['id'] = $id;
    			$response['prop_id'] = $prop_id;
    			$response['user_id'] = $user_id;
    			$response['user_email'] = $email;
                $response['title'] = $title;
    			$response['description'] = $description;
		    	$response['type'] = $prop_type;
    			$response['status'] = $status;
			    $response['bedrooms'] = $bedrooms;
			    $response['bathrooms'] = $bathrooms; 
    			$response['floors'] = $row['floors'];
    			$response['garages'] = $row['garages'];
    			$response['featured'] = $row['featured'];
    			$response['size'] = $row['size'];
    			$response['features'] = $features;
    			$response['amount'] = $amount;
    			$response['username'] = $username;
    			$response['phone'] = $phone;
    			$response['address'] = $address;
    			$response['region'] = $region;
    			$response['state'] = $state;
    			$response['postal_code'] = $row['postal_code'];
    			$response['approved'] = $row['approved'];
    			$response['img1'] = $img1;
    			$response['img2'] = $img2;
    			$response['img3'] = $img3;
                $response['img4'] = $img4;
                $response['img5'] = $img5;
                $response['img6'] = $img6;
                $response['img7'] = $img7;
                $response['img8'] = $img8;
                $response['img9'] = $img9;
                $response['img10'] = $img10;
                $response['img11'] = $img11;
                $response['img12'] = $img12;
                $response['img13'] = $img13;
                $response['img14'] = $img14;
                $response['img15'] = $img15;
			     $response['isFav'] = true;
    			 $response['fav_user_id'] = getUserId($con, $fav[1])[0];
    			 
    			 array_push($arr, $response);
    		    }
		    }
		}
		 }else{
		     $response["message"] = "Invalid request";
		 }
		 
		 
		
		$json_response = json_encode($arr);
    		 
        echo $json_response;


?>