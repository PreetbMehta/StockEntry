<?php
session_start();
$server="localhost";
$user="root";
$pwd="";
$dbname="unitedstocks";
$conn= new mysqli($server,$user,$pwd,$dbname);

//check conn
if($conn->connect_error){
    die("connection failed:-". $conn->connect_error);
}
// echo "connected Successfully";
?>