<?php 
// 	header('Content-type : bitmap; charset=utf-8');
echo "Welcome";
	
	if(isset($_POST["image"])){
        $image = $_POST["image"];
        $img_name = $_POST["img_name"];
        $email = $_POST["email"];
	
	$dir_link = "assets/images/agents/".$email."/".$img_name;
    
        if( is_dir($dir_link) === false )
        {
            mkdir($dir_link);
        
        
            $currentDir = getcwd();
            $uploadDirectory = getcwd()."/assets/images/agents/".$email."/".$img_name;
        
            $real_image = base64_decode($image);
            
            $file = fopen($uploadDirectory, 'wb');
            
            $_iswritten = fwrite($file, $real_image);
            
            fclose($file);
            
            // file_put_contents($name, 'assets/'.$real_image);
            // move_uploaded_file($real_image, $uploadDirectory);
            
            if(move_uploaded_file){
             echo "File uploaded".$name;
            }else{
                echo "Error uploading the file";
            }
        }else{
            echo "Error creating dir";
        }
        
	}


?>