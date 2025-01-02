<?php
$server = "localhost";
$username = "root";
$pass = "arya1306";
$db = "aryaair";
$conn = mysqli_connect($server, $username, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
