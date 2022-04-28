<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$username = $_POST['user_1'];
$password = $_POST['pass_1'];

$conn = new mysqli ($hostname, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
$sql = "INSERT INTO `form1` (`username`, `password`) VALUES ('$username' , '$password' ) ";
if ($conn->query($sql)) {
    echo "done,ok";
} else {
    die("failed to insert : " . $conn->error);
}
$conn->close();