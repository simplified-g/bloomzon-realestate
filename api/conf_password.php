<?php 

    $arr = array();
	header("Content-Type:application/json");
		include('../db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $user_data = json_decode($json);
        
        $code = $user_data->code;
        
        $result = mysqli_query($con, "SELECT * FROM `pass_key` WHERE pass='$code' AND password='0';");
        
        $row = mysqli_fetch_assoc($result);
        
        if (count($row) > 0)
        {
            $data["message"] = "Success";
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