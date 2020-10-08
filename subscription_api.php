<?php  
    $arr = array();
	header("Content-Type:application/json");
		include('db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $msg_data = json_decode($json);
        
        $name = $msg_data->email;
        $email = $msg_data->active;
        $result = mysqli_query($con, "INSERT INTO `subscription` (`email`, `active`) VALUES ('$email', '$active') ;");
        
        
        if ($result)
        {
            $data["message"] = "Message received from ".$name;
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