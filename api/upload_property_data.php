<?php  
    $arr = array();
	header("Content-Type:application/json");
		include('../db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $msg_data = json_decode($json);
        
        $query = mysqli_query($con, "SELECT prop_id FROM property_info ORDER BY id DESC LIMIT 1;");
    
        $id;
        
        while($row = mysqli_fetch_assoc($query)){
            $id = $row["prop_id"];
        }
        
        $tmp = intval($id);
        
        $new_id = strval($tmp + 1);
        
        $prop_id = $new_id; // To be generated after querying the database for last prop_id and incrementing it by 1
        $user_id = $msg_data->user_id;
        $user_email = $msg_data->user_email;
        $title = $msg_data->title;
        $description = $msg_data->desc;
        $type = $msg_data->type;
        $status = $msg_data->status;
        $bedrooms = $msg_data->bedroom;
        $bathrooms = $msg_data->bathroom;
        $floors = $msg_data->storey;
        $garages = $msg_data->garages;
        $size = $msg_data->size;
        $price = $msg_data->price;
        $features = $msg_data->features;
        $address = $msg_data->address;
        $region = $msg_data->region;
        $state = $msg_data->state;
        $postal_code = $msg_data->zip;
        $featured = 0;
        $offered = 0;
        $img1 = $msg_data->img1;
        // for($i = 2; $i <= 15; $i++){
        //     $img.$i = '';
        // }
        $approved = $msg_data->approved;
        $imgArr = $msg_data->imgArr;
        
        try{
            $result = mysqli_query($con, "INSERT INTO `property_info` (`prop_id`, `user_id`, `user_email`, `title`, `description`, `type`, `status`, `bedrooms`, `bathrooms`, `floors`, `garages`, `size`, `price`, `video_url`, `features`, `address`, `region`, `state`, `postal_code`, `featured`, `offered`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `approved`) VALUES ('$prop_id', '$user_id','$user_email', '$title','$description','$type', '$status','$bedrooms','$bathrooms','$floors','$garages','$size','$price','$video_url','$features', '$address', '$region', '$state', '$postal_code','$featured', '$offered','$img1','$img2','$img3','$img4', '$img5', '$img6', '$img7', '$img8', '$img9', '$img10', '$img11', '$img12', '$img13', '$img14', '$img15', '$approved') ;");
        }catch(Exception $e){
            $data["error"] = $e->getMessage();
        }
        
        if ($result)
        {
            $data["message"] = "Message received from ".$imgArr;
            $data["status"] = "OK";
        }
        else
        {
            $data["message"] = "data not logged in successfully";
            $data["status"] = "error Signing up";   
            
        }
    }
    else
    {
        $data["message"] = "Format not supported";
        $data["status"] = "error";    
    }
    
    echo json_encode($data);






?>