<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DTR Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

<h2>Daily Time Record</h2>

<form action="timein.php" method="POST">
    <button type="submit">Time In</button>
</form>

<form action="timeout.php" method="POST">
    <button type="submit">Time Out</button>
</form>

<a href="logout.php">Logout</a>

</body>
</html>
