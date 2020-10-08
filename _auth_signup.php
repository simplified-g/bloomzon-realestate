<?php  
    $arr = array();
	header("Content-Type:application/json");
		include('db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $msg_data = json_decode($json);
        
        $name = $msg_data->name;
        $email = $msg_data->email;
        $phone = $msg_data->phone;
        $password = sha1($msg_data->password);
        
        $result = mysqli_query($con, "INSERT INTO `agents` (`name`, `email`, `password`, `phone`) VALUES ( '$name', '$email', '$password', '$phone' ) ;");
        
        
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