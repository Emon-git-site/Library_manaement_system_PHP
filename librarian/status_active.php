<?php
require_once '../dbcon.php';


$user_id = $_GET['id'];



mysqli_query($con, "UPDATE `students` SET  `status` ='1'  WHERE  `id` ='$user_id'");
header('location: students.php');
?>