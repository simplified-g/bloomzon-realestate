<?php
    
    $arr = array();
	header("Content-Type:application/json");
		 include('../db.php');
		 
		 $result = mysqli_query($con, "SELECT * FROM `requests` ORDER BY id DESC LIMIT 1;");
		 $count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `requests`;"));
		 
		 
		 if(mysqli_num_rows($result)>0){
    		 while($row = mysqli_fetch_assoc($result)){
    		        
    		        $prop_id = $row["prop_id"];
    		        
    		        $id = $row['id'];
    			$title = $row['title'];
    			$message = $row['message'];
    			$sender_id = $row['sender_id'];
    			$receiver_id = $row['receiver_id'];
    			
    			$sender = mysqli_query($con, "SELECT * FROM `agents` WHERE id = '$sender_id';");
    			
    			
    			$sender_row = mysqli_fetch_assoc($sender);
    			$sender_name = $sender_row['name'];
    			
    		        
    		         $sql = mysqli_query($con, "SELECT title, state, prop_id, img1 FROM `property_info` WHERE prop_id = '$prop_id'; ");
		  	 if(mysqli_num_rows($sql)>0){
		  	     while($nrow = mysqli_fetch_assoc($sql)){
		  	         
    			
    			$response['id'] = $id;
    			 $response['title'] = $title;
    			 $response['message'] = $message;
    			 $response['sender_name'] = $sender_name;
    			 $response['propTitle'] = $nrow["title"];
    			 $response['location'] = $nrow["state"];
    			 $response['propId'] = $nrow["prop_id"];
    			 $response['img1'] = $nrow["img1"];
    			 $response['count'] = $count;
    			 $response['sender_id'] = $sender_id;
    			 $response['receiver_id'] = $receiver_id;
    			 
    			 
    			 
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
		



?>