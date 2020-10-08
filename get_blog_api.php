<?php 

    $arr = array();
	header("Content-Type:application/json");
		 include('db.php');
		 $result = mysqli_query($con, "SELECT * FROM `posts`;");
		 
		 if(mysqli_num_rows($result)>0){
    		    while($row = mysqli_fetch_assoc($result)){
                	$id = $row['id'];
                	$title = $row['title'];
                	$image = $row['image'];
                	$author = $row['author'];
                	$excerpt = $row['excerpt'];
                	$date_updated = $row['date_updated'];
    			
    			
    			 $response['id'] = $id;
    			 $response['title'] = $title;
    			 $response['image'] = $image;
    			 $response['author'] = $author;
    			 $response['excerpt'] = $excerpt;
    			 $response['date_updated'] = $date_updated;
    			 
    			 array_push($arr, $response);
    			 
    		    }
    			 
    		 $json_response = json_encode($arr);
    		 
    		 echo $json_response;
    			
    			
    			
        // 		response($id, $amount, $prop_id,$user_id, $email, $title, $description, $img1, $img2);
    		 
    		  mysqli_close($con);
		}


?>