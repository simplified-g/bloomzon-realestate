<?php 
    $arr = array();
	header("Content-Type:application/json");
		 include('../db.php');
		 $first_query = mysqli_query($con, "SELECT * FROM `favourites`;");
		 
		 function getUser($con, $id){
		     $result = mysqli_query($con, "SELECT name, phone FROM `agents` WHERE id = '$id';");
		     $row = mysqli_fetch_row($result);
		     return $row;
		 }
		 
		 
		 while($row_first = mysqli_fetch_assoc($first_query)){
		  
		 $val = $row_first["PropID"];
		 
		 $result = mysqli_query($con, "SELECT * FROM `property_info` WHERE `prop_id` = '$val';");
		 
// 		 if ($result > 0){
		 
		 
		 
		 if(mysqli_num_rows($result)>0){
    		    while($row = mysqli_fetch_assoc($result)){
    		        if(count($row) > 0 ){
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
    			$img2 = $row['img2'];
    			$status = $row['status'];
    			
    			
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
    			 $response['img2'] = $img2;
    			 $response['status'] = $status;
    			 
    			 array_push($arr, $response);
    		    }
    			 
    		    }
    			 
    		 $json_response = json_encode($arr);
    		 
    		 echo $json_response;
    			
    			
    			
        // 		response($id, $amount, $prop_id,$user_id, $email, $title, $description, $img1, $img2);
    		 
    		  mysqli_close($con);
		 }
		 
// 		}
	}
		 
// 		function response($id,$amount,$prop_id, $user_id, $email, $title, $description, $img1, $img2 ){
// 			 $response['id'] = $id;
// 			 $response['amount'] = $amount;
// 			 $response['prop_id'] = $prop_id;
// 			 $response['user_id'] = $user_id;
// 			 $response['user_email'] = $email;
// 			 $response['title'] = $title;
// 			 $response['description'] = $description;
// 			 $response['img1'] = $img1;
// 			 $response['img2'] = $img2;
			 
// 			 array_push($arr, $response);
			 
// 		 $json_response = json_encode($arr);
		 
// 		 echo $json_response;

// 	}
	
	

?>

