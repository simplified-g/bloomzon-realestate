<?php
    
    $arr = array();
	header("Content-Type:application/json");
	if (isset($_GET['receiver_id']) && $_GET['receiver_id'] != "" && isset($_GET['sender_no']) && $_GET['sender_no'] != "" ) {
		 include('db.php');
		 
		 $receiver_id = $_GET['receiver_id'];
		 $sender_no = $_GET['sender_no'];
		 
		 
		 $result = mysqli_query($con, "SELECT * FROM `requests` WHERE sender_id='$sender_no' OR receiver_id='$receiver_id' GROUP BY prop_id ORDER BY id DESC;");
		 
		
		 if(mysqli_num_rows($result)>0){
    		    while($row = mysqli_fetch_assoc($result)){
    		        
    		        $prop_id = $row['prop_id'];
    		        $id = $row['id'];
    			$title = $row['title'];
    			$message = $row['message'];
    			$sender_id = $row['sender_id'];
    			$receiver_no = $row['receiver_id'];
    			
    				$sender = mysqli_query($con, "SELECT * FROM `agents` WHERE id = '$sender_id';");
    			
    			$receiver = mysqli_query($con, "SELECT * FROM `agents` WHERE id = '$receiver_no';");
    			
    			$sender_row = mysqli_fetch_assoc($sender);
    			$receiver_row = mysqli_fetch_assoc($receiver);
    			$sender_name = $sender_row['name'];
    			
    			$receiver_name = $receiver_row['name'];
    			
    			$count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `requests` WHERE (receiver_id ='$receiver_no' OR sender_id = '$sender_id') AND prop_id = '$prop_id' ORDER BY id ASC;"));
    		        
    		    $each_count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `requests` WHERE receiver_id = '$receiver_id' AND prop_id = '$prop_id' GROUP BY `sender_id`;"));
    		 $sql = mysqli_query($con, "SELECT title, state, prop_id, img1 FROM `property_info` WHERE prop_id = '$prop_id'; ");
		  	 if(mysqli_num_rows($sql)>0){
		  	     while($nrow = mysqli_fetch_assoc($sql)){
    			
    			
    			$response['id'] = $id;
    			 $response['title'] = $title;
    			 $response['message'] = $message;
    			 $response['sender_id'] = $sender_id;
    			 $response['receiver_id'] = $receiver_id;
    			 $response['sender_name'] = $sender_name;
    			 $response['receiver_name'] = $receiver_name;
    			 $response['sender_id'] = $sender_id;
    			 $response['propTitle'] = $nrow["title"];
    			 $response['location'] = $nrow["state"];
    			 $response['propId'] = $nrow["prop_id"];
    			 $response['img1'] = $nrow["img1"];
    			 $response['count'] = $count;
    			 $response['each_count'] = $each_count;
    			 
    			 
    			 
    			 
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