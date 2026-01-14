<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
$date = date("Y-m-d");
$time = date("H:i:s");

$sql = "UPDATE dtr SET time_out='$time' WHERE user_id='$user_id' AND date='$date'";
$conn->query($sql);

header("Location: dashboard.php");
?>
