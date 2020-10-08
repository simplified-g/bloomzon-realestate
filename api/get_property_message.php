<?php
    
    $arr = array();
	header("Content-Type:application/json");
	if (isset($_GET['receiver_id']) && $_GET['receiver_id'] != "" && isset($_GET['prop_id']) && $_GET['prop_id'] != "" ) {
		 include('../db.php');
		 
		  $prop_id = $_GET['prop_id'];
		 
		 $receiver_id = $_GET['receiver_id'];
		 $result = mysqli_query($con, "SELECT * FROM `requests` WHERE receiver_id = '$receiver_id' AND prop_id = '$prop_id' GROUP BY `sender_id`;");
		 
		 if(mysqli_num_rows($result)>0){
    		    while($row = mysqli_fetch_assoc($result)){
    		        
    		       
    		        
    		         $sql = mysqli_query($con, "SELECT * FROM `property_info` WHERE prop_id = '$prop_id';");
		  	 if(mysqli_num_rows($sql)>0){
		  	     while($nrow = mysqli_fetch_assoc($sql)){
		  	         
    			$id = $row['id'];
    			$title = $row['title'];
    			$message = $row['message'];
    			$sender_id = $row['sender_id'];
    			
    			$sender = mysqli_query($con, "SELECT * FROM `agents` WHERE id = '$sender_id';");
    			
    			$sender_row = mysqli_fetch_assoc($sender);
    			$sender_name = $sender_row['name'];
    			
    			$count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `requests` WHERE (receiver_id ='$receiver_no' OR sender_id = '$sender_id') AND prop_id = '$prop_id' ORDER BY id ASC;"));
    			
    			
    			$response['id'] = $id;
    			 $response['title'] = $title;
    			 $response['message'] = $message;
    			 $response['sender_name'] = $sender_name;
    			 $response['propTitle'] = $nrow["title"];
    			 $response['location'] = $nrow["state"];
    			 $response['propId'] = $nrow["prop_id"];
    			 $response['img1'] = $nrow["img1"];
    			 $response['sender_id'] = $sender_id;
    			 $response['count'] = $count;
    			 
    			 
    			 
    			 
    			 array_push($arr, $response);
    			 
    		    }
    		    
		 }
		 
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