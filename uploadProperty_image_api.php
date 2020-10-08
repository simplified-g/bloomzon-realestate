<?php 

    header('Content-type : bitmap; charset=utf-8');
    
    include('db.php');
    
    $query = mysqli_query($con, "SELECT prop_id FROM property_info ORDER BY id DESC LIMIT 1;");
    
    $id;
    
    while($row = mysqli_fetch_assoc($query)){
        $id = $row["prop_id"];
    }
    
    
    $tmp = intval($id);
    $prop_id = strval($tmp + 1);
    
    
    echo $prop_id;
    
    $dir_link = "assets/upload/".$prop_id."/".$name;
    
    if( is_dir($dir_link) === false )
{
    mkdir($dir_link);
}
    
    if(isset($_POST["image"])){
        $image = $_POST["image"];
        $name = $_POST["name"];
        
        $currentDir = getcwd();
        $uploadDirectory = getcwd()."/assets/upload/".$prop_id."/".$name;
    
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
    }
    
    


?>