<?php 
$DB_SERVER="localhost";
$DB_USER="root";
$DB_PWD="";
$DB_NAME="bloomzon_db";
//$DB_SERVER="localhost";$DB_USER="";$DB_PWD="";$DB_NAME="";//For Online

$basepathg = "";//CHANGE THIS TO BLANK WHEN DEPLOYING ONLINE

$conn = new mysqli($DB_SERVER,$DB_USER,$DB_PWD,$DB_NAME);

$dsn = 'mysql: host=localhost; dbname=bloomzon_db';

try {
    $pdo = new PDO($dsn, $DB_USER, $DB_PWD);
    $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
    catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// $dsn = 'mysql: host=localhost; dbname=gohomeng_web_db';
//     try{
//         $pdo = new PDO($dsn, 'gohomeng_db_user', '4T5RxsDOX1PeOX!f4a%8');		
//         $pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     }
//         catch (PDOException $e) {
//         echo 'Connection failed: ' . $e->getMessage();
//     }

 ?>