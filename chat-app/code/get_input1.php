<?php
include("data_class.php");

if($_SERVER["REQUEST_METHOD"] ==="POST"){

    $nationality=$_POST["nationality"];
    $age=$_POST["age"];
    $gender=$_POST["gender"];
    $selectedEthnicities=$_POST["selected_ethnicities"];
    $ethnicity =str_split($selectedEthnicities);

}
 
 $result=step1($mysqli,$nationality,$age,$gender,$ethnicity);

 if(!$result){

    echo "error";
 }else{
    header("Location:step2.php");
 }


?>