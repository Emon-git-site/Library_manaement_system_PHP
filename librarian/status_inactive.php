<?php
require_once '../dbcon.php';

$status = base64_decode($_GET['status']);
$user_name = $_GET['username'];



mysqli_query($con, "UPDATE `students` SET  `status` ='0'  WHERE `status` = '$status' AND `username` ='$user_name'");
header('location: students.php');
?>