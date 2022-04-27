<html>
<head>
<meta http-equiv="content-type" content="text/html" charset="utf-8">
<title>Data storage</title>
</head>
<body>
    
<?php
$servername = "localhost"
$username = "root"
$password = ""
$dbname = "form1-db"

$username = $_POST['user_1'];
$password = $_POST['pass_1']

$conn = new mysqli ($serveername,$username, $password, $dbname ) ;
if ($conn->connect-error) {
    die("connection failed: " . $conn->connect_error) ;
}
$conn->set_charset("utf8") ;
$sql = "INSERT INTO `form1`(`username`, `password`) VALUES ('$servername' , '$username' ) " ;
if ($conn->query($sql) ---TRUE) {
echo "done,ok"
}else{
echo "error"
}
$conn->close() ;
?>
</body>

</html>