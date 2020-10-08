<?php 
	header("Content-Type:application/json");
	if (isset($_GET['id']) && $_GET['id']!="") {
		 include('db.php');
		 $id = $_GET['id'];
		 $result = mysqli_query(
		 $con,
		 "SELECT * FROM `property_info` where id = $id;");
		 if(mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
			$amount = $row['id'];
			$prop_id = $row['prop_id'];
			$user_id = $row['user_id'];
			$email = $row['user_email'];
			$title = $row['title'];
			$description = $row['description'];
			$img1 = $row['img1'];
			$img2 = $row['img2'];
			
		 response($id, $amount, $prop_id,$user_id, $email, $title, $description, $img1, $img2);
		 mysqli_close($con);
		 }else{
		 response(NULL, NULL, 200,"No Record Found");
		 }
		}else{
		 response(NULL, NULL, 400,"Invalid Request");
		 }
		 
		function response($id,$amount,$prop_id, $user_id, $email, $title, $description, $img1, $img2 ){
			 $response['id'] = $id;
			 $response['amount'] = $amount;
			 $response['prop_id'] = $prop_id;
			 $response['user_id'] = $user_id;
			 $response['user_email'] = $email;
			 $response['title'] = $title;
			 $response['description'] = $description;
			 $response['img1'] = $img1;
			 $response['img2'] = $img2;
			 
			 
		 $json_response = json_encode($response);
		 
		 echo $json_response;
		 echo $josn_response['response_code'];
	}


?>

