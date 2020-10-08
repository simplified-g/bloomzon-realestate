<?php  
    $arr = array();
	header("Content-Type:application/json");
		include('db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $msg_data = json_decode($json);
        
        $sender_id = $msg_data->sender_id;
        $receiver_id = $msg_data->receiver_id;
        $name = $msg_data->name;
        $email = $msg_data->email;
        $phone_no = $msg_data->phone_no;
        $title = $msg_data->title;
        $message = $msg_data->message;
        $prop_id = $msg_data->propId;
        $sender = $msg_data->sender;
        
        $result = mysqli_query($con, "INSERT INTO `requests` (`sender_id`, `receiver_id`, `name`, `email`, `phone_no`, `title`, `message`, `prop_id`, `sender`) 
                                            VALUES ( '$sender_id', '$receiver_id', '$name', '$email', '$phone_no', '$title', '$message', '$prop_id', '$sender' ) ;");
        
        if ($result)
        {
            $data["message"] = "Message received from ".$sender_id;
            $data["status"] = "OK";
        }
        else
        {
            $data["message"] = "data not logged in successfully";
            $data["status"] = "error login in";   
            
        }
    }
    else
    {
        $data["message"] = "Format not supported";
        $data["status"] = "error";    
    }
    
    echo json_encode($data);






?>