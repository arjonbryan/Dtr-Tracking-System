<?php
session_start();
include 'db.php';

$user_id = $_SESSION['user_id'];
$date = date("Y-m-d");
$time = date("H:i:s");

$check = "SELECT * FROM dtr WHERE user_id='$user_id' AND date='$date'";
$result = $conn->query($check);

if ($result->num_rows == 0) {
    $sql = "INSERT INTO dtr (user_id, date, time_in) VALUES ('$user_id', '$date', '$time')";
    $conn->query($sql);
}

header("Location: dashboard.php");
?>
