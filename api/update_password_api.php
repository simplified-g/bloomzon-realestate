<?php  
    $arr = array();
	header("Content-Type:application/json");
		include('../db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $msg_data = json_decode($json);
        
        $email = $msg_data->email;
        $password = sha1($msg_data->password);
        
        
        $result = mysqli_query($con, "UPDATE `agents` SET password='$password' WHERE email='$email';");
        
        if ($result)
        {
            
            $data["message"] = "Message received from ".$email;
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