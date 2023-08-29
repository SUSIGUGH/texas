<?php
$servername = "mysql01-srv";
$username = "root";
$password = "mysql100";
//phpinfo();
$conn = mysqli_connect($servername, $username, $password, "test");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
