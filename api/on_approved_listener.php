<?php   
      $arr = array();
	header("Content-Type:application/json");
	if (isset($_GET['user_id']) && $_GET['user_id'] != "") {
		 include('../db.php');
		 
		 $user_id = $_GET['user_id'];
		 
		 $query = mysqli_query($con, "SELECT * FROM `property_info` WHERE `user_id`='$user_id' ORDER BY id DESC;");
		 
		 function getUser($con, $id){
		     $result = mysqli_query($con, "SELECT name, phone FROM `agents` WHERE id = '$id';");
		     $row = mysqli_fetch_row($result);
		     return $row;
		 }
		 
		 function isFav($con, $prop_id, $email){
		     $query = mysqli_query($con, "SELECT * from `favourites` WHERE `PropID`='$prop_id' AND `Userid`='$email';");
		     if (mysqli_num_rows($query) > 0){
		         return true;
		     }else{
		         return false;
		     }
		 }
		 
		 
		 if(mysqli_num_rows($query) > 0){
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
    			$img1 = $row['img1'];
    			
    			$response['id'] = $id;
    			 $response['amount'] = $amount;
    			 $response['type'] = $prop_type;
    			$response['bedrooms'] = $bedrooms;
    			$response['bathrooms'] = $bathrooms; 
    			 $response['prop_id'] = $prop_id;
    			 $response['user_id'] = $user_id;
    			 $response['user_email'] = $email;
    			 $response['username'] = $username;
    			 $response['phone'] = $phone;
    			 $response['address'] = $address;
    			 $response['region'] = $region;
    			 $response['state'] = $state;
    			 $response['title'] = $title;
    			 $response['description'] = $description;
    			 $response['img1'] = $img1;
    			 $response['status'] = $status;
    			 $response['approved'] = $row['approved'];
    			 if ( isset($_GET['user_email']) && $_GET['user_email'] != "" ) {
	                $user_email = $_GET["user_email"];
			        $response['isFav'] = isFav($con, $prop_id, $user_email);
    			 }else{
    			    $response['isFav'] = false;
    			 }
    			 
    			 array_push($arr, $response);
		     }
		 }
		 $json_response = json_encode($arr);
    		 
    		 echo $json_response;
    			
    			
    		 
    		  mysqli_close($con);
		 
		 
	}




?>