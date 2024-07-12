<?php
 include("data_class.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];






$result=signup($mysqli,$name,$email,$password);
if(!$result){
    echo "error";

}else{
  
    header("Location:signin.php?msg=your account created login please");
}





?>