<?php
$host="localhost";
$username="root";
$password="";
$database="mydb";

$mysqli= new mysqli($host, $username, $password, $database);
if($mysqli->connect_errno){
    die("failed to connect to mySQL :". $mysqli->connect_error);
}



?>