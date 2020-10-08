<?php
function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$arr = array();
header("Content-Type:application/json");

if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    
    $json = file_get_contents('php://input');
    
    $msg_data = json_decode($json);
    
    // $to_email = $msg_data->toEmail;
    // $subject = $msg_data->subject;
    $to_email = "gohome.ng @ gmail . com";
    $subject = "Inquiry";
    $message = $msg_data->message;
    $headers = 'From: '.$msg_data->email;
    //check if the email address is invalid $secure_check
    $secure_check = sanitize_my_email($to_email);
    if ($secure_check == false) {
        echo "Invalid input";
    } else { //send email 
        mail($to_email, $subject, $message, $headers);
        $data["status"] = "OK";
    }
    
}
else
{
    $data["message"] = "Format not supported";
    $data["status"] = "error";    
}

$json_response = json_encode($data);
    		 
    echo $json_response;

// $to_email = 'jeffukus @ gmail . com';
// $subject = 'Testing PHP Mail';
// $message = 'This mail is sent using the PHP mail ';
// $headers = 'From: noreply @ company. com';

?>