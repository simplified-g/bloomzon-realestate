<?php 

    $arr = array();
	header("Content-Type:application/json");
		include('db.php');
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $user_data = json_decode($json);
        if(!isset($user_data->id)){
            $email = $user_data->email;
            $password = sha1($user_data->password);
            
            $result = mysqli_query($con, "SELECT * FROM `agents` WHERE email='$email' AND password='$password';");
        } else {
            $id = $user_data->id;
            $result = mysqli_query($con, "SELECT * FROM `agents` WHERE id='$id';");
        }
        $row = mysqli_fetch_assoc($result);
        
        if (count($row) > 0)
        {
            $data["id"] = $row["id"];
            $data["name"] = $row["name"];
            $data["email"] = $row["email"];
            $data["password"] = $row["password"];
            $data["phone"] = $row["phone"];
            $data["avatar"] = $row["avatar"];
            $data["website"] = $row["website"];
            $data["message"] = "Login success";
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