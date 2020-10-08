<?php 
	header('Content-type : bitmap; charset=utf-8');
	
	if(isset($_POST["image"])){
        $image = $_POST["image"];
        $img_name = $_POST["img_name"];
        $email = $_POST["email"];
	
	$dir_link = "assets/images/agents/".$email;
    
        if( is_dir($dir_link) === false )
        {
            mkdir($dir_link);
        }else{
            echo "Error creating dir";
        }
        
        $currentDir = getcwd();
        $uploadDirectory = $dir_link."/".$img_name;
    
        $real_image = base64_decode($image);
        
        $file = fopen($uploadDirectory, 'wb');
        
        $_iswritten = fwrite($file, $real_image);
        
        fclose($file);
        
        // file_put_contents($name, 'assets/'.$real_image);
        // move_uploaded_file($real_image, $uploadDirectory);
        
        if($_iswritten){
         echo "File uploaded".$name;
        }else{
            echo "Error uploading the file";
        }
        
	}


?>