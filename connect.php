<?php
$servername = "localhost";
$username = "Ashu";
$password = "Southern@@123";
$dbname = "test1";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
//echo "Connection OK";
}
else
{
die("connection Failed ".mysqli_connect_error());
}
?>
 




