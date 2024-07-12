<?php
include("data_class.php");


$email=$_POST['email'];
$password=$_POST['pass'];



 $result=login($mysqli,$email,$password);



if($result){
     header("Location:step1.php");
    }
    else{
        header("Location:signin.php");
    }




?>
