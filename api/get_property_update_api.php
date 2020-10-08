<?php
    
    $arr = array();
	header("Content-Type:application/json");
		 include('../db.php');
		 
// 		 $result = mysqli_query($con, "SELECT * FROM `requests` ORDER BY id DESC LIMIT 1;");
		 
		 
		 $count = mysqli_num_rows(mysqli_query($con, "SELECT * FROM `property_info`;"));
		 
		  
    			
    	$response['count'] = $count;
    	
    	array_push($arr, $response);

    			 
    	$json_response = json_encode($arr);
    	 
    	echo $json_response;
    
    	 
    	mysqli_close($con);

		



?>