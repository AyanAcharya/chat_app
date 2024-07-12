<?php 

include("db.php");
session_start();

// ============================================================================================================================================================================
function signup($mysqli, $name, $email, $password){

 $query= "INSERT INTO `user`(name,email,password,qualification_id) VALUES('$name','$email','$password','0')";
 $result=$mysqli->query($query);
    return $result;
}
// ============================================================================================================================================================================

function login($mysqli,$email,$password){
    $query="SELECT * FROM user where email='$email' AND password='$password' ";
    $result=$mysqli->query($query);
    $row=$result->fetch_assoc();
    $user=$row["id"];
    $_SESSION['userid']=$user;
    return $result;

}
// ============================================================================================================================================================================

function get_ethnicity($mysqli){
    $query="SELECT * FROM ethnicity";
    $result=$mysqli->query($query);
    return $result;
}
// ==================================================================================================================================================================================
 function step1($mysqli,$nationality,$age,$gender,$ethnicity){

    $id=$_SESSION['userid'];

    $query="UPDATE `user` SET nationality='$nationality', age='$age', gender='$gender'  WHERE id='$id'";
    $mysqli->query($query);

    foreach($ethnicity as $ethnicityId){
        $query="INSERT INTO users_ethnicity(user_id,ethnicity_id) VALUES('$id','$ethnicityId')";
        $mysqli->query($query);
    }
     return true;  
 }
// ==================================================================================================================================================================================
 function university($mysqli){
    $query="SELECT * FROM `university`";
    $result=$mysqli->query($query);
    return $result;

 }




?>