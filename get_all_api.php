<?php 
    $arr = array();
	header("Content-Type:application/json");
		 include('db.php');
		 
		 
		 $result = mysqli_query($con, "SELECT * FROM `property_info` ORDER BY id DESC;");
		 
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
		 
		 if(mysqli_num_rows($result)>0){
    		    while($row = mysqli_fetch_assoc($result)){
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
    			 if ( isset($_GET['user_email']) && $_GET['user_email'] != "" ) {
		     
		                $user_email = $_GET["user_email"];
    			 $response['isFav'] = isFav($con, $prop_id, $user_email);
    			 
    			 }else{
    			     $response['isFav'] = false;
    			 }
    			 
    			 array_push($arr, $response);
    			 
    		    }
    			 
    		 $json_response = json_encode($arr);
    		 
    		 echo $json_response;
    			
    			
    		 
    		  mysqli_close($con);
		}
		

		 
	
	

?>

