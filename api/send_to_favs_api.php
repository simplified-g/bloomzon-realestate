<?php  
    $arr = array();
	header("Content-Type:application/json");
		include('../db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $msg_data = json_decode($json);
        
        $user_id = $msg_data->user_id;
        $prop_id = $msg_data->propId;
        
        $favourite = mysqli_query($con, "SELECT * FROM `favourites` WHERE Userid = '$user_id' AND PropID = '$prop_id';");
        $row_first = mysqli_fetch_assoc($favourite);
        if(empty($row_first)) {
        $result = mysqli_query($con, "INSERT INTO `favourites` (`Userid`, `PropID`) 
                                             VALUES ( '$user_id', '$prop_id') ;");
        } else {
            $result = mysqli_query($con, "DELETE FROM `favourites` WHERE Userid = '$user_id' AND PropID = '$prop_id';");
        }
        if ($result)
        {
            // $data["message"] = "Message received from ".$user_id;
            $data["status"] = "OK";
        }
        else
        {
            // $data["message"] = "data not logged in successfully";
            // $data["status"] = "error login in data";   
            $data["status"] = "";
            
        }
    }
    else
    {
        $data["message"] = "Format not supported";
        $data["status"] = "error";    
    }
    
    echo json_encode($data);






?>