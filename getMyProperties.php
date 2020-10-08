<?php
    
    $arr = array();
	header("Content-Type:application/json");
	if (isset($_GET['user_id']) && $_GET['user_id']!="") {
		 include('db.php');
		 $user_id = $_GET['user_id'];
		 $result = mysqli_query($con, "SELECT * FROM `property_info` where user_id = $user_id;");
		 
		 if(mysqli_num_rows($result)>0){
    		    while($row = mysqli_fetch_assoc($result)){
    			$id = $row['id'];
    			$amount = $row['price'];
    			$prop_id = $row['prop_id'];
    			$user_id = $row['user_id'];
    			$email = $row['user_email'];
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
    			 $response['prop_id'] = $prop_id;
    			 $response['user_id'] = $user_id;
    			 $response['user_email'] = $email;
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
    			 
    		 $json_response = json_encode($arr);
    		 
    		 echo $json_response;
    		 
    		  mysqli_close($con);
		}else{
		 $arr = [NULL, NULL, 200,"No Record Found"];
		 $json_response = json_encode($arr);
    	 echo $json_response;
		 }
		
	}else{
    	 $arr = [NULL, NULL, 400,"Invalid Request"];
    	 $json_response = json_encode($arr);
    	 echo $json_response;
    	 
	 }



?>