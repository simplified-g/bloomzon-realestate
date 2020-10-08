 <?php
    session_start();
    require("ems-incs/igbe.inc.php");

    $usrid = $_POST['usrID'];
    $propID = $_POST['propID'];

    if($usrid==''){
        $dateString = date('Ymd'); //Generate a datestring.
        $branchNumber = 101; //Get the branch number somehow.
        $receiptNumber = 1;  //You will query the last receipt in your database 
        //and get the last $receiptNumber for that branch and add 1 to it.;

        if($receiptNumber < 9999) {

          $receiptNumber = $receiptNumber + 1;

        }else{
         $receiptNumber = 1;
        } 
        // set a cookie
        setcookie($propID, $propID, time()+3600);
        exit;
    }else{

        $sql= $conn->query("SELECT * FROM favourites WHERE Userid='$usrid' AND PropID='$propID'");
        if($sql->num_rows < 1){
            $sql = "INSERT INTO favourites (Userid, PropID) VALUES ('$usrid', '$propID')";
            if($conn->query($sql) === TRUE){
                echo 'Added to your favourite';
                exit;            
            }        
        }
        else
        {
            echo 'You already added this property to your favourite';
            exit;
        }
        
    }

?>