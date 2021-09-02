<?php
session_start();
$host="localhost";
$user="root";
$pwd="";
$dbname="unitedstocks";
$conn= new mysqli($host,$user,$pwd,$dbname);

//check conn
if($conn->connect_error){
    die("connection failed:-". $conn->connect_error);
}
// echo "connected Successfully";
?>