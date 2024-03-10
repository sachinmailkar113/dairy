<?php
include("connection2.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name= $_POST["name"];
    $mobile=$_POST["mobile"];
    $username= $_POST["username"];
    $password =$_POST["password"];
   
    
    if($conn->query($sql)==TRUE){
        echo "record addded succesully";
    }
    else{
        echo "Error".$sql."<br>" .$conn->error;
    
    }
}
         
?>
