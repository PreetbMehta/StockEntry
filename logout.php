<?php
include('conn.php');
session_destroy();
header('location:signin.php');die();
?>