<?php  
    $arr = array();
	header("Content-Type:application/json");
		include('../db.php');
	 
	
    if ($_SERVER["REQUEST_METHOD"] === 'POST')
    {
        $json = file_get_contents('php://input');
        
        $msg_data = json_decode($json);
        
        $email = $msg_data->email;
        
        function generateRandomString($length = 10) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        
        $randPass = generateRandomString();
        
        $query = mysqli_query($con, "SELECT * FROM `agents` WHERE email = '$email");
        
        if(count($query) > 0){
        
            $result = mysqli_query($con, "INSERT INTO `pass_key` (`pass`, `key_used`, `email`) VALUES ( '$randPass', '0', '$email') ;");
        
        function sanitize_my_email($field) {
            $field = filter_var($field, FILTER_SANITIZE_EMAIL);
            if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }

        $adjEmail ="";
        $newEmail = "";
        
        if(preg_match("/@/", $email) && preg_match("/./", $email)){
           $adjEmail = str_replace("@", " @ ", $email);
           $newEmail = str_replace(".", " . ", $adjEmail);
        }
    

         
        
        if ($result)
        {
            $to_email = $newEmail;
            $subject = "Inquiry";
            $message = "This is the pass code to reset your password ".$randPass;
            $headers = 'From: no_reply@gohome.ng';
            //check if the email address is invalid $secure_check
            $secure_check = sanitize_my_email($to_email);
            if ($secure_check == false) {
                $data["message"] = "Invalid input";
                $data["status"] = "error"; 
            } else { //send email 
                mail($to_email, $subject, $message, $headers);
                $data["message"] = "Message received from ".$email;
                $data["status"] = "OK";
                
            }
            $data["message"] = "Message received from ".$email;
            $data["status"] = "OK";
        }
        else
        {
            $data["message"] = "data not logged in successfully";
            $data["status"] = "error Signing up";   
            
        }
    }else{
        $data["message"] = "User not registered on this database";
            $data["status"] = "error";   
    }
    
    }
    else
    {
        $data["message"] = "Format not supported";
        $data["status"] = "error";    
    }
    
    echo json_encode($data);






?>