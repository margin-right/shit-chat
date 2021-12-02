<?php
include 'db_connection.php';
$messs = $_POST['mess'];
$send = mysqli_query($connection, "INSERT INTO `messages` (`mess`) VALUES ('$messs')");
?>