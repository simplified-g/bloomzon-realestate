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
        
        $user_id = $msg_data->user_id;
        $img_name = $msg_data->img_name;
        $website = $msg_data->website;
        $password = $msg_data->password;
        
        $result = "";
        
        if ($password == null){
            $result = mysqli_query($con, "UPDATE `agents` SET name='$name', email='$email', phone='$phone', avatar='$img_name', website='$website' WHERE id='$user_id';");
        }else{
            $password = sha1($msg_data->password);
            $result = mysqli_query($con, "UPDATE `agents` SET password='$password' WHERE id='$user_id';");
        }
        
        
        
        if ($result)
        {
            $data["id"] = $user_id;
            $data["name"] = $name;
            $data["email"] = $email;
            $data["password"] = $password;
            $data["phone"] = $phone;
            $data["avatar"] = $img_name;
            $data["website"] = $website;
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