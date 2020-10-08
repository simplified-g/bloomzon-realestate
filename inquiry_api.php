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
        $content = $msg_data->content;
        
        $result = mysqli_query($con, "INSERT INTO `compmail_inbox` (`receiver`, `sender`, `sender_name`, `subject`, `content`) VALUES ( 'Admin', '$email', '$name', 'Inquiry', '$content') ;");
        
        
        if ($result)
        {
            $data["message"] = "Message received from ".$name;
            $data["status"] = "OK";
        }
        else
        {
            $data["message"] = "data not logged in successfully";
            $data["status"] = "error Signing up".$name.$email.$content;   
            
        }
    }
    else
    {
        $data["message"] = "Format not supported";
        $data["status"] = "error";    
    }
    
    echo json_encode($data);






?>