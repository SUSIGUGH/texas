<?php
$servername = "mysql01-srv";
$dbusername = "root";
$dbpassword = "mysql100";
$useremail = $_POST['useremail'];
$userpasswd = $_POST['userpasswd'];
//phpinfo();
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "insert into db01.userinfo values($useremail,$userpasswd);
$result = $conn->query($sql);
$conn->close();
?>
